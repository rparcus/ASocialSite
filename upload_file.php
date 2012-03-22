<!--The examples below create a temporary copy of the uploaded files in the PHP temp folder on the server.
The temporary copied files disappears when the script ends. 
To store the uploaded file we need to copy it to a different location:-->

<?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")        
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 2000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>

<!--$_FILES["file"]["name"] - the name of the uploaded file
$_FILES["file"]["type"] - the type of the uploaded file
$_FILES["file"]["size"] - the size in bytes of the uploaded file
$_FILES["file"]["tmp_name"] - the name of the temporary copy of the file stored on the server
$_FILES["file"]["error"] - the error code resulting from the file upload-->