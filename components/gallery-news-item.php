<?php

    //  (plugin) B7 Multiple Featured Images for Post
    $image_ids = b7mufeimgetmultiplefeatured_image_ids( get_the_ID() );                    

?>


<?php           
    if(count($image_ids)):?>                        
    <div class="gallery slider hide-on-mobile">
        <?php
            foreach ( $image_ids as $image_id ) {
                $image_id = intval( $image_id ); // Ensure integer
                if ( $image_id ) :?>                                    
                        <div class="slider-item">
                            <a href="<?= wp_get_attachment_image_url( $image_id, 'medium' );?>">
                                <img src="<?= wp_get_attachment_image_url( $image_id, 'medium' );?>">
                            </a>
                        </div>
                <?php
                endif; 
            }
        ?>
    </div>
<?php endif; ?>

<?php           
    if(count($image_ids)):?>                        
    <div class="gallery slider hide-on-desktop">
        <div class="slider-item">
        <?php
            $image_counter = 0;
            foreach ( $image_ids as $image_id ) {
                $image_id = intval( $image_id ); // Ensure integer
                if ( $image_id ) :?>                                    
                        
                            <?php                                
                                if($image_counter<4):                                    
                                    $image_counter++;
                            ?>
                            <a href="<?= wp_get_attachment_image_url( $image_id, 'medium' );?>">
                                <img src="<?= wp_get_attachment_image_url( $image_id, 'medium' );?>">
                            </a>
                            <?php else: 
                                $image_counter = 0;
                                ?>
                            </div><div class="slider-item">    
                            <a href="<?= wp_get_attachment_image_url( $image_id, 'medium' );?>">
                                <img src="<?= wp_get_attachment_image_url( $image_id, 'medium' );?>">
                            </a>
                            <?php endif; ?>
                        
                <?php
                endif; 
            }
        ?>
        </div>
    </div>
<?php endif; ?>     

<?php 
if ( isset($image_ids) && is_array($image_ids) && count($image_ids) > 4 ): 
?>
    <div class="arrows">
        <a href="#" class="arrow arrow-left">Назад</a>
        <a href="#" class="arrow arrow-right">Вперед</a>
    </div>
<?php 
endif; 
?>