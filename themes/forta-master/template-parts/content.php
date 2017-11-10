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
		<div class="flex-wrapper">
			<div class="post-content">
				<header class="entry-header">
					<div class="entry-meta">
						<?php echo get_the_date(); ?>
					</div><!-- .entry-meta -->
					<?php
					if ( is_singular() ) : ?>
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<div class="share-article">
							<span class="share-text">Share:</span>
							<a target="_blank" class="share-icon facebook" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
							<a target="_blank" class="share-icon twitter" href="http://twitter.com/intent/tweet?status=<?php the_title(); ?>+<?php the_permalink(); ?>"></a>
							<a target="_blank" class="share-icon linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php echo site_url(); ?>"></a>
							<a target="_blank" class="share-icon tumblr" href="http://www.tumblr.com/share?v=3&u=<?php the_permalink(); ?>&t=<?php the_title(); ?> "></a>
							<a target="_blank" class="share-icon pinterest" href="http://pinterest.com/pin/create/bookmarklet/?media=post&url=<?php the_permalink(); ?>&is_video=false&description=<?php the_title(); ?>"></a>
							<a target="_blank" class="share-icon google" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"></a>
						</div>
					<?php else : ?>
						<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
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
			</div><!-- .post-content -->

			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}  ?>
		</div><!-- .flex-wrapper -->

		<?php if ( is_singular() ) : ?>
			<aside>
				<form role="search" method="get" id="searchform" class="searchform" action="<?php site_url(); ?>">
					<div class="box">
						<div class="container-1">
							<input type="text" value="" name="s" id="s" placeholder="Search..." class="searchfield" />
							<button type="submit" id="searchsubmit" class="searchsubmit"/>
								<span class="icon"><i class="fa fa-search"></i></span>   
							</button>
						</div>
					</div>
				</form>
				<?php if ( is_active_sidebar( 'blog-sidebar' ) )
				{
					dynamic_sidebar( 'blog-sidebar' );
				} ?>
			</aside>
		<?php endif; ?>

	</div><!-- .constrain -->
</article><!-- #post-<?php the_ID(); ?> -->