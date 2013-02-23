<?php
require_once("helper.php");

ini_set("soap.wsdl_cache_enabled", "0");
try{
    global $wsdl;
    $client = new SoapClient($wsdl, array('trace' => 1));
    $function = "hateComment";
    $params = array('commentID' => $_GET['commentID']);
    $client->__soapCall($function, paramWrapper($params));
    include_once("update_xml_call.php");
    header("location: index.php");
} catch (Exception $e) {
	echo $e->getMessage();
}	
?>