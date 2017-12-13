<?php
/**
 * Template part for displaying page content in general-template.php
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

		<section class="header-image" style="background-image: url( '<?php echo get_theme_mod( 'forta_master_page_general' ); ?>' );"></section>
		
	<?php endif; ?>
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="constrain">
		<div class="main-block">
			<header class="entry-header">
				<div class="subtitle site-font-accent"><?php the_field( 'sub_title' ); ?></div>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">

				<?php if ( get_field( 'industry_links_options' ) == 'yes' ) : ?>

					<div class="industry-links-wrapper">
						<?php the_content(); ?>
					</div>

				<?php else : ?>

					<?php the_content(); ?>
				
				<?php endif; ?>
			</div><!-- .entry-content -->
		</div><!-- .main-block -->
		<aside class="product-sidebar">
			
			<?php // If have sidebar menu, display here

				if ( get_field( 'sidebar_menu_choice' ) == 'yes' ) : ?>

				<!-- If select is about then show About sidebar | If select is resource then show Resource sidebar -->
					<?php if ( get_field( 'sidebar_menu' ) == 'about' ) : ?>

						<?php dynamic_sidebar( 'about_sidebar' ); ?>			

					<?php elseif ( get_field( 'sidebar_menu' ) == 'news' ) : ?>

						<?php dynamic_sidebar( 'news_sidebar' ); ?>

					<?php endif; ?>
					
			<?php endif; ?>


			<?php // If have sidebar content blocks, display here

				if ( have_rows( 'sidebar_content_blocks' ) ) : 

					while ( have_rows( 'sidebar_content_blocks' ) ) : the_row(); ?>

						<?php the_sub_field( 'general_block' ); ?>

					<?php endwhile; ?>

			<?php endif; ?>

	

		</aside>
	</div><!-- .constrain -->

	<?php

		if ( have_rows( 'training_blocks' ) ) : ?>

		<section class="training">
			<div class="constrain">

				<?php while ( have_rows( 'training_blocks' ) ) : the_row(); ?>

					<div class="training-block">

						<h3 class="training-heading"><?php the_sub_field( 'seminar_training_title' ); ?></h3>
						
						<div class="training-details">
							
							<?php if ( get_sub_field( 'training_credits' ) ) : ?>

								<div class="detail"><strong>Credit:</strong> <?php the_sub_field( 'training_credits' ); ?></div>

							<?php endif; ?>

								<div class="detail"><strong>Length:</strong> <?php the_sub_field( 'seminar_length' ); ?> minutes</div>

							<?php if ( get_sub_field( 'cost_option' ) == 'yes' ) : ?>

								<div class="detail"><strong>Cost:</strong> <?php the_sub_field( 'cost_for_seminar_training' ); ?></div>

							<?php else : ?>

								<div class="detail"><strong>Cost:</strong> There is no charge</div>

							<?php endif; ?>

							<a target="_blank" class="border-btn training-preview" href="<?php the_sub_field( 'seminar_preview_file' ); ?>">Seminar Overview</a>

						</div><!-- .training-details -->

					</div><!-- .training-block -->

				<?php endwhile; ?>
			
			</div><!-- .constrain -->
		</section>

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