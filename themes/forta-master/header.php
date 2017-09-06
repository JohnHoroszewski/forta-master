<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forta_Master
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'forta-master' ); ?></a>

	<?php if ( is_active_sidebar( 'top-left-area' ) ) : ?>
		<div class="sitetop-links">
			<div class="constrain flexxed">
				<div class="top-left">
					<?php dynamic_sidebar( 'top-left-area' ); ?>
				</div>
				<div class="top-right">
					<?php dynamic_sidebar( 'top-right-area' ); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<header id="masthead" class="main-header">
		<div class="site-branding">
			<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			<?php $description = get_bloginfo( 'description', 'display' ); ?>
			<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'forta-master' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
