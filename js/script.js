$(document).ready(function() {
	$('.fixed-menu>#menu>li>ul').prev('a').append(' <small>∨</small>');
	$('.fixed-menu>#menu>li>ul>li>ul').prev('a').append(' <small>&gt;</small>');

	var mmm = $('.downloadHref');
	$('.summary.entry-summary').append(mmm)

	$(".woocommerce div.product .price-wraper .price del").closest('.price-wraper').next(".woocommerce div.product form.cart").find('.button').css('height', '96px');

	$(".content").prev(".fixed-menu").find('.just-content').css('display', 'block');
	$(".content").prev(".fixed-menu").find('.logo>img').css('height', '98px');
	$(".content-woo").prev(".fixed-menu").find('.just-content').css('display', 'block');
	$(".content-woo").prev(".fixed-menu").find('.logo>img').css('height', '98px');


});