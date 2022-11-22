$(function () {
	'use strict';

	let slideWidthValue = Number($(window).width() / 3);
	$('#js-home-about-list').bxSlider({
		maxSlides: 3,
		minSlides: 3,
		moveSlides: 1,
		slideWidth: slideWidthValue,
		slideMargin: 40,
	});
});
