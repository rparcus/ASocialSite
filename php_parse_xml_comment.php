<?php
require_once("helper.php");
function getComment($pid){
    ini_set("soap.wsdl_cache_enabled", "0");
    global $commentsFile; //from helper.php
    $xml = simplexml_load_file($commentsFile);
    foreach($xml->comment as $comm){
            if($comm->post_id==$pid) {
                $anchor="commentn".$comm->comment_id;
                global $avatarFolder; //helper.php
                echo '<a name="'.$anchor.'"></a>' 
?>      
<div class="comment_content">
    <div class="comment_image_block">          
    	<div class="comment_image">
            <img src="<?php echo $avatarFolder.$comm->user_id.".jpeg"; ?>" width="40" height="40"/>
        </div>
    	<div class="comment_inner_content">
        	<div>
                    <div class="comment_author"><?php /*echo getUsername($comm->user_id);*/
                        echo $comm->user_id;?></div>
                    <div class="comment_date"><?php echo $comm->comment_date; ?></div>
                </div>
            <div class="comment_text"><?php echo $comm->comment_body; ?></div>  
        </div>
    </div>
</div>
<?php }}} ?>