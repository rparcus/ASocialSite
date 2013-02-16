<html>
<head>
	<title>A-Social - Post</title>
</head>
<body>
<form name="post_form" action="send_post_call.php" method="post">
    <p><textarea class="post_textarea" rows="1" name="post_title"></textarea></p>
    <p><textarea class="post_textarea" name="post_body" rows="5" /></textarea>
    <input class="send_button_post" style="float:right" type="submit" name="send_post" value="Invia"></p>
    <input type="hidden" name="user_id" value="<?php echo "".$_SESSION['username']; ?>"/>
</form>
</body>
</html>