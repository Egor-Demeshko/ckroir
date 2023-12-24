<?php
    get_header();
?>
    <main>
        <div class="container">
            <!-- Слайдер основной -->
            <?php echo get_template_part('template-parts/components/slider', 'main'); ?>
        </div>

        <!-- МЕЛКИЙ СЛАЙДЕР -->
        <div class="container">
            <?php echo get_template_part('template-parts/components/slider', 'small'); ?>
        </div>

        <hr class="breaker">
        <!-- *** Конец мелкого слайдера *** -->

        <div>
            <div class="container">
                <?php echo get_template_part('template-parts/components/front', 'main'); ?>
            </div>
        </div>

        <!-- Новости -->
        <div>
            <div class="container">
                <?php echo get_template_part('template-parts/blocks/front', 'news'); ?>
            </div>
        </div>
        <!-- *** КОНЕЦ БЛОКА НОВОСТИ ** -->

        <!-- ПОЛЕЗНЫЕ ССЫЛКИ -->
        <div>
            <div class="container">

                <?php echo get_template_part('template-parts/blocks/useful', 'links');?>

            </div>
        </div>
        <!-- *** КОНЕЦ ПОЛЕЗНЫЕ ССЫЛКИ *** -->

        <!-- ФОТОГАЛЕРЕЯ -->
        <div>
            <div class="container">
                <?php
                    echo get_template_part("template-parts/blocks/gallery/front", "gallery");
                ?>
            </div>
        </div>
        <!-- *** КОНЕЦ ФОТОГАЛЕРЕЯ *** -->
    </main>

    <hr class="breaker">

    <?php
    wp_footer();
    get_footer();
    
    ?>
  </body>
</html>