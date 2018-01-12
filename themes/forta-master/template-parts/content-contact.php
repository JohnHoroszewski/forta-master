<?php
/**
 * Template part for displaying page content in contact-templatge.php
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

		<section class="header-image" style="background-image: url( '<?php echo get_theme_mod( 'forta_master_page_contact' ); ?>' );"></section>

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
			
			<?php if ( have_rows( 'sidebar_content_blocks' ) ) : ?>
				<?php while ( have_rows( 'sidebar_content_blocks' ) ) : the_row(); ?>

					<div class="side-pro-block">
						<?php the_sub_field( 'content_block' ); ?>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>

			<?php if ( get_field( 'company_information' ) == 'yes' ) : ?>

				<div class="sidebar-comp-info">
					<div class="top-info">
						<span class="address"><?php echo get_theme_mod( 'forta_master_company_street' ); ?></span>
						<span class="address"><?php echo get_theme_mod( 'forta_master_company_city' ); ?>, <?php echo get_theme_mod( 'forta_master_company_state' ); ?></span>
						<span class="address"><?php echo get_theme_mod( 'forta_master_company_zip' ); ?> <?php echo get_theme_mod( 'forta_master_company_country' ); ?></span>
					</div>
					<div class="bottom-info">
						<?php if ( get_theme_mod( 'forta_master_company_phone' ) ) : ?>
							<span class="contact">
								<span class="title">Phone:</span> <a href="tel:<?php echo get_theme_mod( 'forta_master_company_phone' ); ?>"><?php echo get_theme_mod( 'forta_master_company_phone' ); ?></a>
							</span>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'forta_master_company_tollfree' ) ) : ?>
							<span class="contact">
								<span class="title">Toll Free:</span> <a href="<?php echo get_theme_mod( 'forta_master_company_tollfree' ); ?>"><?php echo get_theme_mod( 'forta_master_company_tollfree' ); ?></a>
							</span>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'forta_master_company_fax' ) ) : ?>
							<span class="contact">
								<span class="title">Fax:</span> <?php echo get_theme_mod( 'forta_master_company_fax' ); ?>
							</span>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'forta_master_company_email' ) ) : ?>
							<span class="contact">
								<span class="title">Email:</span> <a href="mailto:<?php echo get_theme_mod( 'forta_master_company_email' ); ?>?subject=Contact from website"><?php echo get_theme_mod( 'forta_master_company_email' ); ?></a>
							</span>
						<?php endif; ?>
					</div>
				</div>

			<?php endif; ?>
		</aside>
	</div>

	<section class="gmap">
		
		<?php echo get_theme_mod( 'forta_master_company_gmap' ); ?>

	</section>



</article><!-- #post-<?php the_ID(); ?> -->
