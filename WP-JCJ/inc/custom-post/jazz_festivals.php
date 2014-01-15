<?php

// Register Custom Post Type
function jazz_festival() {

	$labels = array(
		'name'                => _x( 'Jazz Festivals', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Jazz Festival', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Jazz Festivals', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Jazz Festivals:', 'text_domain' ),
		'all_items'           => __( 'All Jazz Festivals', 'text_domain' ),
		'view_item'           => __( 'View Jazz Festivals', 'text_domain' ),
		'add_new_item'        => __( 'Add New Jazz Festivals', 'text_domain' ),
		'add_new'             => __( 'New Jazz Festival', 'text_domain' ),
		'edit_item'           => __( 'Edit Jazz Festivals', 'text_domain' ),
		'update_item'         => __( 'Update Jazz Festival', 'text_domain' ),
		'search_items'        => __( 'Search Jazz Festival', 'text_domain' ),
		'not_found'           => __( 'No jazz festivals found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No jazz festivals found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'jazz festival', 'text_domain' ),
		'description'         => __( 'Jazz Festivals around the world', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'post-formats', ),
		'taxonomies'          => array( 'region', 'country', 'city', 'months', 'musicians', 'post_tag'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '/images/16-logo.png',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'query_var'           => 'jazz festival',
		'capability_type'     => 'page',
	);
	register_post_type( 'jazz_festival', $args );

}

// Hook into the 'init' action
add_action( 'init', 'jazz_festival', 0 );
?>