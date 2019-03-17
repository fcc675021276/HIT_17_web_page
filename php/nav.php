<link type="text/css" rel="stylesheet" href="../css/nav.css">
<script src="../js/nav.js" type="text/javascript" > </script>

<nav class="nav">
	<ul>
		<li class="current"> <a href="#" title="#"> logo </a> </li>
		<li> <a href="bookcase.php" title="访问书架"> 书架 </a> </li>
		<li> <a href="../index.php" title="返回首页"> 首页 </a> </li>
		<?php 
		if(!isset($_SESSION)) {
			session_start();
		}
		if(!empty($_SESSION["name"])) {
				echo '<li>  <a href="#" title="">欢迎'  ?> <?php print_r($_SESSION["name"]) ?> <?php echo ' 登录本站</a> </li>';
				echo '<li>  <a href="logout.php" title="姓名：' ?> <?php print_r($_SESSION["name"]) ?> <?php echo '">退出登录</a> </li>';
			}
		else {
			echo '<li>  <a href="loginin.php" title="前往登录"> 登录 </a> </li>';
		}
		?>
	</ul>
</nav>