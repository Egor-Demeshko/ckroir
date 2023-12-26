<?php
/**так как для шаблон стили собраны отдельно*/
function enqueue_styles_for_page_template($template) {
    //$template содержит полную строку до макета страницы
    if (basename($template) === 'page.php' || basename($template) === 'single.php') {
        wp_enqueue_style('your-custom-style', get_template_directory_uri() . '/dist/css/archive.css');
    } else if(basename($template) === 'front-page.php'){
        wp_enqueue_style('main_style', get_template_directory_uri() . '/dist/index.css', ['normolize'], null);
    } else if(basename($template) === 'home.php'){
        wp_enqueue_style('main_style', get_template_directory_uri() . '/dist/index.css', ['normolize'], null);
        wp_enqueue_style('home_style', get_template_directory_uri() . '/dist/home.css', ['normolize'], null);
    }
    return $template;
}