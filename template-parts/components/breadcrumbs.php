<?php
    function the_breadcrumb() {
    global $post;
    echo '<nav class="breadcumbs">
    <ol class="breadcumbs__list">';
    if (!is_home()) {
        echo '<li class="breadcumbs__list-item"><a class="breadcumbs__link" href="';
        echo get_option('home');
        echo '">' . __("Главная", "ckror");
        echo "</a></li>";
        
        if (is_category()) {
            echo '<li class="breadcumbs__list-item">';
            the_category(' </li><li class="breadcumbs__list-item">');
            echo '</li>';
        } elseif (is_single()) {
            echo '<li class="breadcumbs__list-item">';
            the_title();
            echo '</li>';
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li class="breadcumbs__list-item"><a class="breadcumbs__link" href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="breadcumbs__list-item current">'.$title.'</li>';
                }
                echo $output;
            } else {
                echo '<li class="breadcumbs__list-item current">'.get_the_title().'</li>';
            }
        }
    } elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Архив за "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Архив за "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Архив за "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Авторский архив"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Блог архивы"; echo'</li>';}
    elseif (is_search()) {echo"<li>Результаты поиска"; echo'</li>';}
    else {
        echo '<li class="breadcumbs__list-item"><a class="breadcumbs__link" href="';
        echo get_option('home');
        echo '">' . __("Главная", "ckror");
        echo "</a></li>";
    }    
    echo '</ol></nav>';
}
    the_breadcrumb();
?>