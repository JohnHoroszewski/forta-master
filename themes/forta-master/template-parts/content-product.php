<?php
/**
 * Template part for displaying page content in single-product.php
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

		<section class="header-image" style="background-image: url( '<?php echo get_theme_mod( 'forta_master_post_product' ); ?>' );"></section>
		
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
			
			<?php if ( have_rows( 'sidebar_content' ) ) : ?>
				<?php while ( have_rows( 'sidebar_content' ) ) : the_row(); ?>

					<div class="side-pro-block">
						<?php the_sub_field( 'sidebar_content_block' ); ?>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>

		<?php

			if ( get_field( 'savings_calculator' ) == 'yes' ) : ?>

			<div class="savings-calc">
				<span class="calc-heading">Calculate your savings!</span>
				FORTA-FI<sup>®</sup> your asphalt for Tons of Savings! Compare material costs between a traditional asphalt mix and FORTAfied Asphalt.
				<span class="BoxClick1">
					<a class="OpenCalc" href="#">Open Savings Calculator</a>
				</span>
			</div>

		<?php endif; ?>

		</aside>
	</div>

	<?php if ( get_theme_mod( 'forta_master_large_text' ) ) : ?>
	<section class="pro-cta" style="background-image: url( '<?php echo get_theme_mod( 'forta_master_products_image' ); ?>' );">
		<div class="constrain">
			<div class="left-block">
				<span class="small-text site-font-accent"><?php echo get_theme_mod( 'forta_master_small_text' ); ?></span>
				<span class="large-text top"><?php echo get_theme_mod( 'forta_master_large_top_text' ); ?></span>
				<span class="large-text bottom"><?php echo get_theme_mod( 'forta_master_large_bottom_text' ); ?></span>
			</div>
				<div class="right-block">
					<a class="cta-btn site-accent" href="<?php echo get_theme_mod( 'forta_master_button_link' ); ?>"><?php echo get_theme_mod( 'forta_master_button_text' ); ?></a>
				</div>
		</div>
	</section>
	<?php endif; ?>

	<?php if ( have_rows( 'product_tabs' ) ) : ?>
		<section class="product-details">
			<ul class="product-tabs">
			
				<?php while ( have_rows( 'product_tabs' ) ) : the_row(); ?>

				<!-- convert string to all lowercase -->
				<?php $tabTitle = str_replace( ' ', '', strtolower( substr( get_sub_field( 'tab_title' ), 0, 7 ) ) ); ?>

					<li>
						<a href="#" data-ref="<?php echo $tabTitle ?>"><?php the_sub_field( 'tab_title' ); ?></a>
					</li>
	
				<?php endwhile; ?>

			</ul>
		</section>
		<section class="product-listings">
			<div class="constrain">

				<?php while ( have_rows( 'product_tabs' ) ) : the_row(); ?>

				<!-- convert string to all lowercase -->
				<?php $tabTitle = str_replace( ' ', '', strtolower( substr( get_sub_field( 'tab_title' ), 0, 7 ) ) ); ?>

					<div id="<?php echo $tabTitle; ?>" class="tabBlock">
						<?php the_sub_field( 'tab_content' ); ?>

						<?php if ( get_field( 'video_content' ) == 'no' ) : ?>

							<?php the_sub_field( 'tab_content' ); ?>

						<?php else : ?>
							<div class="video-flex">
								<?php while ( have_rows( 'videos' ) ) : the_row(); ?>

									<div class="video-block">
										<h4><?php the_sub_field( 'video_name' ); ?></h4>
										<div class="video-container">
											<?php the_sub_field( 'video_url' ); ?>
										</div>
										<div class="video-excerpt">
											<?php the_sub_field( 'video_excerpt' ); ?>
										</div>
									</div>

								<?php endwhile; ?>
							</div>
						<?php endif; ?>
					</div>

				<?php endwhile; ?>

			</div>
		</section>

	<?php endif; ?><!-- End Product Details -->

</article><!-- #post-<?php the_ID(); ?> -->

<div id="ContentOverlay">
	<div id="CloseCalc"><a class="CloseCalc" href="#">Close Calculator</a></div>
	<div id="SavingsCalculator">
		<div id="CalcTitle">Calculate Your Savings!</div>
	<!--BeginCalc-->

		<div id="CalcInfo">

			<div id="SelectUnit">
			Select Unit:<input name="radio" type="radio" id="Unit" value="US TON" checked="checked">US Ton<input type="radio" name="radio" id="Unit" value="METRIC TON">Metric Ton
			</div>
			<div id="EnterValues">
				<span id="EnterAsphalt">Enter Asphalt:</span><br>
				<input type="text" name="Asphalt" id="Asphalt">
				<br>
				<span id="EnterAsphaltPrice">Enter Asphalt Price:</span><br>
				<input type="text" name="AsphaltPrice" id="AsphaltPrice">
			</div>
			<input type="button" name="Calculate" id="Calculate" value="Calculate Savings">
		</div>

		<div id="CalcInstructions">
			<strong>FORTA<em>fied</em> asphalt for Tons of Savings!</strong>
			<p>Use our Savings Calculator to compare material costs between a traditional asphalt mixture and FORTA<em>fied</em> Asphalt.</p>
		</div>
			<div id="CalcResults">
				<div id="OriginalProjectCost">Original Asphalt Cost: <span class="Result site-font-accent"></span></div>
				<hr size="1">
				<!--<div id="ReducedMaterial">Asphalt Required with 25% Reduction: <span class="Result"></span></div>-->
				<div id="AdjustedAsphaltCost">Reduction in Asphalt Thickness:
				<select name="Reduction" id="Reduction">
					<option value=".10">10%</option>
					<option value=".15">15%</option>
					<option value=".20">20%</option>
					<option value=".25" selected="selected">25%</option>
					<option value=".30">30%</option>
					<option value=".35">35%</option>
				</select> <br><br>Reduced Asphalt Cost: <span class="Result site-font-accent"></span>
				</div>

				<div id="FORTAFICost">Cost of FORTA-FI (based on MSRP): <span class="Result site-font-accent"></span></div>
				<hr size="1">
				<div id="RevisedFORTAFiedCost">FORTA<em>fied</em> Asphalt Cost = <span class="Result site-font-accent"></span></div>
				<hr size="1">
				<div id="MaterialSavings">Material Cost Savings = <span class="Result site-font-accent"></span></div>
				<div id="ReducedMaterial">Savings in Tons = <span class="Result site-font-accent"></span></div>

			</div>
		<div class="clearer2"></div>
		<!-- EndCalc -->
	</div>
</div> <!-- .ContentOverlay -->
