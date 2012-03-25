<html>
<head>
	<title>Send comment result</title>
</head>
<body>

<?php
require_once("param_wrapper.php");

ini_set("soap.wsdl_cache_enabled", "0");
try{
    $wsdl = "http://127.0.0.1:8080/ASocialServer/ASocialService?wsdl";
    $client = new SoapClient($wsdl, array('trace' => 1));
    $function = "setComment";
    $params = array('userID' => 1, 'postID' => $_POST['post_id'], 'commentBody' => $_POST['comment_body']);
    $res = $client->__soapCall($function, paramWrapper($params));
    //echo "<h2>Invio: " . $res->return . "</h2>";
    header("location: index.php#postn".$_POST['post_id']);
} catch (Exception $e) {
	echo $e->getMessage();
}	
?>

</body>
</html>