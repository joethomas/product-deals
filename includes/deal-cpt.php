<?php
/**
 * Register Deal Post Type
 * @since 1.0.0
 */
function joe_pdcpt_register_deal_post_type() {

	$labels = array(
		'name'                  => _x( 'Deals', 'Post Type General Name', 'product-deals' ),
		'singular_name'         => _x( 'Deal', 'Post Type Singular Name', 'product-deals' ),
		'menu_name'             => __( 'Deals', 'product-deals' ),
		'name_admin_bar'        => __( 'Deals', 'product-deals' ),
		'archives'              => __( 'Deal Archives', 'product-deals' ),
		'parent_item_colon'     => __( 'Parent Item:', 'product-deals' ),
		'all_items'             => __( 'All Deals', 'product-deals' ),
		'view_item'             => __( 'View', 'product-deals' ),
		'add_new_item'          => __( 'Add New', 'product-deals' ),
		'add_new'               => __( 'Add New', 'product-deals' ),
		'edit_item'             => __( 'Edit', 'product-deals' ),
		'update_item'           => __( 'Update', 'product-deals' ),
		'search_items'          => __( 'Search Deals', 'product-deals' ),
		'not_found'             => __( 'No deals found.', 'product-deals' ),
		'not_found_in_trash'    => __( 'No deals found in Trash.', 'product-deals' ),
		'featured_image'        => __( 'Featured Image', 'product-deals' ),
		'set_featured_image'    => __( 'Set featured image', 'product-deals' ),
		'remove_featured_image' => __( 'Remove featured image', 'product-deals' ),
		'use_featured_image'    => __( 'Use as featured image', 'product-deals' ),
		'insert_into_item'      => __( 'Insert into deal', 'product-deals' ),
		'uploaded_to_this_item' => __( 'Uploaded to this deal', 'product-deals' ),
		'items_list'            => __( 'Deals list', 'product-deals' ),
		'items_list_navigation' => __( 'Deals list navigation', 'product-deals' ),
		'filter_items_list'     => __( 'Filter deals list', 'product-deals' ),
	);
	$args = array(
		'label'               => __( 'Deal', 'product-deals' ),
		'description'         => __( 'Deal post type', 'product-deals' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-cart',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => is_admin() ? false : false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'deal', $args );

}
add_action( 'init', 'joe_pdcpt_register_deal_post_type', 0 );
?>