<?php
    get_header();
?>
        <!-- МЕЛКИЙ СЛАЙДЕР -->
        <div class="dark-background">
            <div class="container">
                <?php echo get_template_part('template-parts/components/slider', 'archive'); ?>
            </div>
        </div>

        <div class="main">
            <div class="container padding_on_left_right">
                <?php echo get_template_part('template-parts/components/breadcrumbs'); ?>

                <h1><?php printf(__('Поисковые результаты: %s', 'kinder'), get_search_query()); ?></h1>

                <div class="main_conrainer">
                    <main>
                        <ul class="news_category_list">

                

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post();

                        $post_thumbnail;
                        // Get post thumbnail
                        if (has_post_thumbnail()) {
                            $post_thumbnail = get_the_post_thumbnail_url();
                        } else {
                            $post_thumbnail =  get_template_directory_uri() . '/assets/images/news_mask.jpeg'; // Replace with your default thumbnail url
                        }

                        // Get post date in the format of 06.07.2023
                        $post_date = get_the_date('d.m.Y');

                        // Get post title
                        $post_title = get_the_title();

                        // Get post excerpt
                        $post_excerpt = get_the_excerpt();
                        $link = get_the_permalink();
                    ?>

                    <li class="news_card" role="listitem" aria-label="<?php _e('Предпросмотр записи', 'ckror'); ?>">
                        <div class="news_card__img-wrapper" role="presentation">
                            <img src="<?php echo $post_thumbnail; ?>" class="news_card__img" alt="News image">
                        </div>
                        <div class="news_card__content" role="article">
                            <div>
                                <span class="news_card__date"><?php echo $post_date?></span>
                            </div>
                            <a href="<?php echo $link ?>" class="news_card__title eliminate-link" role="heading" aria-level="2"><?php echo $post_title ?></a>
                            <p class="news_card__description"><?php echo $post_excerpt ?></p>
                            <a href="<?php echo $link ?>" class="eliminate-link news_card__link" role="link"><?php _e("Читать далее", "ckror")?></a>
                        </div>
                    </li>
                    <?php endwhile; ?>

                    <!-- Pagination -->
                <?php 
                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => __( 'Предыдущее записи', 'ckror' ),
                        'next_text' => __( 'Следующий записи', 'ckror' ),
                    ) ); 
                    ?>
                    <?php else : ?>
                        <p><?php _e('Ничего не найдено', 'ckror'); ?></p>
                    <?php endif; ?>

                        <ul>
                    </main>
                </div>
            </div>
        </div>

    <!-- ПОЛЕЗНЫЕ ССЫЛКИ -->
    <div class="dark-background">
        <div class="container">
            <?php echo get_template_part('template-parts/blocks/useful', 'links'); ?>
        </div>
    </div>
    <!-- *** КОНЕЦ ПОЛЕЗНЫЕ ССЫЛКИ *** -->

    <?php
    get_footer();
    echo get_template_part('template-parts/blocks/gallery/gallery', 'full_window');
    wp_footer();
    
    ?>
  </body>
</html>
