<?php
function getComment($pid){
    $url="commentsfile.xml";
    $xml = simplexml_load_file($url);
    foreach($xml->comment as $comm){
            if($comm->post_id==$pid) {
                echo '<p class="comm">COMMENTO --- '.$comm->user_id . ': ' . $comm->comment_body . '</p>';
                echo '<p class="comm">' . $comm->comment_date . '</p>';
            }
    }
}
?>