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
	<h3>常见问题<font>--寄送货物</font></h3>
	<ul class='qus'>
		<li><a href='#'>重货轻货有什么区别?</a></li>
		<li><a href='#'>我希望了解营业时间 </a></li>
		<li><a href='#'>如何填写运单号？</a></li>
		<li><a href='#'>如何计算价格与时效？</a></li>
		<li><a href='#'>如何查找最近的营业网点？</a></li>
		<li><a href='#'>如何正确包装？</a></li>
		<li><a href='#'>德邦能提供什么样的包装服务？</a></li>
		<li><a href='#'>如何填写托运单？</a></li>
		<li><a href='#'>如何网上下单 ?</a></li>
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
				<td class='title'>重货轻货有什么区别?</td>
				<td> 重货与轻货的区分为：货物的总重量（KG）和总体积（m³）的比值大于或等于210为重货，按重量计费；若比值低于210为轻货，按体积计费。如有疑问请联系当地营业部咨询。</td>
			</tr>
			<tr>
				<td class='title'>我希望了解营业时间</td>
				<td> 因德邦物流已开设直营网点 4000多家，服务网络遍及全国，而各营业网点所在地气候差异较大，详细营业时间请咨询当地营业部或者拨打全国客户服务热线 400-830-5555 咨询。</td>
			</tr>
			<tr>
				<td class='title'>如何填写运单号？</td>
				<td> 您好！您在德邦是不需要自己填写运单号的，我司开完单后会有正式的货运单，您到时可以在货运单上看到相关的运单号。</td>
			</tr>
			<tr>
				<td class='title'>如何计算价格与时效？</td>
				<td> 您好！计算价格及时效您可以登陆德邦物流网站价格时效查询页面：http://www.deppon.com/jiage/ 查询所需要的服务价格和时效。
	其次，您还可以咨询德邦物流当地营业部或是拨打德邦物流全国客户服务热线 400－830－5555 咨询。</td>
			</tr>
			<tr>
				<td class='title'>如何正确包装？</td>
				<td>常见包装安全隐患：

一、纸箱多次重复使用，以致运输过程中失去保护作用，导致货物损坏。

提示：避免使用不具保护力的纸箱，及时更换新的包装箱。

二、包装与货物的重量或体积不相匹配，在运输过程中易包装变形、破裂、内物松动或漏出散失。

提示：根据货物的重量或体积选择包装，包装货物时一定要密封、加固。

三、 随意简单包装，而不根据货物类别特点选择包装，导致货物的破损、丢失、潮湿等。

提示：

1、液体胶状物运输时因摇晃易飞溅、渗漏，在包装时应密封好，再用胶带加固，在包装盒外多加一层包装，同时在包 装内添加填充物减少碰撞。

2、服装等软性货物和小五金等货物除用纸箱包装之外，必须在外加上有纤维袋包装，有防水功能最佳。

3、小件货物零散包装，因体积太小，容易导致丢失，通常使用纤袋包装。

4、贵重品、精密产品、易碎品、流质品、机械零件、仪器、金属制品、高比重物品以及散落容易丢失的物品等，除用 普通纸箱包装外，必须添加木架包装，加固又防挤压，保障货物安全。

5、小件电子产品在包装时应添加防震填充物（泡沫等材料），减少碰撞。

6、未采用木架包装的较重货物必须用打包带加固。</td>
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