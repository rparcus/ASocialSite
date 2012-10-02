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
    foreach($xml->post as $post){
        $anchor="postn".$post->post_id;
        echo $avatarFolder.$post->user_id.".jpeg";
        echo '<a name="'.$anchor.'"></a>' ?>        
        <div class="post_content">
                <div class="image_block">
                <div class="image"><img src="<?php echo $avatarFolder.$post->user_id.".jpeg";?>" /></div>
				<div class="post_inner_content">
							<div class="post_author"><?php 
							/*echo "avatar/".$post->user_id.".jpeg";*/
							echo $post->username;?></div>
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