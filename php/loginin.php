<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="../css/loginin.css">
<link type="text/css" rel="stylesheet" href="../css/nav.css">

<script src="../js/validate.js" type="text/javascript" > </script>
<title>登录</title>
</head>

<body>
<style>
#bor {
	width:100%;
	border:solid 2px green;
	margin-left:auto;
	margin-right:auto;
	background-color:green;
}
</style>

<?php
	include("nav.php");
?>
<div id="bor">
<h1>登录</h1>
<hr />
<form method="post" action="logininmit.php">
	<table>
		<tr>
			<td>请输入用户名：<input type="text" name="username"></td>
		</tr>
		<tr>
			<td>请您输入密码: <input type="password" name="password"></td>
		</tr>
		<tr>
			<td>请输入验证码：<input type="text" name="vcode" id="inputCode">
			<span id="checkCode" class="code"  onclick="createCode(4)" > </span> 
			<span onclick="createCode(4)">看不清换一张</span> </td>
		</tr>
		<tr>
			<td><input type="submit" value="登录" onclick="return validateCode()">    <input type="reset" value="重新输入"></td>
		</tr>
	</table>
</form>
<hr />
</div>

<nav class="nav">
<ul>
<li><a class="current" href="adminloginin.php" title=""> 管理员 </a></li>
<li><a href="forget.php" title="找回密码" >忘记密码 </a></li>
<li><a href="registe.php" title="前往注册"> 新用户注册 </a> </li>
</ul>
</nav>

</body>
</html>