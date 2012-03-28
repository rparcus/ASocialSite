<?php
    session_start();
    print_r ($_SESSION);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="asocial_icon.png" rel="icon" title="Ascl" />
<link href="AsocialStyle.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A-Soc!aL</title>
<script language="javascript">
function mouse_over_button(FRM,BTN)
{
   window.document.forms[FRM].elements[BTN].style.color = "rgb(63,189,237)";
   window.document.forms[FRM].elements[BTN].style.borderColor = "rgb(17,17,15)";
}
function mouse_out_button(FRM,BTN)
{
   window.document.forms[FRM].elements[BTN].style.color = "white";
   window.document.forms[FRM].elements[BTN].style.borderColor = "rgb(63,189,237)";
}
</script>
</head>

<body>

<div>
    <?php include("menu_top.php"); ?>
</div>

<div id="body_container">

  <div id="left">
    <?php
        if(isset($_SESSION["username"])){
            echo "sessione #".$_SESSION["username"]."</br>";  
        }
        else{
            echo "sessione non inizializzata";
        }
    ?>
  </div>
  <div id="main">
    <div id="send_post_div">
        <?php include("send_post.php"); ?>
    </div>
    <div>
        <?php include("php_parse_xml.php"); ?>
    </div>
    <div id="right">
      <div>
          <ul>
              <li><a href="register.php">Register</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="send_post.php">Send Post</a></li>
              <li><a href="send_comment.php">Send Comment</a></li>
              <li><a href="upload_file_form.php">Upload File</a></li>
              <li><a href="update_xml_call.php">Update XML</a></li>
              <li><a href="php_parse_xml.php">Parse XML</a></li>
          </ul>
      </div>
    </div>
  </div>  
</div>
<div id="down" style="color:white; text-align:right; font-size:10px;"><br/>A-Soc!al ©2012 FARP corp - all rights reserved.</div>

</body>
</html>
