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

<?php
$socialArray = array( 
	get_theme_mod( 'forta_master_social_facebook_link' ),
	get_theme_mod( 'forta_master_social_twitter_link' ),
	get_theme_mod( 'forta_master_social_gplus_link' ),
	get_theme_mod( 'forta_master_social_linkedin_link' ),
	get_theme_mod( 'forta_master_social_youtube_link' ),
	get_theme_mod( 'forta_master_social_vimeo_link' ),
	get_theme_mod( 'forta_master_social_pinterest_link' )
);
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

	<?php if ( get_theme_mod( 'forta_master_accent_color' ) ) : ?>
	<style>
		.site-accent { background-color: <?php echo get_theme_mod( 'forta_master_accent_color' ); ?>; }
	</style>
	<?php endif; ?>
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
					<i id="close-this" class="fa fa-times" aria-hidden="true"></i>
					<?php dynamic_sidebar( 'top-form-block' ); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="mobile-nav site-accent">
		<div class="constrain">
			<i id="close-this" class="fa fa-times" aria-hidden="true"></i>

			<?php if ( !empty( $socialArray ) ) : ?>
				<div class="social-media-links flexxed">
					<?php if ( get_theme_mod( 'forta_master_social_facebook_link' ) ) : ?>
						<a class="facebook-icon" href="<?php echo esc_attr( get_theme_mod( 'forta_master_social_facebook_link' ) ); ?>">Facebook</a>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'forta_master_social_twitter_link' ) ) : ?>
						<a class="twitter-icon" href="<?php echo esc_attr( get_theme_mod( 'forta_master_social_twitter_link' ) ); ?>">Twitter</a>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'forta_master_social_gplus_link' ) ) : ?>
						<a class="gplus-icon" href="<?php echo esc_attr( get_theme_mod( 'forta_master_social_gplus_link' ) ); ?>">Google Plus</a>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'forta_master_social_linkedin_link' ) ) : ?>
						<a class="linkedin-icon" href="<?php echo esc_attr( get_theme_mod( 'forta_master_social_linkedin_link' ) ); ?>">LinkedIn</a>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'forta_master_social_youtube_link' ) ) : ?>
						<a class="youtube-icon" href="<?php echo esc_attr( get_theme_mod( 'forta_master_social_youtube_link' ) ); ?>">Youtube</a>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'forta_master_social_vimeo_link' ) ) : ?>
						<a class="vimeo-icon" href="<?php echo esc_attr( get_theme_mod( 'forta_master_social_vimeo_link' ) ); ?>">Vimeo</a>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'forta_master_social_pinterest_link' ) ) : ?>
						<a class="pinterest-icon" href="<?php echo esc_attr( get_theme_mod( 'forta_master_social_pinterest_link' ) ); ?>">Pinterest</a>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</div>
	</div>

	<header id="masthead" class="main-header">
		<div class="constrain flexxed">

			<div class="site-branding">

				<div class="site-title">
					<!-- Use logo if one has been uploaded -->
					<?php if ( get_theme_mod( 'forta_master_logo' ) ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo esc_url( get_theme_mod( 'forta_master_logo' ) ); ?>" alt="">
						</a>
					<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
							<?php $description = get_bloginfo( 'description', 'display' ); ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						</a>
					<?php endif; ?>
				</div>			
			
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .constrained.flexxed -->
		<a class="mobile-nav-btn" href="#">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</a>
	</header><!-- #masthead -->
	<div id="content" class="site-content">