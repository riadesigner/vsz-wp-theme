<?php
 $SITE_TITLE = get_the_title()." / ";
?>
<?php get_header(); ?>

<div id="loader"></div>

<div id="about-page">
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

                <?php while ( have_posts() ) : the_post();  ?>
                <article>
                    <?=the_content();?>
                </article>                
                <?php endwhile; ?>    

        </div>
    </main>

    <?php get_template_part( 'components/page-footer' ); ?> 

</div>

<?php get_footer();?>