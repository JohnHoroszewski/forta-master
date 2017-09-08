jQuery(document).ready(function($) {
	
	var $siteTopLeft = $( '.sitetop-links' ).find( '.top-left' ),
		$sitopLeftHeight = $siteTopLeft.outerHeight(),
		$winWidth = $( window ).width(),
		$moreEllips = $( '#more-ellipsis' ),
		$topLeftClose = $siteTopLeft.find( '#close-this' ),
		$quoteLink = $( '.top-quote a' ),
		$topForm = $( '.top-form' ),
		$topFormClose = $topForm.find( '#close-this' ),
		$mainHeader = $( '.main-header' ),
		$mobileBtn = $mainHeader.find( '.mobile-nav-btn' ),
		$mobileMenu = $( '.mobile-nav' ),
		$mobileNavHeight = $mobileMenu.outerHeight(),
		$mobileClose = $mobileMenu.find( '#close-this' );

	console.log( $mobileNavHeight );
	console.log( $winWidth );

	// If window is smaller than 1024px
	if ( $winWidth <= 1024 )
	{
		// Pull menu up above viewport
		$siteTopLeft.css( 'top', -$sitopLeftHeight );
		$mobileMenu.css( 'top', -$mobileNavHeight );

		// Move menu down on 'Ellipses' click
		$moreEllips.on( 'click', function()
		{
			$siteTopLeft.css( 'top', 0 );

			// Close menu
			$topLeftClose.on( 'click', function()
			{
				$siteTopLeft.css( 'top', -$sitopLeftHeight );
			});
		});

		$mobileBtn.on( 'click', function()
		{
			$mobileMenu.css( 'top', 0 );

			$mobileClose.on( 'click', function(){
				$mobileMenu.css( 'top', -$mobileNavHeight );
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