<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="AsocialStyle.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="top_container">
  <div id="logo"><a href="index.php"><img src="asocial_logo_gallo.jpg" width="150" height="46px" alt="logo" /></a></div>	
  <div id="login"><?php include("login.php"); ?></div>
  <div id="login">

  <!--?php
    require_once("helper.php");
            
        if((isset($_POST['username']) && isset($_POST['password'])) &&
            $_POST['username'] != "" && $_POST['password'] != ""){
       try{ 
        $res = checkPassword($_POST['username'], $_POST['password']);
        echo "risultato: ".$res.";<br/>";
        if($res>0){
            $_SESSION['name'] = stripslashes(htmlspecialchars($res));
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
        
        
        ?>-->
  
  </div>
</div>

</body>
</html>