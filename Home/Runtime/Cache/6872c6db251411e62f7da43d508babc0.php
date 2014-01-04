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
	<h3>常见问题<font>--追踪货物</font></h3>
	<ul class='qus'>
		<li><a href='#'>如何选择签单返还服务？</a></li>
		<li><a href='#'>如何中途取消或改变货件运输？</a></li>
		<li><a href='#'>什么是保价服务？</a></li>
		<li><a href='#'>在哪里能找到德邦物流运单号？</a></li>
		<li><a href='#'>如何查询货物运输进度？</a></li>
		<li><a href='#'>什么是运单号 ?</a></li>
	</ul>
	<table>
		<thead>
			<tr>
				<td class='title'>问题</td>
				<td>回答</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class='title'>如何选择签单返还服务？</td>
				<td> 您好！您在网上下单时，只需在备注一栏里填写"需签收单返还"然后将您的签单随货物送到我们的营业网点即可。</td>
			</tr>
			<tr>
				<td class='title'>如何中途取消或改变货件运输？</td>
				<td>您好！查找最近营业部您可以登陆德邦物流网站：http://www.deppon.com/wangdian/ 点击查找营业网点。如果您不清楚营业部的名称，您可以 在选择省市查询里选择您所要查找的营业厅所在的省市情况，之后点击查询。在网点查询页面中点击网 点名称，您可查看到网点的详细信息与电子地图 其次，您可以咨询德邦物流当地营业网点，或是拨打德邦物流全国客户服务热线 400 －830－5555 咨询。 </td>
			</tr>
			<tr>
				<td class='title'>什么是保价服务？</td>
				<td>您好！我们在承运货物时，托运人声明保价并支付保价费，发生货物丢损，承运人按如下规则赔偿：货物全部灭失，按货物保价 声明价值赔偿；货物部分毁损或灭失，按声明价值和损失比例赔偿，最高不超过声明价值；声明价值高于实际价值的，按实际价值赔偿。</td>
			</tr>
			<tr>
				<td class='title'>在哪里能找到德邦物流运单号？</td>
				<td>您好！查询德邦物流运单号可以点击德邦物流官方网站在线客服，提供发货日期、收货人的姓名和电话号码，就可以帮您查询对应的运单号，或是咨询德邦物流当地营业部；除此，您还可以拨打德邦物流全国客户服务热线 400－830－5555 咨询。</td>
			</tr>
			<tr>
				<td class='title'>如何查询货物运输进度？</td>
				<td>您好！查询货物您可以在德邦首页或追踪与收货目录下进行货物跟踪。输入您的货单号并点击查询键就能查看货物运输进度。 其 次，您可以咨询德邦物流当地营业网点，或是拨打德邦物流全国客户服务热线 400－830－5555 咨询。</td>
			</tr>
			<tr>
				<td class='title'>什么是运单号 ?</td>
				<td>运单号是货运单上的唯一编码，我们可以通过单号在物流公司的网站上查询物流状态， 一般是有多位数字和字母组成。德邦的货运单号现在是以1-9开头的8位或9位数字组成。</td>
			</tr>
		</tbody>
	</table>
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