(function(config){window.amap = window.amap || {};
amap.maps = amap.maps || {};

// 动态加载
function getScript(src) {
	var docs = document;
	if (docs.body && config[5]) {
		var node = docs.createElement('script');
		node.charset = "utf-8";
	    node.src = src;
	    docs.body.appendChild(node);
	} else {
		docs.write('<script src="'+ src +'" type="text/javascript" charset="utf-8"></script>');
	}
}

function getLink(src) {
	if (document.getElementsByTagName("head")[0]) {
		var link=document.createElement("link");
		link.setAttribute("rel", "stylesheet");
		link.setAttribute("type", "text/css");
		link.setAttribute("href", src);
		document.getElementsByTagName("head")[0].appendChild(link);
	} else {
		document.write('<link rel="stylesheet" type="text/css" href="' + src + '">');
	}
}

// 初始化需要的环境变量
amap.maps._load_ = function(apiLoad) {
	delete amap.maps._load_;
	apiLoad(config, loadScriptTime);
};

var loadScriptTime = (new Date).getTime();
// 加载CSS样式
getLink(config[2]+'/theme/v'+config[4]+'/style.css');

// 加载入口文件
getScript(config[2]+ "/maps/main?v="+config[4]);
})(["您申请的key值",[114.434945,38.583943,118.536708,41.287731],"http://webapi.amap.com",1,"1.2"])