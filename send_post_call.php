<html>
<head>
	<title>Send post result</title>
</head>
<body>

<?php
require_once("param_wrapper.php");

ini_set("soap.wsdl_cache_enabled", "0");
try{
    $wsdl = "http://127.0.0.1:8080/ASocialServer/ASocialService?wsdl";
    $client = new SoapClient($wsdl, array('trace' => 1));
    $function = "setPost";
    $params = array('postTitle' => $_POST['post_title'], 'postBody' => $_POST['post_body'], 'userID' => 1);
    $res = $client->__soapCall($function, paramWrapper($params));
    //echo "<h2>Invio: " . $res->return . "</h2>";
    header("location: index.php#postn".$_POST['post_id']);
} catch (Exception $e) {
	echo $e->getMessage();
}	
?>

</body>
</html>