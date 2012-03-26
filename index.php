<?php
session_start;
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
<div id="top_container">
  <div id="logo"><a href="index.php"><img src="asocial_logo_gallo.jpg" width="150" height="46px" alt="logo" /></a></div>	
  <div id="login">

  <?php
    require_once("param_wrapper.php");
            
        if((isset($_POST['username']) && isset($_POST['password'])) &&
            $_POST['username'] != "" && $_POST['password'] != ""){
       try{
        $wsdl = "http://localhost:8080/ASocialServer/ASocialService?wsdl";
        $client = new SoapClient($wsdl, array('trace' => 1));
        $function = "loginRequest";
        $user = $_POST['username'];
        $password = $_POST['password'];
        $params = array('username' =>$user,'password'=>$password);
        $tmp = $client->__soapCall($function, paramWrapper($params));
        $res = $tmp->return; 
        echo "risultato: ".$tmp->return.";<br/>";
        if($res>0){
            $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['res']));
            echo "Welcome ".$user."!";
        }
        else{
            echo "Invalid username or password.";
        }
        
        
        } catch (Exception $e){
        echo $e->getMessage();
        }
        }else{
            echo '<form action="index.php" method="post" name="login">
                User:<input class="post_textarea" name="username" type="text" size="10" maxlength="15" />&nbsp;
                Password:<input class="post_textarea" name="password" type="password" size="10" maxlength="15" />&nbsp;
                <input name="submit" class="coloredinput" type="submit" value="log in" onMouseOver="mouse_over_button(this.form.name,this.name)" onMouseOut="mouse_out_button(this.form.name,this.name)" />
                </form>';
        }
        
        
        ?>
  
  </div>
</div>

<div id="body_container">

  <div id="left">
  <?php include_once("update_xml_call.php"); ?>
  
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies posuere lobortis. Suspendisse potenti. Nunc non imperdiet leo. Donec fermentum purus ac diam mollis quis pulvinar turpis lacinia. Aliquam ut augue augue. Cras non ante vel lectus convallis tincidunt accumsan quis lorem. Vestibulum tempor urna sed nibh semper eget vehicula massa sagittis. Nam sem nibh, lacinia at adipiscing scelerisque, accumsan eu justo. Nullam pulvinar, ligula egestas lobortis hendrerit, arcu dolor faucibus dolor, et accumsan enim dolor ac nibh. Nam id magna velit, in aliquet mauris. Sed facilisis convallis lacinia. Fusce id justo dolor. Duis sem mauris, dictum sit amet interdum at, dapibus ac mauris.

Nullam id nibh nisi. Praesent vel lectus libero. Maecenas consectetur fringilla quam, aliquam aliquam velit posuere id. Sed at nisl ante, id gravida velit. Donec pellentesque enim et mauris placerat quis feugiat nisi vestibulum. Nunc id leo felis. Aliquam sit amet odio in augue vestibulum dignissim. Nunc sit amet enim quis erat accumsan auctor. Cras fringilla, nisi et laoreet porta, felis ipsum pretium libero, eu consequat nunc massa vitae enim. Duis nibh tortor, malesuada vitae commodo at, malesuada et felis. Quisque sed vestibulum dui. Nullam ac mauris nunc. Morbi ut justo ligula, non hendrerit urna.
 
  </div>
  <div id="main">
    <div>
        <?php include("send_post.php"); ?>
    </div>
      <hr/>
    <div>
        <?php include("php_parse_xml.php"); ?>
    </div>
  <div id="right">Content for id "right" Goes Here. This content is fixed".
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
<div id="down">Content for id "down" Goes Here</div>

</body>
</html>
