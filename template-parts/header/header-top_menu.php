<?php

    /**основное меню, которое в header */
    wp_nav_menu( [
        'theme_location'  => 'top_menu',
        'menu'            => '',
        'container'       => 'nav',
        'container_class' => 'top-menu',
        'container_id'    => '',
        'menu_class'      => 'top-menu__main_list eliminate_list',
        'menu_id'         => 'menu',
        'echo'            => true,
        'container_aria_label' => __("Блок с основным меню", "ckror"),
        'fallback_cb'     => '',
        'depth'           => 3,
        'walker'          => new Top_Menu_Walker(),
    ] );
?>