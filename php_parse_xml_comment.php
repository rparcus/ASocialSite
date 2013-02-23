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
							echo '<a href="user_profile.php?username='.$comm->user_id.'">';
                        	echo $comm->username."</a></div>";
						}
						//echo "</div>";
                    echo "<div class=\"comment_date\">".$comm->comment_date."</div>";
					if(isset($_SESSION['username'])){
	                    if($comm->user_id == $_SESSION['username'] || isset($_SESSION['admin'])){
	                        echo '<a href="remove_comment_call.php?commentID='.$comm->comment_id.'"'.'><img src="delete.png" width="20" height="20px" title="Cancella commento" alt="Cancella commento"/></a>';
	                    }
                            echo '<a class="hateButton" href="hate_comment_call.php?commentID='.$comm->comment_id.'"'.'><img src="hate.jpg" width="20" height="20px" title="Hate it!" alt="Hate it!"/></a>'.$comm->hate;
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