<?php 
$address = get_field("ckror_footer_address");
$phone_top = get_field("ckror_footer_phone_top");
$phone_bottom = get_field("ckror_footer_phone_bottom");
$phone_top_url = '+' . preg_replace('/[^0-9]/', '', $phone_top);
$phone_bottom_url = '+' . preg_replace('/[^0-9]/', '', $phone_bottom);
$mail =  get_field("ckror_footer_email");
$bottom_label = get_field("ckror_footer_bottom_label");
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
