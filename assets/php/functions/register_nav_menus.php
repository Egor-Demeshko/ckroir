<?php 
function register_menus(){
    register_nav_menus([
        "top_menu" => __("Верхнее основное меню [ckror]", "ckror"),
        "alternate_menu" => __("Закрепленное верхнее меню [ckror]", "ckror"),
        "mobile_menu" => __("Мобильное меню [ckror]", "ckror"),
        "footer_menu" => __("Нижнее меню [ckror]", "ckror"),
    ]);
}