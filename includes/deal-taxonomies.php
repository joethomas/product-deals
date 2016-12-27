<?php
/**
 * Register Deal Category Taxonomy
 * @since 1.0.0
 */
function joe_pdcpt_register_deal_taxonomy_category() {

	$labels = array(
		'name'                       => _x( 'Deal Categories', 'Taxonomy General Name', 'product-deals' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'product-deals' ),
		'menu_name'                  => __( 'Categories', 'product-deals' ),
		'all_items'                  => __( 'All Categories', 'product-deals' ),
		'parent_item'                => __( 'Parent Item', 'product-deals' ),
		'parent_item_colon'          => __( 'Parent Item:', 'product-deals' ),
		'new_item_name'              => __( 'New Category Name', 'product-deals' ),
		'add_new_item'               => __( 'Add New Category', 'product-deals' ),
		'edit_item'                  => __( 'Edit Category', 'product-deals' ),
		'update_item'                => __( 'Update Category', 'product-deals' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'product-deals' ),
		'search_items'               => __( 'Search Categories', 'product-deals' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'product-deals' ),
		'choose_from_most_used'      => __( 'Choose from the most used categories', 'product-deals' ),
		'not_found'                  => __( 'Not Found', 'product-deals' ),
	);
	$rewrite = array(
		'slug'                       => 'deal-category',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'deal_category', array( 'deal' ), $args );

}

add_action( 'init', 'joe_pdcpt_register_deal_taxonomy_category', 0 );

?>