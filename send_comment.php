<html>
<head>
	<title>A-Social - Comment</title>
</head>
<body>
<?php
    function commentForm($pid, $user_id){
    ini_set("soap.wsdl_cache_enabled", "0");
    if (isset($_SESSION['username'])){
        //echo $_SESSION['username'];
        $user = $_SESSION['username'];
    }else{
        //echo $user_id;
        $user = $user_id;
    }
?>
    <form name="comment_form" action="send_comment_call.php" method="post">
    <div class="send_comment_form">
        <div class="send_comment_content">
            <textarea class="comment_textarea" name="comment_body" rows="1"></textarea>
            <div class="comment_submit">
                <input class="send_button_comment" type="submit" name="send_comment" value="Invia">
            </div>
        </div>
    </div>
        <input type="hidden" name="post_id" value="<?php echo "".$pid; ?>"/>
        <input type="hidden" name="user_id" value="<?php echo "".$user ?>"/>        
    </form>
<?php } ?>
</body>
</html>