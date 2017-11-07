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
		// FAQ Info Wrapper
		array(  
			'title' => 'FAQ\'s Text',  
			'selector' => '',  
			'classes' => 'info',
			'wrapper' => true,
		),
		// Button styles
		array(  
			'title' => 'Border Button Docx',  
			'selector' => 'span, a',
			'classes' => 'border-btn docx',
			'wrapper' => false,
		),
		array(  
			'title' => 'Border Button PDF',  
			'selector' => 'span, a',  
			'classes' => 'border-btn pdf',
			'wrapper' => false,
		),
		array(  
			'title' => 'Border Button',  
			'selector' => 'span, a',  
			'classes' => 'border-btn',
			'wrapper' => false,
		),
		// Headings, spans and paragraphs
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