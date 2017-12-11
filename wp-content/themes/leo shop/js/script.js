alert('Привет, <br>мир!';

$(function() {

	$(".nav_min").click(function () {
		$(".main_menu").toggle();
	});

	$(".slaider").slick({
		dots: true,
		arrows: true,
		infinite: true,
		speed: 1000,
		autoplay: true,
		autoplaySpeed: 5000,
		slidesToShow: 1,
		slidesToScroll: 1,
		adaptiveHeight: true,
		responsive: [
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: false
			}
				}/*,
				{
				  breakpoint: 600,
				  settings: "unslick"
				}*/				
				]
			});


});


$(function() {
	
	$('.product__icon').click(function () {
		//var a = $(this).children().attr('href');
		
		//$(".single_add_to_cart_button").attr('href');
	});
});

$(function() {
	$(window).resize(function(){
		var wid = $(window).width();
		if(wid > 768 && $('.main_menu').is(':hidden')) {$('.main_menu').removeAttr('style');}
	});
});

