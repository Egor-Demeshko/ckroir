<?php 
$latest_posts = new WP_Query(array(
    'post_type' => CONTACTS_BOTTOM,
    'posts_per_page' => 1
));

// Start loop to process the latest post
if ($latest_posts->have_posts()) {
    while ($latest_posts->have_posts()) {
        $latest_posts->the_post();

    }



$address = get_field("ckror_footer_address");
$phone_top = get_field("ckror_footer_phone_top");
$phone_bottom = get_field("ckror_footer_phone_bottom");
$phone_top_url = '';
$phone_bottom_url = '';

/**Создаем ссылку на телефон */
if($phone_top && $phone_top !== ""){
    $phone_top = '+' . preg_replace('/[^0-9]/', '', $phone_top);
}
if($phone_bottom && $phone_bottom !== ""){
    $phone_bottom = '+' . preg_replace('/[^0-9]/', '', $phone_bottom);
}

$mail =  get_field("ckror_footer_email");
?>



<div class="footer__left footer_left">
    <h4 class="footer_left__title no-margin">
        <?php _e("Контакты", "ckror"); ?>
    </h4>
    <?php 
        if($address && $address !== ""){
            ?>
            <div class="footer_left__text-section">
                <p class="footer_left__label"><?php _e("Адрес", "ckror") . ':'?></p>
                <p class="footer__text"><?php echo $address?></p>
            </div>
        <?php
        }
    
    ?>
    <div class="footer_left__text-section">
        <p class="footer_left__label"><?php _e('Телефон', 'ckror') ?></p>
        <p class="footer_left__text"><a href="tel:<?php echo $phone_top_url?>" class="eliminate-link footer_left__link"><?php echo $phone_top?></a></p>
        <p class="footer_left__text"><a href="tel:<?php echo $phone_bottom_url?>" class="eliminate-link footer_left__link"><?php echo $phone_bottom?></a></p>
    </div>
    <?php 
        if($mail && $mail !== ''){
            ?>
            <div class="footer_left__email"><span>E-mail: </span><span><a href="<?php echo $mail?>"><?php echo $mail ?></a></span></div>
            <?php
        }
    ?>
    <?php echo get_template_part("template-parts/blocks/footer/footer", "socials")?>
    
    <?php $title = get_the_title(); 
    $year = date('Y');
    $str = '©' . ' ' . $year .  ' ' . $title . ' ' . __("Все права защищены", "ckror");
    ?>
    <p class="footer_left__copyright"><?php echo $str ?></p>
</div>
<?php
}

// Reset post data after the loop
wp_reset_postdata();
?>

