// Webpack Imports
import * as bootstrap from 'bootstrap';
function stickHeader() {
	const header = $('.lav-header');
	const scroll = $(window).scrollTop();
	if (scroll >= 100) header.addClass('lav-fixed');
	else header.removeClass('lav-fixed');
}
(function ($) {
	stickHeader();
	$('.lav-banner-slideshow').slick({
		autoplay: true,
		autoplaySpeed: 4000,
		arrows: true,
		dots: true,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
	});
	$('.lav-about-slideshow').slick({
		autoplay: true,
		autoplaySpeed: 2000,
		centerMode: true,
		centerPadding: '60px',
		infinite: true,
		slidesToScroll: 1,
		slidesToShow: 3
	  });
	  AOS.init({
		  duration: 400,
	  });
})(jQuery);

$(window).on('scroll', function () {
	stickHeader();
});

(function () {
	'use strict';

	// Focus input if Searchform is empty
	[].forEach.call(document.querySelectorAll('.search-form'), (el) => {
		el.addEventListener('submit', function (e) {
			var search = el.querySelector('input');
			if (search.value.length < 1) {
				e.preventDefault();
				search.focus();
			}
		});
	});

	// Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
		return new bootstrap.Popover(popoverTriggerEl, {
			trigger: 'focus',
		});
	});
})();
