<?php
require "dblink.php";
$sql = "select * from foreign_list order by ".$type." ".$method;
//echo $sql;
$result = $conn->query($sql);
$data=array();
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        $data[]=$row;
    }
	//return $data;
	$conn->close();
} else {
    echo "0 结果";
}
