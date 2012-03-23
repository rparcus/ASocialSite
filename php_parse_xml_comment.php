<?php
function getComment($pid){
    $url="commentsfile.xml";
    $xml = simplexml_load_file($url);
    foreach($xml->comment as $comm){
            if($comm->post_id==$pid) {
                echo "COMMENTO --- ".$comm->user_id . ": " . $comm->comment_body . "<br/>";
            }
    }
}
?>