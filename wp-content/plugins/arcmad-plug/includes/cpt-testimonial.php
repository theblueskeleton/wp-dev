<?php

/**
 * Register a custom post type called "Testimonials".
 *
 * @see get_post_type_labels() for label keys.
 */
function arcmad_register_testimonials_cpt() {
	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post type general name', 'arcmad' ),
		'singular_name'         => _x( 'Testimonials', 'Post type singular name', 'arcmad' ),
		'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'arcmad' ),
		'name_admin_bar'        => _x( 'Testimonials', 'Add New on Toolbar', 'arcmad' ),
		'add_new'               => __( 'Add New', 'arcmad' ),
		'add_new_item'          => __( 'Add New Testimonials', 'arcmad' ),
		'new_item'              => __( 'New Testimonials', 'arcmad' ),
		'edit_item'             => __( 'Edit Testimonials', 'arcmad' ),
		'view_item'             => __( 'View Testimonials', 'arcmad' ),
		'all_items'             => __( 'All Testimonials', 'arcmad' ),
		'search_items'          => __( 'Search Testimonials', 'arcmad' ),
		'parent_item_colon'     => __( 'Parent Testimonials:', 'arcmad' ),
		'not_found'             => __( 'No Testimonials found.', 'arcmad' ),
		'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'arcmad' ),
		'featured_image'        => _x( 'Testimonials Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'arcmad' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'arcmad' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'arcmad' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'arcmad' ),
		'archives'              => _x( 'Testimonials archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'arcmad' ),
		'insert_into_item'      => _x( 'Insert into Testimonials', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'arcmad' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Testimonials', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'arcmad' ),
		'filter_items_list'     => _x( 'Filter Testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'arcmad' ),
		'items_list_navigation' => _x( 'Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'arcmad' ),
		'items_list'            => _x( 'Testimonials list', 'Screen reader text for the list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'arcmad' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_rest'       => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonials' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
	);

	register_post_type( 'testimonials', $args );
}

add_action( 'init', 'arcmad_register_testimonials_cpt' );
