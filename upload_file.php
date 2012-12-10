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
    
    echo "<br/><br/><br/><br/>";    
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

      $fileAddress= $folder ."original_". $_SESSION["username"] .str_replace("image/", ".", $_FILES["file"]["type"]);
      $tmp = str_replace("original_","small_", $fileAddress); 
      //avatar per i commenti
      $resizedAddress = str_replace($_FILES["file"]["type"],"jpeg", $tmp);
      //avatar per leftProfile
      $resizedAddress2 = str_replace("small_","big_", $resizedAddress);
      move_uploaded_file($_FILES["file"]["tmp_name"], $fileAddress);
      echo "Stored in: " . realpath($fileAddress)." oppure ".$fileAddress ."<br />";
      echo "Resized small in: " . $resizedAddress. "<br />";
      echo "Resized big in: " . $resizedAddress2. "<br />";
      //resize the avatar to 50x50 e 350x300
      if (      avatarResize( realpath($fileAddress), $resizedAddress, 50, 50,true) &&
                avatarResize( realpath($fileAddress), $resizedAddress2, 350, 300,true)
          ){
          echo "Risultato setAvatar:". setAvatar($_SESSION["username"]);
      }
      else{
        echo "things failed miserably...Try reloading your file". "<br />";
      }   
    } 
  }
else
  {
    echo "Invalid file";
  }
?>