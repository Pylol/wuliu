<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
<head>
	<title>-蜂鸟物流</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<script language="javascript" src=""></script> 

	<link rel='stylesheet' href='__PUBLIC__/Css/base.css'>
	<link rel='stylesheet' type='text/css' href='__PUBLIC__/Css/lmenu.css'>
	<link rel='stylesheet' href="__PUBLIC__/Css/<?php echo ($css); ?>.css" />

	<script type='text/javascript' src='__PUBLIC__/Js/jquery.js'></script>
	<script type='text/javascript' src='__PUBLIC__/Js/base.js'></script>
	<script type='text/javascript' src="__PUBLIC__/Js/<?php echo ($js); ?>.js"></script>
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
					<a href='/User/regist_login'>登录</a>|
					<a href='/User/regist_login'>注册</a>
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
					<li class='item'><a href='/Index/index'>首页</a></li>
					<li class='item'><a href='#'>我的物流</a>
						<ul class='c_menu'>
							<li><a href='/Account/order'>我的订单</a></li>
							<li><a href='/Account/transonline'>网上下单</a></li>
							<li><a href='/Account/consignee'>联系人管理</a></li>
							<!-- <li><a href='/Account/claims'>在线理赔</a></li> -->
							<li><a href='/Account/message'>站内信息</a></li>
							<li><a href='/Account/info'>个人资料设置</a></li>
							<li><a href='/Account/coupon'>我的优惠券</a></li>
						</ul>
					</li>
					<li class='item'><a href='#' >货物追踪</a>
						<ul class='c_menu'>
							<li><a href='/Track/track'>货物追踪</a></li>
						</ul>
					</li>
					<li class='item'><a href='#' >业务介绍</a>
						<ul class='c_menu'>
							<li><a href='/Business/transport'>运货方式</a></li>
							<li><a href='/Business/collect'>增值服务</a></li>
							<li><a href='/Business/activities'>市场活动</a></li>
						</ul>
					</li>
					<li class='item'><a href='#' >帮助与支持</a>
						<ul class='c_menu'>
							<li><a href='/Help/delivery'>常见问题</a></li>
							<!-- <li><a href='#'>下载中心</a></li> -->
							<li><a href='/Help/complain'>咨询|建议|投诉</a></li>
							<li><a href='/Help/map'>网站地图</a></li>
							<li><a href='/Help/price'>价格/时效查询</a></li>
							<li><a href='/Help/station'>网点查询</a></li>
						</ul>
					</li>
					<li class='item'><a href='#' >关于蜂鸟</a>
						<ul class='c_menu'>
							<li><a href='/About/intro'>公司概述</a></li>
							<li><a href='/About/news'>新闻动态</a></li>
							<li><a href='/About/recruit'>人才招聘</a></li>
							<li><a href='/About/contact'>联系我们</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- end of mneu -->
		</div><!-- end of header-->

<div id='lmenu'>
	<span id='ent_top'></span>
	<span id='ent_center'>
		<ul>
			<li class='active'><a href='/Business/transport' class='transport bold'>运输方式</a></li>
			<li><a  class='incre-s bold'>增值服务</a>
				<ul>
					<li><a href='/Business/collect'>代收货款</a></li>
					<li><a href='/Business/package'>安全包装</a></li>
					<li><a href='/Business/other'>其他增值服务</a></li>
				</ul>
			</li>
			<li><a href='/Business/activities' class='activities bold'>市场活动</a></li>
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
	<h3>其他增值服务</h3>
	<pre class='prec'>
签收回单
在您的货物正常签收后，为您提供签收单返还的服务。
收费标准：
●原件签收单返回类收取20元/票
●传真件签收单返回类收取10元/票
服务说明：
原件签收单包括：客户签收单原件；传真件签收单包括：客户签收单传真、运单签收联传真。

——————————————————————————————————————————————————

综合信息服务
实时跟踪，让货物信息尽在掌握。综合信息服务是德邦为您提供的关于货物信息的服务，包括货物跟踪和查询、各项通知、短信反馈、投诉处理等事项。
收费标准：
综合信息服务费按2元/票收取。

——————————————————————————————————————————————————
送货服务
您所在区域与我司最近营业网点不超过30公里的，为标准派送范围，可根据您需求，将货物送至您指定的地方。
送货上门
收费标准：
将我司所有到达网点所在城市分为三级，并按不同到达城市进行分级收费。
 送货上楼及送货进仓服务详情咨询当地营业部。

——————————————————————————————————————————————————

上门接货
根据您需求，上门为您办理提货业务，让您足不出户即可发货。
上海、苏州、西安、南京、天津、佛山、无锡、徐州、淮安、合肥、太仓、吴江、南通、杭州、重庆、宁波、北京、厦门、揭阳、武汉、郑州、长沙 、广州、珠海、中山取消上门接货费，客户到营业部发货比我司上门接货价低0.1元/KG、21元/m³，最低一票低20元/票。
其他城市接货费详情请咨询400服务热线或当地营业部。

——————————————————————————————————————————————————

保管业务
为您的货物提供三天免费保管，因您的原因导致货物超过三天未收货或提货则需收取一定的保管费用。
收费标准：
收费标准为10元/m³/天，最低收取5元/票，最高1000元/票。
服务说明：
货物出现异常情况（破损、少货、晚到等）在处理期间不计费。

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
					<li><a href='#'>网点查询</a></li>
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