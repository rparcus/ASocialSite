<?php
    
/*
 * 
 * Contiene tutte le funzioni utili per gestire il sito. Tutto andrebbe
 * un po' commentato.
 * 
 */

//agrega i parametri da inviare al WSDL come elementXML 'parameters'
function paramWrapper ($parameters){
    return array('parameters' => $parameters);
}

/*  controlla che la combinazione unica nomeutente->password sia presente nel db
 *  restituisce -1 con un errore o in caso di password sbagliata.
 */
function checkPassword($username, $password){
    $wsdl = "http://localhost:8080/ASocialServer/ASocialService?wsdl";
    $client = new SoapClient($wsdl, array('trace' => 1));
    $function = "loginRequest";
    $params = array('username' =>$username,'password'=>$password);
    $tmp = $client->__soapCall($function, paramWrapper($params));
    return $tmp->return; 
}

function getUsername($userID){
    
    /*
     * qui ci va una funziona che mette in input userID, e ottiene lo userName
     */
}

function checkWichSessio($userID){
    /*
     * Prende in input userID e dice se quella sessione è attiva o meno
     * 
     */
}


?>
