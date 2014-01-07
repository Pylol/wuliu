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
		<h5>订单查询</h5>
		<form action='' method='post'>
			<textarea>请输入订单号</textarea>
			<img src='' />
			<input type='text' />
			<input type='submit' value='查询' />
			<a href=''>重置</a>
		</form>
	</span>
	<span id='ent_bottom'></span>
	<span id='prompt_top'></span>
	<span id='prompt_center'>
		<h4>温馨提示</h4>
		<div id='prompt_content'>
			<p>您需要凭以下证件提取您的货物</p>
			<p>本人提货：</p>
			<p class='b'>收货人本人身份证原件</p>
			<p>委托提货：</p>
			<p class='b'>收货人及代理人的身份证原件</p>
			<p>公司提货：</p>
			<p class='b'>提货人身份证原件与提货委托书(加盖公章)</p>
		</div>
	</span>
	<span id='prompt_bottom'></span>
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
	<h3>货物追踪</h3>
	<div class='sresult'>
		<div class='track'>
			<h5>订单详情：</h5>
			<p>2013-12-12 17:10:47 卖家已发货</p>
			<p>2013-12-12 23:46:04 快件在莆田,准备送往下一站</p>
			<p>2013-12-13 01:21:53 快件在莆田集散中心,准备送往下一站</p>
			<p>2013-12-13 01:33:24 快件在莆田集散中心,准备送往下一站</p>
			<p>2013-12-13 20:51:03 快件在武汉陆运中转场,准备送往下一站</p>
			<p>2013-12-13 22:00:41 快件在武汉陆运中转场,准备送往下一站</p>
			<p>2013-12-13 22:01:37 快件在武汉陆运中转场,准备送往下一站长沙集散中心</p>
			<p>2013-12-14 09:58:46 快件在长沙集散中心,准备送往下一站</p>
			<p>2013-12-14 10:31:06 快件在长沙集散中心,准备送往下一站</p>
			<p>2013-12-14 12:40:06 快件在株洲,准备送往下一站</p>
			<p>2013-12-14 12:41:28 快件在株洲,准备送往下一站</p>
			<p>2013-12-14 13:29:27 快件在湘潭,准备送往下一站湘潭</p>
			<p>2013-12-14 14:21:39 快件准备送往便利店</p>
			<p>2013-12-14 14:50:20 快件到达便利店</p>
			<p>2013-12-14 17:49:48 签收人是：张委</p>
		</div>
		<div class='shis'>
			<h5>最近查询记录：</h5>
			<ul>
				<li><span>运单号：<a href='#'>688551366662</a></span><font>3分钟前</font></li>
				<li><span>运单号：<a href='#'>688551366662</a></span><font>5分钟前</font></li>
				<li><span>运单号：<a href='#'>688551366662</a></span><font>13分钟前</font></li>
				<li><span>运单号：<a href='#'>688551366662</a></span><font>23分钟前</font></li>
			</ul>
		</div>
	</div>
	<div class='map'>
		<h4>地图追踪</h4>
		<div id='iCenter'></div>
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