<?php 
    $args = array(
        'post_type' => FRONT_PAGE_SINGLE_POST,
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $last_post_query = new WP_Query($args);

    if($last_post_query->have_posts()) {
        while($last_post_query->have_posts()) : $last_post_query->the_post();
            $imgId = get_field('ckror_main_field_image');
            // Assuming you're in the loop and $post is the current post
            $imgUrl = wp_get_attachment_url($imgId, 'medium');
            $alt_text = get_post_meta($imgUrl, '_wp_attachment_image_alt', true);

        ?>
            <section class="about">
                <?php if($imgUrl) : ?>
                    <img class="about__image" alt="<?php echo $alt_text ?>" src="<?= $imgUrl ?>"/>
                <?php endif; ?>

                <article class="about__content">
                    <?php the_content();?>
                </article>
            </section>
        <?php
        
        endwhile;
    };
    wp_reset_postdata();
?>


