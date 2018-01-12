<?php
/**
 * Template part for displaying page content in multi-template.php
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
		
	<?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="advantage-top">
		<div class="constrain">
			<div class="flexed">
				<div class="module-half">

					<h1 class="advantage-title"><?php the_field( 'advantage_title' ); ?></h1>
					<?php the_field( 'top_page_left_content_column' ); ?>

				</div>
				<div class="module-half">

					<?php the_field( 'top_page_right_content_column' ); ?>

				</div>
			</div>
		</div>
	</section>

	<?php if ( have_rows( 'modules' ) ) : ?>

		<?php while ( have_rows( 'modules' ) ) : the_row(); ?>

			<?php if ( get_row_layout() == 'full_width_module' ) : ?>
				<?php $bgColor = get_sub_field( 'gray_background' ); ?>

				<section class="multi-module full-width <?php echo $bgColor; ?>">

					<div class="constrain">
						<?php if ( get_sub_field( 'module_title' ) ) : ?>
							<h2><?php the_sub_field( 'module_title' ); ?></h2>
						<?php endif; ?>
						<?php if ( get_sub_field( 'module_intro_content' ) ) : ?>
							<div class="module-intro"><?php the_sub_field( 'module_intro_content' ); ?></div>
						<?php endif; ?>
						<div class="full-width-content"><?php the_sub_field( 'full_width_content' ); ?></div>
						<?php if ( get_sub_field( 'module_ending_text' ) ) : ?>
							<div class="module-ending"><?php the_sub_field( 'module_ending_text' ); ?></div>
						<?php endif; ?>
					</div>

				</section><!-- .multi-module .full-width -->

			<?php elseif ( get_row_layout() == '50_and_50_module' ) : ?>
				<?php $bgColor = get_sub_field( 'gray_background' ); ?>

				<section class="multi-module half-n-half <?php echo $bgColor; ?>">

					<div class="constrain">
						<?php if ( get_sub_field( 'module_title' ) ) : ?>
							<h2><?php the_sub_field( 'module_title' ); ?></h2>
						<?php endif; ?>
						<?php if ( get_sub_field( 'module_intro_content' ) ) : ?>
							<div class="module-intro"><?php the_sub_field( 'module_intro_content' ); ?></div>
						<?php endif; ?>
						<div class="flexed">
							<div class="half-width-content"><?php the_sub_field( 'left_half_content' ); ?></div>
							<div class="half-width-content"><?php the_sub_field( 'right_half_content' ); ?></div>
						</div>
						<?php if ( get_sub_field( 'module_ending_text' ) ) : ?>
							<div class="module-ending"><?php the_sub_field( 'module_ending_text' ); ?></div>
						<?php endif; ?>
					</div>

				</section><!-- .multi-module .half-n-half -->

			<?php elseif ( get_row_layout() == '3_column_module' ) : ?>
				<?php $bgColor = get_sub_field( 'gray_background' ); ?>

				<section class="multi-module thirds <?php echo $bgColor; ?>">

					<div class="constrain">
						<?php if ( get_sub_field( 'module_title' ) ) : ?>
							<h2><?php the_sub_field( 'module_title' ); ?></h2>
						<?php endif; ?>
						<?php if ( get_sub_field( 'module_intro_text' ) ) : ?>
							<div class="module-intro"><?php the_sub_field( 'module_intro_text' ); ?></div>
						<?php endif; ?>
						<div class="flexed">
							<div class="onethird-width-content"><?php the_sub_field( 'first_column_content' ); ?></div>
							<div class="onethird-width-content"><?php the_sub_field( 'second_column_content' ); ?></div>
							<div class="onethird-width-content"><?php the_sub_field( 'third_column_content' ); ?></div>
						</div>
						<?php if ( get_sub_field( 'module_ending_text' ) ) : ?>
							<div class="module-ending"><?php the_sub_field( 'module_ending_text' ); ?></div>
						<?php endif; ?>
					</div>

				</section><!-- .multi-module .thirds -->

			<?php elseif ( get_row_layout() == '1_third_and_2_thirds' ) : ?>
				<?php $bgColor = get_sub_field( 'gray_background' ); ?>

				<section class="multi-module oneandtwo-thirds <?php echo $bgColor; ?>">

					<div class="constrain">
						<?php if ( get_sub_field( 'module_title' ) ) : ?>
							<h2><?php the_sub_field( 'module_title' ); ?></h2>
						<?php endif; ?>
						<?php if ( get_sub_field( 'module_intro_text' ) ) : ?>
							<div class="module-intro"><?php the_sub_field( 'module_intro_text' ); ?></div>
						<?php endif; ?>
						<div class="flexed">
							<div class="onethird-width-content"><?php the_sub_field( 'left_content' ); ?></div>
							<div class="twothird-width-content"><?php the_sub_field( 'right_content' ); ?></div>
						</div>
						<?php if ( get_sub_field( 'module_ending_text' ) ) : ?>
							<div class="module-ending"><?php the_sub_field( 'module_ending_text' ); ?></div>
						<?php endif; ?>
					</div>

				</section><!-- .multi-module .oneandtwo-thirds -->

			<?php elseif ( get_row_layout() == '2_thirds_and_1_third' ) : ?>
				<?php $bgColor = get_sub_field( 'gray_background' ); ?>

				<section class="multi-module twoandone-thirds <?php echo $bgColor; ?>">

					<div class="constrain">
						<?php if ( get_sub_field( 'module_title' ) ) : ?>
							<h2><?php the_sub_field( 'module_title' ); ?></h2>
						<?php endif; ?>
						<?php if ( get_sub_field( 'module_intro_text' ) ) : ?>
							<div class="module-intro"><?php the_sub_field( 'module_intro_text' ); ?></div>
						<?php endif; ?>
						<div class="flexed">
							<div class="twothird-width-content"><?php the_sub_field( 'left_content' ); ?></div>
							<div class="onethird-width-content"><?php the_sub_field( 'right_content' ); ?></div>
						</div>
						<?php if ( get_sub_field( 'module_ending_text' ) ) : ?>
							<div class="module-ending"><?php the_sub_field( 'module_ending_text' ); ?></div>
						<?php endif; ?>
					</div>

				</section><!-- .multi-module .twoandone-thirds -->

			<?php endif; ?>

		<?php endwhile; ?>

	<?php endif; ?>

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
		<br><br>
		<!-- EndCalc -->
	</div>
</div> <!-- .ContentOverlay -->
