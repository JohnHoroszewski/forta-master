jQuery(document).ready(function($) {
	
	var $siteTopLeft = $( '.sitetop-links' ).find( '.top-left' ),
		$sitopLeftHeight = $siteTopLeft.outerHeight(),
		$winWidth = $( window ).width(),
		$winHeight = $( window ).height(),
		$moreEllips = $( '.more-tab' ),
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
		$vidOverlay = $( '.hm-vid-overlay' ),
		// $secHeading = $( '.secondary' ).find( 'h1' ),
		$parentNavItem = $( '#primary-menu > .menu-item-has-children' ),
		$parentIcon = $parentNavItem.find( '.fa' ),
		$faqHeadings = $( '#faqs h3' );

	// If window is smaller than 1024px
	if ( $winWidth < 1024 )
	{
		// Pull menu behind viewport and set width
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

		// Open mobile menu
		$mobileBtn.on( 'click', function()
		{
			$mobileMenu.css( 'left', 0 );

			$mobileClose.on( 'click', function(){
				$mobileMenu.css( 'left', -$winWidth );
			});
		});

		// Open sub menu on menu chevron icon click
		$parentIcon.live( 'click', function(){
			$( this ).closest( 'li' ).find( '.sub-menu' ).slideToggle();
		});
	}

	if ( $winWidth > 1023 ) {

		// Keep secondary page content and sidebar aligned
		// if ( $secHeading.outerHeight() > 55 )
		// {
		// 	$secHeading.css(
		// 	{
		// 		'fontSize' : '40px',
		// 		'height' : '55px'
		// 	});
		// }

		// Parallax effect on secondary page header images
		$( window ).scroll( function(){

			var $headerImage = $( '.header-image' ),
				wScroll = $( this ).scrollTop();

			$headerImage.css({
				'background-position-y' : -wScroll /8,
			});
		});
	}

	// Open form block on 'Request a Quote' click
	$quoteLink.on( 'click', function( e )
	{
		e.preventDefault();
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

	// Add down chevron icon to any menu item with children
	$parentNavItem.prepend( '<i class="fa fa-chevron-down" aria-hidden="true"></i>' );

	// Lock header to top of window navigation when scrollpoint reached
	$( window ).on( 'scroll', function(){

		//  Test if variable has length(on homepage or not)
		if ( $mainHeaderHome.length > 0 ) {

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
		}
	});

	// Initialize slick on homepage for hero slider
	$('.home-bg-slider').slick({
		arrows: true,
		autoplay: true,
		autoplaySpeed: 5000,
		fade: true,
		cssEase: 'linear',
		prevArrow: '<i class="fa fa-caret-left site-accent-border"></i>',
		nextArrow: '<i class="fa fa-caret-right site-accent-border"></i>'
	});

	// Initialize slick on homepage for testimonial slider
	$('.testimonial-slider').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: '<i class="fa fa-chevron-left"></i>',
		nextArrow: '<i class="fa fa-chevron-right"></i>',
		responsive: [
			{
			breakpoint: 1080,
			settings: {
				arrows: false,				
			}
			  },
		  {
			breakpoint: 1023,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			}
		  },
		  {
			breakpoint: 960,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		  },
		  {
			breakpoint: 640,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		  }
		]
	  });

	// Turn text animation on or off depending on current slide
	function textAnimationTimer() {

		setTimeout( function(){
			$currentSlide = $hmSlides.find( '.slick-current' );
			$slide = $( '.slick-current' );
			$noSLide = $( '.slide' ).not( '.slick-current' );
			
			$slide.find( '.animated' ).css( 'display', 'block' );
			$noSLide.find( '.animated' ).css( 'display', 'none' );

			textAnimationTimer();
		}, 100);

	}

	textAnimationTimer();

	// Set 1st product tab and tab content to visible on page load 
	$( '.product-tabs' ).find( 'li' ).first().find( 'a' ).addClass( 'active' );
	$( '.product-listings' ).find( '.tabBlock' ).first().addClass( 'visible' );

	// Tabs
	$( '.product-tabs a' ).on( 'click', function( e ) {

	  e.preventDefault();
	  
	  $allAnchors = $( '.product-tabs li a' ),
	  $clicked = $( this ),
	  $curTab = $clicked.data( 'ref' ),
	  $allTabs = $( '.product-listings' ).find( '.tabBlock' ),
	  $selectedTab = $( '.product-listings' ).find( '#' + $curTab );
	  
	  if ( !$selectedTab.hasClass( '.visible' ) ) {
	   
	    // Remove active from all tabs
	    $allAnchors.removeClass( 'active' );
	 
	    // Add active to clicked tab
	    $clicked.addClass( 'active' );
	    
	    // Hide all tab content
	    $allTabs.removeClass( 'visible' );
	    
	    // Display selected tab content
	    $selectedTab.addClass( 'visible' );
	    
	  } 
	});

	// Initialize Fancybox
	$("a.project_gallery").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	true
	});


	// Set first h3 to opened and open subsequent selectors on page load.
	$faqHeadings.first( 'h3' ).addClass( 'opened' ).nextAll().each(function() {
		if (this.tagName == 'H3') {
		  return false; // stop execution
		}
		$(this).slideDown();
	  });

	// Accordian effect on FAQs
	$faqHeadings.on( 'click', function(){

		if ( $( this ).hasClass( 'opened' ) )
		{
			$( this ).removeClass( 'opened' );
			// Select all next selector until h3 is found
			$(this).nextAll().each(function() {
				if (this.tagName == 'H3') {
				  return false; // stop execution
				}
				$(this).slideUp();
			});
		} else {
			$( this ).addClass( 'opened' );
			// Select all next selector until h3 is found
			$(this).nextAll().each(function() {
				if (this.tagName == 'H3') {
				  return false; // stop execution
				}
				$(this).slideDown();
			});
		}
	});

	// Smooth Scroll for Back To Top Button *Thank you CSS-TRICKS*
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
				return false;
			}
		}
	});

	// Show/Hide Back to Top button on scroll
	$( window ).on( 'scroll', function()
	{
		var $scrolled = $( window ).scrollTop(),
			$btt = $( '.back-to-top' );

		if ( $scrolled > 100 )
		{
			$btt.addClass( 'visible' );
		} else if ( $scrolled < 100 )
		{
			$btt.removeClass( 'visible' );
		}
	});

});
