$(function () {

	"use strict";

	var $document = $(document),
		$window = $(window),
		windowWidth = window.innerWidth || $window.width(),
		windowH = $window.height();

	// Template options
	var templateOption = {
			mobileMenuBreikpont: 1023,
			smoothScroll: false, // smooth scroll enable (set 'false' for disable)
			backToTop: true // back to top button enable (set 'false' for disable)
		},
		// Google map options
		googleMapOption = {
			latitude: 59.3,
			longitude: 18.0941403,
			zoom: 14,
			marker: [
				['Our Clinic', 59.3, 18.0941403, 1, 'images/map-marker.png']
			]
		},

		// Template Blocks
		blocks = {
			mainSlider: $('.main-slider'),
			servicesCarousel: $('.js-services-carousel'),
			icnCarousel: $('.js-icn-carousel'),
			icnAltCarousel: $('.js-icn-text-alt-carousel'),
			counterCarousel: $('.js-counter-carousel'),
			specialCarousel: $('.js-special-carousel'),
			reviewsCarousel: $('.js-reviews-carousel'),
			singleCarousel: $('.js-slider-single'),
			googleMapHeader: 'googleMapDrop',
			googleMapContact: 'googleMapContact',
			galleryMain: '.js-slider-gallery-main',
			galleryThumbs: '.js-slider-gallery-thumbs',
			isotopeGallery: $('.gallery-isotope'),
			specialistCarousel: $('.js-specialist-carousel'),
			postGallery: $('.blog-isotope'),
			counterBlock: $('.counter-box'),
			postCarousel: $('.js-post-carousel'),
			singleServiceCarousel: $('.js-single-service-carousel'),
			testimonialCarousel: $('.js-testimonial-card-carousel'),
			blogCarousel: $('.js-blog-grid-carousel'),
			blogCarouselFull: $('.js-blog-grid-carousel-full'),
			galleryHoverCarousel: $('.js-gallery-hover-carousel'),
			reviewsTextCarousel: $('.js-reviews-text-carousel'),
			serviceBoxRotator: $('.js-service-box-rotator'),
			service2Carousel: $('.js-service-card-style2-carousel'),
			specialist2Carousel: $('.js-specialist-carousel2'),
			equipmentCarousel: $('.js-equipment-carousel'),
			reviews2Carousel: $('.js-reviews-carousel2'),
			pricesCarousel: $('.js-prices-carousel')
		};


	// Detect Touch Devices
	window.mobileCheck = function () {
		var i = !1;
		return function (a) {
			(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) && (i = !0)
		}(navigator.userAgent || navigator.vendor || window.opera), i
	};
	var isTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;
	if (isTouch) {
		$('body').addClass('touch');
	}

	if (templateOption.preloader) {
		$('.loading-body').delay(1500).fadeOut(750);
	} else $('.loading-body').remove();

	// Time Out Resize (Debouncer)
	function debouncer(func, timeout) {
		var timeoutID,
			timeout = timeout || 500;
		return function () {
			var scope = this,
				args = arguments;
			clearTimeout(timeoutID);
			timeoutID = setTimeout(function () {
				func.apply(scope, Array.prototype.slice.call(args));
			}, timeout);
		};
	}

	// Main Slider
	if (blocks.mainSlider.length) {
		var $el = blocks.mainSlider;
		$el.each(function () {
			$el.find('.slide').first().find('.img--holder').imagesLoaded({
				background: true
			}, function () {
				setTimeout(function () {
					$el.on('init', function (e, slick) {
						var $firstAnimatingElements = $('div.slide:first-child').find('[data-animation]');
						doAnimations($firstAnimatingElements);
					});
					$el.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
						var $currentSlide = $('div.slide[data-slick-index="' + nextSlide + '"]');
						var $animatingElements = $currentSlide.find('[data-animation]');
						doAnimations($animatingElements);
					});
					$el.slick({
						autoplay: true,
						autoplaySpeed: 6000,
						cssEase: 'ease-in-out',
						fade: true,
						speed: 1000,
						pauseOnHover: false
					});
					$el.parent().find('.loading-content').addClass('disable');
				}, 500);
			})
		})
	}

	// Sticky Elements
	$.fn.stickyEl = function () {
		var $stickyNav,
			$stickyForm,
			offset = $('#mainSliderWrapper').length ? $('#mainSliderWrapper').height() : 0,
			stickyNavHeight = 98,
			headerContentPad = 9;
	
			if ($.cookie('closePanel') == 'closed') {
				setTimeout(function () {
					var shiftY = (stickyNavHeight - headerContentPad * 2 - $('.header-content').height()) * -1 - 2;
					$('.js-quickLinks').css({
						'transform': 'translateY(' + shiftY + 'px)'
					})
					$('.js-quickLinks').addClass('closed')
				}, 500);
			}
		
		$.fn.stickyEl.init = function () {
			if (windowWidth > templateOption.mobileMenuBreikpont) {
				if ($('.js-quickLinks').length) {
					$('.js-quickLinks').removeClass('stuck');
					$stickyForm = new Waypoint.Sticky({
						element: $('.js-quickLinks')[0],
						offset: -offset,
						handler: function(direction) {
							if (direction === 'down') {
								$('.js-quickLinks').css({
									'opacity': 0
								})
								setTimeout(function () {
									if ($.cookie('closePanel') == 'closed'){
										var shiftY = (stickyNavHeight - $('.header-content').outerHeight()) * -1 - 2;
										$('.js-quickLinks').css({
											'transform': 'translateY(' + shiftY + 'px)',
											'opacity': 1
										})
									} else {
										var shiftY = $('.header-content').outerHeight() - 2;
										$('.js-quickLinks').css({
											'transform': 'translateY(' + shiftY + 'px)',
											'opacity': 1
										})
									}
								}, 1000);
							} else {
								$('.js-quickLinks').css({
									'transform': ''
								})
							}
						}
					})
				}
			} else {
				$('.js-quickLinks').addClass('stuck');
			}
			if (windowWidth > templateOption.mobileMenuBreikpont) {
				if ($('.header-content').length) {
					$stickyNav = new Waypoint.Sticky({
						element: $('.header-content')[0],
						offset: -48,
						handler: function(direction) {
							$('body').toggleClass('stickNav')
						}
					})
				}
			} else {
				if ($('.header-content').length) {
					$stickyNav = new Waypoint.Sticky({
						element: $('.header-content')[0],
						offset: -35,
						handler: function(direction) {
							$('body').toggleClass('stickNav')
						}
					})
				}
			}
		}
		this.stickyEl.init();

		$.fn.stickyEl.destroy = function () {
			$('body').removeClass('stickNav');
			if ($stickyNav) {
				$stickyNav.destroy();
			}
			if ($stickyForm) {
				$stickyForm.destroy();
			}
		}
		$('.js-quickLinks-open').on('click touchstart', function (e) {
			e.preventDefault();
			if ($stickyForm) {
				var shiftY = $('.header-content').outerHeight() - 2;
				$('.js-quickLinks').css({
					'transform': 'translateY(' + shiftY + 'px)'
				}).removeClass('closed');
				$.cookie("closePanel", null, {
					path: '/'
				});
			}
		})

		$('.js-quickLinks-close').on('click touchstart', function (e) {
			e.preventDefault();
			if ($stickyForm) {
				var shiftY = 0 - $('.js-quickLinks').height() + $('.header-content').outerHeight() - 2;
				$('.js-quickLinks').css({
					'transform': 'translateY(' + shiftY + 'px)'
				})
			}
			$.cookie('closePanel', 'closed', {
				expires: 1,
				path: '/'
			});
			setTimeout(function () {
				$('.js-quickLinks').addClass('closed')
			}, 500);
		})
	}

	// Count To
	function count(options) {
		var $this = $(this);
		options = $.extend({}, options || {}, $this.data('countToOptions') || {});
		$this.countTo(options);
	}
	// number counter
	if (blocks.counterBlock.length) {
		blocks.counterBlock.each(function () {
			var $this = $(this);
			$this.waypoint(function () {
				$('.counter-box-number > span', $this).each(count);
				$this.addClass('counted')
				this.destroy();
			}, {
				triggerOnce: true,
				offset: '80%'
			});
		})
	}

	// Slick Carousels Start
	
	if (blocks.serviceBoxRotator.length) {
		blocks.serviceBoxRotator.slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 1800,
			arrows: false,
			dots: false,
			fade: true,
			responsive: [{
				breakpoint: 575,
				settings: {
					dots: true
				}
			}]
		});
	}

	if (blocks.servicesCarousel.length) {
		blocks.servicesCarousel.slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: false,
			arrows: false,
			dots: true,
			autoplay: true,
			autoplaySpeed: 4000,
			speed: 1600,
			pauseOnHover: false
		});
		blocks.servicesCarousel.slick('slickPause');
		blocks.servicesCarousel.waypoint({
			offset: 500,
			handler: function () {
				$(this.element).slick('slickPlay');
				this.destroy();
			}
		});
	}
	if (blocks.icnCarousel.length) {
		slickicnCarousel();
	}

	// icon carousel
	function slickicnCarousel() {
		if (blocks.icnCarousel.hasClass('slick-initialized')) {
			blocks.icnCarousel.slick('unslick');
		} else {
			if ($(window).width() > 768) {
				blocks.icnCarousel.slick({
					//slidesToShow: 3,
					slidesToScroll: 1,
					infinite: true,
					autoplay: true,
					autoplaySpeed: 5000,
					speed: 1200,
					arrows: false,
					dots: true,
					pauseOnHover: false,
					responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 2
							}
						}]
				});
			}
		}
	}

	if (blocks.counterCarousel.length) {
		blocks.counterCarousel.slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			speed: 1200,
			arrows: false,
			dots: true,
			pauseOnHover: false,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 4
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2
					}
				},
				{
					breakpoint: 575,
					settings: {
						slidesToShow: 1
					}
				}]
		});
		blocks.counterCarousel.slick('slickPause');
		blocks.counterCarousel.waypoint({
			offset: 500,
			handler: function () {
				$(this.element).slick('slickPlay');
				this.destroy();
			}
		});
	}

	if (blocks.specialistCarousel.length) {
		blocks.specialistCarousel.slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			speed: 1200,
			arrows: false,
			dots: true,
			pauseOnHover: false,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 2
					}
				},
				{
					breakpoint: 575,
					settings: {
						slidesToShow: 1
					}
				}]
		});
		blocks.specialistCarousel.slick('slickPause');
		blocks.specialistCarousel.waypoint({
			offset: 500,
			handler: function () {
				$(this.element).slick('slickPlay');
				this.destroy();
			}
		});
	}

	if (blocks.specialist2Carousel.length) {
		blocks.specialist2Carousel.slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			speed: 1200,
			arrows: false,
			dots: true,
			pauseOnHover: false
		});
		blocks.specialist2Carousel.slick('slickPause');
		blocks.specialist2Carousel.waypoint({
			offset: 500,
			handler: function () {
				$(this.element).slick('slickPlay');
				this.destroy();
			}
		});
	}

	if (blocks.icnAltCarousel.length) {
		blocks.icnAltCarousel.slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			speed: 1200,
			arrows: false,
			dots: true,
			pauseOnHover: false,

			responsive: [
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2
					}
				},
				{
					breakpoint: 575,
					settings: {
						slidesToShow: 1
					}
				}]
		});
	}
	if (blocks.specialCarousel.length) {
		blocks.specialCarousel.slick({
			mobileFirst: false,
			slidesToShow: 2,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 3500,
			arrows: false,
			dots: true,
			speed: 1500,
			pauseOnHover: false,
			responsive: [
				{
					breakpoint: 575,
					settings: {
						slidesToShow: 1
					}
			}]
		});
		blocks.specialCarousel.slick('slickPause');
		blocks.specialCarousel.waypoint({
			offset: 500,
			handler: function () {
				$(this.element).slick('slickPlay');
				this.destroy();
			}
		});
	}
	if (blocks.reviewsCarousel.length) {
		blocks.reviewsCarousel.slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows: true,
			dots: false,
			speed: 1200,
			responsive: [
				{
					breakpoint: 992,
					settings: {
						arrows: false,
						dots: true,
					}
			}]
		});
		blocks.reviewsCarousel.slick('slickPause');
		blocks.reviewsCarousel.waypoint({
			offset: 500,
			handler: function () {
				$(this.element).slick('slickPlay');
				this.destroy();
			}
		});
	}
	if (blocks.reviews2Carousel.length) {
		blocks.reviews2Carousel.slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows: false,
			dots: true,
			speed: 1200,
			responsive: [
				{
					breakpoint: 992,
					settings: {
						arrows: false,
						dots: true,
					}
			}]
		});
		blocks.reviews2Carousel.slick('slickPause');
		blocks.reviews2Carousel.waypoint({
			offset: 500,
			handler: function () {
				$(this.element).slick('slickPlay');
				this.destroy();
			}
		});
	}

	if (blocks.pricesCarousel.length) {
		blocks.pricesCarousel.slick({
			mobileFirst: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 8000,
			arrows: false,
			dots: true,
			speed: 1200,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2
					}
				}, {
					breakpoint: 575,
					settings: {
						slidesToShow: 1
					}
				}]
		});
    blocks.pricesCarousel.slick('slickPause');
		blocks.pricesCarousel.waypoint({
			offset: 500,
			handler: function () {
				$(this.element).slick('slickPlay');
				this.destroy();
			}
		});
	}

	if (blocks.singleCarousel.length) {
		blocks.singleCarousel.slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			arrows: true,
			fade: true,
			autoplay: true,
			autoplaySpeed: 3000,
			pauseOnHover: false
		});
		blocks.singleCarousel.slick('slickPause');
		blocks.singleCarousel.waypoint({
			offset: 500,
			handler: function () {
				$(this.element).slick('slickPlay');
				this.destroy();
			}
		});
	}

	if (blocks.postCarousel.length) {
		blocks.postCarousel.slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 4000,
			arrows: true,
			dots: false
		});
	}

	if (blocks.galleryHoverCarousel.length) {
		blocks.galleryHoverCarousel.slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 4000,
			speed: 1500,
			arrows: false,
			dots: true
		});
	}

	if (blocks.singleServiceCarousel.length) {
		blocks.singleServiceCarousel.slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 8000,
			speed: 2500,
			arrows: true,
			dots: true,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						arrows: false,
						adaptiveHeight: true
					}
			}]
		});
	}

	if (blocks.equipmentCarousel.length) {
		blocks.equipmentCarousel.slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 6000,
			speed: 500,
			arrows: false,
			dots: true,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						adaptiveHeight: false
					}
				}]
		});
		blocks.equipmentCarousel.slick('slickPause');
		blocks.equipmentCarousel.waypoint({
			offset: 500,
			handler: function () {
				$(this.element).slick('slickPlay');
				this.destroy();
			}
		});
	}

	if (blocks.blogCarousel.length) {
		blocks.blogCarousel.slick({
			slidesToShow: 2,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows: false,
			dots: true,
			responsive: [
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1
					}
			}]
		});
	}

	if (blocks.blogCarouselFull.length) {
		blocks.blogCarouselFull.slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			speed: 1500,
			arrows: false,
			dots: true,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2
					}
			}, {
					breakpoint: 575,
					settings: {
						slidesToShow: 1
					}
			}]
		});
		blocks.blogCarouselFull.slick('slickPause');
		blocks.blogCarouselFull.waypoint({
			offset: 500,
			handler: function () {
				$(this.element).slick('slickPlay');
				this.destroy();
			}
		});
	}

	if (blocks.testimonialCarousel.length) {
		blocks.testimonialCarousel.slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			arrows: false,
			autoplaySpeed: 5000,
			speed: 1500,
			dots: true
		});
	}
	
	if (blocks.reviewsTextCarousel.length) {
		blocks.reviewsTextCarousel.slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			arrows: false,
			autoplaySpeed: 6000,
			speed: 1500,
			dots: false
		});
	}

	if (blocks.service2Carousel.length) {
		blocks.service2Carousel.slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			speed: 1200,
			arrows: false,
			dots: true,
			pauseOnHover: false,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2
					}
				},
				{
					breakpoint: 575,
					settings: {
						slidesToShow: 1
					}
				}]                                                                                                                
		});
		blocks.service2Carousel.slick('slickPause');
		blocks.service2Carousel.waypoint({
			offset: 500,
			handler: function () {
				$(this.element).slick('slickPlay');
				this.destroy();
			}
		});
	}
	// Slick Carousels End

	// Post Isotope
	if (blocks.postGallery.length) {
		var $postgallery = $('.blog-isotope');
		$postgallery.imagesLoaded(function () {
			$postgallery.isotope({
				itemSelector: '.blog-post',
				masonry: {
					gutter: 30,
					columnWidth: '.blog-post'
				}
			});
			setTimeout(function () {
				$postgallery.parent('.gallery-wrap').addClass('loaded');
			}, 500);
		});
	}

	// Isotope Gallery
	if (blocks.isotopeGallery.length) {
		var $gallery = blocks.isotopeGallery;
		$gallery.imagesLoaded(function () {
			$gallery.isotope({
				itemSelector: '.gallery-item',
				masonry: {
					columnWidth: '.gallery-item',
					gutter: 30
				}
			});
			setTimeout(function () {
				$gallery.isotope('layout');
				$gallery.parent('.gallery-wrap').addClass('loaded');
			}, 500);
		});
		isotopeFilters($gallery);
	}

	// Isotope Filters (for Gallery Page)
	function isotopeFilters(gallery) {
		var $gallery = $(gallery);
		if ($gallery.length) {
			var container = $gallery;
			var optionSets = $(".filters-by-category .option-set"),
				optionLinks = optionSets.find("a");
			optionLinks.on('click', function (e) {
				var thisLink = $(this);
				if (thisLink.hasClass("selected")) return false;
				var optionSet = thisLink.parents(".option-set");
				optionSet.find(".selected").removeClass("selected");
				thisLink.addClass("selected");
				var options = {},
					key = optionSet.attr("data-option-key"),
					value = thisLink.attr("data-option-value");
				value = value === "false" ? false : value;
				options[key] = value;
				if (key === "layoutMode" && typeof changeLayoutMode === "function") changeLayoutMode($this, options);
				else {
					container.isotope(options);
				}
				return false
			})
		}
	}

	// Syncronized Gallery
	function sliderGallery(main, thumbs) {
		$(main).slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			asNavFor: thumbs
		});
		$(thumbs).slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			asNavFor: main,
			centerMode: false,
			focusOnSelect: true,
			infinite: true,
			arrows: true,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 4
					}
					}, {
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
					},
				{
					breakpoint: 575,
					settings: {
						slidesToShow: 3
					}
				}]
		});
	}

	// popover Gallery
	function popoverGallery() {
		$('.gallery-popover-link').on('mouseover', function () {
			$(this).closest('.container').find('.gallery-popover-link').not($(this)).addClass('darken')
		}).on('mouseleave', function () {
			$(this).closest('.container').find('.gallery-popover-link').removeClass('darken')
		})
		$('.gallery-popover-link').popover({
			html: true,
			placement: 'right',
			trigger: 'hover',
			delay: {
				"show": 100,
				"hide": 0
			},
			offset: $(this).height(),
			template: '<div class="smile-popover popover" role="tooltip"><div class="arrow"></div><div class="popover-body"></div><div class="inner-circles-loader"></div></div>',
			content: function () {
				var url = $(this).data('full');
				return '<img src="' + url + '">'
			}
		})
	}

	// Pause Carousel (hover, modal)
	function pauseCarousel(modal) {
		$(modal).on('show.bs.modal', function (e) {
			$('.paused-slick').slick('slickPause');
		})
		$(document).on('mouseenter', '.slick-slider', function () {
			if ($(this).get(0).slick.options.paused) {
				$(this).slick('slickPause');
			}
		}).on('mouseleave', '.slick-slider', function () {
			if ($(this).get(0).slick.options.autoplay && !$('body').hasClass('modal-open')) {
				$(this).slick('slickPlay');
			}
		})
		$('[data-toggle="modal"]').on('click', function (e) {
			blocks.servicesCarousel.slick('slickPause');
			if ($(this).closest('.slick-slider').length) {
				$(this).closest('.slick-slider').addClass('paused-slick');
			}
		})
	}

	// Mobile Menu Modal
	function menuModal(modal) {
		var menu = $('.js-main-menu').clone();
		$('#modalNavigation .modal-dialog').append(menu);
		$(modal).on('shown.bs.modal', function (e) {
			$('body').addClass('menu-open');
		})
		$(modal).on('hide.bs.modal', function (e) {
			$('body').removeClass('menu-open');
		})
	};

	// Close DropMenu Button
	function closeDrop(button) {
		$(button).on('click', function (e) {
			$(this).closest('.dropdown').find('.dropdown-toggle').trigger('click');
			e.preventDefault();
		})
	}

	// Back To Top
	function backToTop(button, flag) {
		if (flag) {
			var $button = $(button);
			$(window).on('scroll', function () {
				if ($(this).scrollTop() >= 500) {
					$button.addClass('visible');
				} else {
					$button.removeClass('visible');
				}
			});
			$button.on('click', function () {
				$('body,html').animate({
					scrollTop: 0
				}, 1000);
			});
		} else {
			$(button).hide();
		}
	}

	// Slider Animation
	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function () {
			var $this = $(this);
			var $animationDelay = $this.data('animation-delay');
			var $animationType = 'animated ' + $this.data('animation');
			$this.addClass($animationType).one(animationEndEvents, function () {
				$this.removeClass($animationType);
			});
		});
	}

	// Google Map Start
	var mapStyle = [
		{
			"featureType": "road",
			"elementType": "labels",
			"stylers": [
				{
					"visibility": "off"
		}
		]
		}, {
			"featureType": "poi",
			"elementType": "labels",
			"stylers": [
				{
					"visibility": "off"
		}
		]
		}, {
			"featureType": "transit",
			"elementType": "labels.text",
			"stylers": [
				{
					"visibility": "off"
		}
		]
	}];

	function createMap(id, mapZoom, lat, lng, markers) {
		var mapOptions = {
			zoom: mapZoom,
			scrollwheel: false,
			center: new google.maps.LatLng(lat, lng),
			styles: mapStyle
		};
		var mapHeader = new google.maps.Map(document.getElementById(id), mapOptions);
		var count,
			locations = markers;
		for (count = 0; count < locations.length; count++) {
			new google.maps.Marker({
				position: new google.maps.LatLng(locations[count][1], locations[count][2]),
				map: mapHeader,
				title: locations[count][0],
				icon: locations[count][4]
			});
		}
	}


	function footerMap(el, map) {
		var $map = map;
		$(el).on('click', function (e) {
			e.preventDefault();
			$(this).toggleClass('opened');
			$map.toggleClass('opened');
		})
	}
	// Google Map End

	// Mobile Top Info
	function mobileHeaderSlider(button) {
		var button = button,
			container = '.js-quickLinks-top';
		$(document).on('click', button, function (e) {
			if (windowWidth <= templateOption.mobileMenuBreikpont) {
				var $this = $(this),
					$slide = $this.next('.link-drop');
				if (!$this.hasClass('active')) {
					var backContainer = '.quickLinks .link.active';
					if ($(backContainer).length) {
						$(container).children().detach().insertAfter(backContainer);
					}
					$(button).removeClass('active');
					$this.addClass('active');
					$slide.detach().appendTo(container);
				} else {
					var backContainer = '.quickLinks .link.active';
					$(container).children().detach().insertAfter(backContainer);
					$this.removeClass('active');
				}
				e.preventDefault();
			}
		})
	}

	// Panel Drop
	function panelDrop(button) {
		var button = button;
		$(document).on('click', button, function (e) {
			if (windowWidth > templateOption.mobileMenuBreikpont) {
				if ($('body').hasClass('touch')) {
					if ($(this).hasClass('active')) {
						$(this).removeClass('active');
						$(this).parent().removeClass('hovered');
					} else {
						$(button).removeClass('active');
						$(button).parent().removeClass('hovered');
						$(this).addClass('active');
						$(this).parent().addClass('hovered');
					}
				}
				e.preventDefault();
			}
		})
		$(document).on('click', function (e) {
			if (windowWidth > templateOption.mobileMenuBreikpont) {
				if (!$(e.target).closest(button).length) {
					$(button).removeClass('active');
					$(button).parent().removeClass('hovered');
				}
			}
		});
	}
	// Header Language dropdown
	function toggleLang(link, drop) {
		if($(link).length){
			$('.header').addClass('has-lang')
		}
		$('> a', $(link)).on('click', function (e) {
			e.preventDefault();
			$(link).toggleClass('opened');
		});
		$(document).on('click', function (e) {
			if (!$(e.target).closest(link).length) {
				if ($(link).hasClass("opened")) {
					$(link).removeClass('opened');
				}
			}
		});
	}
	// header menu
	$.fn.headerMenu = function () {
		var that = this;
		$.fn.headerMenu.setToggler = function () {
			var togglerTop = $('.navbar-toggler').closest('.header-content').outerHeight()*.5 - $('.navbar-toggler').outerHeight()*.5;
			$('.navbar-toggler').css({'top': togglerTop + 'px'});
			$('.cart-toggler').css({'top': togglerTop + 'px'});
			$('.lang-toggler').css({'top': togglerTop + 'px'});
			$('.header-search').css({'top': togglerTop + 'px'});
		}
		$.fn.headerMenu.setHeight = function () {
			var h = $(window).height() - $('.header').height();
			if ($('.header-content').hasClass('stuck')) {
				h = $(window).height() - $('.header-content').height();
			}
			$('.header .navbar-collapse').css({
				'max-height': h
			})
		}
		$.fn.headerMenu.init = function () {
			$('.navbar-toggler').on('click', function (e) {
				that.headerMenu.setHeight();
				$('body').toggleClass('noScroll');
				$('.js-header-quickLinks .link.active').trigger('click');
			})
			$('.nav-item > a.dropdown-toggle').on('click', function (e) {
				if (!$('body').hasClass('touch')) {
					if (windowWidth > templateOption.mobileMenuBreikpont) {
						window.location.href = $(this).attr('href');
					}
				} else {
					if ($(this).next().hasClass('show')) {
						window.location.href = $(this).attr('href');
					}
				}
			})
			$('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
				var $el = $(this);
				var $parent = $(this).offsetParent('.dropdown-menu');
				if (!$(this).next().hasClass('show')) {
					$(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
				}
				var $subMenu = $(this).next('.dropdown-menu');
				$subMenu.toggleClass('show');
				$(this).parent('li').toggleClass('show');
				$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
					$('.dropdown-menu .show').removeClass('show');
				});
				if (!$parent.parent().hasClass('navbar-nav')) {
					$el.next().css({
						"top": $el[0].offsetTop,
						"left": $parent.outerWidth() - 4
					});
				}
				return false;
			});
		}
		this.headerMenu.init();
		this.headerMenu.setHeight();
		this.headerMenu.setToggler();
	}
	
	function mobileInfoSlide() {
		var $toggle = $('.js-info-toggle'),
			$content = $('.js-info-content');
		$toggle.on('click', function (e) {
			e.preventDefault();
			$content.slideToggle(200);
			$toggle.toggleClass('opened');
		})
	}

	// background image inline
	function dataBg(el) {
		$(el).each(function () {
			var $this = $(this),
				bg = $this.attr('data-bg');
			$this.css({
				'background-image': 'url(' + bg + ')'
			});
		});
	}

	//scroll to ahchor
	function scrollTo() {
		$('a[href*="#"]').not('[href="#"]').not('.nav-link').not('[data-toggle]').on('click', function (event) {
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
				location.hostname == this.hostname
			) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					event.preventDefault();
					$('html, body').animate({
						scrollTop: target.offset().top - 130
					}, 1000);
				}
				if (target.attr('id') == 'googleMapFooter') {
					$('.js-footer-map-toggle').trigger('click');
				}
			}
		});
	}

	// reposition
	$.fn.repos = function () {
		var desktop = '.js-quickLinks-wrap-d',
			mobile = '.js-quickLinks-wrap-m',
			reposWidth = templateOption.mobileMenuBreikpont,
			windowW = windowW ? windowW : $window.width(),
			isMobile = windowW < reposWidth,
			that = this;
		$.fn.repos.init = function () {
			that.repos.reposition(isMobile);
		}
		$.fn.repos.reinit = function (windowW) {
			var windowW = windowW ? windowW : $window.width(),
				isMobile = windowW < reposWidth;
			that.repos.reposition(isMobile);
		};
		$.fn.repos.reposition = function (isMobile) {
			var $desktop = $(desktop),
				$mobile = $(mobile);
			if (isMobile) {
				if ($desktop.length) {
					$desktop.children().detach().appendTo($mobile);
				}
			} else {
				if ($desktop.length) {
					$mobile.children().detach().appendTo($desktop);
				}
			}
		}
		this.repos.init();
	};

	function fixedTable() {
		$('.js-fixed-table').each(function () {
			var $this = $(this),
				$parent = $this.closest('.table-scroll');
			var table = $this.clone(true).addClass('clone');
			$parent.append(table);
		})

	}

	// landing
	$.fn.pageScroller = function (options) {

		var settings = $.extend({
			nav: $(this),
			links: $(this).find('.link-inside'),
			navActiveClass: 'active',
			scrollContainer: $('html, body'),
			scrollSpeed: 1000,
			section: $('div'),
			navHeight: 180,
			quickLinks: $('.quickLinks-wrap')
		}, options);

		settings.links.each(function () {
			var link = $(this),
				targetSection = $(link.attr('href')),
				quickLinksH = 0;
			link.on('click', function (e) {
				e.preventDefault();
				e.stopPropagation();
				$('.navbar-nav').find('li').removeClass(settings.navActiveClass);
				link.closest('li').addClass(settings.navActiveClass);
				if(!$('.navbar-toggler').hasClass('collapsed')) {
					$(".navbar-toggler").trigger('click')
				}
				settings.scrollContainer.stop().animate({
					scrollTop: targetSection.offset().top - settings.navHeight - quickLinksH
				}, settings.scrollSpeed);
			});
		});

		$(window).on('scroll', function () {
			var wScroll = $(window).scrollTop() + settings.navHeight + 1;
			settings.section.each(function () {
				if ($(this).attr('id')) {
					var id = $(this).attr('id'),
						top = $(this).offset().top,
						secHeight = $(this).outerHeight();
					if (top <= wScroll && (top + secHeight) > wScroll) {
						settings.links.parent('li').removeClass(settings.navActiveClass);
						settings.nav.find('a[href="#' + id + '"]').parent('li').addClass(settings.navActiveClass);
					}
				}
			});
		});
	};
	// landing navigation
	function landingNav() {
		$('a[href*="#"].link-inside').on('click', function (event) {
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
				location.hostname == this.hostname
			) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					event.preventDefault();
					$('html, body').animate({
						scrollTop: target.offset().top - 130
					}, 1000);
				}
				if (target.attr('id') == 'googleMapFooter') {
					$('.js-footer-map-toggle').trigger('click');
				}
			}
		});
	}
	// video popup
	function videoPopup(button, modal) {
		var videoSrc;
		$(button).on('click', function() {
			videoSrc = $(this).data('src');
		});
		$(modal).on('shown.bs.modal', function () {
			$('.video', $(modal)).attr('src', videoSrc + '?autoplay=1&amp;modestbranding=1&amp;showinfo=0');
		}).on('hidden.bs.modal', function () {
			$('.video', $(modal)).attr('src', '');
		})
	}
	
	// department tabs
	function departmentTabs() {
		var $tabs = $('.js-department-tabs'),
			$departments = $('.js-department-carousel');
		$tabs.children().each(function (i) {
			$(this).on('click', function () {
				$(this).siblings().removeClass('active');
				$(this).addClass('active');
				$departments.slick('slickGoTo', i);
			})
		});
		$departments.on('afterChange', function(){
			$tabs.children().removeClass('active');
			$tabs.children().eq($('.slick-active', $departments).attr('data-slick-index')).addClass('active');
		});
		$departments.slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: false,
			fade: true,
			cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
			speed: 300,
			arrows: true,
			autoplay: false,
			pauseOnHover: false,
			responsive: [
				{
					breakpoint: 480,
					settings: {
						fade: false,
						dots: true,
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 750
					}
				}
			]
		});
	}

	// services tabs
	function servicesTabs() {
		var service = '.js-services-tabs-carousel',
			info = '.js-services-info';
		$(service).on('beforeChange', function(){
			$(service).find('.active').removeClass('active');
		});
		$(service).on('afterChange', function(){
			$(service).find('.slick-active').first().children().addClass('active');
		});
		$(service).slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: info,
			centerMode: false,
			focusOnSelect: true,
			infinite: true,
			arrows: false,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2
					}
				}, {
					breakpoint: 768,
					settings: {
						slidesToShow: 2
					}
				},
				{
					breakpoint: 575,
					settings: {
						slidesToShow: 1
					}
				}]
		});
		$(info).slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			asNavFor: service,
			fade: true,
			// cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
			speed: 300,
			arrows: true,
			autoplay: false,
			pauseOnHover: false,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						fade: false,
						arrows: false,
						dots: true,
						autoplay: true,
						autoplaySpeed: 5000,
						speed: 750
					}
				}
			]
		});
	}

	function filterCarousel(filter, carousel){
		$(filter).find('select').on('change', function() {
			var filterClass =  $(this).val();
			$(carousel).slick('slickUnfilter');
			if (filterClass != 'all') {
				$(carousel).slick('slickFilter', filterClass);
			}
		});
	}

	// Functions Initializations
	$(document).stickyEl();
	$(document).repos();
	$(document).headerMenu();
	popoverGallery();
	menuModal('#modalNavigation');
	pauseCarousel('.modal');
	mobileHeaderSlider('.js-header-quickLinks .link');
	panelDrop('.js-quickLinks-wrap-d .link');
	closeDrop('.js-drop-close');
	backToTop('.js-backToTop', templateOption.backToTop);
	scrollTo();
	dataBg('[data-bg]');
	fixedTable();
	mobileInfoSlide();
	toggleLang('.header-lang', '.header-lang-dropdown');

	videoPopup('.js-video-btn','#videoModal');
	departmentTabs();
	servicesTabs();
	filterCarousel('.filterCarousel','.js-specialist-carousel');
	landingNav();

	$('.navbar-nav').pageScroller();
	$('[data-toggle=tooltip]').tooltip();
	if ($('.twentytwenty-container').length) {
		$('.twentytwenty-container').twentytwenty({
			before_label: 'before',
			after_label: 'after'
		});
	}
	if (templateOption.smoothScroll) {
		$('html').scrollWithEase();
	}
	if ($(blocks.galleryMain.length) && $(blocks.galleryThumbs.length)) {
		sliderGallery(blocks.galleryMain, blocks.galleryThumbs);
	}

	if ($("#" + blocks.googleMapHeader).length) {
		createMap(blocks.googleMapHeader, googleMapOption.zoom, googleMapOption.latitude, googleMapOption.longitude, googleMapOption.marker);
	}
	if ($("#" + blocks.googleMapContact).length) {
		createMap(blocks.googleMapContact, googleMapOption.zoom, googleMapOption.latitude, googleMapOption.longitude, googleMapOption.marker);
	}

	$('.js-view-all-list').on('click', function (e) {
		var $this = $(this),
			$list = $this.parent().find('ul');
		$list.removeClass('collapsed-md');
		$this.remove();
		e.preventDefault();
	})

	$(document).on('shown.bs.tab', 'a[data-toggle="pill"]', function (e) {
		var $tab = $($(e.target ).attr('href'));
		if($tab.find('.slick-slider')){
			$tab.find('.slick-slider').slick('setPosition')
		}
	})

	// Resize Window Events
	$(window).on('orientationchange', function (e) {
		$(document).stickyEl.destroy();
	});
	$(window).on('orientationchange', debouncer(function (e) {
		windowWidth = $window.width();
		$(document).stickyEl.init()
		$(document).headerMenu.setHeight();
		$(document).headerMenu.setToggler();
		$(document).repos.reinit(windowWidth);
		if (blocks.icnCarousel.length) {
			slickicnCarousel();
		}
	}));
	$(window).on('resize', debouncer(function (e) {
		var windowWidthNew = $window.width();
		if (windowWidthNew != windowWidth) {
			windowWidth = windowWidthNew;
			$(document).repos.reinit(windowWidthNew);
			if (blocks.icnCarousel.length) {
				slickicnCarousel();
			}
		}
		if (!$('body').hasClass('touch')) {
			$(document).stickyEl.destroy();
			$(document).stickyEl.init();
			$(document).headerMenu.setHeight();
			$(document).headerMenu.setToggler();
		}
	}));

})