<?php
session_start();

if (session_destroy()) {
	echo '<script> alert("注销成功"); </script>';
	header("Refresh:0.1;url=loginin.php");
}
else {
	echo '<script> alert("注销失败"); </script>';
	header("Refresh:0.1;url=bookcase.php");
}
?>