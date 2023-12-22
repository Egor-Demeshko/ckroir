<div class="header__contacts align-items-center text-" aria-label="<?php _e('Блок главных контактов и кнопки обратной связи', 'ckror') ?>">
    <div class="col-auto">
        <?php $main_phone = get_field("ckror_main_phone");
        $phone_label = get_field("ckror_phone_label");?>
        <div class="header__phone " aria-label="<?php _e("Телефоный номер", "ckror")?>">
            <a href="tel:<?php echo $main_phone;?>" title="<?php echo $phone_label;?>" 
            class="eliminate-link" aria-label="<?php _e("Набрать телефоный номер", "ckror")?>"><?php echo $main_phone; ?></a>
        </div>
        <div class="header__phone-label"><?php echo $phone_label; ?></div>
    </div>
    <div class="" aria-label="Feedback Form">
        <a href="#modal_feedback_form" data-toggle="modal" class="btn eliminate-link btn-main" aria-label="<?php _e("Открыть формы обратной связи", "ckror");?>">Написать</a>    
    </div>

    <div class="header__contacts_contact-form">
        <?php echo do_shortcode('[contact-form-7 id="1843660" title="Contact form 1"]'); ?>
        <button class="btn btn-main header__contacts_backbutton"><?php _e("Назад", "ckror")?></button>
    </div>
</div>