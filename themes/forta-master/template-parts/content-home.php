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
	<div class="constrain">
		<div class="entry-content">
			<?php
				the_content();
			?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->