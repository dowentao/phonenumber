
var BD_BRIDGE_OPEN = 1;
var BD_BRIDGE_ROOT = "http://qiao.baidu.com/";
var BD_BRIDGE_RCV_ROOT = "http://rqiao.baidu.com/";
var BD_BRIDGE_DATA = {siteid : "75911"};
var BD_BRIDGE_ICON_CONFIG = {
	background : {
		color : "",
		url   : "http://qiao.baidu.com/res/iconbg/09.jpg"
	},
	head : {
		url    : "http://qiao.baidu.com/res/iconhead/12.png",
		width  : 100,
		height : 53
	},
	button : {
		color : "",
		url   : "http://qiao.baidu.com/res/iconbtn/01.png",
		text  : "#0e1e8a"
	},
	flow     : 1,
	position : 0,
	special : "0"
};
var BD_BRIDGE_INVITE_CONFIG = {
	background : {
		color : "",
		url   : "http://qiao.baidu.com/res/invitebg/02.jpg"
	},
	head : {
		show : 1,
		size : 0,
		url  : "http://qiao.baidu.com/res/invitehead/02_small.jpg"
	},
	text   : "欢迎您！有什么可以帮助您的么？",
	button : "#e96175",
	mode   : 0,
	special : "0"
};
var BD_BRIDGE_INVITE = {
	invitetype   : 0,
	inviterepeat : 0,
	invitetime   : 10
};
var BD_BRIDGE_PIGEON_SOUL = {
	disableMess     : 0,
	messType        : 0,
	messFloatType   : 0,
	language        : 0,
	position        : 0,
	backgroundColor : "#6cadde",
	messItemName    : 0,
	messItemPhone   : 0,
	messItemAddress : 0,
	messItemEmail   : 0,
	extraMessItems  : [] 
};
if ((BD_BRIDGE_OPEN == 1) && (typeof window["BD_BRIDGE_LOADED"] == "undefined")) {
	window["BD_BRIDGE_LOADED"] = 1;
	document.write('<script type="text/javascript" charset="UTF-8" src="' + BD_BRIDGE_ROOT + 'js/bw.js"><\/script>');
}
