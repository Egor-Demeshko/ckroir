<footer class="footer-wrapper">
    <div class="container">
        <div class="footer">
            <!-- ЛЕВАЯ КОЛОНКА ФУТЕР -->
                <?php echo get_template_part("template-parts/blocks/footer/footer", "left") ?>
            <!-- *** КОНЕЦ ЛЕВАЯ КОЛОНКА ФУТЕР *** -->
            <!-- ЦЕНТРАЛЬНАЯ КОЛОНКА ФУТЕР -->
            <nav class="footer__center footer_center">
                <h4 class="footer_left__title no-margin">
                    <?php 
                    $menu_name = wp_get_nav_menu_name('footer_menu'); // Replace 'your-menu-location' with the location of your menu
                    echo $menu_name;
                    ?>
                </h4>

                <?php 
                    wp_nav_menu([
                        'theme_location'  => 'footer_menu',
                        'container'       => false,
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'footer_center__list eliminate_list',
                        'echo'            => true,
                        'fallback_cb'     => '',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => new Footer_Menu(),
                    ]);
                ?>
            </nav>
            <!-- *** КОНЕЦ ЦЕНТРАЛЬНАЯ КОЛОНКА ФУТЕР *** -->
            <!-- ПРАВАЯ КОЛОНКА ФУТЕР -->
            <div class="footer__right">
                <?php if ( is_active_sidebar( 'footer' ) ) : ?>
                        <?php dynamic_sidebar( 'footer' ); ?>
                <?php endif; ?>
            </div>
            <!-- *** КОНЕЦ ПРАВАЯ КОЛОНКА ФУТЕР *** -->
        </div>
    </div>

    <?php echo get_template_part("template-parts/blocks/footer/footer", "templates") ?>
</footer>