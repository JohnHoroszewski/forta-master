<?php
/**
 * Register Product Custom Post Type
 */
function products_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Products', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Products', 'text_domain' ),
		'name_admin_bar'        => __( 'Products', 'text_domain' ),
		'archives'              => __( 'Product Archives', 'text_domain' ),
		'attributes'            => __( 'Product Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Product:', 'text_domain' ),
		'all_items'             => __( 'All Products', 'text_domain' ),
		'add_new_item'          => __( 'Add New Products', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Product', 'text_domain' ),
		'edit_item'             => __( 'Edit Product', 'text_domain' ),
		'update_item'           => __( 'Update Product', 'text_domain' ),
		'view_item'             => __( 'View Product', 'text_domain' ),
		'view_items'            => __( 'View Products', 'text_domain' ),
		'search_items'          => __( 'Search Product', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into product', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this product', 'text_domain' ),
		'items_list'            => __( 'Products list', 'text_domain' ),
		'items_list_navigation' => __( 'Products list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter products list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Products', 'text_domain' ),
		'description'           => __( 'All Forta Products', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'products_custom_post_type', 0 );


// Register Product Categories Taxonomy
function product_categories() {

	$labels = array(
		'name'                       => _x( 'Product Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Product Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Product Categories', 'text_domain' ),
		'all_items'                  => __( 'All Product Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Product Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Product Category:', 'text_domain' ),
		'new_item_name'              => __( 'New Product Category Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Product Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Product Category', 'text_domain' ),
		'update_item'                => __( 'Update Product Category', 'text_domain' ),
		'view_item'                  => __( 'View Product Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate product categories with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove product categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Product Categories', 'text_domain' ),
		'search_items'               => __( 'Search Product Categories', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No product categories', 'text_domain' ),
		'items_list'                 => __( 'Product Categories list', 'text_domain' ),
		'items_list_navigation'      => __( 'Product Categories list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product_categories', array( 'products' ), $args );

}
add_action( 'init', 'product_categories', 0 );

/**
 * Register Projects Custom Post Type
 */
function projects_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Projects', 'text_domain' ),
		'name_admin_bar'        => __( 'Project', 'text_domain' ),
		'archives'              => __( 'Project Archives', 'text_domain' ),
		'attributes'            => __( 'Project Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Project:', 'text_domain' ),
		'all_items'             => __( 'All Projects', 'text_domain' ),
		'add_new_item'          => __( 'Add New Project', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Project', 'text_domain' ),
		'edit_item'             => __( 'Edit Project', 'text_domain' ),
		'update_item'           => __( 'Update Project', 'text_domain' ),
		'view_item'             => __( 'View Project', 'text_domain' ),
		'view_items'            => __( 'View Project', 'text_domain' ),
		'search_items'          => __( 'Search Project', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into project', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this project', 'text_domain' ),
		'items_list'            => __( 'Projects list', 'text_domain' ),
		'items_list_navigation' => __( 'Projects list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter projectss list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'text_domain' ),
		'description'           => __( 'Project Item', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'projects_post_type', 0 );

// Register Project Date Taxonomy
// function date_taxonomy() {
	
// 	$labels = array(
// 		'name'                       => _x( 'Project Dates', 'Taxonomy General Name', 'text_domain' ),
// 		'singular_name'              => _x( 'Project Date', 'Taxonomy Singular Name', 'text_domain' ),
// 		'menu_name'                  => __( 'Project Date', 'text_domain' ),
// 		'all_items'                  => __( 'Project Dates', 'text_domain' ),
// 		'parent_item'                => __( 'Parent Project Date', 'text_domain' ),
// 		'parent_item_colon'          => __( 'Parent Project Date:', 'text_domain' ),
// 		'new_item_name'              => __( 'New Project Date Name', 'text_domain' ),
// 		'add_new_item'               => __( 'Add New Project Date', 'text_domain' ),
// 		'edit_item'                  => __( 'Edit Project Date', 'text_domain' ),
// 		'update_item'                => __( 'Update Project Date', 'text_domain' ),
// 		'view_item'                  => __( 'View Project Date', 'text_domain' ),
// 		'separate_items_with_commas' => __( 'Separate project date with commas', 'text_domain' ),
// 		'add_or_remove_items'        => __( 'Add or remove project dates', 'text_domain' ),
// 		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
// 		'popular_items'              => __( 'Popular Project Dates', 'text_domain' ),
// 		'search_items'               => __( 'Search Project Dates', 'text_domain' ),
// 		'not_found'                  => __( 'Not Found', 'text_domain' ),
// 		'no_terms'                   => __( 'No project dates', 'text_domain' ),
// 		'items_list'                 => __( 'Project Dates list', 'text_domain' ),
// 		'items_list_navigation'      => __( 'Project Dates list navigation', 'text_domain' ),
// 	);
// 	$args = array(
// 		'labels'                     => $labels,
// 		'hierarchical'               => true,
// 		'public'                     => true,
// 		'show_ui'                    => true,
// 		'show_admin_column'          => true,
// 		'show_in_nav_menus'          => true,
// 		'show_tagcloud'              => true,
// 	);
// 	register_taxonomy( 'project_date', array( 'projects' ), $args );

// }
// add_action( 'init', 'date_taxonomy', 0 );

// Register Project Categories Taxonomy
// function project_categories() {

// 	$labels = array(
// 		'name'                       => _x( 'Project Categories', 'Taxonomy General Name', 'text_domain' ),
// 		'singular_name'              => _x( 'Project Category', 'Taxonomy Singular Name', 'text_domain' ),
// 		'menu_name'                  => __( 'Project Categories', 'text_domain' ),
// 		'all_items'                  => __( 'All Project Categories', 'text_domain' ),
// 		'parent_item'                => __( 'Parent Project Category', 'text_domain' ),
// 		'parent_item_colon'          => __( 'Parent Project Category:', 'text_domain' ),
// 		'new_item_name'              => __( 'New Project Category Name', 'text_domain' ),
// 		'add_new_item'               => __( 'Add New Project Category', 'text_domain' ),
// 		'edit_item'                  => __( 'Edit Project Category', 'text_domain' ),
// 		'update_item'                => __( 'Update Project Category', 'text_domain' ),
// 		'view_item'                  => __( 'View Project Category', 'text_domain' ),
// 		'separate_items_with_commas' => __( 'Separate project categories with commas', 'text_domain' ),
// 		'add_or_remove_items'        => __( 'Add or remove project categories', 'text_domain' ),
// 		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
// 		'popular_items'              => __( 'Popular Project Categories', 'text_domain' ),
// 		'search_items'               => __( 'Search Project Categories', 'text_domain' ),
// 		'not_found'                  => __( 'Not Found', 'text_domain' ),
// 		'no_terms'                   => __( 'No project categories', 'text_domain' ),
// 		'items_list'                 => __( 'Project Categories list', 'text_domain' ),
// 		'items_list_navigation'      => __( 'Project Categories list navigation', 'text_domain' ),
// 	);
// 	$args = array(
// 		'labels'                     => $labels,
// 		'hierarchical'               => true,
// 		'public'                     => true,
// 		'show_ui'                    => true,
// 		'show_admin_column'          => true,
// 		'show_in_nav_menus'          => true,
// 		'show_tagcloud'              => true,
// 	);
// 	register_taxonomy( 'project_categories', array( 'projects' ), $args );

// }
// add_action( 'init', 'project_categories', 0 );


// Register Project Advantages Taxonomy
function project_application() {

	$labels = array(
		'name'                       => _x( 'Applications', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Application', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Application', 'text_domain' ),
		'all_items'                  => __( 'All Applications', 'text_domain' ),
		'parent_item'                => __( 'Parent Application', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Application:', 'text_domain' ),
		'new_item_name'              => __( 'New Application Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Application', 'text_domain' ),
		'edit_item'                  => __( 'Edit Application', 'text_domain' ),
		'update_item'                => __( 'Update Application', 'text_domain' ),
		'view_item'                  => __( 'View Application', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate applications with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove applications', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Applications', 'text_domain' ),
		'search_items'               => __( 'Search Applications', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No applications', 'text_domain' ),
		'items_list'                 => __( 'Applications list', 'text_domain' ),
		'items_list_navigation'      => __( 'Applications list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'application', array( 'projects' ), $args );

}
add_action( 'init', 'project_application', 0 );

// Register Project Environments Taxonomy
function project_environment() {
	
	$labels = array(
		'name'                       => _x( 'Environments', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Environments', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Environment', 'text_domain' ),
		'all_items'                  => __( 'All Environments', 'text_domain' ),
		'parent_item'                => __( 'Parent Environment', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Environment:', 'text_domain' ),
		'new_item_name'              => __( 'New Environment Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Environment', 'text_domain' ),
		'edit_item'                  => __( 'Edit Environment', 'text_domain' ),
		'update_item'                => __( 'Update Environment', 'text_domain' ),
		'view_item'                  => __( 'View Environment', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate environments with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove environments', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Environments', 'text_domain' ),
		'search_items'               => __( 'Search Environments', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No environments', 'text_domain' ),
		'items_list'                 => __( 'Environments list', 'text_domain' ),
		'items_list_navigation'      => __( 'Environments list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'environment', array( 'projects' ), $args );

}
add_action( 'init', 'project_environment', 0 );

// Register Project Fibers Taxonomy
function project_fiber() {
	
	$labels = array(
		'name'                       => _x( 'Fibers', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Fiber', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Fiber', 'text_domain' ),
		'all_items'                  => __( 'All Fibers', 'text_domain' ),
		'parent_item'                => __( 'Parent Fiber', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Fiber:', 'text_domain' ),
		'new_item_name'              => __( 'New Fiber Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Fiber', 'text_domain' ),
		'edit_item'                  => __( 'Edit Fiber', 'text_domain' ),
		'update_item'                => __( 'Update Fiber', 'text_domain' ),
		'view_item'                  => __( 'View Fiber', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate fibers with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove fibers', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Fibers', 'text_domain' ),
		'search_items'               => __( 'Search Fibers', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No fibers', 'text_domain' ),
		'items_list'                 => __( 'Fibers list', 'text_domain' ),
		'items_list_navigation'      => __( 'Fibers list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'fiber', array( 'projects' ), $args );

}
add_action( 'init', 'project_fiber', 0 );

// Register Project Fiber Length Taxonomy
function project_fiberlength() {
	
	$labels = array(
		'name'                       => _x( 'Fiber Lengths', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Fiber Length', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Fiber Length', 'text_domain' ),
		'all_items'                  => __( 'All Fiber Lengths', 'text_domain' ),
		'parent_item'                => __( 'Parent Fiber Length', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Fiber Length:', 'text_domain' ),
		'new_item_name'              => __( 'New Fiber Length Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Fiber Length', 'text_domain' ),
		'edit_item'                  => __( 'Edit Fiber Length', 'text_domain' ),
		'update_item'                => __( 'Update Fiber Length', 'text_domain' ),
		'view_item'                  => __( 'View Fiber Length', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate fiber lengths with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove fiber lengths', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Fiber Lengths', 'text_domain' ),
		'search_items'               => __( 'Search Fiber Lengths', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No fiber lengths', 'text_domain' ),
		'items_list'                 => __( 'Fiber Lengths list', 'text_domain' ),
		'items_list_navigation'      => __( 'Fiber Lengths list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'fiber_length', array( 'projects' ), $args );

}
add_action( 'init', 'project_fiberlength', 0 );

// Register Project Key Benefits Taxonomy
function project_benefit() {
	
	$labels = array(
		'name'                       => _x( 'Key Benefits', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Key Benefit', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Key Benefit', 'text_domain' ),
		'all_items'                  => __( 'Key Benefits', 'text_domain' ),
		'parent_item'                => __( 'Parent Key Benefit', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Key Benefit:', 'text_domain' ),
		'new_item_name'              => __( 'New Key Benefit Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Key Benefit', 'text_domain' ),
		'edit_item'                  => __( 'Edit Key Benefit', 'text_domain' ),
		'update_item'                => __( 'Update Key Benefit', 'text_domain' ),
		'view_item'                  => __( 'View Key Benefit', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate key benefits with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove key benefit', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Key Benefits', 'text_domain' ),
		'search_items'               => __( 'Search Key Benefits', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No key benefit', 'text_domain' ),
		'items_list'                 => __( 'Key Benefits list', 'text_domain' ),
		'items_list_navigation'      => __( 'Key Benefits list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'benefit', array( 'projects' ), $args );

}
add_action( 'init', 'project_benefit', 0 );

// Register Project Dosages Taxonomy
// function project_dosage() {
	
// 	$labels = array(
// 		'name'                       => _x( 'Dosages', 'Taxonomy General Name', 'text_domain' ),
// 		'singular_name'              => _x( 'Dosage', 'Taxonomy Singular Name', 'text_domain' ),
// 		'menu_name'                  => __( 'Dosage', 'text_domain' ),
// 		'all_items'                  => __( 'Dosages', 'text_domain' ),
// 		'parent_item'                => __( 'Parent Dosage', 'text_domain' ),
// 		'parent_item_colon'          => __( 'Parent Dosage:', 'text_domain' ),
// 		'new_item_name'              => __( 'New Dosage Name', 'text_domain' ),
// 		'add_new_item'               => __( 'Add New Dosage', 'text_domain' ),
// 		'edit_item'                  => __( 'Edit Dosage', 'text_domain' ),
// 		'update_item'                => __( 'Update Dosage', 'text_domain' ),
// 		'view_item'                  => __( 'View Dosage', 'text_domain' ),
// 		'separate_items_with_commas' => __( 'Separate dosages with commas', 'text_domain' ),
// 		'add_or_remove_items'        => __( 'Add or remove dosage', 'text_domain' ),
// 		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
// 		'popular_items'              => __( 'Popular Dosages', 'text_domain' ),
// 		'search_items'               => __( 'Search Dosages', 'text_domain' ),
// 		'not_found'                  => __( 'Not Found', 'text_domain' ),
// 		'no_terms'                   => __( 'No dosage', 'text_domain' ),
// 		'items_list'                 => __( 'Dosages list', 'text_domain' ),
// 		'items_list_navigation'      => __( 'Dosages list navigation', 'text_domain' ),
// 	);
// 	$args = array(
// 		'labels'                     => $labels,
// 		'hierarchical'               => false,
// 		'public'                     => true,
// 		'show_ui'                    => true,
// 		'show_admin_column'          => true,
// 		'show_in_nav_menus'          => true,
// 		'show_tagcloud'              => true,
// 	);
// 	register_taxonomy( 'dosage', array( 'projects' ), $args );

// }
// add_action( 'init', 'project_dosage', 0 );


/**
 * Register Event Custom Post Type
 */
function events_post_type() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Events', 'text_domain' ),
		'name_admin_bar'        => __( 'Event', 'text_domain' ),
		'archives'              => __( 'Event Archives', 'text_domain' ),
		'attributes'            => __( 'Event Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Event:', 'text_domain' ),
		'all_items'             => __( 'All Events', 'text_domain' ),
		'add_new_item'          => __( 'Add New Event', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Event', 'text_domain' ),
		'edit_item'             => __( 'Edit Event', 'text_domain' ),
		'update_item'           => __( 'Update Event', 'text_domain' ),
		'view_item'             => __( 'View Event', 'text_domain' ),
		'view_items'            => __( 'View Events', 'text_domain' ),
		'search_items'          => __( 'Search Event', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into event', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this event', 'text_domain' ),
		'items_list'            => __( 'Events list', 'text_domain' ),
		'items_list_navigation' => __( 'Events list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter events list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'text_domain' ),
		'description'           => __( 'Events', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'events_post_type', 0 );


/**
 * Register Advantage Custom Post Type
 */
// function forta_advantages_cpt() {
	
// 	$labels = array(
// 		'name'                  => _x( 'Advantages', 'Post Type General Name', 'text_domain' ),
// 		'singular_name'         => _x( 'Advantage', 'Post Type Singular Name', 'text_domain' ),
// 		'menu_name'             => __( 'Advantages', 'text_domain' ),
// 		'name_admin_bar'        => __( 'Advantages', 'text_domain' ),
// 		'archives'              => __( 'Advantage Archives', 'text_domain' ),
// 		'attributes'            => __( 'Advantage Attributes', 'text_domain' ),
// 		'parent_item_colon'     => __( 'Parent Advantage:', 'text_domain' ),
// 		'all_items'             => __( 'All Advantages', 'text_domain' ),
// 		'add_new_item'          => __( 'Add New Advantage', 'text_domain' ),
// 		'add_new'               => __( 'Add New', 'text_domain' ),
// 		'new_item'              => __( 'New Advantage', 'text_domain' ),
// 		'edit_item'             => __( 'Edit Advantage', 'text_domain' ),
// 		'update_item'           => __( 'Update Advantage', 'text_domain' ),
// 		'view_item'             => __( 'View Advantage', 'text_domain' ),
// 		'view_items'            => __( 'View Advantages', 'text_domain' ),
// 		'search_items'          => __( 'Search Advantage', 'text_domain' ),
// 		'not_found'             => __( 'Not found', 'text_domain' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
// 		'featured_image'        => __( 'Featured Image', 'text_domain' ),
// 		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
// 		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
// 		'insert_into_item'      => __( 'Insert into advantage', 'text_domain' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this advantage', 'text_domain' ),
// 		'items_list'            => __( 'Advantages list', 'text_domain' ),
// 		'items_list_navigation' => __( 'Advantages list navigation', 'text_domain' ),
// 		'filter_items_list'     => __( 'Filter advantages list', 'text_domain' ),
// 	);
// 	$args = array(
// 		'label'                 => __( 'Advantage', 'text_domain' ),
// 		'description'           => __( 'Custom Post Type for Creating Advantages Pages/Posts', 'text_domain' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'post-formats', ),
// 		'taxonomies'            => array( 'category', 'post_tag' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-star-filled',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,		
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'advantage', $args );

// }
// add_action( 'init', 'forta_advantages_cpt', 0 );



// Remove 'Categories' from product custom post type
function remove_category_from_products() {
  global $submenu;
  $post_type = 'products';
  $tax_slug = 'category';
  if (isset($submenu['edit.php?post_type='.$post_type])) {
    foreach ($submenu['edit.php?post_type='.$post_type] as $k => $sub) {
      if (false !== strpos($sub[2],$tax_slug)) {
        unset($submenu['edit.php?post_type='.$post_type][$k]);
      }
    }
  }
}

add_action('admin_menu','remove_category_from_products');


// Remove 'Categories' from project custom post type
function remove_category_from_projects() {
  global $submenu;
  $post_type = 'projects';
  $tax_slug = 'category';
  if (isset($submenu['edit.php?post_type='.$post_type])) {
    foreach ($submenu['edit.php?post_type='.$post_type] as $k => $sub) {
      if (false !== strpos($sub[2],$tax_slug)) {
        unset($submenu['edit.php?post_type='.$post_type][$k]);
      }
    }
  }
}
add_action('admin_menu','remove_category_from_projects');

// Remove 'Tags' from project custom post type
function remove_tags_from_projects() {
	global $submenu;
	$post_type = 'projects';
	$tax_slug = 'post_tag';
	if (isset($submenu['edit.php?post_type='.$post_type])) {
	  foreach ($submenu['edit.php?post_type='.$post_type] as $k => $sub) {
		if (false !== strpos($sub[2],$tax_slug)) {
		  unset($submenu['edit.php?post_type='.$post_type][$k]);
		}
	  }
	}
  }
  add_action('admin_menu','remove_tags_from_projects');


// Remove 'Categories' from advantages custom post type
// function remove_category_from_advantages() {
// 	global $submenu;
// 	$post_type = 'advantage';
// 	$tax_slug = 'category';
// 	if (isset($submenu['edit.php?post_type='.$post_type])) {
// 	  foreach ($submenu['edit.php?post_type='.$post_type] as $k => $sub) {
// 		if (false !== strpos($sub[2],$tax_slug)) {
// 		  unset($submenu['edit.php?post_type='.$post_type][$k]);
// 		}
// 	  }
// 	}
// }
// add_action('admin_menu','remove_category_from_advantages');

add_action( 'add_meta_boxes', 'forta_remove_categories_meta_box' );
function forta_remove_categories_meta_box() {
     
    remove_meta_box( 'categorydiv', 'projects', 'side' ); // remove the Categories box from projects edit screen
    remove_meta_box( 'categorydiv', 'products', 'side' ); // remove the Categories box from prducts edit screen
}