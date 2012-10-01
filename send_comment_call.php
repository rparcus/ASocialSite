<html>
<head>
	<title>Send comment result</title>
</head>
<body>

<?php
require_once("helper.php");

ini_set("soap.wsdl_cache_enabled", "0");
try{
    $wsdl = "http://127.0.0.1:8080/ASocialServer/ASocialService?wsdl";
    $client = new SoapClient($wsdl, array('trace' => 1));
    $function = "setComment";
    $params = array('userID' => $_POST['user_id'], 'postID' => $_POST['post_id'], 'commentBody' => $_POST['comment_body']);
    $res = $client->__soapCall($function, paramWrapper($params));
    echo "<h2>Invio: " . $res->return . "</h2>";
    //header("location: index.php#postn".$_POST['post_id']);
    include_once("update_xml_call.php");
    header("location: index.php");
} catch (Exception $e) {
	echo $e->getMessage();
}	
?>

</body>
</html>