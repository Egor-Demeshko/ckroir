<?php 
    $args = [
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC',
        'post__not_in' => [MAIN_SLIDER_ID, SMALL_SLIDER_ID, FRONT_PAGE_SINGLE_POST, 'ckror_socials_top']
    ];

    $posts_query = new WP_Query($args);
?>

<?php 
    if($posts_query->have_posts()) {
    ?>
        
        
        <section class="news" role="region" aria-label="<?php _e("Блок все записи", "ckror")?>">
            <div class="news__row justify-content-space-between">
                <h3 class="page_block_title no-margin"><?php _e("Все записи", "ckror") ?></h3>
                <?php
                    $all_posts_page_id = get_option('page_for_posts'); // Get the ID of the page that displays all posts
                    $all_posts_page_link = get_permalink($all_posts_page_id); // Get the permalink of the page
                    
                    // Output link
                    echo '<a href="' . esc_url($all_posts_page_link) . '" class="eliminate-link news__all-news-link">Читать все новости</a>';
                ?>
            </div>
            <div class="news__news-row">
    <?php
        while($posts_query->have_posts()) {
            $posts_query->the_post();

            $date = get_the_date('d.m.Y');
            $heading = get_the_title();
            $excerpt = get_the_excerpt();
            ?>
            
            <div class="card flex column justify-content-space-between"> 
                <div class="card__top">
                    <?php 
                        $thumbnail_id = get_post_thumbnail_id();
                        $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                        if(has_post_thumbnail()) {
                            echo ` <div class="card__image-wrapper">
                                <img class="card__image" src="` . get_the_post_thumbnail_url( null, FRONT_PAGE_NEWS_POST) . `" alt="` . $alt_text .`">
                            </div>`;
                        } else {
                            ?>
                            <div class="card__image-wrapper" aria-label="<?php _e("Изображение из записи", "ckror") ?>">
                                <img class="card__image" src="<?php echo get_template_directory_uri() . '/assets/images/news_mask.jpeg';?>" alt="<?php _e("Изображение маска")?>">
                            </div>
                            <?php
                        }
                    ?>

                    <span class="card__date" aria-label="<?php _e("Дата публикации записи", "ckror") ?>"><?php echo $date ?></span>
                        <a href="<?php the_permalink(); ?>" class="card__heading no-margin eliminate-link"><?php echo $heading ?></a>
                    <p class="card__additional no-margin" aria-label="<?php _e("Краткий текст записи", "ckror") ?>"><?php echo $excerpt ?></p>
                </div> 
                <div class="card__bottom">
                    <a class="card__link eliminate-link" href="<?php the_permalink(); ?>"><?php _e("Читать далее", "ckror") ?></a>
                </div> 
            </div><?php
        }?>
        </div>
    </section>
    
    <?php
    }
?>
