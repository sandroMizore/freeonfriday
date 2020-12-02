document.addEventListener("DOMContentLoaded", function () {

	// Custom JS

});


$(function () {

	let firstBlockMain = $('main div:first');


	$(window).scroll(function () {
		if ($(this).scrollTop() > firstBlockMain.height()) {
			$('header').addClass('scroll');
		} else {
			$('header').removeClass('scroll');
		}
	});

	$('.main-slider__wrap').slick({
		arrows: false,
		dots: true
	})


	dataReview = {
		dots: false,
		infinite: true,
		slidesToShow: 3,
		arrows: false,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 769
				,
				settings: {
					slidesToShow: 1,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}

		]
	}
	dataProduct = {
		dots: false,
		infinite: true,
		slidesToShow: 4,
		arrows: false,
		responsive: [
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	}
	dataReviewProduct = {
		dots: false,
		infinite: true,
		slidesToShow: 1,
		arrows: false
	}

	dataSocialNetwork = {
		dots: false,
		infinite: true,
		slidesToShow: 1,
		arrows: false,

	}

	function initSlider(sliderWrap, data) {

		let slider = $(sliderWrap);

		slider.each(function (i, el) {
			let prevBtn = $(el).find('.slider__prev'),
				nextBtn = $(el).find('.slider__next'),
				sliderTrack = $(el).find('.slider__track');
			sliderTrack.slick(data);
			prevBtn.on('click', (e) => {
				e.preventDefault();
				sliderTrack.slick('slickPrev');
			});
			nextBtn.on('click', (e) => {
				e.preventDefault();
				sliderTrack.slick('slickNext');
			});
		});
	}

	initSlider('.review__wrap_card.slider', dataReviewProduct);
	initSlider('.tabs__block.slider', dataProduct);
	initSlider('.review__wrap.slider', dataReview);
	initSlider('.product__complements-row.slider', dataProduct);
	initSlider('.product__viewed.slider', dataProduct);


	function initSliderProductCount() {
		var sliderCounterComplements = $('.product__complements-row.slider');
		sliderCounterComplements.each((i, el) => {
			var track = $(el).find('.slider__track'),
				countEl = $(el).find('.product-card').length,
				lengthSlide = $(el).find('.product-card').width() * countEl,
				navSlider = track.siblings('.slider__nav');

			if (countEl < 4 || lengthSlide < window.innerWidth) {
				track.slick('unslick');
				navSlider.hide()
			} else {
				track.slick('reinit');
				navSlider.show()
			}

		})
	}
	initSliderProductCount();


	$('.product__home-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.product__slider-nav',
		responsive: [
			{
				breakpoint: 991,
				settings: {
					// fade: true,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}

		]
	});

	$('.product__slider-nav').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.product__home-slider',
		dots: false,
		arrows: false,
		// centerMode: true,
		vertical: true,
		focusOnSelect: true,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 991,
				settings: {
					vertical: false,
					dots: true,
					slidesToShow: 4,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 4,
					dots: true,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 3,
					dots: true,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					dots: true,
				}
			}

		]
	});



	/**Tabs */

	let tabs = $('.tabs')

	tabs.each(function (i, el) {
		var $self = $(this);
		let tabsNav = $(el).find('.tabs__menu [data-tab-item]'),
			tabsContent = $(el).find('.tabs__block');

		tabsNav.eq(0).addClass('active');
		tabsContent.eq(0).addClass('active');

		tabsNav.each(function (i, el) {
			$(el).on('click', function (e) {
				e.preventDefault();

				$(this).siblings('li').removeClass('active');
				$(this).addClass('active');
				tabsContent.removeClass('active')
				var reftabs = $(this).attr('data-tab-item'),
					currentBlock = $self.find('.tabs__block[id=' + reftabs + ']');
				currentBlock.addClass('active');

				sliderBlock = currentBlock.find('.slider__track');
				if (sliderBlock.length) {
					sliderBlock.slick('reinit');
				}
			})
		})
	});


	/**Quantyty */

	var qty = $('.qty');

	qty.each((i, el) => {


		let minus = $(el).find('.minus'),
			plus = $(el).find('.plus'),
			field = $(el).find('input[type="number"]'),
			counter = parseInt(field.val());


		plus.on('click', () => {
			counter++
			field.val(counter)

		})
		minus.on('click', () => {
			counter--
			(counter < 0) ? counter = 0 && field.val(counter) : field.val(counter)

		})


	})

	/**Accordion */
	let accordionTitle = $('[data-accordion-title]');

	accordionTitle.each((i, el) => {
		// let allContent = $(el).siblings('[data-accordion-content]')
		$(el).on('click', function () {
			// allContent.removeClass('open')
			let content = $(this).next('[data-accordion-content]');
			if (!content.hasClass('open')) {
				$(this).addClass('current');
				$(this).siblings('.current').removeClass('current');
				content.addClass('open');
				content.siblings('.open').removeClass('open')
			} else {
				$(this).removeClass('current');
				content.removeClass('open');
			}

		});
	})

	/**Btn burger */

	var btnBurger = $('.burger-mobile');

	btnBurger.on('click', function () {
		if (!$(this).hasClass('active-mobile-btn')) {
			$(this).addClass('active-mobile-btn');
			$('body').addClass('active-menu');
			$('header .nav').show()
		} else {
			$(this).removeClass('active-mobile-btn');
			$('body').removeClass('active-menu');
			$('header .nav').hide()
		}
	});

	$('.overlay-menu').on('click', function () {
		$('body').removeClass('active-menu');
		$('.burger-mobile').removeClass('active-mobile-btn');
	})

	/**Select */

	let select = $('#select-catalog'),
		placeholderSelect = select.data('data-placeholder');

	$(document).ready(function () {
		select.select2({
			minimumResultsForSearch: -1,
			placeholder: placeholderSelect
		});

	});

	/**Open filter */

	let filterAll = $('.catalog__link-all');

	filterAll.on('click', function () {
		let parent = $(this).parents('.catalog__filter');
		if (!parent.hasClass('open')) {
			parent.addClass('open')
		} else {
			parent.removeClass('open')
		}
	});


	let filterAllBlog = $('.blog-page__link-all');

	filterAllBlog.on('click', function () {
		let parent = $(this).parents('.blog-page__filter');
		if (!parent.hasClass('open')) {
			parent.addClass('open')
		} else {
			parent.removeClass('open')
		}
	})

	/***Youtube player */

	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	var player,
		done = false;

	function onYouTubeIframeAPIReady2(embed, $this) {
		player = new YT.Player($this, {
			height: '360',
			width: '640',
			videoId: embed,
			events: {
				'onReady': onPlayerReady,
				'onStateChange': onPlayerStateChange
			}
		});
	}

	$(document).on('click', '.play-button', function () {
		let embed = $(this).parent().data('embed');
		let embed2 = $(this).parent();
		onYouTubeIframeAPIReady2(embed, this.parentElement);
	})

	$(document).on('click', '.youtube img', function () {
		let embed = $(this).parent().data('embed');
		let embed2 = $(this).parent();
		onYouTubeIframeAPIReady2(embed, this.parentElement);
	})

	function onPlayerReady(event) {
		event.target.playVideo();
	}

	function onPlayerStateChange(event) {
		if (event.data == YT.PlayerState.PLAYING && !done) {
			done = true;
		}
	}

	function stopVideo() {
		player.stopVideo();
	}

	var youtube = document.querySelectorAll(".youtube");
	for (var i = 0; i < youtube.length; i++) {
		console.log(youtube[i].dataset);
		if (youtube[i].dataset.image != 'true') {
			var source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed + "/sddefault.jpg";
			var image = new Image();
			image.src = source;
			image.addEventListener("load", function () {
				youtube[i].appendChild(image);
			}(i));
		}
	};


	/** Adaptive */
	var window_width = window.innerWidth || document.documentElement.clientWidth,
		lgMax = 1199,
		lgMin = 992,
		mdMax = 991,
		mdMin = 768,
		smMax = 767,
		smMin = 576,
		xsMax = 575;

	$(window).resize(function () {
		window_width = window_width = window.innerWidth || document.documentElement.clientWidth;
		changeMenu();
	});

	// var pageAside = $('.page-aside'),
	// 	authButton = $('#auth-header'),
	// 	headerLang = $('.header-language'),
	// 	headerMenu = $('#nav-header'),
	// 	headerPhone = $('.header-phones'),
	// 	siteSearch = $('#header-search-form');


	function desctopMenu() {
		// $('#header-checkout-sidebar').before(authButton);
		// $('#page-header .left-header').append(headerLang);
		// $('#page-header .left-header').after(headerMenu);
		// headerMenu.after(headerPhone);
		// pageAside.prepend(siteSearch);
	}

	function mobileMenu() {
		// pageAside.append(authButton);
		// pageAside.append(headerLang);
		// pageAside.append(headerMenu);
		// pageAside.append(headerPhone);
		// $('#page-header').append(siteSearch);
	}

	function changeMenu() {
		if (window_width <= mdMin && !$('body').hasClass('mobile-ui')) {
			$('body').addClass('mobile-ui');
			$('body').removeClass('desktop-ui');
			mobileMenu();
			initSlider('.social-network__wrap.slider', dataSocialNetwork);
			initSlider('.blog-content.slider', dataSocialNetwork);
		} else {
			if ($(window).outerWidth() > mdMin && !$('body').hasClass('desktop-ui')) {
				$('body').addClass('desktop-ui');
				$('body').removeClass('mobile-ui');
				desctopMenu();

				$('.social-network__wrap .slider__track').slick('unslick');
				$('.blog-content .slider__track').slick('unslick');

			}
		}

	}

	changeMenu();






})