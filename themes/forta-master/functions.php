<?php
/**
 * Forta Master functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Forta_Master
 */

include( get_stylesheet_directory() . '/includes/customizer.php' );
include( get_stylesheet_directory() . '/includes/wyswig_styles.php' );

if ( ! function_exists( 'forta_master_setup' ) ) :


	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function forta_master_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Forta Master, use a find and replace
		 * to change 'forta-master' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'forta-master', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'forta-master' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'forta_master_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'forta_master_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function forta_master_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'forta_master_content_width', 640 );
}
add_action( 'after_setup_theme', 'forta_master_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function forta_master_scripts() {

	// Add slick.css
	wp_enqueue_style( 'forta-master-slick-style', get_template_directory_uri() . '/css/slick.css' );

	// Add slick-theme.css
	wp_enqueue_style( 'forta-master-slicktheme-style', get_template_directory_uri() . '/css/slick-theme.css' );

	// Add facybox.css
	wp_enqueue_style( 'forta-master-fancybox-style', get_template_directory_uri() . '/css/jquery.fancybox-1.3.4.css' );

	wp_enqueue_style( 'forta-master-style', get_stylesheet_uri() );

	wp_enqueue_script( 'forta-master-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	// Add slick.js
	wp_enqueue_script( 'forta-master-slick-js', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '20151215', true );

	// Add calculator.js
	wp_enqueue_script( 'forta-master-calculator-js', get_template_directory_uri() . '/js/calculator.js', array( 'jquery' ), '20151215', true );

	// Add fancybox.js
	wp_enqueue_script( 'forta-master-fancybox-js', get_template_directory_uri() . '/js/fancybox/jquery.fancybox-1.3.4.js', array( 'jquery' ), '20151215', true );

	// Add fancybox-easing.js
	wp_enqueue_script( 'forta-master-fancyboxeasing-js', get_template_directory_uri() . '/js/fancybox/jquery.easing-1.3.pack.js', array( 'jquery' ), '20151215', true );

	wp_enqueue_script( 'forta-master-custom-js', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'forta_master_scripts' );

/**
 * Register top menu
 */
function register_forta_topmenu() {
  register_nav_menu('forta-top-menu',__( 'Top Site Menu' ));
}
add_action( 'init', 'register_forta_topmenu' );



/**
 * Register Site Top Left Widget Area for Menu
 */
function top_widget_areas() {

	$args = array(
		'id'            => 'top-left-area',
		'class'         => 'top-widget',
		'name'          => __( 'Top Left Widget Area', 'text_domain' ),
		'description'   => __( 'Holds custom menu items', 'text_domain' ),
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'top-right-area',
		'class'         => 'top-widget',
		'name'          => __( 'Top Right Widget Area', 'text_domain' ),
		'description'   => __( 'Initial intention is for the placement of the \'Request a Quote\' form - can be used to hold link or short text', 'text_domain' ),
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'top-form-block',
		'class'         => 'top-widget',
		'name'          => __( 'Top Form Area', 'text_domain' ),
		'description'   => __( 'Copy and paste the contact form shortcode here to display for \'Request a Quote\'', 'text_domain' ),
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'top_widget_areas' );

/**
 * Register General Page Template secondary menu areas
 */
function general_page_sidebars() {

	$args = array(
		'id'            => 'about_sidebar',
		'class'         => 'general-sidebar-menu',
		'name'          => __( 'About Page Sidebar Area', 'text_domain' ),
		'description'   => __( 'Reserved for the secondary About page menu in the sidebar area.', 'text_domain' ),
		'before_widget' => ' ',
		'after_widget'  => ' ',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'resource_sidebar',
		'class'         => 'general-sidebar-menu',
		'name'          => __( 'Resource Page Sidebar Area', 'text_domain' ),
		'description'   => __( 'Reserved for the secondary Resources page menu in the sidebar area.', 'text_domain' ),
		'before_widget' => ' ',
		'after_widget'  => ' ',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'general_page_sidebars' );

/**
 * Register Footer Menu Item Areas
 */
function footer_menu_area() {

	$args = array(
		'id'            => 'footer-column-one',
		'class'         => 'footer-menu',
		'name'          => __( 'Footer Column One Menu Area', 'text_domain' ),
		'description'   => __( 'Area for custom footer menu links in first column', 'text_domain' ),
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer-column-two',
		'class'         => 'footer-menu',
		'name'          => __( 'Footer Column Two Menu Area', 'text_domain' ),
		'description'   => __( 'Area for custom footer menu links in second column', 'text_domain' ),
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'footer_menu_area' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function forta_master_widgets_init() {
// 	register_sidebar( array(
// 		'name'          => esc_html__( 'Sidebar', 'forta-master' ),
// 		'id'            => 'sidebar-1',
// 		'description'   => esc_html__( 'Add widgets here.', 'forta-master' ),
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget'  => '</section>',
// 		'before_title'  => '<h2 class="widget-title">',
// 		'after_title'   => '</h2>',
// 	) );
// }
// add_action( 'widgets_init', 'forta_master_widgets_init' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Hide admin Bar
 */
show_admin_bar(false);


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
 * Register Project Custom Post Type
 */
function project_post_type() {

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
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
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
	register_post_type( 'project', $args );

}
add_action( 'init', 'project_post_type', 0 );

// Register Project Categories Taxonomy
function project_categories() {

	$labels = array(
		'name'                       => _x( 'Project Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Project Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Project Categories', 'text_domain' ),
		'all_items'                  => __( 'All Project Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Project Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Project Category:', 'text_domain' ),
		'new_item_name'              => __( 'New Project Category Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Project Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Project Category', 'text_domain' ),
		'update_item'                => __( 'Update Project Category', 'text_domain' ),
		'view_item'                  => __( 'View Project Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate project categories with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove project categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Project Categories', 'text_domain' ),
		'search_items'               => __( 'Search Project Categories', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No project categories', 'text_domain' ),
		'items_list'                 => __( 'Project Categories list', 'text_domain' ),
		'items_list_navigation'      => __( 'Project Categories list navigation', 'text_domain' ),
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
	register_taxonomy( 'project_categories', array( 'project' ), $args );

}
add_action( 'init', 'project_categories', 0 );

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
  $post_type = 'project';
  $tax_slug = 'category';
  if (isset($submenu['edit.php?post_type='.$post_type])) {
    foreach ($submenu['edit.php?post_type='.$post_type] as $k => $sub) {
      if (false !== strpos($sub[2],$tax_slug)) {
        unset($submenu['edit.php?post_type='.$post_type][$k]);
      }
    }
  }
}

// Remove default 'Categories' box from custom post types
add_action('admin_menu','remove_category_from_projects');

add_action( 'add_meta_boxes', 'forta_remove_categories_meta_box' );
function forta_remove_categories_meta_box() {
     
    remove_meta_box( 'categorydiv', 'project', 'side' ); // remove the Categories box from projects edit screen
    remove_meta_box( 'categorydiv', 'products', 'side' ); // remove the Categories box from prducts edit screen
}