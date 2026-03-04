<?php
 $SITE_TITLE = get_the_title()." / ";
?>
<?php get_header(); ?>

<div id="loader"></div>

<div id="news-item-page">
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
        <div class="content-block">
            <div class="news-item">
                <div class="news-item__title-block hide-on-desktop">
                    <h3 class="news-item__title"><?=the_title();?></h3>
                    <span class="news-item__date">05.06.2025</span>
                </div>
                <div class="news-item__info">
                    <div class="news-item__title-block hide-on-mobile">
                        <h3 class="news-item__title"><?=the_title();?></h3>
                        <span class="news-item__date">05.06.2025</span>
                    </div>
                    <?php while ( have_posts() ) : the_post();  ?>
                    <article>
                        <?=the_content();?>
                    </article>
                    <?php endwhile; ?>
                </div>
                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/news-item-main.jpg" alt="" class="news-item__img">
            </div>

            <!--  ADDITIONAL IMAGES FOR POSTS -->
            <?php get_template_part( 'components/gallery-news-item' ); ?>
            <!--  / ADDITIONAL IMAGES FOR POSTS -->

        </div>
    </main>

    <?php get_template_part( 'components/page-footer' ); ?> 

</div>

<?php get_footer();?>