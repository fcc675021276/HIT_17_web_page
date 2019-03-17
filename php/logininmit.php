
<?php
	if(!session_id()) {
		session_start();
	}
	require "linkmysql.php";
	
	$name=$_POST['username'];
	$pwd=$_POST['password'];
	$same=false;
	//对比密码是否正确
	$result1=mysqli_query($conn,"select * from tb_text");
	while($row=mysqli_fetch_object($result1)) {
		if($row->name==$name) {
			if($row->pwd==$pwd) {
				$same=true;
				break;
			}
		}
	}
	if (empty($_SESSION["name"])) {
		if($same==true) {
				$_SESSION["name"]=$name;
				$_SESSION["pwd"]=$pwd;
				echo "<script> alert('登录成功！'); </script>";
				mysqli_close($conn);
				header("Refresh:0.1;url=bookcase.php");
			}
		else {
			echo "<script>alert('密码错误，或用户名不存在，请重新登录！'); </script>";
			mysqli_close($conn);
//			header("location:registe.php");
			header("Refresh:0.1;url=loginin.php");
		}
				}
	else {
		echo"<script> alert('您已登录，请退出登陆后再试！'); </script>";
		header("Refresh:0.1;url=loginin.php");
	}
?>
