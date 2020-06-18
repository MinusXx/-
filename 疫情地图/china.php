<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<script src="https://www.echartsjs.com/examples/vendors/jquery/jquery.js"></script>
</head>

<body>

<button type="button",value="累计确诊" onclick="total()" >累计确诊</button>
<button type="button",value="现有确诊" onclick="now()">现有确诊</button><br>
<iframe src="nowcon.php" frameborder="0" width="1000" height="600" id="url"></iframe><br>
<font  size="6" face="黑体" color="#FFFFFF"><h>国内疫情趋势</h></font><br>
<iframe src="./china_trend.php" frameborder="0" width="1000" height="600"></iframe><br>

</body>
<script>
function total(){
		var nv = document.getElementById("url");
            nv.src="total.php";
	}
function now(){
		var nv = document.getElementById("url");
            nv.src="nowcon.php";
	}
</script>
</html>