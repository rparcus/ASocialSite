<html>
<head>
	<title>A-Social - Post</title>
</head>
<body>
<?php
echo '<form name="post" action="send_post_call.php" method="post">
		<p> <textarea class="post_textarea" cols="60" rows="1" name="post_title"></textarea> </p>
		<p> <textarea class="post_textarea" name="post_body"  cols="60" rows="5" /></textarea>
		<input type="submit" class="coloredinput" name="send_post_form" value="post" /> </p>
	</form>';	
?>
</body>
</html>