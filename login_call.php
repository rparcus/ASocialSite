<html>
<head>
	<title>Login call result</title>
</head>
<body>

<?php
require_once("param_wrapper.php");

ini_set("soap.wsdl_cache_enabled", "0");
try{
    $wsdl = "http://127.0.0.1:8080/ASocialServer/ASocialService?wsdl";
    $client = new SoapClient($wsdl, array('trace' => 1));
    $function = "loginRequest";
    $params = array('username' => $_POST['username'], 'password'=> $_POST['password']);
    $res = $client->__soapCall($function, paramWrapper($params));
    echo "<h2>Login: " . $res->return . "</h2>";
} catch (Exception $e) {
	echo $e->getMessage();
}	
?>

</body>
</html>