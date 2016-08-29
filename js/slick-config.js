// A full list of the commands can be found here:
// http://kenwheeler.github.io/slick/

$('.slick-slider').slick({
	autoplay: true,
	autoplaySpeed: 5000,
	dots: true,
	appendDots: '.slick-slider-elements .dots',
	appendArrows: '.slick-slider-elements .nav-arrows',
	prevArrow: '<a href="#" class="slick-prev"><span>Previous</span></a>',
	nextArrow: '<a href="#" class="slick-next"><span>Next</span></a>'
});