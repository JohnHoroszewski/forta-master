<?php
/**
 * Template part for displaying page content in single-product.php
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

		<section class="header-image" style="background-image: url( '<?php echo get_theme_mod( 'forta_master_post_product' ); ?>' );"></section>
		
	<?php endif; ?>
	
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
			
			<?php if ( have_rows( 'sidebar_content' ) ) : ?>
				<?php while ( have_rows( 'sidebar_content' ) ) : the_row(); ?>

					<div class="side-pro-block">
						<?php the_sub_field( 'sidebar_content_block' ); ?>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>

		<?php

			if ( get_field( 'savings_calculator' ) == 'yes' ) : ?>

			<div class="savings-calc">
				<span class="calc-heading">Calculate your savings!</span>
				FORTA-FI<sup>®</sup> your asphalt for Tons of Savings! Compare material costs between a traditional asphalt mix and FORTAfied Asphalt.
				<span class="BoxClick1">
					<a class="OpenCalc" href="#">Open Savings Calculator</a>
				</span>
			</div>

		<?php endif; ?>

		</aside>
	</div>

	<?php if ( have_rows( 'product_tabs' ) ) : ?>
		<section class="product-details">
			<ul class="product-tabs">
			
				<?php while ( have_rows( 'product_tabs' ) ) : the_row(); ?>

				<!-- convert string to all lowercase -->
				<?php $tabTitle = str_replace( ' ', '', strtolower( substr( get_sub_field( 'tab_title' ), 0, 7 ) ) ); ?>

					<li>
						<a href="#" data-ref="<?php echo $tabTitle ?>"><?php the_sub_field( 'tab_title' ); ?></a>
					</li>
	
				<?php endwhile; ?>

			</ul>
		</section>
		<section class="product-listings">
			<div class="constrain">

				<?php while ( have_rows( 'product_tabs' ) ) : the_row(); ?>

				<!-- convert string to all lowercase -->
				<?php $tabTitle = str_replace( ' ', '', strtolower( substr( get_sub_field( 'tab_title' ), 0, 7 ) ) ); ?>

					<div id="<?php echo $tabTitle; ?>" class="tabBlock">
						<?php the_sub_field( 'tab_content' ); ?>
					</div>

				<?php endwhile; ?>

			</div>
		</section>

	<?php endif; ?><!-- End Product Details -->

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
