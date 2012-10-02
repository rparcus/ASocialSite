<!--The examples below create a temporary copy of the uploaded files in the PHP temp folder on the server.
The temporary copied files disappears when the script ends. 
To store the uploaded file we need to copy it to a different location:-->

<?php
session_start();
require_once("helper.php");
ini_set("soap.wsdl_cache_enabled", "0");   
include("menu_top.php");



if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")        
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 2000000)
&& (isset($_SESSION["username"])))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
      global $avatarFolder;
    $folder=$avatarFolder;
      
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

      $fileAddress= $folder. "/" . $_SESSION["username"] . str_replace("image/", ".", $_FILES["file"]["type"]);
      move_uploaded_file($_FILES["file"]["tmp_name"],$fileAddress);
      echo "Stored in: " . $fileAddress. "<br />";
      //resize the avatar to 50x50
      if (avatarResize(realpath($fileAddress), true)){
          echo "Risultato setAvatar:".setAvatar($_SESSION["username"]);
      }
      else{
        echo "things failed miserably..Try reloading your file". "<br />";
      }
      
      //set avatar=true nel DB per questo utente.
      //echo "".setAvatar($_SESSION["username"]);
      
      

//require_once("helper.php");      
//ini_set("soap.wsdl_cache_enabled", "0");
//try{
//    $wsdl = "http://127.0.0.1:8080/ASocialServer/ASocialService?wsdl";
//    $client = new SoapClient($wsdl, array('trace' => 1));
//    $function = "resizeAvatar";
//    $params = array('url' => "http://localhost:9090/ASocialClient/avatar/2.png");//$folder. "/" . $_SESSION["username"] . str_replace("image/", ".", $_FILES["file"]["type"]));
//    $res = $client->__soapCall($function, paramWrapper($params));    
//    echo $res;
    
} 
//catch (Exception $e) {
//	echo $e->getMessage();
//}	

//      }
    //}
  }
else
  {
  echo "Invalid file";
  }
?>

<!--
$_FILES["file"]["name"] - the name of the uploaded file
$_FILES["file"]["type"] - the type of the uploaded file
$_FILES["file"]["size"] - the size in bytes of the uploaded file
$_FILES["file"]["tmp_name"] - the name of the temporary copy of the file stored on the server
$_FILES["file"]["error"] - the error code resulting from the file upload
-->