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
			<li><a  class='faq'>常见问题</a>
				<ul>
					<li class='active'><a href='__URL__/delivery'>寄送货物</a></li>
					<li><a href='__URL__/tracking'>追踪货物</a></li>
					<li><a href='__URL__/receive'>接收货物</a></li>
					<li><a href='__URL__/account'>账户管理</a></li>
					<li><a href='__URL__/contraband'>禁运品</a></li>
				</ul>
			</li>
			<!-- <li><a href='' class='download bold'>下载中心</a></li> -->
			<li><a href='__URL__/complain' class='advice'>咨询|建议|投诉</a></li>
			<li><a href='tencent://Message/?Uin=505600376&Site=有事就请联系我&Menu=yes' class='o-service'>在线客服</a></li>
			<li><a href='__URL__/map' class='map'>网站地图</a></li>
			<li><a href='__URL__/price' class='price'>价格/时效查询</a></li>
			<li><a href='__URL__/station' class='station'>网点查询</a></li>
			
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
	<h3>价格/时效查询</h3>
	<div class='query-form'>
		<form>
			<input type='text' value='发货城市'/>
			<span class='arrow'></span>
			<input type='text' value='收货城市'/>
			<input type='submit' value='查询' />
		</form>
	</div>
	<div class='query-results'>
		<h4>查询结果：</h4>
		<table class='tb'>
			<thead>
				<tr>
					<td class='td_one'>运输方式</td>
					<td class='td_two'>单价</td>
					<td class='td_three'>可提货时效（从发货次日算起）</td>
					<td class='td_four'>运输起价（元）</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>精准卡航</td>
					<td>重货 2.05 元/公斤，轻货 431 元/立方米</td>
					<td>
						预计总部可提货时间：<br>
						第二天10:00<br>
						预计总部可派送时间：<br>
						第二天18:00前 <br>
					</td>
					<td>40 </td>
				</tr>
				<tr>
					<td>精准汽运</td>
					<td>重货 1.7 元/公斤，轻货 357 元/立方米 </td>
					<td>
						第三天到第四天
					</td>
					<td>30</td>
				</tr>
				<tr>
					<td>经济快递</td>
					<td>
						首重(1公斤以下 )：12元<br>
						续重1(1-5公斤)：5元/公斤<br>
						续重2(5公斤以上 )：4元/公斤 <br>
					</td>
					<td>
						预计可提货时间：<br>
						第二天14:00<br>
						预计可派送时间：<br>
						第二天18:00前 <br>
					</td>
					<td>12</td>
				</tr>
			</tbody>
		</table>
		<p class='notice'>注：货物的总重量（KG）和总体积（m³）的比值大于或等于210为重货，按重量计费；若比值低于210为轻货，按体积计费。如有疑问请联系当地营业部咨询。</p>

		<p class='tips'>说明： <span>此价格与时效仅供参考</span>，普通客户准确报价以营业部电话咨询为准，月结客户以签订协议中的报价为准。</p>
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