<?php

/**
 * Register a custom post type called "item".
 *
 * @see get_post_type_labels() for label keys.
 */
function product_items_cpt() {
	$labels = array(
		'name'                  => _x( 'Items', 'Post type general name', 'product' ),
		'singular_name'         => _x( 'Item', 'Post type singular name', 'product' ),
		'menu_name'             => _x( 'Items', 'Admin Menu text', 'product' ),
		'name_admin_bar'        => _x( 'Item', 'Add New on Toolbar', 'product' ),
		'add_new'               => __( 'Add New', 'product' ),
		'add_new_item'          => __( 'Add New Item', 'product' ),
		'new_item'              => __( 'New Item', 'product' ),
		'edit_item'             => __( 'Edit Item', 'product' ),
		'view_item'             => __( 'View Item', 'product' ),
		'all_items'             => __( 'All Items', 'product' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'item' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' ),
        'show_in_rest'         => true,
	);

	register_post_type( 'item', $args );

    flush_rewrite_rules();
}

add_action( 'init', 'product_items_cpt' );

/**
 * Register a 'field' taxonomy for post type 'item', with a rewrite to match book CPT slug.
 *
 * @see register_post_type for registering post types.
 */
function product_item_field_taxonomy() {
    // Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Fields', 'taxonomy general name', 'product' ),
		'singular_name'     => _x( 'Field', 'taxonomy singular name', 'product' ),
		'search_items'      => __( 'Search Fields', 'product' ),
		'all_items'         => __( 'All Fields', 'product' ),
		'parent_item'       => __( 'Parent Field', 'product' ),
		'parent_item_colon' => __( 'Parent Field:', 'product' ),
		'edit_item'         => __( 'Edit Field', 'product' ),
		'update_item'       => __( 'Update Field', 'product' ),
		'add_new_item'      => __( 'Add New Field', 'product' ),
		'new_item_name'     => __( 'New Field Name', 'product' ),
		'menu_name'         => __( 'Field', 'product' ),
	);

    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'         => true,
	);

    register_taxonomy( 'field', 'item', $args ) ;      
    
}
add_action( 'init', 'product_item_field_taxonomy' );