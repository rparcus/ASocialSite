<html>
<head>
	<title>Update XML File</title>
</head>
<body>
    
<?php
require_once("helper.php");

ini_set("soap.wsdl_cache_enabled", "0");
try{
    global $wsdl;
    $client = new SoapClient($wsdl, array('trace' => 1));
    $function = "updatePostXML";
    $params = array();
    $res = $client->__soapCall($function, $params);
    //echo "<h2>XML Updated: " . $res->return . "</h2>";
} catch (Exception $e) {
	echo $e->getMessage();
}	
?>

