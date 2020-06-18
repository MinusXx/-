<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>国外疫情总览</title>
<style>
			
			#wrap {
				width: 100%;
				height: 100%;
				
			}

			
			
		</style>
</head>
<body class="body">
<button type="button",value="现存确诊" onclick="total()">现有确诊</button>
<button type="button",value="累计确诊" onclick="now()">累计确诊</button><br>
<div id="wrap"><iframe src="world_total.php" frameborder="0" width="1000" height="600" scroling="no"  id="url"></iframe>
</div><br>

<font face="行楷" size="6" color="#FFFFFF"> 国外疫情趋势</font><br>
<div id="wrap"><iframe src="getforeign.php" frameborder="0" width="1000" height="700" scroling="no"></iframe>
</div><br>
<script>//为了iframe可以自适应嵌入页面大小
    if (document.getElementsByTagName('meta').length > 1) {
	var oMeta = document.getElementsByTagName('meta')[1]; //第二个
	oMeta.content = '';
	}
	function total(){
		var nv = document.getElementById("url");
            nv.src="world_nowcon.php";
	}
function now(){
		var nv = document.getElementById("url");
            nv.src="world_total.php";
	}
</script>

<script type="text/javascript">

var province = document.getElementById('province');
var city = document.getElementById('city');
//省份
var provinceArr = [];
provinceArr[0] = ['北京市'];
provinceArr[1] = ['天津市'];
provinceArr[2] = ['上海市'];
provinceArr[3] = ['重庆市'];
provinceArr[4] = ['河北省'];
provinceArr[5] = ['河南省'];
provinceArr[6] = ['云南省'];
provinceArr[7] = ['辽宁省'];
provinceArr[8] = ['黑龙江省']; 
provinceArr[9] = ['湖南省']; 
provinceArr[10] = ['安徽省'];
provinceArr[11] = ['山东省'];
provinceArr[12] = ['新疆维吾尔自治区']; 
provinceArr[13] = ['江苏省'];
provinceArr[14] = ['浙江省'];
provinceArr[15] = ['江西省'];
provinceArr[16] = ['湖北省'];
provinceArr[17] = ['广西壮族'];
provinceArr[18] = ['甘肃省'];
provinceArr[19] = ['山西省'];
provinceArr[20] = ['内蒙古自治区'];
provinceArr[21] = ['陕西省'];
provinceArr[22] = ['吉林省'];
provinceArr[23] = ['福建省'];
provinceArr[24] = ['贵州省'];
provinceArr[25] = ['广东省'];
provinceArr[26] = ['青海省'];
provinceArr[27] = ['西藏'];
provinceArr[28] = ['四川省'];
provinceArr[29] = ['宁夏回族'];
provinceArr[30] = ['海南省'];
provinceArr[31] = ['台湾省'];
provinceArr[32] = ['香港特别行政区'];
provinceArr[33] = ['澳门特别行政区'];
//市县,每个数组第一个元素为省份,其他的为这个省份下的市县
var cityArr = [];
cityArr[0] = ['北京市','东城区', '西城区','崇文区','宣武区','朝阳区','丰台区','石景山区', '海淀区','门头沟区', '房山区','通州区','顺义区','昌平区','大兴 区','怀柔区','平谷区','密云县','延庆县'];
cityArr[1] = ['天津市','和平区','河东区', '河西区', '南开区', '河北区', '红桥区', '塘沽区', '汉沽区', '大港区', '东丽区', '西青区', '津南区', '北辰区', '武清区', '宝坻区', '宁河县', '静海县', '蓟县']; 
cityArr[2] = ['上海市','黄浦区','卢湾区', '徐汇区','长宁区','静安区','普陀区','闸北区','虹口区', '杨浦区', '闵行区', '宝山区', '嘉定区', '浦东新区', '金山区', '松江区', '青浦区', '南汇区', '奉贤区', '崇明县']; 
cityArr[3] = ['重庆市','万州区','涪陵区','渝中区','大渡口区','江北区','沙坪坝区','九龙坡区','南岸区','北碚区','万盛区','双桥区','渝北区','巴南区','黔江区','长寿区','江津区','合川区','永川区','南川区','綦江县','潼南县','铜梁县','大足县','荣昌县','璧山县','梁平县','城口县','丰都县','垫江县','武隆县','忠县','开县','云阳县','奉节县','巫山县','巫溪县','石柱土家族自治县','秀山土家族苗族自治县','酉阳土家族苗族自治县','彭水苗族土家族自治县']; 
cityArr[4] = ['河北省','石家庄市', '唐山市', '秦皇岛市', '邯郸市', '邢台市', '保定市', '张家口市', '承德市', '沧州市', '廊坊市', '衡水市']; 
cityArr[5] = ['河南省','郑州市','开封市','洛阳市', '平顶山市', '安阳市', '鹤壁市', '新乡市', '焦作市', '济源市', '濮阳市', '许昌市', '漯河市', '三门峡市', '南阳市', '商丘市', '信阳市', '周口市', '驻马店市']; 
cityArr[6] = ['云南省','昆明市',' 曲靖市','玉溪市','保山市','昭通市','丽江市','思茅市','临沧市','楚雄彝族自治州','红河哈尼族彝族自治州','文山壮族苗族自治州','西双版纳傣族自治州','大理白族自治州','德宏傣族景颇族自治州','怒江傈僳族自治州','迪庆藏族自治州']; 
cityArr[7] = ['辽宁省','沈阳市' ,'大连市' ,'鞍山市' ,'抚顺市' ,'本溪市' ,'丹东市' ,'锦州市' ,'营口市' ,'阜新市' ,'辽阳市' ,'盘锦市' ,'铁岭市' ,'朝阳市' ,'葫芦岛市']; 
cityArr[8] = ['黑龙江省','哈尔滨市','齐齐哈尔市','鸡西市','鹤岗市','双鸭山市', '大庆市', '伊春市', '佳木斯市', '七台河市', '牡丹江市', '黑河市', '绥化市', '大兴安岭地区']; 
cityArr[9] = ['湖南省','长沙市', '株洲市','湘潭市', '衡阳市', '邵阳市', '岳阳市', '常德市', '张家界市', '益阳市', '郴州市', '永州市', '怀化市', '娄底市', '湘西土家族苗族自治州']; 
cityArr[10] = ['安徽省','合肥市', '芜湖市', '蚌埠市', '淮南市', '马鞍山市', '淮北市', '铜陵市', '安庆市', '黄山市', '滁州市','阜阳市','宿州市', '巢湖市', '六安市', '亳州市', '池州', '宣城市']; 
cityArr[11] = ['山东省','济南市','青岛市','淄博市','枣庄市','东营市','烟台市','潍坊市','济宁市','泰安市','威海市','日照市','莱芜市','临沂市','德州市','聊城市','滨州市','菏泽市'];
cityArr[12] = ['新疆维吾尔自治区','乌鲁木齐市', '克拉玛依市', '吐鲁番地区', '哈密地区', '昌吉回族自治州 ', '博尔塔拉蒙古自治州 ', '巴音郭楞蒙古自治州 ', '阿克苏地区', '克孜勒苏柯尔克孜自治州 ', '喀什地区', '和田地区', '伊犁哈萨克自治州', '塔城地区', '阿勒泰地区', '石河子市', '阿拉尔市', '图木舒克市', '五家渠市' ]; 
cityArr[13] = ['江苏省','南京市', '无锡市', '徐州市', '常州市', '苏州市', '南通市', '连云港市', '淮安市', '盐城市', '扬州市', '镇江市', '泰州市', '宿迁市' ];
cityArr[14] = ['浙江省','杭州市', '宁波市', '温州市', '嘉兴市', '湖州市', '绍兴市', '金华市', '衢州市', '舟山市', '台州市', '丽水市']; 
cityArr[15] = ['江西省','南昌市','景德镇市','萍乡市','九江市','新余市','鹰潭市','赣州市','吉安市','宜春市','抚州市','上饶市'];
cityArr[16] = ['湖北省','武汉市','黄石市','十堰市', '宜昌市', '襄樊市', '鄂州市', '荆门市', '孝感市', '荆州市', '黄冈市', '咸宁市', '随州市', '恩施土家族苗族自治州','仙桃市', '潜江市', '天门市', '神农架林区'];
cityArr[17] = ['广西壮族','南宁市','柳州市','桂林市','梧州市','北海市','防城港市','钦州市','贵港市','玉林市','百色市','贺州市','河池市','来宾市','崇左市'];
cityArr[18] = ['甘肃省','兰州市','嘉峪关市', '金昌市', '白银市', '天水市', '武威市', '张掖市', '平凉市', '酒泉市', '庆阳市', '定西市', '陇南市', '临夏回族自治州', '甘南藏族自治州'];
cityArr[19] = ['山西省','太原市','大同市', '阳泉市', '长治市', '晋城市', '朔州市', '晋中市', '运城市', '忻州市', '临汾市', '吕梁市' ];
cityArr[20] = ['内蒙古自治区','呼和浩特市', '包头市', '乌海市', '赤峰市', '通辽市', '鄂尔多斯市', '呼伦贝尔市', '巴彦淖尔市', '乌兰察布市', '兴安盟', '锡林郭勒盟', '阿拉善盟' ];
cityArr[21] = ['陕西省','西安市','铜川市','宝鸡市', '咸阳市', '渭南市', '延安市', '汉中市', '榆林市', '安康市', '商洛市' ];
cityArr[22] = ['吉林省','长春市', '吉林市', '四平市', '辽源市', '通化市', '白山市', '松原市', '白城市', '延边朝鲜族自治州'];
cityArr[23] = ['福建省','福州市', '厦门市', '莆田市', '三明市', '泉州市', '漳州市', '南平市', '龙岩市', '宁德市' ];
cityArr[24] = ['贵州省','贵阳市','六盘水市', '遵义市', '安顺市', '铜仁地区', '黔西南布依族苗族自治州', '毕节地区', '黔东南苗族侗族自治州', '黔南布依族苗族自治州'];
cityArr[25] = ['广东省','广州市','韶关市','深圳市','珠海市','汕头市','佛山市','江门市','湛江市','茂名市','肇庆市','惠州市','梅州市','汕尾市','河源市','阳江市','清远市','东莞市','中山市','潮州市','揭阳市','云浮市'];
cityArr[26] = ['青海省','西宁市' ,'海东地区', '海北藏族自治州', '黄南藏族自治州', '海南藏族自治州', '果洛藏族自治州', '玉树藏族自治州', '海西蒙古族藏族自治州'];
cityArr[27] = ['西藏','拉萨市','昌都地区', '山南地区', '日喀则地市', '那曲地区', '阿里地区', '林芝地区' ];
cityArr[28] = ['四川省','成都市','自贡市', '攀枝花市', '泸州市', '德阳市', '绵阳市', '广元市', '遂宁市', '内江市', '乐山市', '南充市', '眉山市', '宜宾市', '广安市', '达州市', '雅安市', '巴中市', '资阳市', '阿坝藏族羌族自治州', '甘孜藏族自治州', '凉山彝族自治州'];
cityArr[29] = ['宁夏回族','银川市','石嘴山市','吴忠市','固原市','中卫市'];
cityArr[30] = ['海南省','海口市','三亚市','五指山市', '琼海市', '儋州市', '文昌市', '万宁市', '东方市', '定安县', '屯昌县', '澄迈县', '临高县', '白沙黎族自治县', '昌江黎族自治县', '乐东黎族自治县', '陵水黎族自治县', '保亭黎族苗族自治县', '琼中黎族苗族自治县' ];
cityArr[31] = ['台湾省','台北市', '高雄市', '基隆市', '台中市', '台南市', '新竹市', '嘉义市'];
cityArr[32] = ['香港特别行政区','中西区', '湾仔区', '东区', '南区', '油尖旺区', '深水埗区', '九龙城区', '黄大仙区', '观塘区', '荃湾区', '葵青区', '沙田区', '西贡区', '大埔区', '北区', '元朗区', '屯门区', '离岛区' ];
cityArr[33] = ['澳门特别行政区','澳门'];

//生成省份
for(var key in provinceArr) {
		var provinceOption = document.createElement('option');
		provinceOption.value = provinceOption.text = provinceArr[key];
		province.options.add(provinceOption);
}
//生成市县、区市'
//@current为当前选择的select节点，即父类节点
//@child为子类点
//@childArr为子节点数组
function showChild(current, child, childArr) {
		var currentValue = current.value;
		var count = childArr.length;
		//每次切换市'把城市的子option长度设置市',即清除城市的选择,DOM对象select元素是长度是子option的个市'
		child.length = 1;
		for(var i = 0; i < count; i++) {
				//判断所选的值即父类，与当前节点第一个数组元素是否相市'
				if(currentValue == childArr[i][0]) {
						//不取第一个数组元市'因为第一个是父类，所以j市'开始，而不市'
						for(var j = 1; j < childArr[i].length; j++) {
								var childOption = document.createElement('option');
								//ie不支持option对象的value,所以加childOption.text
								childOption.value = childOption.text = childArr[i][j];
								child.options.add(childOption); 
						}
				}
		}
}
//省份改变市'
province.onchange = function() {
		showChild(province, city, cityArr);
}

</script>
<div style="position: absolute; display: none; z-index: 9999;" mce_style="position: absolute; display: none; z-index: 9999;" id="livemargins_control"><img src="shenfen_files/monitor-background-horizontal.png" mce_src="shenfen_files/monitor-background-horizontal.png" style="position: absolute; left: -77px; top: -5px;" width="77" height="5">	<img src="shenfen_files/monitor-background-vertical.png" mce_src="shenfen_files/monitor-background-vertical.png" style="position: absolute; left: 0pt; top: -5px;">	<img id="monitor-play-button" src="shenfen_files/monitor-play-button.png" mce_src="shenfen_files/monitor-play-button.png" οnmοuseοver="this.style.opacity=1" οnmοuseοut="this.style.opacity=0.5" style="position: absolute; left: 1px; top: 0pt; opacity: 0.5; cursor: pointer;"></div>
</body>
</html>