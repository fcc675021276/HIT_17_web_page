<?php
	include("linkmysql.php");
	if(!isset($_SESSION)) {
			session_start();
		}
	$txt = $_POST['content'];
	if(!empty($_SESSION['name'])) {
		$name = $_SESSION['name'];
		$time = date("Y-m-d H:i:s");
		if(empty($txt)){
			echo"<script> alert('内容不能为空！'); </script>";
			
		}
		else{
			$query=mysqli_query($conn,"insert into tb_comment(name,content,time)values('$name','$txt','$time')");
			if ($query) {
				echo "<script> alert('发表成功!!!'); </script>";
			}
		}
	}
	else {
		echo"<script> alert('未登入！请重新登入'); </script>";
	}

	$q=mysqli_query($conn,"select * from tb_comment");
	?>
	<h1> 评论区</h1>
	<?php 
	while($row=mysqli_fetch_array($q)){
//		$comments[] = array("id"=>$row['id'],"user"=>$row['name'],"content"=>$row['content'],"addtime"=>$row['time']);
	
	
	?>
	<ul style="list-style: none;">
		<li style="font-size:small;"> 用户名： <?php echo $row[1] ?> </li>
		<li style="font-size:small; color:gray";> 评论时间：<?php echo $row[2] ?> </li>
		<li style="color:red;"> <p>评论内容：</p> <?php echo $row[3] ?> </li>
		<hr />
	</ul>
	<?php 
	} 
//	echo  json_encode($comments);
	include("comment.php");
	include("nav.php");
	?>