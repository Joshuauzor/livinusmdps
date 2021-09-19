$(function () {

	"use strict";

	var $document = $(document),
		$window = $(window),
		windowWidth = window.innerWidth || $window.width(),
		windowH = $window.height(),

	// Template Blocks
	themeBlocks = {
		rangeSlider: $('#rangeSlider1'),
		productImage: $("#mainImage"),
		prdCarousel: $('.prd-carousel')
	};

	// rangeSlider
	if (themeBlocks.rangeSlider.length) {
		var rangeSlider1 = document.getElementById('rangeSlider1');
		noUiSlider.create(rangeSlider1, {
			start: [2, 2140],
			connect: true,
			step: 1,
			padding: 10,
			range: {
				'min': -10,
				'max': 4010
			}
		});
		var number1_1 = document.getElementById('number-1-1');
		var number1_2 = document.getElementById('number-1-2');
		rangeSlider1.noUiSlider.on('update', function (values, handle) {
			var value = values[handle];
			if (handle) {
				number1_1.textContent = Math.round(value);
			} else {
				number1_2.textContent = Math.round(value);
			}
		});
		number1_1.addEventListener('change', function () {
			rangeSlider1.noUiSlider.set([this.textContent, null]);
		});
		number1_2.addEventListener('change', function () {
			rangeSlider1.noUiSlider.set([null, this.textContent]);
		});
	}
	
	// product gallery
	if (themeBlocks.productImage.length) {
		var zoomPos = $('body').hasClass('rtl') ? 11 : 1;
		themeBlocks.productImage.elevateZoom({
			gallery: 'productPreviews',
			cursor: 'pointer',
			galleryActiveClass: 'active',
			zoomWindowPosition: zoomPos,
			zoomWindowFadeIn: 500,
			zoomWindowFadeOut: 500,
			lensFadeIn: 500,
			lensFadeOut: 500
		});
		var ezApi = themeBlocks.productImage.data('elevateZoom');
		if ((window.innerWidth || $window.width()) < 769) {
			ezApi.changeState('disable');
		}
		$(window).on('resize', function () {
			if ((window.innerWidth || $window.width()) < 769) {
				ezApi.changeState('disable');
			} else {
				ezApi.changeState('enable');
			}
		});
		$('#productPreviews > a').on('click', function () {
			themeBlocks.productImage.attr({
				src: $(this).attr('data-image'),
				'data-zoom-image': $(this).attr('data-zoom-image')
			});
		});
	}

	// products carousel
	if (themeBlocks.prdCarousel.length) {
		themeBlocks.prdCarousel.slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			infinite: true,
			dots: true,
			arrows: false,
			responsive: [{
				breakpoint: 991,
				settings: {
					slidesToShow: 3
				}
					}, {
				breakpoint: 767,
				settings: {
					slidesToShow: 2
				}
					}, {
				breakpoint: 480,
				settings: {
					slidesToShow: 1
				}
					}]
		});
	}
	
	// icrease/decrease input
	function changeInput() {
		$(document).on('click', '.count-add, .count-reduce', function (e) {
			var $this = $(e.target),
				input = $this.parent().find('.count-input'),
				valString = input.val(),
				valNum = valString.replace(/[^0-9]/g, ''),
				valText = valString.replace(/[0-9]/g, ''),
				v = $this.hasClass('count-reduce') ? valNum - 1 : valNum * 1 + 1,
				min = input.attr('data-min') ? input.attr('data-min') : 0;
			if (v >= min) input.val(v + valText);
			e.preventDefault();
		});
	}
	
	// Header Cart dropdown menu
	function toggleCart(cart, drop) {
		$('> a', $(cart)).on('click', function (e) {
			e.preventDefault();
			$(cart).toggleClass('opened');
		});
		$(document).on('click', function (e) {
			if (!$(e.target).closest(cart).length) {
				if ($(cart).hasClass("opened")) {
					$(cart).removeClass('opened');
				}
			}
		});
	}
	
	changeInput();
	toggleCart('.header-cart', '.header-cart-dropdown');
	
})