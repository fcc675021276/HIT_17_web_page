<?php
	$host = "127.0.0.1";
	$db_user = "root";
	$db_pass = "";
	$db_name = "db_text";
	$timezone="Asia/Shanghai";

	$link=mysqli_connect($host,$db_user,$db_pass);
	mysqli_select_db($link,$db_name);
	mysqli_query($link,"SET names UTF8");
	date_default_timezone_set($timezone);
?>