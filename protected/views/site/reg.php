<style type="text/css">
.login{}
.login dt{
padding-left:30px; height:20px; padding-top:8px; background:url(http://www.xuanhao.com/images/default/login.gif) no-repeat 0 0; font-weight:600; width:920px;
}
.login dd{
padding:35px 35px 15px 60px; margin-top:-2px; border-left:#d3d3d3 1px solid; border-right:#d3d3d3 1px solid; border-bottom:#d3d3d3 1px solid; width:853px; overflow:hidden;
}
.Basic{text-align:left;font-size:14px;font-weight:bold;color:#316707;padding:15px 0 7px 0;}
	.Basic img{vertical-align:middle;}
	.Basic span{font-size:12px;color:#fd660d;font-weight:100;}
	.separator {
	color:#888B9C;
	margin:0px 4px 0px 4px;
}
span{
color:#fd660d; padding-left:6px; padding-right:6px;
}
.td_font{
font-size:14px; color:#333;
}
.tink{
float:left; overflow:hidden;
}
.tink1{
float:right; overflow:hidden; width:300px;
}
.go{
clear:both; padding-left:100px;
}
.td_ul{
font-size:14px;
}
.td_ul li{
line-height:48px;
}
.dqwz{
padding-top:7px; padding-bottom:4px;
}
</style>
<div class="page"> 
<dl class="login">
		<dt>快速注册</dt>
		<dd>
		<div class="tink">
<form onsubmit="return check();" method="post" action="reg_tj.php" name="Form1"> 			
		<table width="520" height="500" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td width="90" class="td_font"><span>*</span>用户名</td>
    <td><input type="text" name="user"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>请输入您的用户名，可以为数字，字母</td>
  </tr>
  <tr>
    <td width="80" class="td_font"><span>*</span>密码</td>
    <td><input type="password" name="passid"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>最少4个字符，请使用英文字母（区分大小写）、符号或数字</td>
  </tr>
  <tr>
    <td width="80" class="td_font"><span>*</span>确认密码</td>
    <td><input type="password" name="confirmPassword"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>请确认您的密码</td>
  </tr>
  <tr>
    <td width="80" class="td_font"><span>*</span>Email</td>
    <td><input type="text" name="email"></td>
  </tr>
   <tr>
    <td width="80" class="td_font"><span>*</span>公司</td>
    <td><input type="text" name="company"></td>
  </tr>
   <tr>
    <td width="80" class="td_font"><span>*</span>地址</td>
    <td><input type="text" name="address"></td>
  </tr>
   <tr>
    <td width="80" class="td_font"><span>*</span>姓名</td>
    <td><input type="text" name="realname"></td>
  </tr>
  <tr>
    <td width="80" class="td_font"><span>*</span>经营范围</td>
    <td><input type="text" name="scope"></td>
  </tr>
  <tr>
    <td width="80" class="td_font"><span>*</span>座机</td>
    <td><input type="text" name="tel"></td>
  </tr>
  <tr>
    <td width="80" class="td_font"><span>*</span>手机</td>
    <td><input type="text" name="mobile"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</tbody></table>
		<div class="Basic"><input type="checkbox" onclick="ShowAll(this,'allregister') "> 
					请认真读条款 </div>
					<div style="display:none;" id="allregister" class="box">				   
					<table width="520" height="180" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td width="90" class="td_font"><span>*</span>真实姓名</td>
    <td width="177"><input type="text" name="xm"></td>
    <td width="56"><label>
      <input type="radio" value="radiobutton" name="xb">
    </label>先生</td>
    <td width="197"><label>
      <input type="radio" checked="" value="radiobutton" name="xb">
    </label>小姐</td>
  </tr>
  <tr>
    <td width="90" class="td_font"><span>*</span>通讯地址</td>
    <td colspan="3"><table width="100%" cellspacing="0" cellpadding="0" border="0">
      <tbody><tr>
        <td width="90"><select name="csflbm" onchange="SelectCity(csflbm,xzflbm)" language="javascript">
   <option selected="" value="">地 级 市</option>
   <script src="http://www.xuanhao.com/images/js/province.js" language="javascript"> </script><option value="0000">北京</option><option value="0001">天津</option><option value="0002">河北</option><option value="0003">河南</option><option value="0004">安徽</option><option value="0005">湖北</option><option value="0006">湖南</option><option value="0007">山东</option><option value="0008">台湾</option><option value="0009">福建</option><option value="0010">甘肃</option><option value="0011">广东</option><option value="0012">广西</option><option value="0013">贵州</option><option value="0014">海南</option><option value="0015">黑龙江</option><option value="0016">吉林</option><option value="0017">江苏</option><option value="0018">江西</option><option value="0019">辽宁</option><option value="0020">内蒙古</option><option value="0021">宁夏</option><option value="0022">青海</option><option value="0023">山西</option><option value="0024">陕西</option><option value="0025">上海</option><option value="0026">四川</option><option value="0027">西藏</option><option value="0028">新疆</option><option value="0029">云南</option><option value="0030">浙江</option><option value="0031">重庆</option><option value="0032">香港</option><option value="0033">澳门</option><script language="javascript">
&lt;!-- 
 var thecity = new Array('000018海淀区','000017朝阳区','000016东城区','000015西城区','000014崇文区','000013宣武区','000012丰台区','000011石景山区','000010房山区','000009大兴区','000008通州区','000007顺义区','000006昌平区','000001密云区','000005怀柔区','000002延庆区','000004平谷区','000003门头沟区','000000北京','000100天津','000200石家庄','000201保定','000202沧州','000203承德','000204邯郸','000205衡水','000206廊坊','000207秦皇岛','000208唐山','000209邢台','000210张家口','000300郑州市','000301开封','000302洛阳','000303平顶山','000304安阳','000305鹤壁','000306新乡','000307焦作','000308濮阳','000309许昌','000310漯河','000311三门峡','000312商丘','000313周口','000314驻马店','000315南阳','000316信阳','000317济源市','000406合肥','000400安庆','000401蚌埠','000402巢湖','000403池州','000404滁州','000405阜阳','000407淮北','000408淮南','000409黄山','000410六安','000411马鞍山','000412宿州','000413铜陵','000414芜湖','000415宣城','000416亳州','000500鄂州','000501恩施土家族苗族自治州','000502黄冈','000503黄石','000504荆门','000505潜江','000506神农架林区','000507十堰','000508随州','000509天门','000510武汉','000511仙桃','000512咸宁','000513襄樊','000514孝感','000515宜昌','000516荆州','000600常德','000601长沙','000602郴州','000603衡阳','000604怀化','000605娄底','000606邵阳','000607湘潭','000608湘西土家族苗族自治州','000609益阳','000610永州','000611岳阳','000612张家界','000613株洲','000700滨州','000701德州','000702东营','000703菏泽','000704济南','000705济宁','000706莱芜','000707聊城','000708临沂','000709青岛','000710日照','000711泰安','000712威海','000713潍坊','000714烟台','000715枣庄','000716淄博','000800台北','000801高雄','000802台中','000803台南','000804屏东','000805南投','000806云林','000807新竹','000808彰化','000809苗栗','000810嘉义','000811花莲','000812桃园','000813宜兰','000814基隆','000815台东','000816金门','000817马祖','000818澎湖','000900福州','000901龙岩','000902南平','000903宁德','000904莆田','000905泉州','000906三明','000907厦门','000908漳州','001006兰州','001000白银','001001定西','001002甘南藏族自治州','001003嘉峪关','001004金昌','001005酒泉','001007临夏回族自治州','001008陇南','001009平凉','001010庆阳','001011天水','001012武威','001013张掖','001100广州','001101潮州','001102东莞','001103佛山','001104河源','001105惠州','001106江门','001107揭阳','001108茂名','001109梅州','001110清远','001111汕头','001112汕尾','001113韶关','001114深圳','001115阳江','001116云浮','001117湛江','001118肇庆','001119中山','001120珠海','001200南宁','001201百色','001202北海','001203崇左','001204防城港','001205桂林','001206贵港','001207河池','001208贺州','001209来宾','001210柳州','001211钦州','001212梧州','001213玉林','001300贵阳','001301安顺','001302毕节','001303六盘水','001304黔东南苗族侗族自治州','001305黔南布依族苗族自治州','001306黔西南布依族苗族自治州','001307铜仁','001308遵义','001400海口','001401白沙黎族自治县','001402保亭黎族苗族自治县','001403昌江黎族自治县','001404澄迈县','001405定安县','001406东方','001407乐东黎族自治县','001408临高县','001409陵水黎族自治县','001410琼海','001411琼中黎族苗族自治县','001412三亚','001413屯昌县','001414万宁','001415文昌','001416五指山','001417儋州','001500大庆','001501大兴安岭','001502哈尔滨','001503鹤岗','001504黑河','001505鸡西','001506佳木斯','001507牡丹江','001508七台河','001509齐齐哈尔','001510双鸭山','001511绥化','001512伊春','001600白城','001601白山','001602长春','001603吉林','001604辽源','001605四平','001606松原','001607通化','001608延边朝鲜族自治州','001700常州','001701淮安','001702连云港','001703南京','001704南通','001705苏州','001706宿迁','001707泰州','001708无锡','001709徐州','001710盐城','001711扬州','001712镇江','001800抚州','001801赣州','001802吉安','001803景德镇','001804九江','001805南昌','001806萍乡','001807上饶','001808新余','001809宜春','001810鹰潭','001900鞍山','001901本溪','001902朝阳','001903大连','001904丹东','001905抚顺','001906阜新','001907葫芦岛','001908锦州','001909辽阳','001910盘锦','001911沈阳','001912铁岭','001913营口','002000阿拉善盟','002001巴彦淖尔盟','002002包头','002003赤峰','002004鄂尔多斯','002005呼和浩特','002006呼伦贝尔','002007通辽','002008乌海','002009乌兰察布盟','002010锡林郭勒盟','002011兴安盟','002100固原','002101石嘴山','002102吴忠','002103银川','002200果洛藏族自治州','002201海北藏族自治州','002202海东','002203海南藏族自治州','002204海西蒙古族藏族自治州','002205黄南藏族自治州','002206西宁','002207玉树藏族自治州','002300长治','002301大同','002302晋城','002303晋中','002304临汾','002305吕梁','002306朔州','002307太原','002308忻州','002309阳泉','002310运城','002400安康','002401宝鸡','002402汉中','002403商洛','002404铜川','002405渭南','002406西安','002407咸阳','002408延安','002409榆林','002500上海','002600阿坝藏族羌族自治州','002601巴中','002602成都','002603达州','002604德阳','002605甘孜藏族自治州','002606广安','002607广元','002608乐山','002609凉山彝族自治州','002610眉山','002611绵阳','002612南充','002613内江','002614攀枝花','002615遂宁','002616雅安','002617宜宾','002618资阳','002619自贡','002620泸州','002700阿里','002701昌都','002702拉萨','002703林芝','002704那曲','002705日喀则','002706山南','002800阿克苏','002801阿拉尔','002802巴音郭楞蒙古自治州','002803博尔塔拉蒙古自治州','002804昌吉回族自治州','002805哈密','002806和田','002807喀什','002808克拉玛依','002809克孜勒苏柯尔克孜自治州','002810石河子','002811图木舒克','002812吐鲁番','002813乌鲁木齐','002814五家渠','002815伊犁哈萨克自治州','002900保山','002901楚雄彝族自治州','002902大理白族自治州','002903德宏傣族景颇族自治州','002904迪庆藏族自治州','002905红河哈尼族彝族自治州','002906昆明','002907丽江','002908临沧','002909怒江傈傈族自治州','002910曲靖','002911思茅','002912文山壮族苗族自治州','002913西双版纳傣族自治州','002914玉溪','002915昭通','003000杭州','003001湖州','003002嘉兴','003003金华','003004丽水','003005宁波','003006绍兴','003007台州','003008温州','003009舟山','003010衢州','003100重庆','003200港岛','003201九龙','003202新界','003203离岛','003301澳门半岛','003300路环岛','003302凼仔岛'  ) 
	 function SelectCity(province,city){ 
	   var i=0;
     for(i=0;i&lt;province.length;i++){
       if(province[i].selected==true){
         var tempstr = province[i].value;
         break; 
       }  
     }
     if(tempstr!=""){
       city.length=0;
       var oOption = document.createElement("OPTION");
       oOption.text = "县级市/县";
       oOption.value = "";
       city.options.add(oOption);   
       for(i=0;i&lt;thecity.length;i++){
         if(thecity[i].substring(0,4)==tempstr){
           //alert(city[i].substring(0,2));  
           var oOption = document.createElement("OPTION");
           oOption.text=thecity[i].substring(6);
           oOption.value=thecity[i].substring(0,6);
           //alert(oOption.text);
           //alert(oOption.value);
           city.options.add(oOption);
         } 
       }
     }
     else
       city[0].selected=true;
       return true;
   };
</script>
</select>

  </td>
        <td width="106"><select name="xzflbm">
	<option selected="" value="">县级市/县</option>
</select></td>
        <td width="234"><input type="text" name="txdz"></td>
      </tr>
    </tbody></table></td>
  </tr>
  <tr>
    <td width="90" class="td_font"><span>*</span>邮政编码</td>
    <td colspan="3"><input type="text" name="yb"></td>
  </tr>
  <tr>
    <td width="90" class="td_font"><span>*</span>联系电话</td>
    <td colspan="3"><input type="text" name="lxdh"></td>
  </tr>
  <tr>
    <td width="90" class="td_font"><span>*</span>手机</td>
    <td colspan="3"><input type="text" name="sj"></td>
  </tr>

</tbody></table>
			</div>
		  </form></div>
		  <ul class="tink1 td_ul">
		  		<li style="color:#fd660d;">注册小贴士…</li>
				<li>前面有“<span>*</span>”是必填项，为了您的购物方便请填写您的真实信息和联系方式，以便我们的工作人员联系您…………</li>
		  </ul>
		  <p class="go"><input type="image" src="http://www.xuanhao.com/images/default/go.gif"></p>
			</dd>
	</dl>

</div>