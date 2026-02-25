<nav class="menu">

    <?php 
        wp_nav_menu( array( 
            'theme_location' => 'mobile-menu', 
            'menu_class' =>'menu-mobile',
            'container'      => false,
            )  ); 
    ?> 

</nav>