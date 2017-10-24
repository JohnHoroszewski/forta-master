<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Forta_Master
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="constrain">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'forta-master' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like you took a wrong turn. Please try another option from our menu.', 'forta-master' ); ?></p>
						
						<?php if ( get_theme_mod( 'forta_master_company_mark' ) ) : ?>
							<div class="company-mark">
								<img src="<?php echo get_theme_mod( 'forta_master_company_mark' ); ?>" alt="Forta Logo Mark">
							</div>
						<?php endif; ?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
