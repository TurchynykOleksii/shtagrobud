const swiper = new Swiper('.swiper', {
	slidesPerView: 'auto',
	watchOverflow: true,
	loop: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	spaceBetween: 20,
	autoHeight: true,

});
