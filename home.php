<?php
    get_header();
?>
        <!-- МЕЛКИЙ СЛАЙДЕР -->
        <div class="dark-background">
            <div class="container">
                <?php echo get_template_part('template-parts/components/slider', 'archive'); ?>
            </div>
        </div>

        <!-- ЛЕВАЯ НАВИГАЦИЯ и ОСНОВНОЕ ПОЛЕ -->
        <!-- *** КОНЕЦ ЛЕВАЯ НАВИГА и ОСНОВНОЕ ПОЛЕ *** -->
        <div class="main">
            <div class="container padding_on_left_right">
                <?php echo get_template_part('template-parts/components/breadcrumbs'); ?>
                <!--<nav class="breadcumbs">
                    <ol class="breadcumbs__list">
                        <li class="breadcumbs__list-item"><a href="#" class="breadcumbs__link">Главная</a></li>
                        <li class="breadcumbs__list-item"><a href="#" class="breadcumbs__link current">Название раздела</a></li>
                    </ol>
                </nav>-->

                <h1>Название раздела</h1>

                <div class="main_conrainer">
                    <main>
                        <ul class="news_category_list">
                            <li class="news_card">
                                <div class="news_card__img-wrapper">
                                    <img src="/assets/images/test2.jpeg" class="news_card__img">
                                </div>
                                <div class="news_card__content">
                                    <div>
                                        <span class="news_card__date">06.07.2023г.</span>
                                    </div>
                                    <a href="#" class="news_card__title eliminate-link">Музыкально-спортивный праздник</a>
                                    <p class="news_card__description">В преддверии праздника "Дня семьи, любви и верности", в нашем центре прошел музыкально-спортивный праздник.</p>
                                    <a href="#" class="eliminate-link news_card__link">Читать далее</a>
                                </div>
                            </li>
                            <li class="news_card">
                                <div class="news_card__img-wrapper">
                                    <img src="/assets/images/test2.jpeg" class="news_card__img">
                                </div>
                                <div class="news_card__content">
                                    <div>
                                        <span class="news_card__date">06.07.2023г.</span>
                                    </div>
                                    <a href="#" class="news_card__title eliminate-link">Музыкально-спортивный праздник</a>
                                    <p class="news_card__description">В преддверии праздника "Дня семьи, любви и верности", в нашем центре прошел музыкально-спортивный праздник.</p>
                                    <a href="#" class="eliminate-link news_card__link">Читать далее</a>
                                </div>
                            </li>
                            <li class="news_card">
                                <div class="news_card__img-wrapper">
                                    <img src="/assets/images/test2.jpeg" class="news_card__img">
                                </div>
                                <div class="news_card__content">
                                    <div>
                                        <span class="news_card__date">06.07.2023г.</span>
                                    </div>
                                    <a href="#" class="news_card__title eliminate-link">Музыкально-спортивный праздник</a>
                                    <p class="news_card__description">В преддверии праздника "Дня семьи, любви и верности", в нашем центре прошел музыкально-спортивный праздник.</p>
                                    <a href="#" class="eliminate-link news_card__link">Читать далее</a>
                                </div>
                            </li>
                            <li class="news_card">
                                <div class="news_card__img-wrapper">
                                    <img src="/assets/images/test2.jpeg" class="news_card__img">
                                </div>
                                <div class="news_card__content">
                                    <div>
                                        <span class="news_card__date">06.07.2023г.</span>
                                    </div>
                                    <a href="#" class="news_card__title eliminate-link">Музыкально-спортивный праздник</a>
                                    <p class="news_card__description">В преддверии праздника "Дня семьи, любви и верности", в нашем центре прошел музыкально-спортивный праздник.</p>
                                    <a href="#" class="eliminate-link news_card__link">Читать далее</a>
                                </div>
                            </li>
                            <li class="news_card">
                                <div class="news_card__img-wrapper">
                                    <img src="/assets/images/test2.jpeg" class="news_card__img">
                                </div>
                                <div class="news_card__content">
                                    <div>
                                        <span class="news_card__date">06.07.2023г.</span>
                                    </div>
                                    <a href="#" class="news_card__title eliminate-link">Музыкально-спортивный праздник</a>
                                    <p class="news_card__description">В преддверии праздника "Дня семьи, любви и верности", в нашем центре прошел музыкально-спортивный праздник.</p>
                                    <a href="#" class="eliminate-link news_card__link">Читать далее</a>
                                </div>
                            </li>
                            <li class="news_card">
                                <div class="news_card__img-wrapper">
                                    <img src="/assets/images/test2.jpeg" class="news_card__img">
                                </div>
                                <div class="news_card__content">
                                    <div>
                                        <span class="news_card__date">06.07.2023г.</span>
                                    </div>
                                    <a href="#" class="news_card__title eliminate-link">Музыкально-спортивный праздник</a>
                                    <p class="news_card__description">В преддверии праздника "Дня семьи, любви и верности", в нашем центре прошел музыкально-спортивный праздник.</p>
                                    <a href="#" class="eliminate-link news_card__link">Читать далее</a>
                                </div>
                            </li>
                            <li class="news_card">
                                <div class="news_card__img-wrapper">
                                    <img src="/assets/images/test2.jpeg" class="news_card__img">
                                </div>
                                <div class="news_card__content">
                                    <div>
                                        <span class="news_card__date">06.07.2023г.</span>
                                    </div>
                                    <a href="#" class="news_card__title eliminate-link">Музыкально-спортивный праздник</a>
                                    <p class="news_card__description">В преддверии праздника "Дня семьи, любви и верности", в нашем центре прошел музыкально-спортивный праздник.</p>
                                    <a href="#" class="eliminate-link news_card__link">Читать далее</a>
                                </div>
                            </li>
                        <ul>
                    </main>
                </div>
            </div>
        </div>

    <!-- ПОЛЕЗНЫЕ ССЫЛКИ -->
    <div class="dark-background">
        <div class="container">
            <section class="useful_links useful_links_archive">
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

    <?php
    get_footer();
    echo get_template_part('template-parts/blocks/gallery/gallery', 'full_window');
    wp_footer();
    
    ?>
  </body>
</html>
