<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forta_Master
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="main-footer">
			<div class="constrain flexxed">
				<div class="footer-block">
					<div class="footer-snippet">
						<?php echo get_theme_mod( 'forta_master_company_snippet' ); ?>
					</div>
					<div class="compinfo flexxed">
						<div class="compinfo-column">
							<div class="footer-logo">
								<img src="<?php echo esc_url( get_theme_mod( 'forta_master_logo' ) ); ?>" alt="">
							</div>
							<div class="footer-address flexxed">
								<span class="address"><?php echo get_theme_mod( 'forta_master_company_street' ); ?></span>
								<span class="address"><?php echo get_theme_mod( 'forta_master_company_city' ); ?>, <?php echo get_theme_mod( 'forta_master_company_state' ); ?></span>
								<span class="address"><?php echo get_theme_mod( 'forta_master_company_zip' ); ?> <?php echo get_theme_mod( 'forta_master_company_country' ); ?></span>
							</div>
						</div>
						<div class="footer-contact compinfo-column">
								<?php if ( get_theme_mod( 'forta_master_company_phone' ) ) : ?>
									<span class="contact">
										<span class="title">Phone:</span> <a href="<?php echo get_theme_mod( 'forta_master_company_phone' ); ?>"><?php echo get_theme_mod( 'forta_master_company_phone' ); ?></a>
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
					<div class="footer-motto motto site-font-accent">
						<?php printf( get_bloginfo ( 'description' ) ); ?>
					</div>
				</div><!-- .footer-block -->
				<div class="footer-block footer-menus">
					<div class="footer-menu">
						<?php if ( is_active_sidebar( 'footer-column-one' ) ) : ?>

							<?php dynamic_sidebar( 'footer-column-one' ); ?>

						<?php endif; ?>
					</div>
					<div class="footer-menu">
						<?php if ( is_active_sidebar( 'footer-column-two' ) ) : ?>

							<?php dynamic_sidebar( 'footer-column-two' ); ?>

						<?php endif; ?>
					</div>
				</div><!-- .footer-block -->
			</div><!-- .constrain -->
		</div><!-- .main-footer -->
		<div class="legal site-accent">
			<div class="constrain flexxed">
				<div class="footer-block footer-block-left">
					<div class="legal-box">
						&copy;<?php the_date( 'Y' ); ?> - <?php bloginfo( 'name' ); ?>&nbsp;Corporation
					</div>
					<div class="legal-box">All Rights Reserved</div>
					<div class="legal-box"><?php if ( get_theme_mod( 'forta_privacy_policy' ) ){ echo '<a href="' . get_theme_mod( 'forta_privacy_policy' ) . '">Privacy Policy</a>'; }?></div>
				</div><!-- .footer-block -->
				
				<div class="footer-block footer-block-right">
				<a href="<?php echo site_url(); ?>/wp-admin">
					<i style="margin: 0 10px 0 0;" class="fa fa-wrench" aria-hidden="true"></i>

					<?php if ( is_user_logged_in() ) : ?>
						<!-- Show sales portal login if logged in -->
						<a class="sales-link" style="margin: 0 20px 0 10px;" href="<?php echo site_url(); ?>/sales-documents">Sales Portal</a>	
					<?php endif; ?>

				</a>
				Made in the U.S.A.
			</div><!-- .footer-block -->
				
			</div>
		</div><!-- .legal -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<a id="btt-button" class="back-to-top site-accent" href="#top" ></a>

<?php wp_footer(); ?>

</body>
</html>
