<html>
<body>
<?php
    include_once("php_parse_xml_comment.php");
    include_once("send_comment.php");
    $url="file.xml";
    $xml = simplexml_load_file($url);
    foreach($xml->post as $post){
        $anchor="postn".$post->post_id;
        echo '<a name="'.$anchor.'"></a>' ?>        
        <div class="post_content">
                <div class="image_block">
                <div class="image"><img src="avatar.jpg" /></div>
              <div class="post_inner_content">
                        <div class="post_author"><?php echo $post->username;?></div>
                        <div class="post_title"><?php echo $post->post_title;?></div>
                        <div class="post_text"><?php echo $post->post_body;?></div>
                <div class="post_date"><?php echo $post->post_date; ?></div>
              </div>
          </div>
        </div>
<?php
    getComment("$post->post_id");
    commentForm("$post->post_id");            
} ?>
</body>
</html>