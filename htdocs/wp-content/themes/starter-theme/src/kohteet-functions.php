<?php
// Register Custom Post Type

function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Kohteet', 'Post Type General Name', 'starter-theme' ),
		'singular_name'         => _x( 'Post Type', 'Post Type Singular Name', 'starter-theme' ),
		'menu_name'             => __( 'Kohteet', 'starter-theme' ),
		'name_admin_bar'        => __( 'Post Type', 'starter-theme' ),
		'archives'              => __( 'Item Archives', 'starter-theme' ),
		'attributes'            => __( 'Item Attributes', 'starter-theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'starter-theme' ),
		'all_items'             => __( 'All Items', 'starter-theme' ),
		'add_new_item'          => __( 'Add New Item', 'starter-theme' ),
		'add_new'               => __( 'Add New', 'starter-theme' ),
		'new_item'              => __( 'New Item', 'starter-theme' ),
		'edit_item'             => __( 'Edit Item', 'starter-theme' ),
		'update_item'           => __( 'Update Item', 'starter-theme' ),
		'view_item'             => __( 'View Item', 'starter-theme' ),
		'view_items'            => __( 'View Items', 'starter-theme' ),
		'search_items'          => __( 'Search Item', 'starter-theme' ),
		'not_found'             => __( 'Not found', 'starter-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'starter-theme' ),
		'featured_image'        => __( 'Featured Image', 'starter-theme' ),
		'set_featured_image'    => __( 'Set featured image', 'starter-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'starter-theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'starter-theme' ),
		'insert_into_item'      => __( 'Insert into item', 'starter-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'starter-theme' ),
		'items_list'            => __( 'Items list', 'starter-theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'starter-theme' ),
		'filter_items_list'     => __( 'Filter items list', 'starter-theme' ),
	);
	$args = array(
		'label'                 => __( 'Post Type', 'starter-theme' ),
		'description'           => __( 'Kohteet', 'starter-theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite'               => array( 'slug' => 'kohteet' ),
	);
	register_post_type( 'kohde', $args );

}
add_action( 'init', 'custom_post_type', 0 );
