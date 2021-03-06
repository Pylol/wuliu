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
			<li class='active'><a href='/Account/order' class='order'>我的订单</a>
				<!-- <ul>
					<li class='active'><a href='/Account/order'>全部</a></li>
					<li><a href='#'>未付款订单(0)</a></li>
					<li><a href='#'>运输中订单(0)</a></li>
				</ul> -->
			</li>
			<li><a href='/Account/transonline' class='transonline'>网上下单</a></li>
			<li><a href='/Account/consignee' class='consignee'>联系人管理</a></li>
			<!-- <li><a href='/Account/claims' class='claims'>在线理赔</a> -->
				
			</li>
			<li><a href='/Account/message' class='message'>站内信息</a>
				<!-- <ul>
					<li><a href='/Account/message'>全部</a></li>
					<li><a href='#'>未读信息(0)</a></li>
					<li><a href='#'>已读信息</a></li>
				</ul> -->
			</li>
			<li><a href='/Account/info' class='info'>个人资料的设置</a></li>
			<li><a href='/Account/coupon' class='coupon'>我的优惠券</a></li>
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
	<h3>订单查询</h3>
	<form action='' method='get'>
		<div class='orderquery'>
			<ul>
				<li>
					<label>关键字：</label>
					<div class='select'>
						<input type='text' value='订单号' readonly/>
						<span>
							<ul class='option'>
								<li>订单号</li>
								<li>收货人</li>
								<li>货物名称</li>
							</ul>
						</span>
					</div>
					<input type='tex' value='请输入订单号' class='keys'/>
				</li>
				<li>
					<label>时间范围：</label>
					<input type='text' value='2013-02-01' class='querytime' readonly/> -
					<input type='text' value='2013-05-01' class='querytime' readonly/>
					<label>付款方式：</label>
					<div class='select'>
						<input type='text' value='全部' readonly/>
						<span>
							<ul class='option'>
								<li>现金</li>
								<li>到付</li>
								<li>月结</li>
								<li>网上支付</li>
							</ul>
						</span>
					</div>
					<label>物流状态：</label>
					<div class='select'>
						<input type='text' value='全部' readonly/>
						<span>
							<ul class='option'>
								<li>全部</li>
								<li>待受理</li>
								<li>已受理</li>
							</ul>
						</span>
					</div>
					<input type='submit' value='查询' class='submit'/>
				</li>
			</ul>
		</div>
	</form>
	<table class='tb'>
		<thead>
			<tr>
				<td class='td_one'>订单号</td>
				<td class='td_two'>收货人</td>
				<td class='td_three'>下单日期</td>
				<td class='td_four'>物流状态</td>
				<td class='td_five'>支付方式</td>
				<td class='td_six'>操作</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1005030213</td>
				<td>张三丰</td>
				<td>2013-01-02 20:03:22</td>
				<td>待受理</td>
				<td>现金</td>
				<td><a href='#'>删除</a></td>
			</tr>
			<tr>
				<td>1005030213</td>
				<td>张三丰</td>
				<td>2013-01-02 20:03:22</td>
				<td>运输中</td>
				<td>现金</td>
				<td><a href='#'>查看</a></td>
			</tr>
		</tbody>
	</table>
	<p class='tips'>对不起，没有对应查询条件的订单！请检查查询条件。</p>
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