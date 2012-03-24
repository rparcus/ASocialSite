<?php
function getComment($pid){
    $url="commentsfile.xml";
    $xml = simplexml_load_file($url);
    foreach($xml->comment as $comm){
            if($comm->post_id==$pid) {?>

<div class="comment_content">
	<div class="comment_image_block">
    	<div class="comment_image"><img src="avatar.jpg" width="40" height="40"/></div>
    	<div class="comment_inner_content">
        	<div>
                    <div class="comment_author"><?php echo 'user_id: '.$comm->user_id; ?></div>
                    <div class="comment_date"><?php echo $comm->comment_date; ?></div>
                </div>
            <div class="comment_text"><?php echo $comm->comment_body; ?></div>  
        </div>
    </div>
</div>
<?php }}} ?>