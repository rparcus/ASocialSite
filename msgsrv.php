<?php
if(rand(1,3) == 1){
     //Fake an error 
    header("HTTP/1.0 404 Not Found");
    die();
}

// Send a string after a random number of seconds (2-10) 
sleep(rand(2,10));
echo("Hi! Have a random number: " . rand(1,10));
?>

<?php
    /*require_once("helper.php");
    ini_set("soap.wsdl_cache_enabled", "0");
    include_once("php_parse_xml_comment.php");
    include_once("send_comment.php");
    global $xmlFile; //from helper.php
    global $avatarFolder; //from helper.php
    */
?>