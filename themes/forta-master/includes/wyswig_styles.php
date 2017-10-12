<?php 

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Border Button',  
			'selector' => 'span, a',  
			'classes' => 'border-btn',
			'wrapper' => false,
		),
		array(  
			'title' => 'Fade In Down',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'fadeInDown animated',
			'wrapper' => false,
		),
		array(  
			'title' => 'Fade In Up',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'fadeInUp animated',
			'wrapper' => false,
		),
		array(  
			'title' => 'Fade In Left',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'fadeInLeft animated',
			'wrapper' => false,
		),
		array(  
			'title' => 'Fade In Right',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'fadeInRight animated',
			'wrapper' => false,
		),
		array(  
			'title' => 'Slide In Down',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'slideInDown animated',
			'wrapper' => false,
		),
		array(  
			'title' => 'Slide In Up',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'slideInUp animated',
			'wrapper' => false,
		),
		array(  
			'title' => 'Slide In Left',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'slideInLeft animated',
			'wrapper' => false,
		),
		array(  
			'title' => 'Slide In Right',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'slideInRight animated',
			'wrapper' => false,
		),
		array(  
			'title' => 'Zoom In',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'zoomIn animated',
			'wrapper' => false,
		),
		// Buttons
		array(  
			'title' => 'Fade In Down Button',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'fadeInDown animated slider-btn',
			'wrapper' => false,
		),
		array(  
			'title' => 'Fade In Up Button',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'fadeInUp animated slider-btn',
			'wrapper' => false,
		),
		array(  
			'title' => 'Fade In Left Button',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'fadeInLeft animated slider-btn',
			'wrapper' => false,
		),
		array(  
			'title' => 'Fade In Right Button',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'fadeInRight animated slider-btn',
			'wrapper' => false,
		),
		array(  
			'title' => 'Slide In Down Button',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'slideInDown animated slider-btn',
			'wrapper' => false,
		),
		array(  
			'title' => 'Slide In Up Button',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'slideInUp animated slider-btn',
			'wrapper' => false,
		),
		array(  
			'title' => 'Slide In Left Button',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'slideInLeft animated slider-btn',
			'wrapper' => false,
		),
		array(  
			'title' => 'Slide In Right Button',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'slideInRight animated slider-btn',
			'wrapper' => false,
		),
		array(  
			'title' => 'Zoom In Button',  
			'selector' => 'span, p, a, h1, h2, h3, h4',  
			'classes' => 'zoomIn animated slider-btn',
			'wrapper' => false,
		),
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array[ 'style_formats' ] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );  