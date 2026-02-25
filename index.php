<?php get_header(); ?>

<div id="loader"></div>

<div id="index-page">
    <header>
        <div class="container">
            <div class="header-wrapper">
                <a href="/" class="logo">
                    <img src="<?php echo get_template_directory_uri() ;?>/assets/icons/logo-white.svg" alt="logo">
                </a>
                <div class="header-contacts">
                    <div class="header-contacts__item">
                        <div class="header-contacts-item__title">Отдел продаж</div>
                        <div class="header-contacts-item__phone"><?php echo get_field('vsz_phone_sales',11);?></div>
                    </div>
                    <div class="header-contacts__item">
                        <div class="header-contacts-item__title">WhatsApp</div>
                        <div class="header-contacts-item__phone"><?php echo get_field('vsz_whatsapp',11);?></div>
                    </div>
                </div>
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="menu-btn" href="#">                    
                    <span class="menu-icon"></span>
                </label>
                <?php get_template_part( 'components/menu' ); ?> 
            </div>
        </div>
    </header>
    <div class="index-page-slider">
        <?php get_template_part( 'components/slide-about-company' ); ?> 
        <?php get_template_part( 'components/slide-our-objects' ); ?> 
        <?php get_template_part( 'components/slide-news' ); ?> 
    </div>
    <footer>
        <div class="container">
            <div class="copyright">
                2025, ГК Владстройзаказчик
            </div>
        </div>
    </footer>    
</div>

<?php get_footer();?>