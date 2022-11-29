$(function () {
	'use strict';

	/**
	 * Slider
	 */
	let slideWidthValue = Number($(window).width() / 3);
	$('#js-home-about-list').bxSlider({
		maxSlides: 3,
		minSlides: 3,
		moveSlides: 1,
		slideWidth: slideWidthValue,
		slideMargin: 40,
	});

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
