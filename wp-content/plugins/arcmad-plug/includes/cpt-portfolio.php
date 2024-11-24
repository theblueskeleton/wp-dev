<?php

/**
 * Register a custom post type called "Portfolio Items".
 *
 * @see get_post_type_labels() for label keys.
 */
function arcmad_register_portfolio_cpt() {
	$labels = array(
		'name'                  => _x( 'Portfolio Items', 'Post type general name', 'arcmad' ),
		'singular_name'         => _x( 'Portfolio', 'Post type singular name', 'arcmad' ),
		'menu_name'             => _x( 'Portfolio Items', 'Admin Menu text', 'arcmad' ),
		'name_admin_bar'        => _x( 'Portfolio', 'Add New on Toolbar', 'arcmad' ),
		'add_new'               => __( 'Add New', 'arcmad' ),
		'add_new_item'          => __( 'Add New Portfolio', 'arcmad' ),
		'new_item'              => __( 'New Portfolio', 'arcmad' ),
		'edit_item'             => __( 'Edit Portfolio', 'arcmad' ),
		'view_item'             => __( 'View Portfolio', 'arcmad' ),
		'all_items'             => __( 'All Portfolio Items', 'arcmad' ),
		'search_items'          => __( 'Search Portfolio Items', 'arcmad' ),
		'parent_item_colon'     => __( 'Parent Portfolio Items:', 'arcmad' ),
		'not_found'             => __( 'No Portfolio Items found.', 'arcmad' ),
		'not_found_in_trash'    => __( 'No Portfolio Items found in Trash.', 'arcmad' ),
		'featured_image'        => _x( 'Portfolio Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'arcmad' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'arcmad' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'arcmad' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'arcmad' ),
		'archives'              => _x( 'Portfolio archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'arcmad' ),
		'insert_into_item'      => _x( 'Insert into Portfolio', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'arcmad' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Portfolio', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'arcmad' ),
		'filter_items_list'     => _x( 'Filter Portfolio Items list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'arcmad' ),
		'items_list_navigation' => _x( 'Portfolio Items list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'arcmad' ),
		'items_list'            => _x( 'Portfolio Items list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'arcmad' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_rest'       => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'portfolio', $args );
}

add_action( 'init', 'arcmad_register_portfolio_cpt' );

/**
 * Register our custom taxonomy category
 * 
 * @return void
 * 
 */
function arcmad_register_portfolio_category_taxonomy() {

	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'arcmad' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'arcmad' ),
		'search_items'      => __( 'Search Categories', 'arcmad' ),
		'all_items'         => __( 'All Categories', 'arcmad' ),
		'parent_item'       => __( 'Parent Category', 'arcmad' ),
		'parent_item_colon' => __( 'Parent Category:', 'arcmad' ),
		'edit_item'         => __( 'Edit Category', 'arcmad' ),
		'update_item'       => __( 'Update Category', 'arcmad' ),
		'add_new_item'      => __( 'Add New Category', 'arcmad' ),
		'new_item_name'     => __( 'New Category Name', 'arcmad' ),
		'menu_name'         => __( 'Category', 'arcmad' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'category' ),
		'show_in_rest'      => true,
	);

	register_taxonomy( 'portfolio_category', 'portfolio', $args );

}

add_action( 'init', 'arcmad_register_portfolio_category_taxonomy' );

/**
 * Register meta box(es).
 */
function portfolio_register_meta_boxes_address() {
	add_meta_box( 
		'portfoli-address', __( 'Portfolio Address', 'arcmad' ),
		 'arcmad_portfolio_address_callback',
		  'post' );
}
add_action( 'add_meta_boxes', 'wportfolio_register_meta_boxes_address' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function arcmad_portfolio_address_callback( $post ) {
	?>
	<input name='address' id='address' class='portfolio-item'>
	// Display code/markup goes here. Don't forget to include nonces!
	<?php
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function wpdocs_save_meta_box( $post_id ) {
	// Save logic goes here. Don't forget to include nonce checks!
}
add_action( 'save_post', 'wpdocs_save_meta_box' );