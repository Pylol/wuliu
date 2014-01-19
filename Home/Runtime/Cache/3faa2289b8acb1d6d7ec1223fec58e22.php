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
			<li><a  class='faq'>常见问题</a>
				<ul>
					<li class='active'><a href='/Help/delivery'>寄送货物</a></li>
					<li><a href='/Help/tracking'>追踪货物</a></li>
					<li><a href='/Help/receive'>接收货物</a></li>
					<li><a href='/Help/account'>账户管理</a></li>
					<li><a href='/Help/contraband'>禁运品</a></li>
				</ul>
			</li>
			<!-- <li><a href='' class='download bold'>下载中心</a></li> -->
			<li><a href='/Help/complain' class='advice'>咨询|建议|投诉</a></li>
			<li><a href='tencent://Message/?Uin=505600376&Site=有事就请联系我&Menu=yes' class='o-service'>在线客服</a></li>
			<li><a href='/Help/map' class='map'>网站地图</a></li>
			<li><a href='/Help/price' class='price'>价格/时效查询</a></li>
			<li><a href='/Help/station' class='station'>网点查询</a></li>
			
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
	<h3>常见问题<font>--接收货物</font></h3>
	<ul class='qus'>
		<li><a href='#'>德邦可以上门接货吗？需要收费吗？</a></li>
		<li><a href='#'>如何查找最近的营业厅网点？</a></li>
		<li><a href='#'>德邦可以送货上门吗？需要收费吗？</a></li>
		<li><a href='#'>接收货物要办理什么手续？</a></li>
		<li><a href='#'>发现我的货物有破损怎么办？</a></li>
		<li><a href='#'>自提、派送是什么意思 ?</a></li>
	</ul>
	<table class='tb_faq'>
		<thead>
			<tr>
				<td class='title'>问题</td>
				<td>回答</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class='title'>德邦可以上门接货吗？需要收费吗？</td>
				<td>我司为方便客户发货，为客户提供上门接货服务。 目前我司上门接货服务需收取上门接货费，具体请咨询当地营业部。</td>
			</tr>
			<tr>
				<td class='title'>如何查找最近的营业厅网点？</td>
				<td>您好！查找最近营业网点您可以登陆德邦物流网站：http://www.deppon.com/wangdian/进行网点查询。如果您还不清楚营业部的名称，那么请您在选择省市查询里选择您所要查找的营业厅所在的省市情况，之后点击查询。在网点名称目录中点击网点名称，您可查看到网点的详细信息与电子地图。其次，您可以咨询德邦物流当地营业网点，或是拨打德邦物流全国客户服务热线 400－830－5555 咨询。</td>
			</tr>
			<tr>
				<td class='title'>德邦可以送货上门吗？需要收费吗？</td>
				<td>我司为方便客户收货，为客户提供送货服务。您所在区域与我司最近营业网点不超过30公里的，为我司可派送范围，超过30公里区域为我司的不可送货范围。送货需要按照城市级别收取送货费，特级城市（北京、上海）400kg且2.5m³以下80元/票；一级城市（全国省会及一线城市为主）275kg且2.5m³以下55元/票；二级城市（全国二线城市为主）200kg且2.5m³以下40元/票；超过最低收费，按照0.2元/kg收取（体积超过2.5m³，不低于100元/票，与重量收费取大优先）。对于单票货重量大于1500KG或者9m³以上，最低300元/票，无上限。具体收费标准请联系当地营业部。</td>
			</tr>
			<tr>
				<td class='title'>自提、派送是什么意思 ?</td>
				<td>自提：就是您需要亲自去德邦的营业网点领取货物。

派送：就是德邦会派专门的送货人员将您的货物送到您指定的地方。派送分为送货（不含上楼）和送货上楼两种。</td>
			</tr>
			<tr>
				<td class='title'>接收货物要办理什么手续？</td>
				<td>您好！发货前需要您填写一份托运书，具体内容按照托运书上的内容填写，当货物到达目的地的时候， 需要携带收货人身份证原 件和所需运费，办理提货手续；如果不是本人提货，就需要委托人携带本人身份证原件、收货人的身份证和所需运费办理提货手续</td>
			</tr>
			<tr>
				<td class='title'>发现我的货物有破损怎么办？</td>
				<td>您好，如果您签收时发现货物有破损，您可以在运单上注明货物破损情况、异常签收，并提交索赔资料。我们会依据您异常签收 信息与保价申明价值的金额进行赔偿。</td>
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