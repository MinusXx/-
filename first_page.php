<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<style>
body {
		width: 100%;
		margin: 0; 
	padding: 0; 
    background-color:#79CDCD;
    background-size: 100%;
    background-repeat: no-repeat;
}
#login_frame {
    width: 1150px;
    height: 3500px;
    padding: 13px;
    position: absolute;
    left: 38%;
    top: 30%;
    margin-left: -350px;
    margin-top: -10px;
    
    background-color: rgba(300, 300, 255, 0.5);
    border-radius: 20px;
    text-align: center;
}
.text {
	color:#FFF;
	margin-left: 10%;
}
#choice {
	margin-top: 20px;
	margin-left:-10px;
	
}
.text1 {
	color:#FFF;
}
#choice_1{
	margin-top: 30px;
	margin-left:-5px;
	
}

</style>
</head>

<body>
<div class="text">
 <img class="ico" src="../img/p10.png">
 <span class="mid"><font face="行楷" size="6">新型冠状病毒肺炎</font></span>
<div class="text"><font  size="5"><h1><b>疫情实时大数据报告</b></h1></font></div>
<div id="login_frame">
<div id="choice">
<table height="70" width="1170" border="1" bordercolor="#ffffff"  border-radius="50px"  >
  <tr>
  <th scope="col"><form ><a href="./china.php" ><div class="text1"><font size="6" ><b>国内疫情</b></font></div></a></form></th>
  <th scope="col"><form ><a href="#" ><div class="text1"><font size="6" ><b>国外疫情</b></font></div></a></form></th>
  <th scope="col"><form ><a href="shishibobao.html" ><div class="text1"><font size="6" ><b>实时播报</b></font></div></a></form></th>
  <th scope="col"><form ><a href="zhishikepu.html" ><div class="text1"><font size="6" ><b>知识普及</b></font></div></a></form></th>
  
  </tr>
</table>
</div>
<div id="choice_1">
<iframe src="./china.php" frameborder="0" width="1050" height="600"align="middle"></iframe><br><br>

<iframe src="./foreign.php" frameborder="0" width="1050" height="600"align="middle"></iframe><br><br>

<iframe src="./shishibobao.html" frameborder="0" width="1050" height="500"></iframe><br><br>

<iframe src="../kepu.html" frameborder="0" width="1050" height="800"></iframe><br><br>

<iframe src="../test.html" frameborder="0" width="1050" height="850"></iframe><br><br>

<iframe src="../danmu.html" frameborder="0" width="1050" height="700"></iframe><br><br>

</div>

</div>
</div>
</body>
</html>