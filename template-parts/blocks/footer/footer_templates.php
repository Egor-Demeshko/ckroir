<template id="full_window_template" data-urlbase=<?php echo get_template_directory_uri(); ?>>
    <div class="full_window">
        <section class="glide full_window-slider">
            <div class="glide__bullets full_window__bullets" data-glide-el="controls[nav]">
            </div>
            <div class="glide__arrows full_window__arrows" data-glide-el="controls">
                <button class="glide__button_arrow eliminate_btn full_window__button_arrow" data-glide-dir="<">
                    <i class="icon-left">&#xea44;</i>
                </button>
                <button class="glide__button_arrow eliminate_btn full_window__button_arrow" data-glide-dir=">">
                    <i class="icon-right">&#xea42;</i>
                </button>
            </div>
            <div class="glide__track full_window__track" data-glide-el="track">
                <ul class="glide__slides full_window__slides">
                </ul>
            </div>
        </section>
    </div>
</template>
<template id="full_window_slide_template">
    <li class="glide__slide full_window__slide">
        <img alt="" title="" src="/assets/images/test1.jpeg"/>
    </li>
</template>