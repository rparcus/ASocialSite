<?php
require_once("helper.php");

ini_set("soap.wsdl_cache_enabled", "0");
try{
    global $wsdl;
    $client = new SoapClient($wsdl, array('trace' => 1));
    $function = "isAdmin";
    $params = array('userID' => $_GET['userID']);
    $res = $client->__soapCall($function, paramWrapper($params));
    $_SESSION["admin"] = $res;
    header("location: index.php");
} catch (Exception $e) {
	echo $e->getMessage();
}	
?>