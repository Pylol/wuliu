$(document).ready(function(){
	$('.item').mouseover(function(){
		$(this).children('.c_menu').show();
	});
	$('.item').mouseout(function(){
		$(this).children('.c_menu').hide();
	});
	$('.itext').focus(function (){
		$(this).val('');
	});
	$('.itext').blur(function (){
		if($(this).val() == ''){
			$(this).val('站内搜索');
		}
	});
});