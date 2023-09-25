(function($) {
	
	/** Touchscreen compatibility for dropdown menus */
	if ( typeof(window.ontouchstart) != 'undefined' ) {
		$('.touchscreen_compatible > li > a').click(function() {
			var allLis = $('.touchscreen_compatible > li');
			var currentLi = $(this).parent();
			
			// Follow the link if it is already selected or has no child menu
			if ( currentLi.hasClass('touchscreen_selected') || !currentLi.children('ul').length ) {
				return;
			} else {
				allLis.removeClass('touchscreen_selected');
				currentLi.addClass('touchscreen_selected');
			}
			
			return false;
		});
	}
	
	
	/** Add special classes to header menu */
	$('.menu ul').parent('li').addClass('parent');
	$('.menu ul li:last-child').addClass('last');
	
	
	/** Mobile device menu */
	$pageContainer = $('body > .layer_2');
	$responsiveMenu = $('#responsive_menu');
	
	$('#responsive_menu_button').click(function(event) {
		event.preventDefault();
		
		if ( !$responsiveMenu.attr('data-extended') ) {
			$responsiveMenu.show();		
			$pageContainer.addClass('menu_revealed');
			
			setTimeout(function() {
				$responsiveMenu.attr('data-extended', true);
			}, 200);
		}
	});
	
	$pageContainer.click(function(event) {
		if ( $responsiveMenu.attr('data-extended') ) {
			event.preventDefault();
			
			$pageContainer.removeClass('menu_revealed');
			$responsiveMenu.attr('data-extended', null);
			
			setTimeout(function() {
				$responsiveMenu.hide();
			}, 200);
		}
	});
	
	
	/** Initialize WOW.js */
	new WOW({
		mobile: false
	}).init();
	
	
	/** Front Page Slider */
	var bannerText = $('#banner_text');
	
	$('#banner').on('cycle-before', function() {
		bannerText
			.removeClass()
			.addClass('fadeOutDownSmall animated');
	});
	
	$('#banner').on('cycle-after', function() {
		bannerText
			.removeClass()
			.addClass('fadeInUpSmall animated')
			.css('visibility', 'visible')
			.find('.layer_2').html( $('.banner_text_source', this).html() );
	});
	
	
	/** Calls to Action Carousel */
	$('#calls_to_action-carousel').owlCarousel({
		items: 3,
		autoplay: true,
		autoplayTimeout: 7000,
		autoplaySpeed: 500,
		navSpeed: 500,
		rewind: true,
		responsiveRefreshRate: 50,
		mouseDrag: false,
		nav: true,
		dots: false,
		/*afterUpdate: centerCarouselButtons,
		afterInit: function(elem) {
			setTimeout(centerCarouselButtons, 200, elem);
		}*/
	});
	
	/*function centerCarouselButtons(elem) {
		$buttons = $('.owl-prev, .owl-next', elem);
		
		$buttons.css({top: ($(elem).innerHeight() - $buttons.outerHeight() ) / 2});
	};*/
	
	/** Testimonials */
	$('#testimonials-carousel').owlCarousel({
		responsive: {
			0: {items: 1},
			480: {items: 2},
			768: {items: 3},
		},
		margin: 50,
		autoplay: true,
		autoplayTimeout: 7000,
		autoplaySpeed: 500,
		navSpeed: 500,
		rewind: true,
		responsiveRefreshRate: 50,
		mouseDrag: false,
		dots: false
	});
	
	/** Accordion Function */
	/*$('.toggle.outside, .toggle.inside').click(function(e) {
		e.preventDefault();
		
		var $this = $(this);
		
		if ( $this.next().hasClass('show') ) {
			$this.next()
				.removeClass('show')
				.slideUp(350);
		} else {
			$this.parent().parent().find('li .inner')
				.removeClass('show')
				.slideUp(350);
			
			$this.next()
				.toggleClass('show')
				.slideToggle(350);
		}
		
		if ( $this.next().parent().hasClass('up') ) {
			$this.next().parent().removeClass('up');
		} else {
			$this.parent().parent().find('li').removeClass('up');
			$this.next().parent().toggleClass('up');
		}
	});*/
	
	$('.ui-accordion').accordion({
		active: false,
		collapsible: true,
		heightStyle: 'content'
	});
	
})(jQuery);