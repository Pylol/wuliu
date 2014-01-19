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

<div id='sites'>
	<div class='headtop'>
		<a href='__URL__/delivery'>帮助与支持</a> > <a href=''>网点查询</a> > <span>全部</span>
	</div>
	<div class='letters'>
		<ul>
			<li><a href='#' class='active'>全部</a></li>
			<li><a href='#'>A</a></li>
			<li><a href='#'>B</a></li>
			<li><a href='#'>C</a></li>
			<li><a href='#'>D</a></li>
			<li><a href='#'>E</a></li>
			<li><a href='#'>F</a></li>
			<li><a href='#'>G</a></li>
			<li><a href='#'>H</a></li>
			<li><a href='#'>I</a></li>
			<li><a href='#'>J</a></li>
			<li><a href='#'>K</a></li>
			<li><a href='#'>L</a></li>
			<li><a href='#'>M</a></li>
			<li><a href='#'>N</a></li>
			<li><a href='#'>O</a></li>
			<li><a href='#'>P</a></li>
			<li><a href='#'>Q</a></li>
			<li><a href='#'>R</a></li>
			<li><a href='#'>S</a></li>
			<li><a href='#'>T</a></li>
			<li><a href='#'>U</a></li>
			<li><a href='#'>V</a></li>
			<li><a href='#'>W</a></li>
			<li><a href='#'>X</a></li>
			<li><a href='#'>Y</a></li>
			<li><a href='#'>Z</a></li>
		</ul>
	</div>
	<dl>
		<dd id='A'>A
			<a href='#'>阿坝藏族羌族自治州</a>
			<a href='#'>阿克苏地区</a>
			<a href='#'>阿拉尔市</a>
			<a href='#'>阿拉善盟</a>
			<a href='#'>安康市</a>
			<a href='#'>安庆市</a>
			<a href='#'>鞍山市</a>
			<a href='#'>安顺市</a>
			<a href='#'>安阳市</a>
		</dd>
		<dd id='B'>B
			<a href='__URL__/city/beijing'>北京市</a>
			<a href='#'>白城市</a>
			<a href='#'>百色市</a>
			<a href='#'>白山市</a>
			<a href='#'>白银市</a>
			<a href='#'>蚌埠市</a>
			<a href='#'>保定市</a>
			<a href='#'>宝鸡市</a>
			<a href='#'>包头市</a>
			<a href='#'>巴彦淖尔市</a>
			<a href='#'>巴音郭楞蒙古自治州</a>
			<a href='#'>巴中市北海市</a>
			<a href='#'>本溪市</a>
			<a href='#'>毕节市</a>
			<a href='#'>滨州市</a>
			<a href='#'>亳州市</a>
		</dd>
		<dd id='C'>C
			<a href='#'>阿坝藏族羌族自治州</a>
			<a href='#'>阿克苏地区</a>
			<a href='#'>阿拉尔市</a>
			<a href='#'>阿拉善盟</a>
			<a href='#'>安康市</a>
			<a href='#'>安庆市</a>
			<a href='#'>鞍山市</a>
			<a href='#'>安顺市</a>
			<a href='#'>安阳市</a>
		</dd>
		<dd id='D'>D
			<a href='#'>阿坝藏族羌族自治州</a>
			<a href='#'>阿克苏地区</a>
			<a href='#'>阿拉尔市</a>
			<a href='#'>阿拉善盟</a>
			<a href='#'>安康市</a>
			<a href='#'>安庆市</a>
			<a href='#'>鞍山市</a>
			<a href='#'>安顺市</a>
			<a href='#'>安阳市</a>
		</dd>
		<dd id='E'>E
			<a href='#'>阿坝藏族羌族自治州</a>
			<a href='#'>阿克苏地区</a>
			<a href='#'>阿拉尔市</a>
			<a href='#'>阿拉善盟</a>
			<a href='#'>安康市</a>
			<a href='#'>安庆市</a>
			<a href='#'>鞍山市</a>
			<a href='#'>安顺市</a>
			<a href='#'>安阳市</a>
		</dd>
		<dd id='F'>F
			<a href='#'>阿坝藏族羌族自治州</a>
			<a href='#'>阿克苏地区</a>
			<a href='#'>阿拉尔市</a>
			<a href='#'>阿拉善盟</a>
			<a href='#'>安康市</a>
			<a href='#'>安庆市</a>
			<a href='#'>鞍山市</a>
			<a href='#'>安顺市</a>
			<a href='#'>安阳市</a>
		</dd>
		<dd id='G'>G
			<a href='#'>阿坝藏族羌族自治州</a>
			<a href='#'>阿克苏地区</a>
			<a href='#'>阿拉尔市</a>
			<a href='#'>阿拉善盟</a>
			<a href='#'>安康市</a>
			<a href='#'>安庆市</a>
			<a href='#'>鞍山市</a>
			<a href='#'>安顺市</a>
			<a href='#'>安阳市</a>
		</dd>
	</dl>
	<div class='tellus'>
		<p>没有您想找的城市? 请 <a href='#'>告诉我们</a></p>
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