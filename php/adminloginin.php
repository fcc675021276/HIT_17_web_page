<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员登录</title>
</head>

<body>
<?php
include("nav.php");
?>
<form action="linkmysql.php" method="post">
<input type="text" name="user_name" value="输入用户名"/>
<input type="password" name="password" value="输入密码"/>
<input type="submit" name="submit" value="确认"/>
</form>
<p> <a href="loginin.php" title="前往非管理员登录"> 非管理员 </a> </p>
</body>
</html>