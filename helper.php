<?php
    
/*
 * 
 * Contiene tutte le funzioni utili per gestire il sito. Tutto andrebbe
 * un po' commentato.
 * 
 */

//agrega i parametri da inviare as WSDL sotto l'element 'parameters'
function paramWrapper ($parameters){
    return array('parameters' => $parameters);
}

function checkPassword($username, $password){
    $wsdl = "http://localhost:8080/ASocialServer/ASocialService?wsdl";
    $client = new SoapClient($wsdl, array('trace' => 1));
    $function = "loginRequest";
    $params = array('username' =>$username,'password'=>$password);
    $tmp = $client->__soapCall($function, paramWrapper($params));
    return $tmp->return; 
}


?>
