<?php
require "dblink.php";
$sql = "select * from chinatotal_history";
$result = $conn->query($sql);
$data=array();
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        $data[]=$row;
    }
} else {
    echo "0 结果";
}
$conn->close();
$json=json_encode($data,JSON_UNESCAPED_UNICODE);
echo $json;
?>