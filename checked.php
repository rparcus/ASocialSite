<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>Checked!</title>
    </head>
    <body>
        <?php
        require_once("param_wrapper.php");
        
        if((isset($_POST['username']) && isset($_POST['password'])) &&
            $_POST['username'] != "" && $_POST['password'] != ""){
       try{
        global $wsdl;
        $client = new SoapClient($wsdl, array('trace' => 1));
        $function = "login";
        $user = $_POST['username'];
        $password = $_POST['password'];
        $params = array('username' =>$user,'password'=>$password);
        $tmp = $client->__soapCall($function, paramWrapper($params));
        $res = $tmp->return; 
        echo "risultato: ".$res.";<br/>";
        if($res == 'true'){
            $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['username']));
            echo "WELCOME ".$user."!";
        }
        else{
            echo "Invalid username or password or argument.";
        }
        
        
        } catch (Exception $e){
        echo $e->getMessage();
        }
        }else{
            echo '<form action="checked.php" method="post" name="login">
                user:<input name="username" type="text" size="10" maxlength="15" />&nbsp;
                password:<input name="password" type="password" size="10" maxlength="15" />&nbsp;
                <input name="submit" type="submit" value="log in" />
                </form>';
        }
        
        
        ?>
        
    </body>
</html>