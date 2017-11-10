<?php
/**
 * Template Name: Homepage Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Forta_Master
 */

get_header(); ?>

<!-- 	<div class="home-slider">	
		<?php echo do_shortcode( '[slick-slider]' ); ?>
	</div> --><!-- .home-slider -->

	<div class="home-slider">	
		
		<div class="home-bg-slider">
			
			<!-- Iterate through fields for slick slider -->
			<?php if ( have_rows( 'homepage_slider' ) ) : ?>

				<?php while ( have_rows( 'homepage_slider' ) ) : the_row();
					$image = get_sub_field( 'hp_slide_image' );
				?>
				<div class="slide" style="background-image: url( <?php echo $image[ 'url' ]; ?> );" >
					<div class="constrain">
						<div class="slider-text">
							<?php the_sub_field( 'hp_slide_content' ); ?>
						</div>
					</div>
					<div class="hm-vid-overlay"></div>
				</div>

				<?php endwhile; ?>

			<?php endif; ?>

		</div>
	</div><!-- .home-slider -->

	<div id="primary" class="homepage content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'home' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
