<?php
require "lib/setdata.php";
	date_default_timezone_set('PRC'); 
    ignore_user_abort();//关闭浏览器后，继续执行php代码
    set_time_limit(0);//程序执行时间无限制
    $sleep_time=43200;//多长时间执行一次
    $switch = include 'switch.php';
    while($switch){
        $switch = include 'switch.php';
        $msg=date("Y-m-d H:i:s").$switch;
		update_chinatotal_realtime();
		insert_chinatotal_history();
		update_province_realtime();
		update_citytotal_realtime();
		foreign();
        file_put_contents("log.log",$msg,FILE_APPEND);//记录日志
        sleep($sleep_time);//等待时间，进行下一次操作。
    }
    exit();
?>