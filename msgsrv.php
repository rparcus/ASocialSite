<?php
    /*if(rand(1,3) == 1){
     //Fake an error 
    header("HTTP/1.0 404 Not Found");
    die();
}

// Send a string after a random number of seconds (2-10) 
sleep(rand(2,10));
echo("Hi! Have a random number: " . rand(1,10));
*/
    //http://www.nolithius.com/game-development/comet-long-polling-with-php-and-jquery
    global $user_id;
    if(isset($_SESSION["username"])){
        $user_id = $_SESSION["username"];
    }
    session_write_close();
    sleep(rand(20,25));
    require("helper.php");
    ini_set("soap.wsdl_cache_enabled", "0");
    global $xmlFile; //from helper.php
    global $avatarFolder; //from helper.php
    global $commentsFile; //from helper.php
    global $avatarFolder; //helper.php
    $xml = simplexml_load_file($xmlFile);
    $xml2 = simplexml_load_file($commentsFile);
    echo '<div class="post_page">';
    foreach($xml->post as $post){
        $anchor="postn".$post->post_id;
        //echo $avatarFolder.$post->user_id.".jpeg";
        echo '<a name="'.$anchor.'"></a>';        
        echo "<div class=\"post_content\">";
            echo "<div class=\"image_block\">";
                echo "<div class=\"image\"><img src=\"".$avatarFolder.$post->user_id.".jpeg\" /></div>";
                echo "<div class=\"post_inner_content\">";
                        echo "<div class=\"post_author\">"; 
                        /*echo "avatar/".$post->user_id.".jpeg";*/
                        echo $post->username."</div>";
                        echo "<div class=\"post_title\">".URLify($post->post_title).$post->post_id."</div>";
                        echo "<div class=\"post_text\">".URLify($post->post_body)."</div>";
                    echo "<div class=\"post_date\">".$post->post_date."</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    foreach($xml2->comment as $comm){
        if(intval($comm->post_id) == intval($post->post_id)) {
            $anchor="commentn".$comm->comment_id;
            echo '<a name="'.$anchor.'"></a>'; 
            echo "<div class=\"comment_content\">";
                echo "<div class=\"comment_image_block\">";          
                    echo "<div class=\"comment_image\">";
                        echo "<img src=\"".$avatarFolder.$comm->user_id.".jpeg\" width=\"40\" height=\"40\"/>";
                    echo "</div>";
                    echo "<div class=\"comment_inner_content\">";
                            echo "<div>";
                                echo "<div class=\"comment_author\">"; /*echo getUsername($comm->user_id);*/
                                    echo $comm->user_id."</div>";
                                echo "<div class=\"comment_date\">".$comm->comment_date."</div>";
                            echo "</div>";
                        echo "<div class=\"comment_text\">".URLify($comm->comment_body)."</div>";  
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
    }                  
    echo $user_id;
    echo "<form name=\"comment_form\" action=\"send_comment_call.php\" method=\"post\">";
    echo "<div class=\"send_comment_form\">";
        echo "<div class=\"send_comment_content\">";
            echo "<textarea class=\"comment_textarea\" name=\"comment_body\" rows=\"1\"></textarea>";
            echo "<div class=\"comment_submit\">";
                echo "<input class=\"send_button\" type=\"submit\" name=\"send_comment\" value=\"send\">";
            echo "</div>";
        echo "</div>";
    echo "</div>";
        echo "<input type=\"hidden\" name=\"post_id\" value=\"".$post->post_id."/>";
        echo "<input type=\"hidden\" name=\"user_id\" value=\"".$user_id."/>";        
    echo "</form>";                   
    }
    echo '</div>';
?>