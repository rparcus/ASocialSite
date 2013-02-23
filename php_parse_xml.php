<html>
<body>
<?php
    require_once("helper.php");
    ini_set("soap.wsdl_cache_enabled", "0");
    include_once("php_parse_xml_comment.php");
    include_once("send_comment.php");
    global $xmlFile; //from helper.php
    global $avatarFolder; //from helper.php
    $xml = simplexml_load_file($xmlFile);
    echo '<div class="post_page">';
    foreach($xml->post as $post){
        $anchor="postn".$post->post_id;
        //echo $avatarFolder.$post->user_id.".jpeg";
        echo '<a name="'.$anchor.'"></a>';        
        echo "<div class=\"post_content\">";
            echo "<div class=\"image_block\">";
                echo "<div class=\"image\"><img src=\"".$avatarFolder."small_".$post->user_id.".jpeg\" /></div>";
                echo "<div class=\"post_inner_content\">";
                        echo "<div class=\"post_author\">"; 
                        /*echo "avatar/".$post->user_id.".jpeg";*/
                        if (!check_not_empty($post->username)){
                    		echo "Anonimo Asociale </div>";
                    	}
                        else{
                                echo '<a href="user_profile.php?username='.$post->user_id.'">';
                        	echo $post->username."</a></div>";
						}
                        echo "<div class=\"post_title\">".URLify($post->post_title)."</div>";
                        echo "<div class=\"post_text\">".URLify($post->post_body)."</div>";
                    echo "<div class=\"post_date\">".$post->post_date."</div>";
					if(isset($_SESSION['username'])){
						if($post->user_id == $_SESSION['username'] || isset($_SESSION['admin'])){
                                                       echo '<a href="remove_post_call.php?postID='.$post->post_id.'"'.'><img src="delete.png" width="20" height="20px" title="Cancella commento" alt="Cancella il post"/></a>';
                                
                                                }
					}
                                        echo '<a class="hateButton" href="hate_post_call.php?postID='.$post->post_id.'"'.'><img src="hate.jpg" width="20" height="20px" title="Hate it!" alt="Hate it!"/></a>'.$post->hate;
                echo "</div>";
            echo "</div>";
        echo "</div>";?>
<?php
        getComment("$post->post_id");
        if(isset($_SESSION['username'])){
            commentForm("$post->post_id", $_SESSION['username']); 
        }else{
            commentForm("$post->post_id", 0);
        }
    }
	echo '<br/><br/><br/><br/><br/>';
    echo '</div>';
?>
</body>
</html>