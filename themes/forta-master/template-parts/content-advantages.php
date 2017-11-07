<?php
/**
 * Template part for displaying page content in advantage(s)-template.php
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

	<section class="products-tab-list">
        <div class="product-listings">
            <div class="constrain">
                    
                <?php 

                    $args = array(
                        'post_type' => 'advantage',
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

                                    <div class="products-btns-wrapper">
                                        <a href="<?php the_permalink(); ?>#faqs" class="products-btn site-accent-border">FAQs</a>
                                        <a href="<?php the_permalink(); ?>" class="products-btn site-accent-border">More Details</a>
                                        <a href="#" class="products-btn site-accent-border">Request a Quote</a>
                                    </div>

                                </div><!-- .products-lists-text -->
                            </div><!-- .product-info -->

                        <?php endwhile; } ?>


            </div><!-- .constrain -->
        </div>
    </section>

</article><!-- #post-<?php the_ID(); ?> -->