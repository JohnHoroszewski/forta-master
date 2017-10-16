<?php
/**
 * Template part for displaying page content in general-template.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Forta_Master
 */

?>
	<?php $headerImage = get_field( 'header_image' ); ?>
	<section class="header-image" style="background-image: url( '<?php echo $headerImage[ 'url' ] ?>' );" alt="<?php echo $headerImage[ 'alt' ] ?>"></section>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="constrain">
		<div class="main-block">
			<header class="entry-header">
				<div class="subtitle site-font-accent"><?php the_field( 'sub_title' ); ?></div>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					the_content();
				?>
			</div><!-- .entry-content -->
		</div><!-- .main-block -->
		<aside class="product-sidebar">
			
			<?php // If have sidebar menu, display here

				if ( get_field( 'sidebar_menu_choice' ) == 'yes' ) : ?>

				<!-- If select is about then show about sidebar | If select is resource then show resource sidebar -->
					<?php if ( get_field( 'sidebar_menu' ) == 'about' ) : ?>

						<?php dynamic_sidebar( 'about_sidebar' ); ?>			

					<?php elseif ( get_field( 'sidebar_menu' ) == 'resources' ) : ?>

						<?php dynamic_sidebar( 'resource_sidebar' ); ?>

					<?php endif; ?>
					
			<?php endif; ?>


			<?php // If have sidebar content blocks, display here

				if ( have_rows( 'sidebar_content_blocks' ) ) : 

					while ( have_rows( 'sidebar_content_blocks' ) ) : the_row(); ?>

						<?php the_sub_field( 'general_block' ); ?>

					<?php endwhile; ?>

			<?php endif; ?>

	

		</aside>
	</div>

	<?php if ( get_theme_mod( 'forta_master_large_text' ) ) : ?>
	<section class="pro-cta" style="background-image: url( '<?php echo get_theme_mod( 'forta_master_products_image' ); ?>' );">
		<div class="constrain">
			<div class="left-block">
				<span class="small-text site-font-accent"><?php echo get_theme_mod( 'forta_master_small_text' ); ?></span>
				<span class="large-text top"><?php echo get_theme_mod( 'forta_master_large_top_text' ); ?></span>
				<span class="large-text bottom"><?php echo get_theme_mod( 'forta_master_large_bottom_text' ); ?></span>
			</div>
				<div class="right-block">
					<a class="cta-btn site-accent" href="<?php echo get_theme_mod( 'forta_master_button_link' ); ?>"><?php echo get_theme_mod( 'forta_master_button_text' ); ?></a>
				</div>
		</div>
	</section>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
