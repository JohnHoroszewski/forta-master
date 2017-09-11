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
				Homepage Slider Area
		</div>
	</div><!-- .home-slider -->

	<div id="primary" class="homepage content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'home' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
