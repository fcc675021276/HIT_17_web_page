<div id="comment">
	<form method="post" action="commentmit.php">
		<h3> <strong>发表评论:</strong> </h3>
		<p> <span>内容：</span> <textarea rows="10" name="content" id="content" cols="50" class="text-textarea"> </textarea> </p>
		<input type="submit" class="btn" value="发表"></input>
	</form>
</div>  
<div id="comments">
	<?php
		include("linkmysql.php");
		
	?>
</div>