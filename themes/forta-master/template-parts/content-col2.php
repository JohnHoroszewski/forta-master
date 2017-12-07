<?php
/**
 * Template part for displaying page content in col2-template.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Forta_Master
 */

?>
	<?php if ( get_field( 'header_image' ) ) :
		$headerImage = get_field( 'header_image' ); ?>

		<section class="header-image" style="background-image: url( '<?php echo $headerImage[ 'url' ] ?>' );"></section>

	<?php else : ?>

		<section class="header-image" style="background-image: url( '<?php echo get_theme_mod( 'forta_master_page_general' ); ?>' );"></section>
		
	<?php endif; ?>
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="constrain">
		<div class="main-block">
			<header class="entry-header">
				<div class="subtitle site-font-accent"><?php the_field( 'sub_title' ); ?></div>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">

				<?php the_content(); ?>

				<?php if ( have_rows( 'sections' ) ) : ?>

					<?php while ( have_rows( 'sections' ) ) : the_row(); ?>

						<section class="col2-section">
							<?php if ( get_sub_field( 'section_title' ) ) : ?>
								<h2><?php the_sub_field( 'section_title' ); ?></h2>
							<?php endif; ?>
							<div class="flexed">

								<?php if ( have_rows( 'section_content' ) ) : ?>

									<?php while ( have_rows( 'section_content' ) ) : the_row(); ?>

										<?php if ( get_row_layout() == 'assorted_content' ) : ?>

											<div class="column-block col2-block">
												<?php the_sub_field( 'content' ); ?>
											</div>

										<?php elseif ( get_row_layout() == 'video' ) : ?>

											<div class="column-block col2-video">
												<?php the_sub_field( 'video_content' ); ?>
												<span class="video-title"><?php the_sub_field( 'video_title' ); ?></span>
											</div>

										<?php endif; ?>

									<?php endwhile; ?>

								<?php endif; ?>

							</div><!-- .flexed -->
						</section><!-- .col3-section -->

					<?php endwhile; ?>
				
				<?php endif; ?>
				
			</div><!-- .entry-content -->
		</div><!-- .main-block -->
		<aside class="product-sidebar">

			<?php // If have sidebar content blocks, display here

				if ( have_rows( 'sidebar_content' ) ) : 

					while ( have_rows( 'sidebar_content' ) ) : the_row(); ?>

						<?php the_sub_field( 'content' ); ?>

					<?php endwhile; ?>

			<?php endif; ?>

	

		</aside>
	</div><!-- .constrain -->

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
