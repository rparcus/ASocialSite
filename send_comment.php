<?php
function commentForm($pid){ ?>
        <form name="comment_form" action="send_comment_call.php" method="post">
		<p><textarea class="comment_textarea" name="comment_body" cols="40" rows="1"></textarea>
		<input class="coloredinput" type="submit"/></p>
                <input type="hidden" name="post_id" value="<?php echo "".$pid; ?>"/>
	</form>
<?php
} //<a href="#" onClick="document.comment_form.submit()"><img src="send.jpg" height="20" width="45"/></a> 
?>