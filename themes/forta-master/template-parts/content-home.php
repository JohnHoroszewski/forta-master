<?php
/**
 * Template part for displaying Homepage Content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Forta_Master
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="home-section-block main-home-content">
		<div class="constrain">
			<div class="flex-wrapper">
				<div class="left-block">
					<h2 class="heading"><?php the_field( 'main_content_heading' ); ?></h2>
					<h3 class="subheading"><?php the_field( 'main_content_sub_heading' ); ?></h3>	
				</div>
				<div class="right-block">
					<?php if ( have_rows( 'main_content_variable_block' ) ) : ?>

						<?php while ( have_rows( 'main_content_variable_block' ) ) : the_row(); ?>

							<?php if ( get_row_layout() == 'image' ) :
								$img = get_sub_field( 'variable_image' ); ?>
								<img src="<?php echo $img[ 'url' ] ?>" alt="<?php echo $img[ 'url' ] ?>">
							<?php else :
								the_sub_field( 'variable_text' );
							endif; ?>

						<?php endwhile; ?>
					
					<?php endif; ?>
				</div>
			</div>
			<div class="text-block cols2"><?php the_field( 'main_content_text' ); ?></div>
		</div>
	</section>

	<section class="home-section-block callout-blocks">
		<div class="constrain">
			<?php if ( have_rows( 'callout_blocks' ) ) :

				while ( have_rows( 'callout_blocks' ) ) : the_row(); ?>

				<div class="callout-block">
					<div class="callout-block-info">
						<div class="subheading"><?php the_sub_field( 'callout_block_subheading' ); ?></div>
						<div class="heading"><?php the_sub_field( 'callout_block_heading' ); ?></div>
						<div class="callout-block-text"><?php the_sub_field( 'callout_block_text' ); ?></div>
						<a href="<?php the_sub_field( 'callout_block_link' ); ?>" class="flat-btn">More Details</a>
					</div>
					<div class="callout-block-image" style="background-image:url('<?php the_sub_field( 'callout_block_image' ); ?>');">
					</div>
				</div>

				<?php endwhile;

			endif; ?>
		</div>
	</section>

	<section class="home-section-block sub-content">
		<div class="constrain">
			<h2 class="line-heading"><?php the_field( 'sub_content_heading' ); ?></h2>
			<div class="flex-wrapper">
				<div class="left-block"><?php the_field( 'sub_content_left_text_column' ); ?></div>
				<div class="right-block"><?php the_field( 'sub_content_right_text_column' ); ?></div>
			</div>
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

	<?php if ( get_field( 'simple_steps_content' ) ) : ?>

	<section class="home-section-block simple-steps">
		<div class="constrain">
			<h2 class="line-heading"><?php the_field( 'simple_steps_title' ); ?></h2>
			<?php the_field( 'simple_steps_content' ); ?>
		</div>
	</section>

	<?php endif; ?>


	<?php if ( get_field( 'testimonials_heading' ) ) : ?>
	<section class="home-section-block testimonials">
		<div class="constrain">
			<h2 class="line-heading"><?php the_field( 'testimonials_heading' ); ?></h2>
		
			<div class="flex-wrapper">
				<div class="left-block"><?php the_field( 'testimonials_left_text_column' ); ?></div>
				<div class="right-block"><?php the_field( 'testimonials_right_text_column' ); ?></div>
			</div>
			<div class="testimonial-slider">
				<?php if ( have_rows( 'testimonials_content' ) ) :

					while ( have_rows( 'testimonials_content' ) ) : the_row(); ?>

						<div class="testimonial-block">
							<div class="testimonial-content">
								<span class="testimonial-snippet"><?php the_sub_field( 'testimonials_text' ); ?></span>
							</div>
							<div class="client-name"><?php the_sub_field( 'client_name' ); ?></div>
							<div class="client-info"><?php the_sub_field( 'client_company_or_title' ); ?></div>
						</div>

					<?php endwhile;

				endif; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->