<?php
/**
 * Template Name: Homepage Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Forta_Master
 */

get_header(); ?>

	<div class="home-slider">	
		
		<div class="home-bg-slider">
			
			<!-- Iterate through fields for slick slider -->
			<?php if ( have_rows( 'homepage_slider' ) ) : ?>

				<?php $i = 0; ?>

				<?php while ( have_rows( 'homepage_slider' ) ) : the_row();
					$type = get_sub_field( 'slide_type' );
				?>
				<div class="slide">
				
					<?php if ( $type == 'video' ) : ?>

						<video controls="false" muted id="video-<?php echo $i; ?>" class="hp-slider-element video" src="<?php the_sub_field( 'slide_type_content' ); ?>" type="video/mp4" loop></video>

					<?php else : ?>

						<img class="hp-slider-element" src="<?php the_sub_field( 'slide_type_content' ); ?>" alt="">

					<?php endif; ?>

					<div class="constrain">
						<div class="slider-text">
							<?php the_sub_field( 'hp_slide_content' ); ?>
						</div>
					</div>
					<div class="hm-vid-overlay"></div>
				</div>

				<?php $i++; ?>
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
