<html>
<head>
<script src="js/jquery.min.js"></script>
<style>
body{
	text-align:center;}
table {margin: auto;}
thead{
	background-color:#0CF}
</style>
</head>
<body>

<?php
    header("Content-type:text/html;charset=utf-8");
	//获取要排序的表头
	session_start();
	if(isset($_GET['type'])){$type=$_GET['type'];}
	else{$type=isset($_SESSION['type'])?$_SESSION['type']:"confirm";}
	$_SESSION['type']=$type;
	//当前页面刷新内容不变
	if(isset($_GET['page'])){
			$method=$_SESSION['method'];
		}
	//由点击表头引起排序的变化，desc or asc
	else{
		$method=isset($_SESSION['method'])?$_SESSION['method']:"";
		$method=($method=="asc")?"desc":"asc";
		}
	$_SESSION['method']=$method;
	require "./lib/functions.php";
	require "./getforeignfunc.php";
	?>
<table border="solid" id="baseTable">
<thead>
	<th>国家</th><th id="confirm" onClick="a(this.id)">累计确诊<img src="paixu.svg"></th><th id="confirmAdd" onClick="a(this.id)">新增确诊<img src="paixu.svg"></th><th id="nowConfirm" onClick="a(this.id)">现有确诊<img src="paixu.svg"></th><th id="dead" onClick="a(this.id)">死亡人数<img src="paixu.svg"></th><th id="heal" onClick="a(this.id)">治愈人数<img src="paixu.svg"></th><th>更新日期</th>
</thead>

<?php	
	$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; //获取当前页
			$perpage = 20; //每页显示的条数
			$total_num = count($data); //总记录数
			$total_page = ceil($total_num/$perpage); //计算总页数

			//对获取的当前页进行合理性判断
			$page = max($page,1); //判断当前页是否小于1
			$page = min($page,$total_page); //判断当前页码数是否大于总页数

			//每页开始的数组坐标值
			$start_index = $perpage * ($page-1);
			//每页最大的数组坐标值
			$end_index = $perpage * $page-1;
			//防止计算结果超过最大记录数
			$end_index = min($end_index,$total_num-1);
			$_SESSION['page']=$page;
	for($i=$start_index; $i<=$end_index; ++$i){ ?>			
		<tbody>
        	<tr>
                <td ><?php echo $data[$i]['name']; ?></td>
                <td ><?php echo $data[$i]['confirm']; ?></td>
                <td ><?php echo $data[$i]['confirmAdd']; ?></td>
                <td ><?php echo $data[$i]['nowConfirm']; ?></td>
                <td ><?php echo $data[$i]['dead']; ?></td>
                <td ><?php echo $data[$i]['heal']; ?></td>
                <td ><?php echo $data[$i]['lastUpdateTime']; ?></td>
            </tr>
		</tbody>
        
		<?php } ?>
	</table>
    <?php echo showPage($page,$total_page,$perpage);?>
</table>
</body>
<script>
function a(i){
		
		location="getforeign.php?type="+i;
	}
</script>
</html>