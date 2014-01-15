<?php

// Register Custom Post Type
function jazz_clubs() {

	$labels = array(
		'name'                => _x( 'Jazz Clubs', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Jazz Club', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Jazz Clubs', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Jazz Clubs:', 'text_domain' ),
		'all_items'           => __( 'All Jazz Clubs', 'text_domain' ),
		'view_item'           => __( 'View Jazz Clubs', 'text_domain' ),
		'add_new_item'        => __( 'Add New Jazz Club', 'text_domain' ),
		'add_new'             => __( 'New Jazz Club', 'text_domain' ),
		'edit_item'           => __( 'Edit Jazz Club', 'text_domain' ),
		'update_item'         => __( 'Update Jazz Club', 'text_domain' ),
		'search_items'        => __( 'Search Jazz Club', 'text_domain' ),
		'not_found'           => __( 'No jazz club found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No jazz clubs found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'jazz club', 'text_domain' ),
		'description'         => __( 'Jazz Clubs around the world', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions','post-formats' ),
		'taxonomies'          => array( 'region', 'country', 'city', 'state', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '/images/16-logo.png', // 16px16
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'query_var'           => 'jazz clubs',
		'capability_type'     => 'page',
	);
	register_post_type( 'jazz_clubs', $args );

}

// Hook into the 'init' action
add_action( 'init', 'jazz_clubs', 0 );
?>