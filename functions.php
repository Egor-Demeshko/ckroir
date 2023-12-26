<?php 

/** индендификатор главного скрипта в переменной, так как после поставноки в очередь,
 * мы меняем тег скрипта через фильтр script_loader_tag
  */
$main_script = 'main';
require get_template_directory() . '/assets/php/functions/stylePerTemplate.php';
require get_template_directory() . '/assets/php/functions/register_nav_menus.php';
require get_template_directory() . '/assets/php/classes/walkers/initWalkers.php';
require get_template_directory() . '/assets/php/const/general_const.php';



/** ДОБАВЛЯЕМ СКРИПТЫ И СТИЛИ. СТИЛИ отличаются у второстепенных от главной, поэтому используется
 * еще функция $enqueue_script_add_type_attribute
 */
add_action("wp_enqueue_scripts", function() use ($main_script){
wp_enqueue_style('normolize', get_template_directory_uri() . '/assets/css/normolize.css', [], null);
wp_enqueue_script($main_script, get_template_directory_uri() . '/dist/main.js', [], null);
}); 

add_filter('template_include', "enqueue_styles_for_page_template");


/** Функция для добавления атрибута type=module к элементу скрипта */
$enqueue_script_add_type_attribute = static function( $tag, $handle ) use ( $main_script ) {
    // if not your script, do nothing and return original $tag
    if ( $main_script === $handle ) {
        // remove the current type if there is one
        $tag = preg_replace( '/ type=([\'"])[^\'"]+\1/', '', $tag ); 
    
        // add type
        $tag = str_replace( 'src=', 'type="module" src=', $tag );
        return $tag;
    }
    return $tag;
};

add_filter( 'script_loader_tag', $enqueue_script_add_type_attribute , 10, 3 );

/**
 * Register a custom post type.
 */
add_action( 'init', 'ckror_register_post_types' );


/**ДОБАВЛЯЕМ ЛОГОТИП */
function theme_prefix_setup() {
    add_theme_support('custom-logo', array(
        'height' => 44,
        'width' => 44,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title'),
    ));

    add_theme_support('post-thumbnails');

    register_menus();
}
add_action('after_setup_theme', 'theme_prefix_setup');


/**Регистрируем размеры фото и дерегистрируем*/
// Дерегистрируем существующие размерыmask
function remove_image_sizes() {
    remove_image_size('medium_large');
    remove_image_size('2048x2048');
}
// Добавляем новые размеры
function add_custom_image_sizes() {
    add_image_size(MAIN_SLIDER_ID, 590, 390, true);
    add_image_size(FRONT_PAGE_NEWS_POST, 279, 205, true);
}

add_action('init', 'remove_image_sizes');
add_action('after_setup_theme', 'add_custom_image_sizes');


function custom_category_template($template) {
    if (is_single() && in_category(CKROR_PHOTOS)) {
        $new_template = locate_template(array(CKROR_PHOTOS . '.php'));
        if (!empty($new_template)) {
            return $new_template;
        }
    }
    return $template;
}
add_filter('template_include', 'custom_category_template');
?>