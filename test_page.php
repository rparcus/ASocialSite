<html>
<head>
	<title>Test Page</title>
</head>
<body>
    
<?php
function paramWrapper ($parameters){
    return array('parameters' => $parameters);
}

ini_set("soap.wsdl_cache_enabled", "0");
try{
    $wsdl = "http://127.0.0.1:8080/ASocialServer/ASocialService?wsdl";
    $client = new SoapClient($wsdl, array('trace' => 1));
    $function = "getPost";
    $params = array();
    $res = $client->__soapCall($function, $params);
    echo "<h2>Test: " . $res->return . "</h2>";
} catch (Exception $e) {
	echo $e->getMessage();
}	
?>

