<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Forta_Master
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-posts' ); ?>>
	<div class="constrain">
		<div class="post-content">
			<header class="entry-header">
				<div class="entry-meta">
					<?php echo get_the_date(); ?>
				</div><!-- .entry-meta -->
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>

				<?php
				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php

					if ( is_singular() ) :
						the_content();
					else :
						the_excerpt();
						echo '<a class="border-btn solid-white" href="' . get_permalink() . '">Read More</a>';
					endif;

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'forta-master' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</div>

	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	}  ?>

</div>
</article><!-- #post-<?php the_ID(); ?> -->
