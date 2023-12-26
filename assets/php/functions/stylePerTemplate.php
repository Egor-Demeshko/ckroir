<?php
/**так как для шаблон стили собраны отдельно*/
function enqueue_styles_for_page_template($template) {
    //$template содержит полную строку до макета страницы
    if (basename($template) === 'page.php' || basename($template) === 'single.php') {
        wp_enqueue_style('main_style', get_template_directory_uri() . '/dist/index.css', ['normolize'], null);
        wp_enqueue_style('ckror_page', get_template_directory_uri() . '/dist/archive.css');
    } else if(basename($template) === 'front-page.php'){
        wp_enqueue_style('main_style', get_template_directory_uri() . '/dist/index.css', ['normolize'], null);
    } else if(basename($template) === 'home.php'){
        wp_enqueue_style('main_style', get_template_directory_uri() . '/dist/index.css', ['normolize'], null);
        wp_enqueue_style('home_style', get_template_directory_uri() . '/dist/home.css', ['normolize'], null);
    } else if(basename($template) === 'archive.php'){
        wp_enqueue_style('main_style', get_template_directory_uri() . '/dist/index.css', ['normolize'], null);
        wp_enqueue_style('archive_style', get_template_directory_uri() . '/dist/archive.css', ['normolize'], null);
    } else if(basename($template) === "category-ckror_photos.php"){
        wp_enqueue_style('main_style', get_template_directory_uri() . '/dist/index.css', ['normolize'], null);
        wp_enqueue_style('archive_style', get_template_directory_uri() . '/dist/archive.css', ['normolize'], null);
        wp_enqueue_style('ckror_gallery', get_template_directory_uri() . '/dist/gallery.css', ['normolize'], null);
    }
    return $template;
}