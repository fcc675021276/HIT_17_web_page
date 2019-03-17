
<?php
	require "linkmysql.php";
	
	$name=$_POST['username'];
	$pwd=$_POST['password'];
	$same=false;
	
	$result1=mysqli_query($conn,"select * from tb_text");
	while($row=mysqli_fetch_object($result1)) {
		if($row->name==$name) {
			$same=true;
			break;
		}
	}
	if($same===false) {
		$result=mysqli_query($conn,"insert into tb_text (name,pwd) values('$name','$pwd')");
		echo "<script> alert('注册成功！'); </script>";
		mysqli_close($conn);
//		header("location:loginin.php");
		header("Refresh:0.1;url=loginin.php");
	}
	else {
		echo "<script>alert('用户名已存在，注册失败，请重新注册！'); </script>";
		mysqli_close($conn);
//		header("location:registe.php");
		header("Refresh:0.1;url=registe.php");
	}
?>
