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

      $fileAddress= $folder ."big_". $_SESSION["username"] . str_replace("image/", ".", $_FILES["file"]["type"]);
      $resizedAddress= $folder . $_SESSION["username"] . str_replace("image/", ".", $_FILES["file"]["type"]);
      move_uploaded_file($_FILES["file"]["tmp_name"],$fileAddress);
      echo "Stored in: " . $fileAddress. "<br />";
      //resize the avatar to 50x50
      if (avatarResize(realpath($fileAddress), realpath($resizedAddress), true)){
          echo "Risultato setAvatar:".setAvatar($_SESSION["username"]);
      }
      else{
        echo "things failed miserably..Try reloading your file". "<br />";
      }   
    } 
  }
else
  {
    echo "Invalid file";
  }
?>