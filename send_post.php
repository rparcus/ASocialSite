<html>
<head>
	<title>A-Social - Post</title>
</head>
<body>
<?php
echo '<form name="post" action="send_post_call.php" method="post">
		<p>Titolo: <input type="text" name="post_title" /> </p>
		<p> <textarea name="post_body"  cols="40" rows="5" /></textarea> </p>
		<p> <input type="submit" name="send_post_form" value="post" /> </p>
	</form>';	
?>
</body>
</html>