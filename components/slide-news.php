<?php 
    $slide_image = get_field('vsz_slide_news_image',11);
?>  

<div id="news-slide" class="slider__item">
    <div class="index-page-slider-info">
        <div class="container index-page-slider-info__wrapper">
            <div class="index-page-slider-info__title">
                <div class="index-page-slider-info__title-number">03</div>
                <div class="index-page-slider-info__title-text">Новости</div>
            </div>
            <div class="index-page-slider-info__description">
                <?php echo get_field('vsz_slide_news_description',11);?>
            </div>
            <div class="index-page-slider-info__buttons">
                <a class="index-page-slider-info__button" href="#">подробнее</a>
            </div>
        </div>
    </div>
    <div class="index-page-slider__picture">
        <div class="index-page-slider-image index-page-slider__small-image"
                style="--background: url('<?=$slide_image;?>')"></div>
        <div class="index-page-slider-image index-page-slider__delimiter" style="--background: url('<?=$slide_image;?>')"></div>
        <div class="index-page-slider-image index-page-slider__medium-image"
                style="--background: url('<?=$slide_image;?>')"></div>
        <div class="index-page-slider-image index-page-slider__main-image"
                style="--background: url('<?=$slide_image;?>')"></div>
    </div>
</div>