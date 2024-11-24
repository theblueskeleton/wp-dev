<?php
add_action( 'wp_enqueue_scripts', 'twentynineteen_child_enqueue_styles' );

function twentynineteen_child_enqueue_styles() {
	wp_enqueue_style( 
		'twentynineteen-parent-style', 
		get_parent_theme_file_uri( 'style.css' )
	);
}

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function twentynineteen_entry_footer() {

		// Hide author, post date, category and tag text for pages.
		if ( 'post' === get_post_type() ) {

			// Posted by.
			twentynineteen_posted_by();

			// Posted on.
			twentynineteen_posted_on();

			$categories_list = get_the_category_list( wp_get_list_item_separator() );
			if ( $categories_list ) {
				printf(
					/* translators: 1: SVG icon. 2: Posted in label, only visible to screen readers. 3: List of categories. */
					'<span class="cat-links">%1$s<span class="screen-reader-text">%2$s</span>%3$s</span>',
					twentynineteen_get_icon_svg( 'archive', 16 ),
					/* translators: Hidden accessibility text. */
					__( 'Posted in', 'twentynineteen' ),
					$categories_list
				); // WPCS: XSS OK.
			}
		}

		// Comment count.
		if ( ! is_singular() ) {
			twentynineteen_comment_count();
		}

		// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Post title. Only visible to screen readers. */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">' . twentynineteen_get_icon_svg( 'edit', 16 ),
			'</span>'
		);
	}