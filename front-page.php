<?php
    get_header();
?>
    <main>
        <div class="container">
            <section class="glide top-slider">
                <div class="glide__bullets top-slider__bullets" data-glide-el="controls[nav]">
                </div>
                <div class="glide__arrows top-slider__arrows" data-glide-el="controls">
                    <button class="glide__button_arrow eliminate_btn top-slider__button_arrow" data-glide-dir="<">
                        <i class="icon-left">&#xea44;</i>
                    </button>
                    <button class="glide__button_arrow eliminate_btn top-slider__button_arrow" data-glide-dir=">">
                        <i class="icon-right">&#xea42;</i>
                    </button>
                </div>
                <div class="glide__track top-slider__track" data-glide-el="track">
                    <ul class="glide__slides top-slider__slides">
                        <li class="glide__slide top-slider__slide">
                            <div class="top-slider__left" style="background: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.4)), url('/assets/images/test1.jpeg');">
                                <div class="top-slider__left_texts">
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    <p class="top-slider__left_texts_heading">adipiscing elit. Aenean euismod</p>
                                    <p>bibendum laoreet. Proin gravida dolor</p>
                                </div>
                                <div class="top-slider__left_button_wrapper">
                                    <a class="top-slider__left_button btn btn-main">Перейти</a>
                                </div>
                            </div>
                            <div class="top-slider__right">
                                <img alt="" title="" src="/assets/images/test1.jpeg"/>
                            </div>
                        </li>
                        <li class="glide__slide top-slider__slide">
                            <div class="top-slider__left" style="background: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.4)), url('/assets/images/test2.jpeg');">
                                <div class="top-slider__left_texts">
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    <p class="top-slider__left_texts_heading">adipiscing elit. Aenean euismod</p>
                                    <p>bibendum laoreet. Proin gravida dolor</p>
                                </div>
                                <div class="top-slider__left_button_wrapper">
                                    <a class="top-slider__left_button btn btn-main">Перейти</a>
                                </div>
                            </div>
                            <div class="top-slider__right">
                                <img alt="" title="" src="/assets/images/test2.jpeg"/>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

        <!-- МЕЛКИЙ СЛАЙДЕР -->
        <div class="container">
            <section class="glide info_slide">
                <div class="glide__arrows top-slider__arrows info_slider--arrows-always" data-glide-el="controls">
                    <button class="glide__button_arrow eliminate_btn top-slider__button_arrow top-slider__button_arrow--half"
                     data-glide-dir="<">
                        <i class="icon-left">&#xea44;</i>
                    </button>
                    <button class="glide__button_arrow eliminate_btn top-slider__button_arrow top-slider__button_arrow--half" 
                    data-glide-dir=">">
                        <i class="icon-right">&#xea42;</i>
                    </button>
                </div>
                <div class="glide__track info_slide__track" data-glide-el="track">
                    <ul class="glide__slides info_slide__slides">
                        <li class="glide__slide info_slide__slide_wrapper">
                            <div class="info_slide__slide">
                                <a href="#" class="eliminate-link info_slide__slide_top">
                                    <div>
                                        <img class="info_slide__image" src="/assets/images/test3.jpeg">
                                    </div>
                                    <p class="info_slide__title">Математический кружок</p>
                                    <p class="info_slide__additional">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                                </a>
                                <a href="#" class="info_slide__button btn eliminate-link btn--big-mobile">Подробнее</a>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="info_slide__slide">
                                <a href="#" class="eliminate-link info_slide__slide_top">
                                    <div>
                                        <img class="info_slide__image" src="/assets/images/test1.jpeg">
                                    </div>
                                    <p class="info_slide__title">Физический кружок</p>
                                    <p class="info_slide__additional">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Vestibulum ante ipsum  Vestibulum ante ipsum  Vestibulum ante ipsum.</p>
                                </a>
                                <a href="#" class="info_slide__button btn eliminate-link btn--big-mobile">Подробнее</a>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="info_slide__slide">
                                <a href="#" class="eliminate-link info_slide__slide_top">
                                    <div>
                                        <img class="info_slide__image" src="/assets/images/test2.jpeg">
                                    </div>
                                    <p class="info_slide__title">Биологический кружок</p>
                                    <p class="info_slide__additional">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Vestibulum ante ipsum.</p>
                                </a>
                                <a href="#" class="info_slide__button btn eliminate-link btn--big-mobile">Подробнее</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

        <hr class="breaker">
        <!-- *** Конец мелкого слайдера *** -->

        <div>
            <div class="container">
                <section class="about">
                    <img class="about__image" src="/assets/images/about.jpeg"/>
                    <article class="about__content">

                    </article>
                </section>
            </div>
        </div>

        <div>
            <div class="container">
                <section class="news">
                    <div class="news__row justify-content-space-between">
                        <h3 class="page_block_title no-margin">Новости</h3>
                        <a href="#" class="eliminate-link news__all-news-link">Читать все новости</a>
                    </div>
                    <div class="news__news-row">
                        <div class="card flex column justify-content-space-between"> 
                            <div class="card__top">
                                <div class="card__image-wrapper">
                                    <img class="card__image" src="/assets/images/test1.jpeg">
                                </div>
                                <span class="card__date">24.10.2023</span>
                                <a href="#" class="card__heading no-margin eliminate-link">День народного единства</a>
                                <p class="card__additional no-margin">Lorem ipsum dolor sit, consectetur adipiscing. Aenean commodo ligula eget dolor amet.</p>
                            </div> 
                            <div class="card__bottom">
                                <a class="card__link eliminate-link" href="#">Читать далее</a>
                            </div> 
                        </div>

                        <div class="card flex column justify-content-space-between"> 
                            <div class="card__top">
                                <div class="card__image-wrapper">
                                    <img class="card__image" src="/assets/images/test1.jpeg">
                                </div>
                                <span class="card__date">24.10.2023</span>
                                <a href="#" class="card__heading no-margin eliminate-link">Выступление главы МВД</a>
                                <p class="card__additional no-margin">Lorem ipsum dolor sit, consectetur adipiscing. Aenean commodo ligula eget dolor amet. Lorem ipsum dolor sit, consectetur adipiscing.</p>
                            </div> 
                            <div class="card__bottom">
                                <a class="card__link eliminate-link" href="#">Читать далее</a>
                            </div> 
                        </div>

                        <div class="card flex column justify-content-space-between"> 
                            <div class="card__top">
                                <div class="card__image-wrapper">
                                    <img class="card__image" src="/assets/images/about.jpeg">
                                </div>
                                <span class="card__date">24.10.2023</span>
                                <a href="#" class="card__heading no-margin eliminate-link">Ударим хорошим обедом по лени</a>
                                <p class="card__additional no-margin">Lorem ipsum dolor sit, consectetur adipiscing. Aenean commodo ligula eget dolor amet.</p>
                            </div> 
                            <div class="card__bottom">
                                <a class="card__link eliminate-link" href="#">Читать далее</a>
                            </div> 
                        </div>

                        <div class="card flex column justify-content-space-between"> 
                            <div class="card__top">
                                <div class="card__image-wrapper">
                                    <img class="card__image" src="/assets/images/test1.jpeg">
                                </div>
                                <span class="card__date">24.10.2023</span>
                                <a href="#" class="card__heading no-margin eliminate-link">День народного единства</a>
                                <p class="card__additional no-margin">Lorem ipsum dolor sit, consectetur adipiscing. Aenean commodo ligula eget dolor amet. orem ipsum dolor sit, consectetur adipiscing. Aenean commodo ligula eget dolor amet.</p>
                            </div> 
                            <div class="card__bottom">
                                <a class="card__link eliminate-link" href="#">Читать далее</a>
                            </div> 
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- ПОЛЕЗНЫЕ ССЫЛКИ -->
        <div>
            <div class="container">
                <section class="useful_links">
                    <h3 class="no-margin page_block_title mb10">Полезные ссылки</h3>
                    <div id="useful_links_slider" class="useful_links__links">
                        <div class="useful_links__card">
                            <div class="useful_links__card-img-wrapper">
                                <a class="eliminate-link" href="#">
                                    <img class="useful_links__card-img" src="/assets/images/funny_logo.jpeg">
                                </a>
                            </div>    
                            <p class="useful_links__card-text"><a href="#" class="eliminate-link">Детский правовой портал</a></p>                        
                        </div>
                        <div class="useful_links__card">
                            <div class="useful_links__card-img-wrapper">
                                <a class="eliminate-link" href="#">
                                    <img class="useful_links__card-img" src="/assets/images/funny_logo.png">
                                </a>
                            </div>    
                            <p class="useful_links__card-text"><a href="#" class="eliminate-link">Портал для детей</a></p>                        
                        </div>
                        <div class="useful_links__card">
                            <div class="useful_links__card-img-wrapper">
                                <a class="eliminate-link" href="#">
                                    <img class="useful_links__card-img" src="/assets/images/funny_logo.png">
                                </a>
                            </div>    
                            <p class="useful_links__card-text"><a href="#" class="eliminate-link">Портал для детей</a></p>                        
                        </div>
                        <div class="useful_links__card">
                            <div class="useful_links__card-img-wrapper">
                                <a class="eliminate-link" href="#">
                                    <img class="useful_links__card-img" src="/assets/images/funny_logo.jpeg">
                                </a>
                            </div>    
                            <p class="useful_links__card-text"><a href="#" class="eliminate-link">Портал для детей</a></p>                        
                        </div>
                        <div class="useful_links__card">
                            <div class="useful_links__card-img-wrapper">
                                <a class="eliminate-link" href="#">
                                    <img class="useful_links__card-img" src="/assets/images/funny_logo.jpeg">
                                </a>
                            </div>    
                            <p class="useful_links__card-text"><a href="#" class="eliminate-link">Портал для детей</a></p>                        
                        </div>
                        <div class="useful_links__card">
                            <div class="useful_links__card-img-wrapper">
                                <a class="eliminate-link" href="#">
                                    <img class="useful_links__card-img" src="/assets/images/funny_logo.jpeg">
                                </a>
                            </div>    
                            <p class="useful_links__card-text"><a href="#" class="eliminate-link">Портал для детей</a></p>                        
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- *** КОНЕЦ ПОЛЕЗНЫЕ ССЫЛКИ *** -->

        <!-- ФОТОГАЛЕРЕЯ -->
        <div>
            <div class="container">
                <section class="photos">
                    <header class="photos__row">
                        <h3 class="no-margin page_block_title mb10">Фотогалерея</h3>
                        <a class="eliminate-link photos__goto-link">Посмотреть все записи с фотографиями</a>
                    </header>
                    
                    <div class="photos__gallery">
                        <div class="photos__img_wrapper" data-image-id="/assets/images/test4.jpeg">
                            <img alt="" class="photos__img" src="/assets/images/test1.jpeg" />
                        </div>
                        <div class="photos__img_wrapper" data-image-id="/assets/images/test4.jpeg">
                            <img alt="" class="photos__img" src="/assets/images/test1.jpeg"/>
                        </div>
                        <div class="photos__img_wrapper" data-image-id="/assets/images/test4.jpeg">
                            <img alt="" class="photos__img" src="/assets/images/test1.jpeg"/>
                        </div>
                        <div class="photos__img_wrapper" data-image-id="/assets/images/test4.jpeg">
                            <img alt="" class="photos__img" src="/assets/images/test1.jpeg"/>
                        </div>
                        <div class="photos__img_wrapper" data-image-id="/assets/images/test4.jpeg">
                            <img alt="" class="photos__img" src="/assets/images/test1.jpeg"/>
                        </div>
                        <div class="photos__img_wrapper" data-image-id="/assets/images/test4.jpeg">
                            <img alt="" class="photos__img" src="/assets/images/test1.jpeg"/>
                        </div>
                        <div class="photos__img_wrapper" data-image-id="/assets/images/test4.jpeg">
                            <img alt="" class="photos__img" src="/assets/images/test1.jpeg"/>
                        </div>
                        <div class="photos__img_wrapper" data-image-id="/assets/images/test4.jpeg">
                            <img alt="" class="photos__img" src="/assets/images/test1.jpeg"/>
                        </div>
                    </div>

                </section>
            </div>
        </div>
        <!-- *** КОНЕЦ ФОТОГАЛЕРЕЯ *** -->
    </main>

    <hr class="breaker">

    <footer class="footer-wrapper">
        <div class="container">
            <div class="footer">
                <!-- ЛЕВАЯ КОЛОНКА ФУТЕР -->
                <div class="footer__left footer_left">
                    <h4 class="footer_left__title no-margin">
                        Контакты
                    </h4>
                    <div class="footer_left__text-section">
                        <p class="footer_left__label">Адрес:</p>
                        <p class="footer__text">000000, Республика Беларусь, Гродненская область, г.п. Кореливичи, пр. Ленина, 1-а</p>
                    </div>
                    <div class="footer_left__text-section">
                        <p class="footer_left__label">Телефон</p>
                        <p class="footer_left__text"><a href="#" class="eliminate-link footer_left__link">+375(29)001-00-00</a></p>
                        <p class="footer_left__text"><a href="#" class="eliminate-link footer_left__link">+375(29)001-00-00</a></p>
                    </div>
                    <div class="footer_left__email"><span>E-mail: </span><span><a href="">kids@mibox.ru</a></span></div>

                    <h4 class="footer_left__title no-margin">Мы в соцсетях</h4>

                    <div class="footer_left__social">
                        <a href="#">
                            <svg class="footer_left__social-icon-vk">
                                <use href="/assets/icons/icons.svg#vk"></use>
                            </svg>
                        </a>
                        <a href="#">
                            <svg class="footer_left__social-icon-youtube">
                                <use href="/assets/icons/icons.svg#youtube"></use> 
                            </svg>
                        </a>

                        <a href="#">
                            <svg class="footer_left__social-icon-instagram" viewBox="0 0 24 24">
                                    <g clip-path="url(#clip0_208_59)">
                                        <path d="M16.5 0H7.5C5.51088 0 3.60322 0.790176 2.1967 2.1967C0.790176 3.60322 0 5.51088 0 7.5L0 16.5C0 18.4891 0.790176 20.3968 2.1967 21.8033C3.60322 23.2098 5.51088 24 7.5 24H16.5C18.4891 24 20.3968 23.2098 21.8033 21.8033C23.2098 20.3968 24 18.4891 24 16.5V7.5C24 5.51088 23.2098 3.60322 21.8033 2.1967C20.3968 0.790176 18.4891 0 16.5 0ZM21.75 16.5C21.75 19.395 19.395 21.75 16.5 21.75H7.5C4.605 21.75 2.25 19.395 2.25 16.5V7.5C2.25 4.605 4.605 2.25 7.5 2.25H16.5C19.395 2.25 21.75 4.605 21.75 7.5V16.5Z" fill="url(#paint0_linear_208_59)"/>
                                        <path d="M12 6C10.4087 6 8.88258 6.63214 7.75736 7.75736C6.63214 8.88258 6 10.4087 6 12C6 13.5913 6.63214 15.1174 7.75736 16.2426C8.88258 17.3679 10.4087 18 12 18C13.5913 18 15.1174 17.3679 16.2426 16.2426C17.3679 15.1174 18 13.5913 18 12C18 10.4087 17.3679 8.88258 16.2426 7.75736C15.1174 6.63214 13.5913 6 12 6ZM12 15.75C11.0058 15.7488 10.0527 15.3533 9.34966 14.6503C8.64666 13.9473 8.25119 12.9942 8.25 12C8.25 9.9315 9.933 8.25 12 8.25C14.067 8.25 15.75 9.9315 15.75 12C15.75 14.067 14.067 15.75 12 15.75Z" fill="url(#paint1_linear_208_59)"/>
                                        <path d="M18.4499 6.34949C18.8914 6.34949 19.2494 5.99154 19.2494 5.54999C19.2494 5.10844 18.8914 4.75049 18.4499 4.75049C18.0083 4.75049 17.6504 5.10844 17.6504 5.54999C17.6504 5.99154 18.0083 6.34949 18.4499 6.34949Z" fill="url(#paint2_linear_208_59)"/>
                                    </g>
                                    <defs>
                                    <linearGradient id="paint0_linear_208_59" x1="2.196" y1="21.804" x2="21.804" y2="2.196" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFC107"/>
                                        <stop offset="0.507" stop-color="#F44336"/>
                                        <stop offset="0.99" stop-color="#9C27B0"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_208_59" x1="7.758" y1="16.242" x2="16.242" y2="7.758" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFC107"/>
                                        <stop offset="0.507" stop-color="#F44336"/>
                                        <stop offset="0.99" stop-color="#9C27B0"/>
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_208_59" x1="17.8844" y1="6.11549" x2="19.0154" y2="4.98449" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFC107"/>
                                        <stop offset="0.507" stop-color="#F44336"/>
                                        <stop offset="0.99" stop-color="#9C27B0"/>
                                    </linearGradient>
                                    <clipPath id="clip0_208_59">
                                    <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                    </defs>
                            </svg>
                        </a>
                        <a href="#">
                            <svg class="footer_left__social-icon-odnoklassniki">
                                <use href="/assets/icons/icons.svg#odnoklassniki"></use> 
                            </svg>
                        </a>
                        
                    </div>

                    <p class="footer_left__copyright">© 2023 Центр адаптации и социального развития. Все права защищены</p>
                </div>
                <!-- *** КОНЕЦ ЛЕВАЯ КОЛОНКА ФУТЕР *** -->
                <!-- ЦЕНТРАЛЬНАЯ КОЛОНКА ФУТЕР -->
                <nav class="footer__center footer_center">
                    <h4 class="footer_left__title no-margin">
                        Разделы сайта
                    </h4>
                    <ul class="footer_center__list eliminate_list">
                        <li><a href="#" class="eliminate-link footer_center__link">Главная</a></li>
                        <li><a href="#" class="eliminate-link footer_center__link">Не главная</a></li>
                        <li><a href="#" class="eliminate-link footer_center__link">Еще одна страница</a></li>
                    </ul>
                </nav>
                <!-- *** КОНЕЦ ЦЕНТРАЛЬНАЯ КОЛОНКА ФУТЕР *** -->
                <!-- ПРАВАЯ КОЛОНКА ФУТЕР -->
                <div class="footer__right">
                </div>
                <!-- *** КОНЕЦ ПРАВАЯ КОЛОНКА ФУТЕР *** -->
            </div>
        </div>
    </footer>
    <?php
    wp_footer();
    get_footer();
    
    ?>
  </body>
</html>