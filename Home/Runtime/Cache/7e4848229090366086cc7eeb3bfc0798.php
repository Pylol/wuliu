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

	<div id='notice_demo'>
		<div id='notice'>
			<ul class='notice_head'>
				<li class='announcement'>蜂鸟公告</li>
				<li class='trend active'>蜂鸟动态</li>
			</ul>
			<ul id='info_announcement'>
				<li><a href='#'>德邦物流首次亮相2012深圳物流</a></li>
				<li><a href='#'>德邦物流首次亮相2012深圳物流</a></li>
				<li><a href='#'>德邦物流首次亮相2012深圳物流</a></li>
				<li><a href='#'>德邦物流首次亮相2012深圳物流</a></li>
				<li><a href='#'>德邦物流首次亮相2012深圳物流</a></li>
				<li><a href='#'>德邦物流首次亮相2012深圳物流</a></li>
			</ul>
			<ul id='info_trend'>
				<li><a href='#'>德邦物流首次亮相2012深圳物流</a></li>
				<li><a href='#'>德邦物流首次亮相2012深圳物流</a></li>
				<li><a href='#'>德邦物流首次亮相2012深圳物流</a></li>
				<li><a href='#'>德邦物流首次亮相2012深圳物流</a></li>
			</ul>

		</div> <!-- end of notice -->
		<div id='demo'>
			<ul class='img_set'>
				<li><img src='__PUBLIC__/Images/image4.jpg' /></li>
				<li><img src='__PUBLIC__/Images/image1.jpg' /></li>
				<li><img src='__PUBLIC__/Images/image2.jpg' /></li>
				<li><img src='__PUBLIC__/Images/image3.jpg' /></li>
				<li><img src='__PUBLIC__/Images/image4.jpg' /></li>
			</ul>
			<div class='img_tab'>
				<a href='#' class='active'>1</a>
				<a href='#'>2</a>
				<a href='#'>3</a>
				<a href='#'>4</a>
			</div>
		</div><!-- end of demo -->
	</div><!-- end of notice_demo -->
	<div id='indexsearch'>
		<div class='searchblock'>
			<span class='sleft'></span>
			<span class='scenter'>
				<h3>订单查询</h3>
				<form action='' method='post'>
					<input type='text' class='ordernumber input_bg' value='请输入运单号'/>
					<input type='text' class='input_bg code ' ><img src='' alt='验证码' class='code_img'>
					<input type='submit' value='查询' class='submit' />
				</form>
				<p class='hishead'>最近查询记录:</p>
				<p class='hislist'><img src='__PUBLIC__/Images/ts-ico.png'>您最近没有查询记录</p>
			</span>
			<span class='sright'></span>
		</div>
		<div class='searchblock'>
			<span class='sleft'></span>
			<span class='scenter'>
				<h3>网点查询</h3>
				<form action='' method='get'>
					<input type='text' value='请输入城市名称' class='input_bg cityname'>
					<input type='submit' value='查询' class='submit'>
				</form>
				<p class='station_count'>网点信息 : 共 <a href='#'>4189</a> 个网点</p>			  
				<a href='#' class='activity'>新点开业,点击领取优惠券>> </a>
				<span class='hot'></span>
			</span>
			<span class='sright'></span>
		</div>
		<div class='searchblock'>
			<span class='sleft'></span>
			<span class='scenter'>
				<h3>价格查询</h3>
				<form action='' action='get'>
					<input type='text' class='cityname sendcity' value='请输入发货城市'>
					<input type='text' class='cityname recvcity' value='请输入目标城市'>
					<input type='submit' class='submit' value='查询'>
				</form>
			</span>
			<span class='sright'></span>
		</div>
	</div><!-- end of indexsearch -->
	<div id='service_news'>
		<div id='quickentrance'>
			<span id='ent_top'></span>
			<span id='ent_center'>
				<h2>快速入口</h2>
				<ul>
					<li><a href='#' class='obill'>网上下单</a></li>
					<li><a href='#' class='mbill'>订单管理</a></li>
					<li><a href='#' class='paid'>站内信息</a></li>
					<li><a href='#' class='take'>增值服务</a></li>
					<li><a href='#' class='change'>市场活动</a></li>
				</ul>
			</span>
			<span id='ent_bottom'></span>
		</div>	<!-- end of quickentrance -->
		<div id='news'>
			<div class='news_title'>
				<h4>业界资讯</h4>
				<a href='#' class='news_more'>更多>>></a>
			</div>
			<div id='industry_news'>
				<ul>
					<li><a href='#'>国家邮政局发布《关于提升快递末端投递服务水平的指导意见》</a><span class='new'></span></li>
					<li><a href='#'>国家邮政局发布《关于提升快递末端投递服务水平的指导意见》</a><span class='new'></span></li>
					<li><a href='#'>国家邮政局发布《关于提升快递末端投递服务水平的指导意见》</a></li>
					<li><a href='#'>国家邮政局发布《关于提升快递末端投递服务水平的指导意见》</a></li>
					<li><a href='#'>国家邮政局发布《关于提升快递末端投递服务水平的指导意见》</a></li>
					<li><a href='#'>国家邮政局发布《关于提升快递末端投递服务水平的指导意见》</a></li>
				</ul>
			</div>
			<div id='news_pic'>
				<a href='#'><img src='__PUBLIC__/Images/img2.jpg'></a>
			</div>
		</div><!-- end of news -->
	</div><!-- end of service_news -->
	<div id='service_guide'>
		<div class='c-service'>
			<div class='advice'>
				<a href='#'>建议 | 投诉</a>
			</div>
			<div class='online_service'>
				<a href='#'>在线客服</a>
			</div>
		</div>
		<div class='guide'>
			<h4>新手攻略</h4>
			<div class='question'>
				<h5>寄送货物</h5>
				<ul>
					<li><a href='#'>重货轻货有什么区别？</a></li>
					<li><a href='#'>重货轻货有什么区别？</a></li>
					<li><a href='#'>重货轻货有什么区别？</a></li>
				</ul>
			</div>
			<div class='question'>
				<h5>追踪货物</h5>
				<ul>
					<li><a href='#'>重货轻货有什么区别？</a></li>
					<li><a href='#'>重货轻货有什么区别？</a></li>
					<li><a href='#'>重货轻货有什么区别？</a></li>
				</ul>
			</div>
			<div class='question'>
				<h5>接收货物</h5>
				<ul>
					<li><a href='#'>重货轻货有什么区别？</a></li>
					<li><a href='#'>重货轻货有什么区别？</a></li>
					<li><a href='#'>重货轻货有什么区别？</a></li>
				</ul>
			</div>
			<div class='question'>
				<h5>结算支付</h5>
				<ul>
					<li><a href='#'>重货轻货有什么区别？</a></li>
					<li><a href='#'>重货轻货有什么区别？</a></li>
					<li><a href='#'>重货轻货有什么区别？</a></li>
				</ul><F5>
			</div>
		</div><!-- end of guide -->
	</div><!-- end of service_guide -->
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