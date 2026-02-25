<?php
    $SITE_TITLE = !empty($SITE_TITLE)?$SITE_TITLE:"Группа компаний ВЛАДСТРОЙЗАКАЗЧИК";
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= $SITE_TITLE; ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ;?>/assets/icons/favicon.png" type="image/png"> 
    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <script>
        var WWWBASE = '<?php echo site_url("/"); ?>';
    </script>

<?php wp_head(); ?>
</head>