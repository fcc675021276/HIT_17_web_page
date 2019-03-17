<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../js/compare.js" type="text/javascript" > </script>
<script src="../js/validate.js" type="text/javascript" > </script>
<title>注册</title>
</head>

<body>
<?php
	include("nav.php");
?>

<div id="bor">
<h1>新用户注册</h1>
<hr />
<form method="post" action="regsubmit.php">
	<table>
		<tr>
			<td>请输入用户名：<input type="text" name="username" onkeyup="na()" id="name1" /> <span id="text2"> </span></td>
		</tr>
		<tr>
			<td>请输入密码：<input type="password" name="password" onkeyup="pwd()" id="pwd1" /><span id="text1"> </span></td>
		</tr>
		<tr>
			<td>请确认密码<input type="password" name="repassword" onkeyup="compare()" id="pwd2" /> <span id="text"></span> </td>
		</tr>
		<tr>
			<td>请输入验证码：<input type="text" name="vcode" id="inputCode">
			<span id="checkCode" class="code"  onclick="createCode(4)" > </span> 
			<span onclick="createCode(4)">看不清换一张</span> </td>
		</tr>
		<tr>
			<td><input type="submit" value="注册" onclick="return validateCode()" onmouseover="useful()" id="submit" />    <input type="reset" value="重新输入"/></td>
		</tr>
	</table>
</form>
<hr />	
</div>
</body>