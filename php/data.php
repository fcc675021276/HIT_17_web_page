<?php
	include_once("connect.php");
	$q=mysqli_query($link,"select * from tb_comments");
	
	while($row=mysqli_fetch_array($q)){
		$comments[] = array("id"=>$row['id'],"user"=>$row['name'],"comment"=>$row['comment'],"addtime"=>$row['time']);
	}
		echo json_encode($comments);
?>