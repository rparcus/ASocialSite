<?php
    session_start();
    require_once("helper.php");
    ini_set("soap.wsdl_cache_enabled", "0");
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
      <?php include("leftProfile.php"); ?>
  </div>
  <div id="main">
    <div id="send_post_div">
        <?php include("send_post.php"); ?>
    </div>
    <div id="right">
      <div>
          <ul>
          		<?php 
          		if(!isset($_SESSION["username"])){
					echo '<li><a href="register.php"><button class="register_button_right" type="button" value="Registrati" >Registrati</button></a></li>';
				}?>
		  </ul>
      </div>
    </div>    
<div id="down" style="color:white; text-align:right; font-size:10px;"><br/>A-Soc!al ©2012 FARP corp - all rights reserved.</div>
    <div>
        <?php include_once("php_parse_xml.php"); ?>
    </div>
  </div>  
</div>
</body>
</html>
