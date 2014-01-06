$(document).ready(function(){
	$('#cgpd').click(function(){
		$('.changepass').show('sloww');
	});
	$('#passcancle').click(function(){
		$('.changepass').hide('slow');
	});
	$('#cgemail').click(function(){
		oEmail = $('.emailEdit');
		if(oEmail.children().length > 0){
			//修改密码
			var newEmail = oEmail.children().val();
			oEmail.html(newEmail);
			$(this).val('修改');
		}else{
			var email = oEmail.html();
			var newHtml = "<input type='text' value='"+email+"' />";
			oEmail.html(newHtml);
			$(this).val('完成');
		}
	});
});