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
					<a href='__APP__/User/regist_login'>登录</a>|
					<a href='__APP__/User/regist_login'>注册</a>
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
			<li><a  class='intro bold'>公司概述</a>
				<ul>
					<li class='active'><a href='__URL__/intro'>公司简介</a></li>
					<li><a href='__URL__/culture'>文化理念</a></li>
					<li><a href='__URL__/history'>发展史</a></li>
					<li><a href='__URL__/honour'>所获奖项</a></li>
				</ul>
			</li>
			<li><a href='__URL__/news' class='news bold'>新闻动态</a></li>
			<li><a class='job bold' href='__APP__/About/recruit'>人才招聘</a></li>
			<li><a href='__APP__/About/contact' class='contact bold'>联系我们</a></li>
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
			<a href='#'>在线客服</a>
		</div>
	</div>
</div>
<div id='content'>
	<h3>联系我们</h3>
	<div class='headoffice'>
		<pre>感谢您对蜂鸟物流的关注，如果您有什么疑问，可以直接登录个人自助管理平台留言，通过站内消息方式与我们的管理人员取得联系，也可以通过电话、E-mail等方式与我们直接联系。</pre>
		<ul>
			<li>
				<p>客户服务电话:111-111-1111</p>
				<p>总部地址:湖南科技大学六区四栋508</p>
				<p>邮编:411201</p>
			</li>
			<li>
				<p>业务投诉:wzhang727@163.com</p>
				<p>商务合作:wzhang727@163.com</p>
				<p>运营推广:wzhang727@163.com</p>
			</li>
		</ul>
	</div>
	<div class='filiale'>
		<h5>查看子公司联系方式</h5>
		<div class='filsearch'>
			<form action='' method='get'>
				<label>城市网点:</label>
				<input type='text' class='city' value='湖南省-湘潭市-雨湖区'/>
				<div class='select'>
					<input type='text' value='湖南科技大学' readonly/>
					<span>
						<ul class='option'>
							<li>湖南科技大学</li>
							<li>湖南科技大学</li>
							<li>湖南科技大学</li>
							<li>湖南科技大学</li>
						</ul>
					</span>
				</div>
				<input type='submit' value='查询' />
			</form>
		</div>
		<div class='cinfo'>
			<ul>
				<li>网点:湖南省-湘潭市-雨湖区 湖南科技大学</li>
				<li>地址:湘潭市雨湖区桃源路湖南科技大学</li>
				<li>联系电话:xxxx-xxxxxxxx</li>
				<li>E-mail:xxxx@ssdf.com</li>
			</ul>
			<img src='__PUBLIC__/Images/map.jpg' />
		</div>
		
	</div>
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