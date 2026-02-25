<?php 
    $vsz_phone_sales = get_field('vsz_phone_sales',11);
    $vsz_whatsapp = get_field('vsz_whatsapp',11);    
    $work_hours = get_field('vsz_work_hours',11);    
?>

<footer>
    <div class="container">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() ;?>/assets/icons/logo-brown.svg" alt="logo">
            <span>ООО «Владстройзаказчик»</span>
        </div>
        <div class="footer-wrapper">
            <nav>
            <?php 
                wp_nav_menu( array( 
                    'theme_location' => 'footer-menu', 
                    'menu_class' =>'menu-podval',
                    'container'      => false,
                    )  ); 
            ?>    
            </nav>  
            
            <div class="contacts">
                <span class="contacts__main-title">
                    Контакты:
                </span>
                <div class="contacts__wrapper">
                    <div class="contacts__item">
                        <div class="contacts__title">Отдел продаж:</div>
                        <div class="contacts__description"><a href="tel:<?=$vsz_phone_sales;?>"><?=$vsz_phone_sales;?></a></div>
                    </div>

                    <div class="contacts__item">
                        <div class="contacts__title">Офис</div>
                        <div class="contacts__description">г. Владивосток, ул. Металлистов, 5а</div>
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__title">WhatsApp</div>
                        <div class="contacts__description"><a href="#"><?=$vsz_whatsapp;?></a>
                        </div>
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__title">Часы</div>
                        <div class="contacts__description"><?=$work_hours;?></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>