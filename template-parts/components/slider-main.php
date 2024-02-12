<?php 
    $args = array(
        'post_type' => MAIN_SLIDER_ID
    );

    /**информация и приложенном фото */
    $photo = [];
    /** @description тексты */
    $texts = [];
    /** @description ссылка */
    $link = null;

    // The Query
    $the_query = new WP_Query( $args );
    // The Loop
    if ( $the_query->have_posts() ) {
        ?>
        <section class="glide top-slider" aria-label="<?php _e("Главный информационный слайдер", "ckror")?>"
        role="region">
            <div class="glide__bullets top-slider__bullets" data-glide-el="controls[nav]">
            </div>
            <div class="glide__arrows top-slider__arrows" data-glide-el="controls" 
            aria-label="<?php _e("Блок с кнопка пролистывания слайдов")?>">
                <button class="glide__button_arrow eliminate_btn top-slider__button_arrow" aria-label="<?php _e("Листать слайды влевую сторону")?>"
                data-glide-dir="<">
                    <i aria-hidden="true" class="icon-left">&#xea44;</i>
                </button>
                <button class="glide__button_arrow eliminate_btn top-slider__button_arrow" 
                data-glide-dir=">" aria-label="<?php _e("Kbc")?>">
                    <i aria-hidden="true" class="icon-right">&#xea42;</i>
                </button>
            </div>
            <div class="glide__track top-slider__track" data-glide-el="track">
            <ul class="glide__slides top-slider__slides" aria-label="<?php _e("Блок слайдов", "ckror")?>">
        <?php



        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            /**получаем данные о фото */
            $photoId = get_field("ckror_main_slider_photo");
            $photo["photoUrl"] = wp_get_attachment_image_url($photoId, MAIN_SLIDER_ID);
            $photo["photoAlt"] = get_post_meta($photoId, '_wp_attachment_image_alt', TRUE);

            /**получаем данные текстов */
            $texts['first_label'] = get_field("ckror_main_slider_first_label");
            $texts['main_text'] = get_field("ckror_main_slider_main_text");
            $texts['second_label'] = get_field("ckror_main_slider_second_label");

            $link = get_field("ckror_main_slider_link");
            ?>


            <!-- слайд -->
            <li class="glide__slide top-slider__slide" aria-label="<?php _e("Слайд", "ckror")?>">
                <div class="top-slider__left" style="background: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.4)), url('<?php echo $photo["photoUrl"]?>');">
                    <div class="top-slider__left_texts">
                        
                        <?php if(isset($texts['first_label']) && $texts['first_label'] !== '') { ?>
                            <p class="top-slider__left_texts_side_text_top"><?php echo $texts['first_label']; ?></p>
                        <?php } ?>

                        <?php if(isset($texts['main_text']) && $texts['main_text'] !== '') { ?>
                            <p class="top-slider__left_texts_heading"><?php echo $texts['main_text']; ?></p>
                        <?php } ?>

                        <?php if(isset($texts['second_label']) && $texts['second_label'] !== '') { ?>
                            <p class="top-slider__main_text"><?php echo $texts['second_label']; ?></p>
                        <?php } ?>

                    </div>

                    <?php if(isset($link) && $link !== '') { ?>
                        <div class="top-slider__left_button_wrapper">
                            <a href="<?php echo $link; ?>" class="top-slider__left_button btn btn-main"><?php _e("Перейти", "ckror")?></a>
                        </div>
                    <?php } ?>
                </div>

                <?php if(isset($photo["photoUrl"]) && $photo["photoUrl"] !== '') {?>
                    <div class="top-slider__right">
                        
                        <img alt="<?php echo $photo["photoAlt"]; ?>" src="<?php echo $photo["photoUrl"] ?>"/>
                    </div>
                <?php 
                }?>
            </li>
            <!-- *** к конец слайда *** -->
            
            <?php
        }?>

            </ul>
            </div>
        </section>
        <?php
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        // no posts found
    }
?>





