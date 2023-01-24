$(function () {
	'use strict';

	/**
	 * Slider
	 */
	const WINDOW_BREAK_POINT = 768;
	let slideWidthValue = 0;
	if ($(window).width() >= WINDOW_BREAK_POINT) {
		slideWidthValue = Number($(window).width() / 3);
		$('#js-home-about-list').bxSlider({
			maxSlides: 3,
			minSlides: 3,
			moveSlides: 1,
			slideWidth: slideWidthValue,
			slideMargin: 40,
		});
	} else {
		slideWidthValue = Number($(window).width() * 0.7);
		$('#js-home-about-list').bxSlider({
			maxSlides: 1,
			minSlides: 1,
			moveSlides: 1,
			slideWidth: slideWidthValue,
			slideMargin: 20,
		});
	}

	/**
	 * Hamburger menu
	 */
	let hamburgerMenu = $('#js-hamburger-menu'),
		body = $('body');

	const FADE_SPEED = 100;

	$('#js-hamburger-btn').on('click', function () {
		hamburgerMenu.fadeIn(FADE_SPEED);
		body.addClass('js-menu-open');
	});

	$('#js-hamburger-btn-close').on('click', function () {
		hamburgerMenu.fadeOut(FADE_SPEED);
		body.removeClass('js-menu-open');
	});
});
