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

	<script src="https://use.fontawesome.com/d0180db23a.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:600,700|Roboto:300,400,500,700" rel="stylesheet">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'forta-master' ); ?></a>

	<?php if ( is_active_sidebar( 'top-left-area' ) ) : ?>
		<div class="sitetop-links">
			<div class="flexxed">
				<div class="top-left constrain">
					<i id="close-this" class="fa fa-times" aria-hidden="true">&nbsp;</i>
					<?php dynamic_sidebar( 'top-left-area' ); ?>
				</div>
				<div class="more-tab constrain">
					<i id="more-ellipsis" class="fa fa-ellipsis-h" aria-hidden="true"></i>
				</div>
				<div class="top-right constrain site-accent">
					<?php dynamic_sidebar( 'top-right-area' ); ?>
				</div>
				<div class="top-form constrain site-accent">
					<i id="close-this" class="fa fa-times" aria-hidden="true">&nbsp;</i>
					<?php dynamic_sidebar( 'top-form-block' ); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="mobile-nav">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
		?>
	</div>

	<header id="masthead" class="main-header">
		<div class="site-branding">
			<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			<?php $description = get_bloginfo( 'description', 'display' ); ?>
			<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<i class="fa fa-bars" aria-hidden="true"></i>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
