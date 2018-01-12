<?php
/**
 * Template part for displaying page content in product(s)-template.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Forta_Master
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="products-page-info">
		<div class="constrain">
			<div class="heading-wrapper">
				<h1 class="products-heading"><?php the_title(); ?></h1>
				<div class="custom-hr"></div>
			</div>
			<div class="flexxed">
				<div class="sub-text">
					<?php the_field( 'sub_text' ); ?>
				</div>
				<div class="page-description">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<?php

		$custom_terms = get_terms( 'product_categories' );

		if ( count($custom_terms)  > 1 ) : ?>

	<section class="products-tab-list">
		<div class="constrain">
			<div class="tab-text site-font-accent">Please select a product category below.</div>

				<ul class="product-tabs">

					<?php foreach($custom_terms as $custom_term) {
					    
					    wp_reset_query();
					    
					    $args = array(
					    	'post_type' => 'products',
					        'tax_query' => array(
					            array(
					                'taxonomy' => 'product_categories',
					                'field' => 'slug',
					                'terms' => $custom_term->slug,
					            ),
					        ),
					     );

					     $loop = new WP_Query($args);

					     if( $loop->have_posts() ) { ?>

							<!-- Grab first 4 of Project Category Name to add for tab selector -->
							<?php $ident = str_replace( ' ', '', strtolower( substr( $custom_term->name, 0, 7 ) ) ); ?>

					        <li><a data-ref="tabBlock-<?php echo $ident; ?>" href="#">
								<?php echo $custom_term->name; ?>
							</a></li>

					    <?php }
					} ?>

				</ul>
			</div><!-- .constrain -->
			<div class="product-listings">
				<div class="constrain">

					<?php foreach( $custom_terms as $custom_term ) { ?>

					<!-- Grab first 4 of Project Category Name to add for tab selector -->
					<?php $ident = str_replace( ' ', '', strtolower( substr( $custom_term->name, 0, 7 ) ) ); ?>

					    <div id="tabBlock-<?php echo $ident; ?>" class="tabBlock">
					    <?php wp_reset_query();
					    
					    $args = array(
					    	'post_type' => 'products',
					        'tax_query' => array(
					            array(
					                'taxonomy' => 'product_categories',
					                'field' => 'slug',
					                'terms' => $custom_term->slug,
					            ),
					        ),
					     );

					     $loop = new WP_Query($args);

					     if( $loop->have_posts() ) { ?>


						    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						    	<?php $postId = $post->ID; ?>

								<div class="product-info">

									<?php if ( has_post_thumbnail() ) : ?>

									<div class="products-list-image" style="background-image: url( <?php echo get_the_post_thumbnail_url(); ?> );">
									</div>

									<?php endif; ?>

									<div class="products-lists-text">
										<div class="products-list-heading">
											<div class="subtitle"><?php the_field( 'sub_title', $postId ); ?></div>
											<h2><?php the_title(); ?></h2>
										</div>

										<?php the_excerpt(); ?>

										<?php 	$sds = get_field( 'safety_data_sheet_upload', $postId );
												$fds = get_field( 'technical_data_upload', $postId );
										?>

										<div class="products-btns-wrapper">
											<a target="_blank" href="<?php echo $sds[ 'url' ]; ?>" class="products-btn site-accent-border">SDS</a>
											<a target="_blank" href="<?php echo $fds[ 'url' ]; ?>" class="products-btn site-accent-border">Technical Data</a>
											<a href="<?php the_permalink(); ?>" class="products-btn site-accent-border">More Details</a>
										</div>

									</div><!-- .products-lists-text -->
								</div><!-- .product-info -->

						    <?php endwhile; } ?>

					    </div><!-- .tabBlock -->

					<?php } ?>
					

				</div><!-- .constrain -->
			</div>

		<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->