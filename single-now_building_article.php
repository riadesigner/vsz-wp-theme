<?php
/**
 * Template Name: Page the object
 * Template Post Type: now_building_article, post, page
 *  
 */
 $SITE_TITLE = get_the_title()." / ";
?>
<?php get_header(); ?>

<div id="loader"></div>

<div id="object-page">
    <header>
        <div class="container">
            <div class="header-wrapper">
                <a href="/" class="logo">
                    <img src="<?php echo get_template_directory_uri() ;?>/assets/icons/logo-brown.svg" alt="logo">
                </a>
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="menu-btn" href="#">                    
                    <span class="menu-icon"></span>
                </label>
                <?php get_template_part( 'components/menu' ); ?> 
            </div>
        </div>
    </header>
    <main class="container">
        <div class="container">
            <div class="title-block">
                <a href="#" onclick="history.back()" class="history-back-link">Вернуться к<br>объектам</a>
            </div>
            <div class="content-block">
                <div class="main-block">
                    <h2 class="hide-on-desktop">ЖК «Высоцкий»</h2>
                    <img src="<?php echo get_template_directory_uri() ;?>/assets/images/object-main.jpg" alt="">
                    <div class="description">
                        <h2 class="hide-on-mobile">ЖК «Высоцкий»</h2>
                        <span class="info">
                        Проект элитного многоквартирного жилого дома в районе ул. Володарского, 38 в г. Владивостоке.
                    </span>
                    </div>
                </div>
                
                <?php get_template_part( 'components/object-slider' ); ?> 

                <div class="second-block">
                    <div class="text">
                        <p>Город, словно на ладони, бухту Золотой Рог, Золотой мост, мыс Эгершельд, огненные и малиновые
                            закаты над живописной линией горизонта видно со всех этажей ЖК «Высоцкий». </p>
                        <p class="hide-on-mobile">Панорамное остекление полностью раскрывает великолепие видов, а большие площади квартир
                            создают
                            безграничный простор для жизни. Каждая деталь здесь создана для того, чтобы вы чувствовали
                            себя
                            по-настоящему особенным.</p>
                        <p class="hide-on-mobile">Завершающим аккордом стали эксклюзивные террасы под открытым небом в квартирах на верхних
                            этажах,
                            которые каскадом спускаются к морю. ЖК «Высоцкий» — это место, где рождается мелодия вашей
                            красивой жизни.</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri() ;?>/assets/images/object-second.jpg" alt="">
                    <div class="text hide-on-desktop">
                        <p>Панорамное остекление полностью раскрывает великолепие видов, а большие площади квартир
                            создают
                            безграничный простор для жизни. Каждая деталь здесь создана для того, чтобы вы чувствовали
                            себя
                            по-настоящему особенным.</p>
                        <p>Завершающим аккордом стали эксклюзивные террасы под открытым небом в квартирах на верхних
                            этажах,
                            которые каскадом спускаются к морю. ЖК «Высоцкий» — это место, где рождается мелодия вашей
                            красивой жизни.</p>
                    </div>
                </div>
                <div class="achievements-block">
                    <div class="achievements">
                        <h3>Современное жилье для жизни в формате премиум</h3>
                        <div class="achievements__items">
                            <div class="achievements__item">
                                <span class="achievements__item-digit">
                                    15 135 м2
                                </span>
                                <span class="achievements__item-desc">
                                    Общая площадь
                                </span>
                            </div>
                            <div class="achievements__item">
                                <span class="achievements__item-digit">
                                    24
                                </span>
                                <span class="achievements__item-desc">
                                    Этажи
                                </span>
                            </div>
                            <div class="achievements__item">
                                <span class="achievements__item-digit">
                                    89
                                </span>
                                <span class="achievements__item-desc">
                                    Квартиры
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        <h6>Типы квартир:</h6>
                        <ul>
                            <li>Пять 2-комнатных от 50 до 69 м2</li>
                            <li>Восемь 3-комнатных 79 и 81 м2</li>
                            <li>Восемь 4-комнатных от 104 до 128 м2 (одна с террасой)</li>
                            <li>Две 5-комнатных 169 и 198 м2 (одна с террасой)</li>
                            <li>Один 6-комнатный пентхаус 282 м2 с террасой (на последнем этаже)</li>
                            <li>Подземный паркинг: 3 этажа, 86 машиномест.</li>
                            <li>Придомовая территория: детская площадка, площадка для отдыха взрослого населения,
                                спортивная
                                площадка
                            </li>
                            <li>Нежилые помещения на 1 этаже.</li>
                        </ul>
                    </div>
                </div>
                <div class="third-block">
                    <h3 class="hide-on-desktop">Локация для жизни в гармонии с городом</h3>
                    <img src="<?php echo get_template_directory_uri() ;?>/assets/images/object-third.jpg" alt="">
                    <div class="text">
                        <h3 class="hide-on-mobile">Локация для жизни в гармонии с городом</h3>
                        <p>Комплекс гармонично сочетает преимущества городской среды
                            и близость к природным ландшафтам. Рядом — основные магистрали, социальные объекты и зоны
                            отдыха. Убедитесь сами на карте, как всё необходимое находится в двух шагах от дома.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php get_template_part( 'components/page-footer' ); ?> 

</div>

<?php get_footer();?>