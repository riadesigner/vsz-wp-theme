<?php

// function tuman_setup() {	
// 	add_theme_support( 'automatic-feed-links' );		
// 	add_theme_support( 'title-tag' );
// }
// add_action( 'after_setup_theme', 'tuman_setup' );

// Code for themes
add_action( 'after_switch_theme', 'flush_rewrite_rules' );

/* AUTHORS ARTICLE TYPE */  
// function tuman_authors_article_type() {        
//     $params = array(
//         'labels'              => array(
// 	        'name'                => __('Авторские статьи', 'author-article'),
// 	        'singular_name'       => __('Авторскую статью', 'author-article'),
//     		),                
//         'supports'            => array( 
//         		'title', 'editor', 'excerpt', 
//         		'author', 'thumbnail', 
//         		'revisions', 'custom-fields',),        
//         'taxonomies'          => array( '' ),
//         'hierarchical'        => false,
//         'public'              => true,
//         'query_var'						=> 'authors_article',
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'show_in_nav_menus'   => true,
//         'show_in_admin_bar'   => true,
//         'menu_position'       => 5,
//         'can_export'          => true,
//         'has_archive'         => true,
//         'exclude_from_search' => false,
//         'publicly_queryable'  => true,
//         'capability_type'     => 'post',
//         'show_in_rest' => true,
//         'rewrite'     => array( 'slug' => 'authors-article' , 'with_front' => false),
//     );
//     register_post_type( 'authors_article', $params );
// }
// add_action('init', 'tuman_authors_article_type');

/* EVENT ARTICLE TYPE */  
// function tuman_event_article_type() {        
//     $params = array(
//         'labels'              => array(
// 	        'name'                => __('События и мероприятия', 'event-article'),
// 	        'singular_name'       => __('Событие и мероприятие', 'event-article'),
//     		),                
//         'supports'            => array( 
//         		'title', 'editor', 'excerpt', 
//         		'author', 'thumbnail', 
//         		'revisions', 'custom-fields',),        
//         'taxonomies'          => array( '' ),
//         'hierarchical'        => false,
//         'public'              => true,
//         'query_var'						=> 'event_article',
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'show_in_nav_menus'   => true,
//         'show_in_admin_bar'   => true,
//         'menu_position'       => 5,
//         'can_export'          => true,
//         'has_archive'         => true,
//         'exclude_from_search' => false,
//         'publicly_queryable'  => true,
//         'capability_type'     => 'post',
//         'show_in_rest' => true,
//         'rewrite'     => array( 'slug' => 'all-events' , 'with_front' => false),
//     );
//     register_post_type( 'event_article', $params );
// }
// add_action('init', 'tuman_event_article_type');

/* ROUTE ARTICLE TYPE */  
// function tuman_route_article_type() {        
//     $params = array(
//         'labels'              => array(
// 	        'name'                => __('Маршруты', 'route-article'),
// 	        'singular_name'       => __('Маршрут', 'route-article'),
//     		),                
//         'supports'            => array( 
//         		'title', 'editor', 'excerpt', 
//         		'author', 'thumbnail', 
//         		'revisions', 'custom-fields',),        
//         'taxonomies'          => array( '' ),
//         'hierarchical'        => false,
//         'public'              => true,
//         'query_var'						=> 'route_article',
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'show_in_nav_menus'   => true,
//         'show_in_admin_bar'   => true,
//         'menu_position'       => 5,
//         'can_export'          => true,
//         'has_archive'         => true,
//         'exclude_from_search' => false,
//         'publicly_queryable'  => true,
//         'capability_type'     => 'post',
//         'show_in_rest' => true,
//         'rewrite'     => array( 'slug' => 'all-routes' , 'with_front' => false),
//     );
//     register_post_type( 'route_article', $params );
// }
// add_action('init', 'tuman_route_article_type');


/* HISTORY ARTICLE TYPE */  
// function tuman_history_article_type() {        
//   $params = array(
//       'labels'              => array(
//         'name'                => __('Страницы истории', 'history-article'),
//         'singular_name'       => __('Страница истории', 'history-article'),
//       ),                
//       'supports'            => array( 
//           'title', 'editor', 'excerpt', 
//           'author', 'thumbnail', 
//           'revisions', 'custom-fields',),        
//       'taxonomies'          => array( '' ),
//       'hierarchical'        => false,
//       'public'              => true,
//       'query_var'						=> 'history_article',
//       'show_ui'             => true,
//       'show_in_menu'        => true,
//       'show_in_nav_menus'   => true,
//       'show_in_admin_bar'   => true,
//       'menu_position'       => 5,
//       'can_export'          => true,
//       'has_archive'         => true,
//       'exclude_from_search' => false,
//       'publicly_queryable'  => true,
//       'capability_type'     => 'post',
//       'show_in_rest' => true,
//       'rewrite'     => array( 'slug' => 'all-histories' , 'with_front' => false),
//   );
//   register_post_type( 'history_article', $params );
// }
// add_action('init', 'tuman_history_article_type');

/* SPEECH ARTICLE TYPE */  
// function tuman_speech_article_type() {        
//   $params = array(
//       'labels'              => array(
//         'name'                => __('Прямая речь', 'speech-article'),
//         'singular_name'       => __('Прямую речь', 'speech-article'),
//       ),                
//       'supports'            => array( 
//           'title', 
//           // 'editor', 
//           // 'excerpt', 
//           // 'author', 'thumbnail', 
//           'revisions', 'custom-fields',),        
//       'taxonomies'          => array( '' ),
//       'hierarchical'        => false,
//       'public'              => true,
//       'query_var'						=> 'speech_article',
//       'show_ui'             => true,
//       'show_in_menu'        => true,
//       'show_in_nav_menus'   => true,
//       'show_in_admin_bar'   => true,
//       'menu_position'       => 5,
//       'can_export'          => true,
//       'has_archive'         => true,
//       'exclude_from_search' => false,
//       'publicly_queryable'  => true,
//       'capability_type'     => 'post',
//       'show_in_rest' => true,
//       'rewrite'     => array( 'slug' => 'all-speeches' , 'with_front' => false),
//   );
//   register_post_type( 'speech_article', $params );
// }
// add_action('init', 'tuman_speech_article_type');


function tuman_replace_on_sitemap( $content ) {
  if( is_page( 245 ) ){
     $text_strings_to_replace = array( 'Pages');
     $content = str_replace( $text_strings_to_replace, 'Страницы', $content );    
  }
     return $content;
}
add_filter('the_content', 'tuman_replace_on_sitemap');

// SUPPORT FOR THE _SHUFFLE_AND_PICK WP_QUERY ARGUMENT
add_filter( 'the_posts', function( $posts, \WP_Query $query )
{
    if( $pick = $query->get( '_shuffle_and_pick' ) )
    {
        shuffle( $posts );
        $posts = array_slice( $posts, 0, (int) $pick );
    }
    return $posts;
}, 10, 2 );


/* CATEGORY FOR PAGES */
// function enabled_category_for_pages(){
	// register_taxonomy_for_object_type( 'category', 'page');
  // register_taxonomy_for_object_type( 'post_tag', 'page');
// }
// add_action( 'init', 'enabled_category_for_pages' );

function ria__get_archive_post_type() {  
  return is_archive() ? get_queried_object()->labels->name : "";
}

function ria__get_the_category_links($postID=""){
	$msg = "";
  if(!empty($postID)){
    $cats = get_the_category($postID);
  }else{
    $cats = get_the_category();
  }	
	if(count($cats)){
		foreach($cats as $cat){
			$link = get_category_link( $cat->cat_ID );        
			$msg.= " <a href='".$link."'>".$cat->name."</a> /";
		}
	}
	return $msg;
}

function my_pagenavi() {
	global $wp_query;

	$big = 999999999; // уникальное число для замены

	$args = array(
		'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
		'format'  => '',
		'current' => max( 1, get_query_var('paged') ),
		'total'   => $wp_query->max_num_pages,
	);

	$result = paginate_links( $args );

	// удаляем добавку к пагинации для первой страницы
	// $result = preg_replace( '~/page/1/?([\'"])~', '', $result );

	echo  "<div class='pagination'>". $result . "</div>";
}


/* SITE MENU */
function register_my_menus() {
  register_nav_menus(
    array(
      'mobile-menu' => "Мобильное меню",      
      'footer-menu' => "Меню в подвале",
    )
  );
}
add_action( 'init', 'register_my_menus' );

/* LOAD SCRIPTS AND STYLES */
function load_scripts() {
	wp_enqueue_style( 'site-style', get_stylesheet_uri()."?v=".time() );
	// wp_enqueue_script( 'site-jquery', get_theme_file_uri( '/assets/js/jquery-3.3.1.min.js' ), array('jquery'));
	// wp_enqueue_script( 'swipe', get_theme_file_uri( '/assets/js/swp2.js' ), array('jquery'));	
	// wp_enqueue_script( 'site', get_theme_file_uri( '/assets/js/site.js'."?v=".time() ), array('jquery'));

	// global $wp;
	// $current_slug = $wp->request;	
	// if($current_slug=='contacts'){
	// 	wp_enqueue_script( 'yandex-map-api', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=6d22f8d9-de0e-4666-b78f-92e200209f64');	    		
	// }

}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

/* THUMBNAILS */
add_theme_support( 'post-thumbnails' );

// add_image_size( 'feature-image', 960, 500, true ); 
// add_image_size( 'medium-thumb', 300, 156, true );
// add_image_size( 'small-thumb', 600, 600, true );

add_filter('jpeg_quality', function($arg){return 95;});

function RDS_excerpt_more_change( $more ) {  return '...';}
add_filter( 'excerpt_more', 'RDS_excerpt_more_change' );

function RDS_custom_excerpt_length( $length ) { return 35;}
add_filter( 'excerpt_length', 'RDS_custom_excerpt_length', 999 );

function favicon4admin() {
	echo '<link rel="shortcut icon" type="image/png" href="'. get_theme_file_uri('/i/favicon.png') .'" />';
}
add_action( 'admin_head', 'favicon4admin' );

function ria_get_child_pages(){
	global $post; 
  $string = "";
	if ( is_page() && $post->post_parent ){    
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
	}else{
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
	}
	if ( $childpages ) {
	    $string = '<ul class="wpb_page_list menu">' . $childpages . '</ul>';
	}
	return $string;  
}

/* SHOW CHILD PAGES [ria_childpages] */
function ria_list_child_pages() {  return ria_get_child_pages(); }
add_shortcode('ria_childpages', 'ria_list_child_pages');


/* SIBLINGS PAGE NAVIGATION */
function the_siblings($current_id="") {
    global $post;    
    if(!$current_id){
				
				$p = $post->post_parent;
				$siblings = get_pages('child_of='.$p.'&parent='.$p);
		    foreach ($siblings as $key=>$sibling){
						if ($post->ID == $sibling->ID){ $index = $key; }        
		    }

    }else{
				
				$p = wp_get_post_parent_id($current_id);
				$siblings = get_pages('child_of='.$p.'&parent='.$p);
		    foreach ($siblings as $key=>$sibling){
						if ($current_id == $sibling->ID){ $index = $key; }        
		    }		
    }

    $before = isset($siblings[$index-1])?$siblings[$index-1]:"";
    $next = isset($siblings[$index+1])?$siblings[$index+1]:"";
    if($before) echo "<a rel='prev' href='".get_permalink($before->ID)."'> ".get_the_title($before->ID)."</a>";
		if($next) echo "<a rel='next' href='".get_permalink($next->ID)."'> ".get_the_title($next->ID)."</a>";
}

/* EDIT PAGE & POST LINK */
function RDS_edit_link(){    	
	if(current_user_can('administrator')){
			if(is_page() || is_single())
			echo "<div class='post-edit-link'><a target='_blank' href='".get_edit_post_link()."'>редактировать</a></div>"; 
	}				
}
add_action( 'wp_footer', 'RDS_edit_link' );


// add_filter('next_posts_link_attributes', 'cyber_posts_link_next');
// add_filter('previous_posts_link_attributes', 'cyber_posts_link_prev');
// function cyber_posts_link_prev() {  return 'class="std-btn-black-small arrow-prev"'; }
// function cyber_posts_link_next() {  return 'class="std-btn-black-small arrow-next"'; }



?>