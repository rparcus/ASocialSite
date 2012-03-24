<?php
function commentForm($pid){ ?>
        <form name="comment" action="send_comment_call.php" method="post">
		<p> <textarea class="comment_textarea" name="comment_body" cols="40" rows="1" /></textarea>
		<input type="submit" class="coloredinput" name="send_comment_form" value="comment" /> </p>
                <input type="hidden" name="post_id" value="<?php echo "".$pid; ?>">
	</form>
<?php
}
?>