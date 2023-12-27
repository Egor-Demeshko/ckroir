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
        echo get_template_part("template-parts/header/seo", "");
    ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="header">

        <?php get_template_part("template-parts/header/header", "mobile_menu")?>

        <!-- МОБИЛЬНОЕ МЕНЮ -->
        
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
                <div class="row align-items-center padding_on_left_right">
                <?php
                    // Create new instance of WP_Query
                    $query = new WP_Query( array(
                        'post_type' => CONTACTS_TOP,
                        'posts_per_page' => 1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ) );

                    // Check if there are any posts
                    if ( $query->have_posts() ) {
                        // Start looping over the query results
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            // Global $post variable
                            
                        }
                        ?>

                        <div class="row__block">
                            <i class="icon-clock"></i>
                            <span class="working-hours"><?php __("Время работы:", "ckror") ?></span>
                            <span class="font-medium"> <?php echo get_field("ckror_vremya_raboty")?></span>
                        </div>
                        <div class="row__block">
                            <i class="icon-mail"></i>
                            <span>E-mail:</span>
                            <a href="mailto:<?php echo get_field("ckror_top_row_email")?>" title="<?php _e("Написать письмо", "ckror")?>" class="font-medium eliminate-link hover_underline"><?php echo get_field("ckror_top_row_email")?></a>
                        </div>
                        
                        <?php
                        // Restore original Post Data
                        wp_reset_postdata();
                    }
                ?>

                    <div class="row__special align-items-center highcontrast__icon_wrapper">
                        <svg class="highcontrast__icon mr5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path id="cancel" class="highcontrast__icon_cancel" fill="currentColor" d="M21.7699 2.22988C21.4699 1.92988 20.9799 1.92988 20.6799 2.22988L2.22988 20.6899C1.92988 20.9899 1.92988 21.4799 2.22988 21.7799C2.37988 21.9199 2.56988 21.9999 2.76988 21.9999C2.96988 21.9999 3.15988 21.9199 3.30988 21.7699L21.7699 3.30988C22.0799 3.00988 22.0799 2.52988 21.7699 2.22988Z" />
                        </svg>
                        <span title="Версия для слабовидящих" ><?php echo __("Версия для слабовидящих", "ckror")?></span>
                    </div>
                    <?php echo do_shortcode('[gtranslate]')?>
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