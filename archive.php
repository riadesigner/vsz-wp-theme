<?php
 $SITE_TITLE = get_the_title()." / ";
?>
<?php get_header(); ?>
<?php $CURRENT_ID = get_the_ID(); ?>
<div id="loader"></div>

<div id="news-page">
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
    <main>
        <div class="container">
            <div class="title-block">
                <h1>Новости</h1>
            </div>
            <div class="content-block news">
                <div class="news__items">

                    <?php  
                        if ( have_posts() ) : 
                        while ( have_posts() ) : the_post(); 
                    ?>   

                    <?php
                    if(has_post_thumbnail()){                        
                        $thumb_url = get_the_post_thumbnail_url($post->ID,"medium_large");                    
                        $thumb_class = "has-image";
                    }else{
                        $thumb_url = "#";                    
                        $thumb_class="no-photo";
                    }
                    ?> 
                    <div class="news__item <?=$thumb_class;?>">
                        <?php if(has_post_thumbnail()):?>
                        <img src="<?=$thumb_url;?>" alt="" class="news__img">
                        <?php endif;?>
                        <div class="news__info">
                            <h3 class="news__title"><?=the_title();?></h3>
                            <div class="news__date"><?= get_the_date('j M Y');?> </div>                            
                            <a href="./news-item.php" class="news__btn">К новости</a></div>
                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>                    
                </div>
            </div>
        </div>

    </main>

</div>    

<?php get_footer();?>