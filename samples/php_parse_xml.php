<html>
<body>
<p>CIAO MONDO</p>
<!--PHP legge un file xml e ne stampa gli elementi, cercavo un modo per "embeddare" un file xml(con xsl) in un file php ma boh..-->
<?php
    $url="file_mod.xml";
    $xml = simplexml_load_file($url); 
    foreach($xml->post as $post){
        echo $post->post_title . "<br/>";
        echo $post->post_body . "<hr/>";
    }
?>
</body>
</html>