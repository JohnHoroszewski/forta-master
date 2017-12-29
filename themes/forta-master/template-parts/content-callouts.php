<?php
/**
 * Template part for displaying page content in general-template.php
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

			<?php if ( get_field( 'top_content' ) ) : ?>
				<div class="entry-content">

					<?php the_field( 'top_content' ); ?>
				
				</div><!-- .entry-content -->
			<?php endif; ?>
		</div><!-- .main-block -->
	</div><!-- .constrain -->

	<section class="callout-blocks">
		<div class="constrain">
		
			<?php if ( have_rows( 'callout_blocks' ) ) : ?>
				<div class="callouts-wrapper">	

				<?php while ( have_rows( 'callout_blocks' ) ) : the_row(); ?>

					<div class="callout-block">
					
						<div class="callout-block-image" style="background-image:url(<?php the_sub_field( 'callout_block_image' ); ?>);"></div>

						<div class="callout-block-info">
							<div class="heading"><?php the_sub_field( 'callout_block_heading' ); ?></div>
							<?php if ( get_sub_field( 'callout_block_text' ) ) : ?>
								<div class="callout-block-text"><?php the_sub_field( 'callout_block_text' ); ?></div>
							<?php endif; ?>
							<a class="flat-btn" href="<?php the_sub_field( 'callout_block_link' ); ?>">Read More</a>
						</div>
					
					</div>

				<?php endwhile; ?>

				</div><!-- .callouts-wrapper -->
			<?php endif; ?>

		</div>
	</section>



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