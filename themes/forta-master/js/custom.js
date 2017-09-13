jQuery(document).ready(function($) {
	
	var $siteTopLeft = $( '.sitetop-links' ).find( '.top-left' ),
		$sitopLeftHeight = $siteTopLeft.outerHeight(),
		$winWidth = $( window ).width(),
		$winHeight = $( window ).height(),
		$moreEllips = $( '#more-ellipsis' ),
		$topLeftClose = $siteTopLeft.find( '#close-this' ),
		$quoteLink = $( '.top-quote a' ),
		$topForm = $( '.top-form' ),
		$topFormClose = $topForm.find( '#close-this' ),
		$mainHeader = $( '.main-header' ),
		$mainHeaderHome = $( '.page-template-homepage .main-header' ),
		$headerBlock = $( '.main-header' ).outerHeight(),
		$mobileBtn = $mainHeader.find( '.mobile-nav-btn' ),
		$mobileMenu = $( '.mobile-nav' ),
		$mobileNavHeight = $mobileMenu.outerHeight(),
		$mobileClose = $mobileMenu.find( '#close-this' ),
		$hmSlides = $( '.home-slider' ).find( '.slide' ),
		$vidOverlay = $( '.hm-vid-overlay' );

	// If window is smaller than 1024px
	if ( $winWidth < 1024 )
	{
		// Pull menu up above viewport
		$siteTopLeft.css( 'top', -$sitopLeftHeight );
		$mobileMenu.css( 'left', -$winWidth );
		$topForm.css( 'width', $winWidth );
		$siteTopLeft.css( 'width', $winWidth );

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
			$mobileMenu.css( 'left', 0 );

			$mobileClose.on( 'click', function(){
				$mobileMenu.css( 'left', -$winWidth );
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

	// Set homepage slider height
	$vidOverlay.css( 'height', $winHeight );
	$hmSlides.css( 'height', $winHeight );

	// On window height change update window vh size
	$( window ).resize( function()
	{
		$winHeight = $( window ).height(),
		$vidOverlay.css( 'height', $winHeight );
		$hmSlides.css( 'height', $winHeight );
	});

	// Lock header to top of window navigation when scrollpoint reached
	$( window ).on( 'scroll', function(){
		var $winScroll = $( window ).scrollTop(),

			$headerScroll = $mainHeaderHome.offset().top,
			$contentScroll = $( '.homepage.content-area' ).offset().top,
			$topOffset = $winScroll + $sitopLeftHeight;
			$blockHeight = $sitopLeftHeight + $headerBlock;


			if ( $headerScroll < $topOffset )
			{
				$mainHeader.addClass( 'locked' );
			}

			if ( $contentScroll > $winScroll + $blockHeight )
			{
				$mainHeader.removeClass( 'locked' );
			}

	});

	// Initialize slick on homepage
	$('.home-bg-slider').slick({
		arrows: true,
		fade: true,
		cssEase: 'linear'
	});
});