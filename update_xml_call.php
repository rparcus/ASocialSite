<html>
<head>
	<title>Update XML File</title>
        <!-- WEB METHOD IS MISSING - JUST A TEST PAGE -->
</head>
<body>
    
<?php
require_once("param_wrapper.php");

ini_set("soap.wsdl_cache_enabled", "0");
try{
    $wsdl = "http://127.0.0.1:8080/ASocialServer/ASocialService?wsdl";
    $client = new SoapClient($wsdl, array('trace' => 1));
    $function = "updatePostXML";
    $params = array();
    $res = $client->__soapCall($function, $params);
    echo "<h2>XML Updated: " . $res->return . "</h2>";
} catch (Exception $e) {
	echo $e->getMessage();
}	
?>

