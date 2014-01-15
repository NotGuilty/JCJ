<?php
/*
1. inc/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
require_once('inc/admin.php');

/*cpt*/
require_once('inc/custom-post/jazz_clubs.php');
require_once('inc/custom-post/jazz_festivals.php');

/* Change Posts to News */
function edit_admin_menus() {  
    global $menu;  
      
    $menu[5][0] = 'News'; // Change Posts to News     
}  
add_action( 'admin_menu', 'edit_admin_menus' );

//************************//   
// custom types on home   //
//************************//

// Show posts of 'post', 'page', 'jazz clubs' and 'jazz festival' post types on home page
add_action( 'pre_get_posts', 'post_types' );

function post_types( $query ) {
	if ( is_home() && $query->is_main_query() || is_feed() )
		$query->set( 'post_type', array( 'post', 'jazz clubs', 'jazz festival' ) );
	return $query;
}

//*****************//   
//  Featured Post  //
//*****************//
	// Create a function to delete our transient when a featured post is saved
	function save_post_delete_featured_transient( $post_id ) {
	   if ( 'featured_venue' == get_post_type( $post_id ) )
	   	delete_transient( 'featured_venue' );
	}
	// Add the function to the save_post hook so it runs when posts are saved
	add_action( 'save_post', 'save_post_delete_featured_transient' );

//************************//   
//   Sidebar & Widgets    //
//************************//
// create widget areas: sidebar, footer

/*
function wpjcj_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Front Sidebar', 'wpforge' ),
		'id' => 'csidebar-1',
		'description' => __( 'Displays widgets in the blog area as well as pages.', 'wpforge' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	) );			
}
add_action( 'widgets_init', 'wpjcj_widgets_init' );
*/
/*
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
		'after_widget' => '</div></article>',
		'before_title' => '<h5>',
		'after_title' => '</h5>'
	));
}
$sidebars = array('Footer 1');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="large-3 columns widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h5>',
		'after_title' => '</h5>'
	));
}

$sidebars = array('Footer 2');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="large-3 columns widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h5>',
		'after_title' => '</h5>'
	));
}

$sidebars = array('Footer 3');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="large-3 columns widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h5>',
		'after_title' => '</h5>'
	));
}

$sidebars = array('Footer 4');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="large-3 columns widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h5>',
		'after_title' => '</h5>'
	));
}
*/
 
?>