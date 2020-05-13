<?php
//设置字符集
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inland";
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("连接失败".mysqli_connect_error());
	}

