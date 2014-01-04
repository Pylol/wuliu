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
	<h3>常见问题<font>--账户管理</font></h3>
	<ul class='qus'>
		<li><a href='#'>如何修改密码？</a></li>
		<li><a href='#'>如何找回密码？</a></li>
		<li><a href='#'>如何查询发货情况？</a></li>
		<li><a href='#'>如何查询价格与时效？</a></li>
		<li><a href='#'>如何进行联系人管理？</a></li>
		<li><a href='#'>如何进行个人设置？</a></li>
		<li><a href='#'>如何管理我的订单？</a></li>
		<li><a href='#'>如何登陆或注册我的德邦 ?</a></li>
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
				<td class='title'>如何修改密码？</td>
				<td>进入我的德邦，点击左侧导航中的”个人资料设置”后，点击“修改密码”，根据引导即可完成密码修改。</td>
			</tr>
			<tr>
				<td class='title'>如何找回密码？</td>
				<td> 当前支持通过用户名与注册邮箱的方式找回密码，若您的密码丢失，请访问以下页面找回：http://www.deppon.com/user/toWriteNameEmail.action。</td>
			</tr>
			<tr>
				<td class='title'>如何查询发货情况？</td>
				<td>说明：系统列出客户发货的历史记录。能查询到的信息：单号、目的站，发货时间、运输方式、收货人、签收时间、签收状态、件数、总费用。

操作：用户可以根据单号、目的站、发货日期中任意一项检索出过去３个月发货历史记录。
★“注意”上面所指的“发货历史记录”是您注册使用网上营业厅开始的发货记录（包括营业部发货记录与网上营业厅发货记录）如果您之前在营业部已有客户编号，您将能查到从您拥有编号以后过去３个月的发货记录。</td>
			</tr>
			<tr>
				<td class='title'>如何查询价格与时效？</td>
				<td>1.点击打开价格/时效查询页面：http://www.deppon.com/jiage/。
     2.选择出发、到达城市；运输方式及货物的重量和体积（如果客户有多种不同形状、不同规格的货物，但并不清楚货物的总重量或总体积，点击“打开辅助计算器”系统可帮您测量。
     3.点击“计算总价”。系统显示结果。如果客户处于已登录状态，点击“下单”可直接进入网上下单界面。</td>
			</tr>
			<tr>
				<td class='title'>如何进行联系人管理？</td>
				<td>说明：日常发货客户经常需要将货物发给同一位收货人，填写订单时如果每次都得填写收货人资料，无疑非常麻烦。收货人资料管理彻底解决这一问题，将您的收货人姓名、联系方式和地址收藏起来，下单时，不必每次输入前面的信息，直接导入就行了。

1. 如果您是首次登录的用户，为了以后网上下单的方便，您可以点击“增加”，将您的所有收货人资料输入。

2. 完成收货人资料的存储。在网上下单，填写订单中收货人资料时，只要点击“导入收货人资料”收货人资料自动导入。</td>
			</tr>
			<tr>
				<td class='title'>如何进行个人设置？</td>
				<td>1. 登录德邦物流官网；

2. 登录我的德邦；

3. 打开个人管理即可填写个人资料和修改密码。</td>
			</tr>
			<tr>
				<td class='title'>如何管理我的订单？</td>
				<td>说明：所谓的“网上订单管理”是指客户在网上下单后的记录。

操作：客户可按收货人姓名来检索订单，或点击带下划线的“收货人姓名”栏中的“***”、“订单编号”栏中的“**"，显示这份订单更详细的情况，在“受理状态”栏显示“待受理”时，客户可修改订单或撤消订单，但如果“受理状态”栏显示“营业部已初步受理”、“客户已核实”、“客户已撤销”时客户将不能对订单进行操作。
此页面每３０秒将刷新一次，能迅速及时的显示德邦物流业务受理部门反馈过来的信息，方便客户第一时间了解下单情况</td>
			</tr>
			<tr>
				<td class='title'>如何登陆或注册我的德邦 ?</td>
				<td>注册德邦网站用户可以按以下方式来操作:

1. 登录德邦物流，点击页面顶部右侧“注册”按钮；

2. 输入用户名、邮箱、密码，点击“完成注册”。</td>
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