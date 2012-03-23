<html>
<body>
<!--PHP legge un file xml e ne stampa gli elementi, cercavo un modo per "embeddare" un file xml(con xsl) in un file php ma boh..-->
<?php
    include_once("php_parse_xml_comment.php");
    include_once("send_comment.php");
    $url="file.xml";
    $xml = simplexml_load_file($url);
    foreach($xml->post as $post){ ?>
        <p class="tits"><?php echo $post->post_title . " | post id: " . $post->post_id . "- user id: " . $post->user_id; ?><p>
        <p><?php echo $post->post_body; ?></p>
        <p><?php echo $post->post_date; ?></p>
        <?php
            getComment("$post->post_id");
            commentForm("$post->post_id");            
    } ?>
</body>
</html>