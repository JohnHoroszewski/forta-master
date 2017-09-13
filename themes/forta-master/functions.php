<?php
/**
 * Forta Master functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Forta_Master
 */

include( get_stylesheet_directory() . '/includes/customizer.php' );

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

	wp_enqueue_style( 'forta-master-style', get_stylesheet_uri() );

	wp_enqueue_script( 'forta-master-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	// Add slick.js
	wp_enqueue_script( 'forta-master-slick-js', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '20151215', true );

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
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function forta_master_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'forta-master' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'forta-master' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'forta_master_widgets_init' );

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
