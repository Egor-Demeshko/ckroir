<?php
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head();?>
    <?php 
        echo get_template_part("template-parts/header", "styles");
    ?>
  </head>
  <body>
    <header class="header">

        <!-- МОБИЛЬНОЕ МЕНЮ -->
        <nav >
            <ul id="mobile_menu" class="mobile_menu eliminate_list" style="padding: 2rem 0;"> 
                <button data-menu="close" class="mobile_menu__close_button">Закрыть</button>
                <li class="mobile_menu__first_level_item"><a href="#" class="first_level_item__link eliminate-link">Главная</a></li>
                <li class="mobile_menu__first_level_item" data-list="anchor">
                    <div class="first_level_item__inner_wrapper">
                        <a href="/v2/sveden/" class="first_level_item__link eliminate-link">Сведения об организации</a>
                        <button class="mobile_menu__button">
                                <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5 1.5L7.5 7.5L1.5 1.5" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                        </button>
                    </div>
                    <ul class="mobile_menu__dropdown-menu eliminate_list">
                    
                        <li class="mobile_menu__second_level_item"><a href="/v2/sveden/common/" class="first_level_item__link eliminate-link">Основные сведения</a></li>
                        
                        <li class="mobile_menu__second_level_item"><a href="/v2/sveden/struct/" class="first_level_item__link eliminate-link">Структура и органы управления образовательной организацией</a></li>
                        
                        <li class="mobile_menu__second_level_item" data-list="anchor">
                            <div class="first_level_item__inner_wrapper">
                                <a href="/v2/sveden/document/" class="first_level_item__link eliminate-link">Документы</a>
                                <button class="mobile_menu__button">
                                    <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5 1.5L7.5 7.5L1.5 1.5" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <ul class="mobile_menu__dropdown-menu eliminate_list">
                            
                                <li class="mobile_menu__third_level_item"><a href="/v2/sveden/document/194/" class="first_level_item__link eliminate-link">Устав</a></li>
                                
                                <li class="mobile_menu__third_level_item"><a href="/v2/sveden/document/195/" class="first_level_item__link eliminate-link">Лицензия</a></li>
                                
                                <li class="mobile_menu__third_level_item"><a href="/v2/sveden/document/196/" class="first_level_item__link eliminate-link">Государственная  аккредитация</a></li>
                                
                                <li class="mobile_menu__third_level_item"><a href="/v2/sveden/document/197/" class="first_level_item__link eliminate-link">Локальные нормативные акты</a></li>
                                
                                <li class="mobile_menu__third_level_item"><a href="/v2/sveden/document/198/" class="first_level_item__link eliminate-link">Финансово-хозяйственная деятельность</a></li>
                                
                                <li class="mobile_menu__third_level_item"><a href="/v2/sveden/document/199/" class="first_level_item__link eliminate-link">Правила внутреннего  распорядка</a></li>
                                
                                <li class="mobile_menu__third_level_item"><a href="/v2/sveden/document/200/" class="first_level_item__link eliminate-link">Коллективный договор</a></li>
                                
                                <li class="mobile_menu__third_level_item"><a href="/v2/sveden/document/201/" class="first_level_item__link eliminate-link">Самообследование</a></li>
                                
                                <li class="mobile_menu__third_level_item"><a href="/v2/sveden/document/202/" class="first_level_item__link eliminate-link">Платные образовательные услуги</a></li>
                                
                                <li class="mobile_menu__third_level_item"><a href="/v2/sveden/document/203/" class="first_level_item__link eliminate-link">Предписания и отчеты об исполнении предписаний</a></li>
                                
                            </ul>
                        </li>
                         
                        <li class="mobile_menu__second_level_item"><a class="first_level_item__link eliminate-link" href="/v2/sveden/education/">Образование</a></li>
                        
                        <li class="mobile_menu__second_level_item"><a class="first_level_item__link eliminate-link" href="/v2/sveden/eduStandarts/">Образовательные стандарты</a></li>
                        
                        <li class="mobile_menu__second_level_item"><a class="first_level_item__link eliminate-link" href="/v2/sveden/employees/">Руководство. Педагогический (научно-педагогический) состав</a></li>
                        
                        <li class="mobile_menu__second_level_item"><a class="first_level_item__link eliminate-link" href="/v2/sveden/objects/">Материально-техническое обеспечение и оснащенность образовательного процесса</a></li>
                        
                        <li class="mobile_menu__second_level_item"><a class="first_level_item__link eliminate-link" href="/v2/sveden/grants/">Стипендии и меры поддержки обучающихся</a></li>
                        
                        <li class="mobile_menu__second_level_item"><a class="first_level_item__link eliminate-link" href="/v2/sveden/paid_edu/">Платные образовательные услуги</a></li>
                        
                        <li class="mobile_menu__second_level_item"><a class="first_level_item__link eliminate-link" href="/v2/sveden/budget/">Финансово-хозяйственная деятельность</a></li>
                        
                        <li class="mobile_menu__second_level_item"><a class="first_level_item__link eliminate-link" href="/v2/sveden/vacant/">Вакантные места для приема (перевода)</a></li>
                        
                        <li class="mobile_menu__second_level_item"><a class="first_level_item__link eliminate-link" href="/v2/sveden/ovz/">Доступная среда</a></li>
                        
                        <li class="mobile_menu__second_level_item"><a class="first_level_item__link eliminate-link" href="/v2/sveden/inter/">Международное сотрудничество</a></li>
                        
                    </ul>
                </li>
                <li class="mobile_menu__first_level_item">
                    <a href="/v2/sveden/document/" class="first_level_item__link eliminate-link">Документы</a>
                    <ul class="dropdown-menu eliminate_list" >
                    
                        <li><a href="/v2/sveden/document/194/">Устав</a></li>
                        
                        <li><a href="/v2/sveden/document/195/">Лицензия</a></li>
                        
                        <li><a href="/v2/sveden/document/196/">Государственная  аккредитация</a></li>
                        
                        <li><a href="/v2/sveden/document/197/">Локальные нормативные акты</a></li>
                        
                        <li><a href="/v2/sveden/document/198/">Финансово-хозяйственная деятельность</a></li>
                        
                        <li><a href="/v2/sveden/document/199/">Правила внутреннего  распорядка</a></li>
                        
                        <li><a href="/v2/sveden/document/200/">Коллективный договор</a></li>
                        
                        <li><a href="/v2/sveden/document/201/">Самообследование</a></li>
                        
                        <li><a href="/v2/sveden/document/202/">Платные образовательные услуги</a></li>
                        
                        <li><a href="/v2/sveden/document/203/">Предписания и отчеты об исполнении предписаний</a></li>
                        
                    </ul>
                </li>
                <li class="mobile_menu__first_level_item">
                    <a href="/v2/timetable/">Расписание</a>
                </li>
                <li class="mobile_menu__first_level_item">
                    <a href="/v2/people/">Коллектив</a>
                    <ul class="" >
                    
                        <li><a href="/v2/people/teacher/">Преподаватели и тренеры</a></li>
                        
                        <li><a href="/v2/people/management/">Администрация</a></li>
                        
                        <li><a href="/v2/people/pride/">Воспитатели</a></li>
                        
                    </ul>
                </li>
                <li class="mobile_menu__first_level_item">
                    <a href="/v2/parents/">Родителям</a>
                    <ul class="" >
                    
                        <li><a href="/v2/parents/groups/">Наши группы</a></li>
                        
                        <li><a href="/v2/parents/enrollment/">Зачисление/отчисление ребенка</a></li>
                        
                        <li><a href="/v2/parents/rules/">Правила</a></li>
                        
                        <li><a href="/v2/parents/daily-regime/">Режим дня</a></li>
                        
                        <li><a href="/v2/parents/nutrition/">Питание</a></li>
                        
                    </ul>
                </li>
                <li class="mobile_menu__first_level_item"><a href="/v2/news/">Новости</a>
                </li>
                <li class="mobile_menu__first_level_item">
                    <a href="/v2/media/">Медиа</a>
                    <ul class="" >
                    
                        <li class="">
                            <a href="/v2/media/photo/">Фото</a>
                            <ul class="">
                            
                                <li><a href="/v2/media/photo/kindergarten/">Детский сад</a></li>
                                
                                <li><a href="/v2/media/photo/sections/">Кружки и секции</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="">
                            <a href="/v2/media/video/">Видео</a>
                            <ul class="">
                            
                                <li><a href="/v2/media/video/information/">Информация</a></li>
                                
                                <li><a href="/v2/media/video/cartoons/">Мультфильмы</a></li>
                                
                            </ul>
                        </li>                         
                    </ul>
                </li>

                <li class="mobile_menu__first_level_item"><a href="/v2/anticorruption/">Антикоррупционная деятельность</a></li>
                <li class="mobile_menu__first_level_item">
                    <a href="/v2/direction/">Направления</a>
                    <ul class="">
                    
                        <li><a href="/v2/direction/math/">Математический кружок</a></li>
                        
                        <li><a href="/v2/direction/pool/">Бассейн и обучение плаванию</a></li>
                        
                        <li><a href="/v2/direction/read/">Кружок чтения</a></li>
                        
                        <li><a href="/v2/direction/englich/">Английский язык</a></li>
                        
                        <li><a href="/v2/direction/football/">Футбол</a></li>
                        
                        <li><a href="/v2/direction/music/">Музыкальные занятия</a></li>
                        
                        <li><a href="/v2/direction/psychologist/">Консультация психолога</a></li>
                        
                        <li><a href="/v2/direction/shakhmatnyy-klub/">Шахматный клуб</a></li>
                        
                        <li><a href="/v2/direction/logopediya/">Логопедия</a></li>
                        
                        <li><a href="/v2/direction/akvagrim/">Аквагрим</a></li>
                        
                    </ul>
                </li>
            
                <li class="mobile_menu__first_level_item"><a href="/v2/reviews/">Отзывы</a></li>
            
                <li class="mobile_menu__first_level_item"><a href="/v2/contacts/">Контакты</a></li>
                </li>  
                <button data-menu="close" class="mobile_menu__close_button">Закрыть</button>
            </ul>
        </nav>
        <!-- ** КОНЕЦ МОБИЛЬНОЕ МЕНЮ ** -->




        <!-- Выезжающее меню -->
        <div class="alternate_menu__wrapper" id="alternate_menu__wrapper">
            <div class="container">
                <?php echo get_template_part("template-parts/header/header", "alternate_menu"); ?>
            </div>
        </div>

        <!-- *** END Выезжающее меню *** -->

        <div class="header__top-row">
            <div class="container">
                <div class="row align-items-center">
                    <div class="row__block">
                        <i class="icon-clock"></i>
                        <span class="working-hours"><?php __("Время работы:", "ckror") ?></span>
                        <span class="font-medium"> <?php echo get_field("ckror_vremya_raboty")?></span>
                    </div>
                    <div class="row__block">
                        <i class="icon-mail"></i>
                        <span>E-mail:</span>
                        <a href="mailto:<?php echo get_field("ckror_top_row_email")?>" title="Написать письмо" class="font-medium eliminate-link hover_underline"><?php echo get_field("ckror_top_row_email")?></a>
                    </div>
                    
                    <div class="row__special align-items-center highcontrast__icon_wrapper">
                        <svg class="highcontrast__icon mr5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path id="cancel" class="highcontrast__icon_cancel" fill="currentColor" d="M21.7699 2.22988C21.4699 1.92988 20.9799 1.92988 20.6799 2.22988L2.22988 20.6899C1.92988 20.9899 1.92988 21.4799 2.22988 21.7799C2.37988 21.9199 2.56988 21.9999 2.76988 21.9999C2.96988 21.9999 3.15988 21.9199 3.30988 21.7699L21.7699 3.30988C22.0799 3.00988 22.0799 2.52988 21.7699 2.22988Z" />
                        </svg>
                        <span title="Версия для слабовидящих" ><?php echo __("Версия для слабовидящих", "ckror")?></span>
                    </div>
                    <?php
                        echo get_template_part("template-parts/header/header", "socials");
                    ?>
                </div>
            </div>
        </div>

        <div class="header__main-row">
            <div class="container">
                <div class="row flex-nowrap row--mobile-center">
                    <div class="menu_mobile__icon">
                        <button id="open_mobile_menu" class="menu_mobile__btn eliminate_btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <div class="padding_on_left_right">
                        <a href="#" class="header__logo eliminate-link" title="">
                            <div class="row flex-nowrap h-100">
                                <?php echo get_custom_logo(); ?>
                                
                                <div class="header__logo-text">
                                    <div class="header__logo-title"><?php bloginfo('name'); ?></div>
                                    <div class="header__logo-slogan "><?php bloginfo('description'); ?></div>
                                </div>
                                
                            </div>
                        </a>
                    </div>

                    <?php get_template_part('searchform'); ?>

                    <?php get_template_part("template-parts/header/header", "contact_form"); ?>
            </div>
        </div>


        <div class="header__menu-row">
            <div class="container">
            <?php 
                get_template_part("template-parts/header/header", "top_menu");
            ?>
            </div>
        </div>
    </header>