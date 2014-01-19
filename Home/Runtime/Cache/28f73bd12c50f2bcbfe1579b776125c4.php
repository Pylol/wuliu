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

<div id='lmenu'>
	<span id='ent_top'></span>
	<span id='ent_center'>
		<ul>
			<li><a  class='intro bold'>公司概述</a>
				<ul class='childmenu'>
					<li class='active'><a href='/About/intro'>公司简介</a></li>
					<li><a href='/About/culture'>文化理念</a></li>
					<li><a href='/About/history'>发展史</a></li>
					<li><a href='/About/honour'>所获奖项</a></li>
				</ul>
			</li>
			<li><a href='/About/news' class='news bold'>新闻动态</a></li>
			<li><a class='job bold' href='/About/recruit'>人才招聘</a></li>
			<li><a href='/About/contact' class='contact bold'>联系我们</a></li>
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
	<h3>人才招聘</h3>
	<div class='jobinfo'>
		<table>
			<thead>
				<tr>
					<td>招聘职位</td>
					<td>招聘人数</td>
					<td>发布时间</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href='__URL__/recruit_detail'>PHP工程师</a></td>
					<td>3</td>
					<td>2013-12-15</td>
				</tr>
				<tr class='odd'>
					<td><a href='__URL__/recruit_detail'>PHP工程师</a></td>
					<td>3</td>
					<td>2013-12-15</td>
				</tr>
				<tr>
					<td><a href='__URL__/recruit_detail'>PHP工程师</a></td>
					<td>3</td>
					<td>2013-12-15</td>
				</tr>
				<tr class='odd'>
					<td><a href='__URL__/recruit_detail'>PHP工程师</a></td>
					<td>3</td>
					<td>2013-12-15</td>
				</tr>
			</tbody>
		</table>
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