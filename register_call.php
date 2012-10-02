<html>
<head>
	<title>Register call result</title>
</head>
<body>
    
    <?php session_start(); ?>
    
    <div>
        <?php include("menu_top.php"); ?>
    </div>

    <div id="body_container">

<?php
require_once("helper.php");

ini_set("soap.wsdl_cache_enabled", "0");
try{
    global $wsdl;
    $client = new SoapClient($wsdl, array('trace' => 1));
    $function = "registrationRequest";
    $params = array('username' => $_POST['username'], 'password'=> $_POST['password'], 'pwconfirm'=> $_POST['pwconfirm']);
    $res = $client->__soapCall($function, paramWrapper($params));
    echo "<h2>Registation: " . $res->return . "</h2>";
} catch (Exception $e) {
	echo $e->getMessage();
}	
?>
    </div>

</body>
</html>