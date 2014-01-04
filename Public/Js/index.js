function demoSlide(){
	var img_set = $('.img_set');
	var img_tab = $('.img_tab');
	var len = img_set.position().left - 700;
	if(len < -2800){
		len = 0;
		img_set.css({left:0});
		return ;
	}
	img_set.animate({left: len+'px'}, 1000);	//移动图片
	img_tab.find('.active').removeClass('active');	
	var newTab = img_tab.children()[len/-700-1];	
	$(newTab).addClass('active');		//更换标签
}
$(document).ready(function (){
	var img_set = $('.img_set');
	var img_tab = $('.img_tab');
	var timer = setInterval(demoSlide, 2500);
	img_tab.find('a').click(function (){
		img_tab.find('.active').removeClass('active');
		var index = $(this).index();
		var newTab = img_tab.children()[index];
		$(newTab).addClass('active');	//更换标签

		var newLen = (index + 1) * -700;
		img_set.animate({left: newLen+'px'}, 1000);
	});
	$("#indexsearch input[type='text']").focus(function () {
		var arr = ['请输入运单号', '请输入城市名称', '请输入发货城市', '请输入目标城市'];
		if($.inArray($(this).val(), arr) != -1){
			$(this).val('');
		}
	});
	$("#indexsearch input[type='text']").blur(function (){
		if($(this).val() == ''){
			if($(this).hasClass('ordernumber')){
				$(this).val('请输入运单号');
			}
			if($(this).hasClass('cityname')){
				$(this).val('请输入城市名称');
			}
			if($(this).hasClass('sendcity')){
				$(this).val('请输入发货城市');
			}
			if($(this).hasClass('recvcity')){
				$(this).val('请输入目标城市');
			}
		}
	});
});