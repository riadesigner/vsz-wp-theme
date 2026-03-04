<?php
/**
 * Template Name: Page our objects
 *  
 */
 $SITE_TITLE = get_the_title()." / ";
?>
<?php get_header(); ?>

<div id="loader"></div>

<div id="objects-page">
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
        <div class="title-block">
            <h1><?=the_title();?></h1>
            <span class="page-desc">                 
                 <?php echo get_field('vsz_page_description',GET_THE_ID());?>
            </span>
        </div>
        <div class="content-block">

                <div class="objects">
                    <h2>Мы строим</h2>
                    <div class="objects__items">
                        <a href="/pages/object.php" class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-1.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title ">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                        </a>
                        <a href="/pages/object.php" class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-2.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title ">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                        </a>
                        <a href="/pages/object.php" class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-3.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title ">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                        </a>
                        <a href="/pages/object.php" class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-1.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title ">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                        </a>
                        <a href="/pages/object.php" class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-3.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title ">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                        </a>
                        <a href="/pages/object.php" class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-2.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title ">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                        </a>
                    </div>
                </div>         
                <div class="objects">
                    <h2>Мы построили</h2>
                    <div class="objects__items">
                        <div class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-1.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title ">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                            <span class="objects__item-date ">Ввод в эксплуатацию: 15.03.2024</span>
                        </div>
                        <div class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-2.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title ">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                            <span class="objects__item-date ">Ввод в эксплуатацию: 15.03.2024</span>
                        </div>
                        <div class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-3.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title ">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                            <span class="objects__item-date ">Ввод в эксплуатацию: 15.03.2024</span>
                        </div>
                        <div class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-1.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title ">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                            <span class="objects__item-date ">Ввод в эксплуатацию: 15.03.2024</span>
                        </div>
                        <div class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-3.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title ">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                            <span class="objects__item-date ">Ввод в эксплуатацию: 15.03.2024</span>
                        </div>
                        <div class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-3.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title ">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                            <span class="objects__item-date ">Ввод в эксплуатацию: 15.03.2024</span>
                        </div>
                        <div class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-3.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title ">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                            <span class="objects__item-date ">Ввод в эксплуатацию: 15.03.2024</span>
                        </div>
                        <div class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-3.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title ">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                            <span class="objects__item-date ">Ввод в эксплуатацию: 15.03.2024</span>
                        </div>
                        <div class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-3.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title hide-on-desktop">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                            <span class="objects__item-date ">Ввод в эксплуатацию: 15.03.2024</span>
                        </div>
                        <div class="objects__item">
                            <div class="objects__item-image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/img-2.jpg" alt="">
                            </div>
                            <h2 class="objects__item-title hide-on-desktop">ЖК «Высоцкий»</h2>
                            <span class="objects__item-address ">г. Владивосток,<br> ул. Володарского 38</span>
                            <span class="objects__item-date ">Ввод в эксплуатацию: 15.03.2024</span>
                        </div>
                    </div>
                </div>       

        </div>
    </main>

    <?php get_template_part( 'components/page-footer' ); ?> 

</div>

<?php get_footer();?>