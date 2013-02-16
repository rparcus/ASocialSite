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
                echo '<a name="'.$anchor.'"></a>'; 
    
echo "<div class=\"comment_content\">";
    echo "<div class=\"comment_image_block\">";          
    	echo "<div class=\"comment_image\">";
            echo "<img src=\"".$avatarFolder."small_".$comm->user_id.".jpeg\" width=\"40\" height=\"40\"/>";
        echo "</div>";
    	echo "<div class=\"comment_inner_content\">";
        	echo "<div>";
                    echo "<div class=\"comment_author\">"; /*echo getUsername($comm->user_id);*/
                    	if (!check_not_empty($comm->username)){
                    		echo "Anonimo Asociale </div>";
                    	}
						else{
                        	echo $comm->username."</div>";
						}
						//echo "</div>";
                    echo "<div class=\"comment_date\">".$comm->comment_date."</div>";
					if(isset($_SESSION['username'])){
	                    if($comm->user_id == $_SESSION['username'] or isset($SESSION['admin'])){
	                        echo '<a href="remove_comment_call.php?commentID='.$comm->comment_id.'"'.'>[X]</a>';
	                    }
					}
                echo "</div>";
            echo "<div class=\"comment_text\">".URLify($comm->comment_body)."</div>";  
        echo "</div>";
    echo "</div>";
echo "</div>";
                        }
                    }
                } 
?>