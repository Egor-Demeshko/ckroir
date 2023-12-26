<?php
    $accent = get_field("ckror_accent");
    $header_row_bg = get_field("ckror_header_row_bg");
    $main_text = get_field("ckror_main_text");
    $elemements_color = get_field("ckror_elemements_color");
    $not_main_text = get_field("ckror_not_main_text");
    $additional_grey = get_field("ckror_additional_grey");
    $accent_dark = get_field("ckror_accent_dark");
?>
    <style>
    @font-face {
      font-family: 'Roboto';
      src: url(<?php get_template_directory_uri() . "/assets/fonts/Roboto-Bold.ttf"?>) format('truetype');
      font-weight: bold;
    }

    @font-face {
      font-family: 'Roboto';
      src: url(<?php echo get_template_directory_uri() . '/assets/fonts/Roboto-Italic.ttf'?>) format('truetype');
      font-style: italic;
    }

    @font-face {
      font-family: 'Roboto';
      src: url(<?php echo get_template_directory_uri() . '/assets/fonts/Roboto-Medium.ttf'?>) format('truetype');
      font-weight: 500; /* Medium */
    }

    @font-face {
      font-family: 'Roboto';
      src: url(<?php echo get_template_directory_uri() . '/assets/fonts/Roboto-Regular.ttf'?>) format('truetype');
      font-weight: normal;
    }

    @font-face{
      font-family: 'icomoon';
      src: url(<?php echo get_template_directory_uri() . '/assets/fonts/IcoMoon-Free.ttf'?>) format('truetype');
    }

    :root{
        --dark-grey: #525252;
        --slate-grey: #797a7c;
        --grey: #f5f5f5;
        --little-darker-grey: #EEEBEB;
        --additional-grey: #606060;
        --orange: #fd7e14;
        --orange-dark: #D26000;
        --black: #171717;
        --black-40: #00000066;
        --black-80: #000000CC;
        --white: #FCFCFC;
        --white-60: #FCFCFC99;

        --elemements-color: <?php echo ($elemements_color && $elemements_color != '') ? $elemements_color : 'var(--dark-grey)'; ?>;
        --header-row-bg: <?php echo ($header_row_bg && $header_row_bg != '') ? $header_row_bg : 'var(--grey)'; ?>;
        --main_elem_hover_color: <?php echo ($accent && $accent != '') ? $accent : 'var(--orange)'; ?>; 
        --not-main-text: <?php echo ($not_main_text && $not_main_text != '') ? $not_main_text : 'var(--slate-grey)'; ?>;
        --main-text: <?php echo ($main_text && $main_text != '') ? $main_text : 'var(--black)'; ?>; 
        --additional-text: <?php echo ($additional_grey && $additional_grey != '') ? $additional_grey : 'var(--additional-grey)'; ?>;
        --top-border-color: var(--grey);
        --accent: <?php echo ($accent && $accent != '') ? $accent : 'var(--orange)'; ?>; 
        --accent-hover: <?php echo ($accent_dark && $accent_dark != '') ? $accent_dark : 'var(--orange-dark)'; ?>;
    }


    /*HIGHCONTRAST*/
    html.highcontrast{
        --elemements-color: var(--black);
        --header-row-bg: var(--black-40);
        --main_elem_hover_color: var(--slate-grey);
        --not-main-text: var(--black);
        --main-text: var(--black);
        --additional-text: var(--black);
        --top-border-color: var(--black-40);
        --accent: var(--black);
        --accent-hover: var(--slate-grey);
        
    }

  </style>