<?php
	//通过php连接到mysql数据库
	$conn=mysqli_connect("localhost","root","","db_text");
	$timezone="Asia/Shanghai";
	date_default_timezone_set($timezone);
		mysqli_query($conn,"SET names UTF8");
?>
