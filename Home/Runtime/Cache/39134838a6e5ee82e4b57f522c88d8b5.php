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
	<h3>网上下单</h3>
	<p class='ad'>
		<font>网上下单，方便快捷</font>
		<font>15分钟内专线受理，贴心服务！</font>
		<font>实时追踪，掌控随心！</font>
	</p>
	<p class='guide'>
		<font class='active'>1 填写订单</font>
		<font>2 提交订单</font>
		<font>3 受理审核</font>
		<font>4 揽件成功</font>
		<font>5 发货运输</font>
		<font>6 客户签收</font>
	</p>
	<p class='order_tips'>
		 >> 暂不支持任何地区用户网上下单！ 
	</p>
	<div class='orderform'>
		<form action='' method='post'>
			<div class='userinfo'>
				<h5>发货人信息
				<input type='button' value='选择发货人' class='bt_select' />
				</h5>
				<ul class='fpart'>
					<li>
						<div class='lcols'>
							<label>
								<span><b>*</b>发货人：</span>
								<input type='text' class='text'/>
							</label>
						</div>
						<div class='lcols'>
							<label>
								<span><b>*</b>手机：</span>
								<input type='text' class='text'/>
							</label>
						</div>
					</li>
					<li>
						<label>
							<span><b>*</b>发货地址：</span>
							<input type='text' class='ct text'/>
							<input type='text' class='addr text'/>
						</label>
					</li>
					<li>
						<label>
							<span><b>*</b>发货网点：</span>
							<input type='text' class='ct text'/>
							<div class='select site'>
								<input type='text' value='北京昌平区百善营业部' readonly/>
								<span>
									<ul class='option'>
										<li>北京昌平区百善营业部</li>
										<li>北京昌平区西关环岛营业部</li>
										<li>北京昌平区小汤山营业部</li>
										<li>北京昌平区百善营业部</li>
									</ul>
								</span>
							</div>
						</label>
						<p>网点信息： 深圳市福永和平社区永福路与桥头路交汇处。 | 29599771/2</p>
					</li>
				</ul>
			</div>
			<div class='userinfo'>
				<h5>收货人信息
				<input type='button' value='选择收货人' class='bt_select' />
				</h5>
				<ul class='fpart'>
					<li>
						<div class='lcols'>
							<label>
								<span><b>*</b>收货人(<b>账号</b>)：</span>
								<input type='text' class='text'/>
							</label>
						</div>
						<div class='lcols'>
							<label>
								<span><b>*</b>手机：</span>
								<input type='text' class='text'/>
							</label>
						</div>
					</li>
					<li>
						<label>
							<span><b>*</b>收货地址：</span>
							<input type='text' class='ct text'/>
							<input type='text' class='addr text'/>
						</label>
					</li>
				</ul>
			</div>
			<div class='userinfo'>
				<h5>货物信息</h5>
				<ul class='fpart'>
					<li>
						<label>
							<span><b>*</b>货物名称：</span>
							<input type='text' class='text'/>
							<em><a href='#'>禁运说明</a></em>
						</label>
						<label>
							<span><b>*</b>货物包装：</span>
							<input type='text' class='text'/>
							<em>"是"或"否"</em>
						</label>
					</li>
					<li>
						<label>
							<span><b>*</b>货物重量(总)：</span>
							<input type='text' class='text'/>
							<em>千克</em>
						</label>
						<label>
							<span><b>*</b>货物体积(总)：</span>
							<input type='text' class='text'/>
							<em>立方米</em>
						</label>
					</li>
				</ul>
				<p></p>
			</div>
			<div class='userinfo'>
				<h5>服务信息</h5>
				<ul class='fpart sf'>
					<li>
						<div class='lcols'>
							<label>
								<span><b>*</b>送货方式：</span>
								<div class='select sinfo'>
									<input type='text' value='自提' readonly/>
									<span>
										<ul class='option'>
											<li>自提</li>
											<li>送货</li>
											<li>送货(上楼)</li>
										</ul>
									</span>
								</div>
							</label>
						</div>
						<div class='lcols'>
							<label>
								<span><b>*</b>付款方式：</span>
								<div class='select sinfo'>
									<input type='text' value='现金' readonly/>
									<span>
										<ul class='option'>
											<li>现金</li>
											<li>月结</li>
											<li>网上支付</li>
										</ul>
									</span>
								</div>
							</label>
						</div>
					</li>
					<li>
						<div class='lcols'>
							<label>
								<span><b>*</b>签收单：</span>		
								<div class='select sinfo'>
									<input type='text' value='无需签单' readonly/>
									<span>
										<ul class='option'>
											<li>无需签单</li>
											<li>签收单原件返回</li>
										</ul>
									</span>
								</div>
							</label>
						</div>
						<div class='lcols'>
							<label>
								<span>优惠券编码：</span>
								<input type='text' class='text'/>
							</label>
						</div>
					</li>
					<li>
						<label>
							<span>托运备注：</span>
							<textarea>输入内容不得大于80个字</textarea>
						</label>
					</li>
					<li>
						<label class='clause'>
							<span>
								<input type='checkbox' checked/>
								同意服务条款：
							</span><br />
						</label>
						<textarea class='clause'>
1、托运人应准确填写本单，如实告知承运人所托运货物的名称、性质、重量、数量、价值等必要情况；托运人应对所托货物按照行业标准妥善包装，使其适合运输。
2、对于国家规定限制运输的物品，托运人应在交货前完成或委托承运人完成有关法律、行政法规规定的手续，并附有效凭证。
3、托运人不得托运或在所托运货物中夹带国家禁止运输的物品；因违背此约定造成承运人的一切损失托运人须双倍赔偿。
4、对已接受委托，后发现属于承运人不能安全、合法运送的物品（包括但不限于危险品、违禁品），承运人保留拒绝运送的权利，并由托运人承担违约责任。
5、委托承运人货物重量计量单位为千克，不足1千克按照1千克计算。若体积重量大于实际重量，按体积重量计算。
6、货运价格一般按照承运人的公布价。依该价格计算得出的费用不包含接送货费、税金、政府规费以及由于托运人或收货人的原因而增加的其他费用。
7、收货人在收到提货通知后最迟应在三日内提货；收货人在此期限内未提货的应支付超出天数的仓储费和保管费。到货后三个月无人提货且承运人无法退回货物的，承运人对该货有权处置，在处置所得中优先扣除相关费用。
8、托运人或收货人不得无故拒付任何服务费用；收货人拒绝支付费用的，托运人承担支付与托运物品有关费用的连带责任。托运人或收货人无故不支付费用的，承运人可以对承运货物行使处置权、留置权及其他补救性权利，由此而产生的后果由托运人或收货人承担。
</textarea>
					
					</li>
				</ul>
			</div>
			<input type='submit' value='立即下单' class='bt neworder'/>
			<input type='button' value='取消' class='bt'/>
		</form>
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