<?php
$args = array(
    'post_type' => SMALL_SLIDER_ID,
);

$query = new WP_Query($args);
// The Loop
if ($query->have_posts()) {

    ?>

        <section class="glide info_slide slider_archive" aria-label="<?php _e("Маленький слайдер", "ckror");?>">

            <div class="glide__track info_slide__track" data-glide-el="track">
                <ul class="glide__slides info_slide__slides" aria-label="<?php _e("Область слайдов", "ckror");?>">
                    
                    <?php
                    while ($query->have_posts()) {
                        $query->the_post();
                        $heading = get_field('ckror_slider_small_heading');
                        $imgId = get_field('ckror_slider_small_image');
                        $url = get_field('ckror_slider_small_url');
                        $imageData = [];
                        // get the url of the image by imgId
                        $imageData['image_url'] = wp_get_attachment_image_url($imgId, 'thumbnail');
                        // get the alternative text of the image by imgId
                        $imageData['image_alt'] = get_post_meta($imgId, '_wp_attachment_image_alt', TRUE);
                        ?>
                        <li class="glide__slide" role="option" aria-label="<?php _e("Слайд", "ckror"); ?>">
                            <div class="info_slide__slide slider_archive__slide">
                                <a href="<?php echo $url;?>" class="eliminate-link info_slide__slide_top"
                                aria-label="<?php _e("Ссылка на публикацию или страницу, где больше информации", "ckror");?>">
                                    <div>
                                        <img class="info_slide__image" alt="<?php 
                                        echo ($imageData['image_alt']) ? $imageData['image_alt'] : get_the_title(); ?>"
                                        src="<?php echo $imageData['image_url']; ?>">
                                    </div>
                                    <p class="info_slide__title">
                                        <?php echo ($heading && $heading !== "") ? $heading : get_the_title(); ?>
                                    </p>
                                </a>
                                <a href="<?php echo $url;?>" class="info_slide__button btn eliminate-link btn--big-mobile"
                                aria-label="<?php _e("Подробнее о публикации", "ckror");?>" target="_blank"><?php _e("Подробнее", "ckror");?></a>
                            </div>
                        </li>
                        <?php
                    }?>
                    </ul>
            </div>

            <div class="glide__arrows top-slider__arrows info_slider--arrows-always" data-glide-el="controls" 
            aria-label="<?php _e("Блок управления пролистывания слайдеров", "ckror")?>">
                <button class="glide__button_arrow eliminate_btn top-slider__button_arrow"
                    data-glide-dir="<" aria-label="<?php _e("Предыдущий слайд", "ckror")?>">
                    <i aria-hidden="true" class="icon-left">&#xea44;</i>
                </button>
                <button class="glide__button_arrow eliminate_btn top-slider__button_arrow" 
                data-glide-dir=">" aria-label="<?php _e("Следующий слайд", "ckror")?>">
                    <i aria-hidden="true" class="icon-right">&#xea42;</i>
                </button>
            </div>
        </section>
        <?php
}

// Reset Post Data
wp_reset_postdata();
?>





