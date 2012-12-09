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
                echo "<div class=\"image\"><img src=\"".$avatarFolder.$post->user_id.".jpeg\" /></div>";
                echo "<div class=\"post_inner_content\">";
                        echo "<div class=\"post_author\">"; 
                        /*echo "avatar/".$post->user_id.".jpeg";*/
                        echo $post->username."</div>";
                        echo "<div class=\"post_title\">".URLify($post->post_title)."</div>";
                        echo "<div class=\"post_text\">".URLify($post->post_body)."</div>";
                    echo "<div class=\"post_date\">".$post->post_date."</div>";
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
    echo '</div>';
?>
</body>
</html>