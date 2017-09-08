jQuery(document).ready(function($) {
	
	var $siteTopLeft = $( '.sitetop-links' ).find( '.top-left' ),
		$sitopLeftHeight = $siteTopLeft.outerHeight(),
		$winWidth = $( window ).width(),
		// $winHeight = $( window ).height(),
		$moreEllips = $( '#more-ellipsis' ),
		$closeTopLeft = $siteTopLeft.find( '#close-this' ),
		$quoteLink = $( '.top-quote a' ),
		$topForm = $( '.top-form' ),
		$topFormClose = $topForm.find( '#close-this' ),
		$mainHeader = $( '.main-header' );

	console.log( $sitopLeftHeight );
	console.log( $winWidth );

	// If window is smaller than 1024px
	if ( $winWidth <= 1024 )
	{
		// Pull menu up above viewport
		$siteTopLeft.css( 'top', -$sitopLeftHeight );

		// Move menu down on 'Ellipses' click
		$moreEllips.on( 'click', function()
		{
			$siteTopLeft.css( 'top', 0 );

			// Close menu
			$closeTopLeft.on( 'click', function()
			{
				$siteTopLeft.css( 'top', -$sitopLeftHeight );
			});
		});
	}

	// Open form block on 'Request a Quote' click
	$quoteLink.on( 'click', function()
	{
		$topForm.css( 'height', 'calc(100vh - 80px )' );

		// Close form block on 'Close' click
		$topFormClose.on( 'click', function()
		{
			$topForm.css( 'height', 0 );
		});
	});

});