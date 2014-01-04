<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
<head>
	<title>-蜂鸟物流</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<script language="javascript" src=""></script> 

	<link rel='stylesheet' href='__PUBLIC__/Css/base.css'>
	<link rel='stylesheet' type='text/css' href='__PUBLIC__/Css/lmenu.css'>
	<link rel='stylesheet' href="__PUBLIC__/Css/<?php echo ($script_name); ?>.css" />

	<script type='text/javascript' src='__PUBLIC__/Js/jquery.js'></script>
	<script type='text/javascript' src='__PUBLIC__/Js/base.js'></script>
	<script type='text/javascript' src="__PUBLIC__/Js/<?php echo ($script_name); ?>.js"></script>
	<script language="javascript">  
		var mapObj;  
		//初始化地图对象，加载地图  
		function mapInit(){  
		    mapObj = new AMap.Map("iCenter",{  
		    center:new AMap.LngLat(116.397428,39.90923), //地图中心点  
		    level:13  //地图显示的缩放级别  
		    });   
		}  
	</script>
</head>
<body onLoad="mapInit()">
	<div id='box'>
		<div id='header'>
			<div class='top_nav'>
				<span class='top_nav_left'>
					<a href='#'>收藏蜂鸟</a>
				</span>
				<span class='top_nav_right'>
					<a href='#'>登录</a>|
					<a href='#'>注册</a>
					<a href='#' class='language'>中文</a>|
					<a href='#'>English</a>
				</span>
			</div> <!-- end of top_nav-->
			<div class='log log_top'></div>
			<div class='search'>
				<input type='text' class='itext'value='站内搜索'/>
				<input type='submit' class='submit' value=''/>
			</div>
			<div class='menu'>
				<ul>
					<li class='item'><a href='__APP__/Index/index'>首页</a></li>
					<li class='item'><a href='#'>我的物流</a>
						<ul class='c_menu'>
							<li><a href='__APP__/Account/order'>我的订单</a></li>
							<li><a href='__APP__/Account/transonline'>网上下单</a></li>
							<li><a href='__APP__/Account/consignee'>联系人管理</a></li>
							<!-- <li><a href='__APP__/Account/claims'>在线理赔</a></li> -->
							<li><a href='__APP__/Account/message'>站内信息</a></li>
							<li><a href='__APP__/Account/info'>个人资料设置</a></li>
							<li><a href='__APP__/Account/coupon'>我的优惠券</a></li>
						</ul>
					</li>
					<li class='item'><a href='#' >货物追踪</a>
						<ul class='c_menu'>
							<li><a href='__APP__/Track/track'>货物追踪</a></li>
						</ul>
					</li>
					<li class='item'><a href='#' >业务介绍</a>
						<ul class='c_menu'>
							<li><a href='__APP__/Business/transport'>运货方式</a></li>
							<li><a href='__APP__/Business/collect'>增值服务</a></li>
							<li><a href='__APP__/Business/activities'>市场活动</a></li>
						</ul>
					</li>
					<li class='item'><a href='#' >帮助与支持</a>
						<ul class='c_menu'>
							<li><a href='__APP__/Help/delivery'>常见问题</a></li>
							<!-- <li><a href='#'>下载中心</a></li> -->
							<li><a href='__APP__/Help/complain'>咨询|建议|投诉</a></li>
							<li><a href='__APP__/Help/map'>网站地图</a></li>
							<li><a href='__APP__/Help/price'>价格/时效查询</a></li>
							<li><a href='__APP__/Help/station'>网点查询</a></li>
						</ul>
					</li>
					<li class='item'><a href='#' >关于蜂鸟</a>
						<ul class='c_menu'>
							<li><a href='__APP__/About/intro'>公司概述</a></li>
							<li><a href='__APP__/About/news'>新闻动态</a></li>
							<li><a href='__APP__/About/recruit'>人才招聘</a></li>
							<li><a href='__APP__/About/contact'>联系我们</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- end of mneu -->
		</div><!-- end of header-->

<div id='lmenu'>
	<span id='ent_top'></span>
	<span id='ent_center'>
		<ul>
			<li class='active'><a href='__URL__/transport' class='transport bold'>运输方式</a></li>
			<li><a  class='incre-s bold'>增值服务</a>
				<ul>
					<li><a href='__URL__/collect'>代收货款</a></li>
					<li><a href='__URL__/package'>安全包装</a></li>
					<li><a href='__URL__/other'>其他增值服务</a></li>
				</ul>
			</li>
			<li><a href='__URL__/activities' class='activities bold'>市场活动</a></li>
		</ul>
	</span>
	<span id='ent_bottom'></span>
	<div class='sina' >
		<a href='#' class='focus' onclick='javascript:alert("成功关注！")'><span></span>加关注</a>
		<span class='sina_name'>蜂鸟物流</span>
	</div>
	<div class='c-service cdis'>
		<div class='advice'>
			<a href='#'>建议 | 投诉</a>
		</div>
		<div class='online_service'>
			<a href='tencent://Message/?Uin=505600376&Site=有事就请联系我&Menu=yes'>在线客服</a>
		</div>
	</div>
</div>
<div id='content'>
	<h3>代收货款<font>---安全、快捷的货款回收服务</font></h3>
	<pre class='prec'>
提供“即日退”和“三日退”两种代收货款服务。替您收回货款后，在承诺的退款时效内将货款汇出，让您安全、及时地回笼资金。

即日退：
•退款时效：收货人正常签收后24小时内到账（周末可退、国务院公布的法定假期不退款）
•收费标准：最低20元/票，费率10‰，最高200元/票
•指定银行：工商银行、建设银行、农业银行、招商银行 （均仅限于个人借记卡账户）

三日退：
•退款时效：收货人正常签收后第三天汇款（遇周末、节假日顺延）
•收费标准：最低10元/票,费率10000元以下5‰，10000元（含）以上4‰,最高100元/票
•指定银行： 中国建设银行、中国交通银行、招商银行、中国民生银行、兴业银行、上海浦东发展银行、深圳发展银行、中国工商银行、中国农业银行、广东发展银行、农行存折、农村信用社、中国光大银行

截至2012年12月，德邦物流代收货款累积突破200亿元人民币。
——————————————————————————————————————————————————
服务说明：
1.当您需要代收货款时，请在运单联或网单上填写代收货款金额。并填写《德邦物流代收货款客户账户资料登记卡》，保证填写的开户名称、收款银行、账号等信息准确无误，并请仔细核对发货人姓名及手机号等信息，否则退错或者严重影响您的退款时效。
2.发货时，需对您的货物进行开箱验货，请您予以配合；收货方无需征求发货人的同意可以对代收货款货物进行开箱验货，请您发货前与收货人协商好货物质量、规格等。 因您发错货物或者质量问题，导致收货人不签收的，德邦不承担任何责任。
3.当您需要取消代收货款、修改代收货款金额、更改收货人姓名时，您都需要出示或者传真客户联，请您妥善保管好运单客户联。 
——————————————————————————————————————————————————
温馨提示：
1.部分营业部可提供刷卡服务（银行将收取消费金额1%的手续费）。
2.其中招商银行、中国工商银行、中国建设银行、中国农业银行汇款时效最为快捷，客户提供的账号不能为信用卡账号。

——————————————————————————————————————————————————

详情请咨询各地营业部或拨打客户服务热线：400-830-5555
	</pre>
</div>
		<div id='footer'>
			<div class='f_log'>
				<div class='log log_bottom'></div>
				<div class='f_ph'>全国投诉热线</div>
			</div><!-- end of f_log -->
			<div class='f_customer f_block'>
				<h5>客户专区</h5>
				<ul>	
					<li><a href='#'>网上下单</a></li>
					<li><a href='#'>订单管理</a></li>
					<li><a href='#'>已有账单</a></li>
					<li><a href='#'>在线理赔</a></li>
					<li><a href='#'>网点分布</a></li>
					<li><a href='#'>在线客服</a></li>
					<li><a href='#'>常见问题</a></li>
					<li><a href='#'>投诉意见</a></li>
				</ul>
			</div><!-- end of f_customer -->
			<div class='f_enterprise f_block'>
				<h5>走进蜂鸟</h5>
				<ul>	
					<li><a href='#'>企业概况</a></li>
					<li><a href='#'>文化理念</a></li>
					<li><a href='#'>经营理念</a></li>
					<li><a href='#'>人才招聘</a></li>
				</ul>
			</div><!-- end of f_enterprise -->
			<div class='f_link f_block'>
				<h5>友情链接</h5>
				<ul>	
					<li><a href='#'>国家邮政局</a></li>
					<li><a href='#'>中国快递协会</a></li>
					<li><a href='#'>德邦物流</a></li>
					<li><a href='#'>申通快递</a></li>
					<li><a href='#'>圆通快递</a></li>
					<li><a href='#'>韵达快递</a></li>
				</ul>
			</div><!-- end of f_link -->
			<div class='copyright'>
				蜂鸟物流版权所有Copyright © 2013 All Right Reserved   湘ICP备10050302号
			</div>
		</div><!-- end of footer -->
	</div>
	</body>
</html>