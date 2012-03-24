<html>
<head>
	<title>A-Social - Post</title>
</head>
<body>
<?php
echo '<form name="post" action="send_post_call.php" method="post">
		<p> <input class="comment_textarea" type="text" name="post_title" /> </p>
		<p> <textarea class="comment_textarea" name="post_body"  cols="40" rows="5" /></textarea>
		<input type="submit" class="coloredinput" name="send_post_form" value="post" /> </p>
	</form>';	
?>
</body>
</html>