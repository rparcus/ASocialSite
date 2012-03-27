<?php
    require_once("helper.php");
    if(!isset($_SESSION["username"])){       
        if((isset($_POST['username']) && isset($_POST['password'])) &&
            $_POST['username'] != "" && $_POST['password'] != ""){
       try{ 
            $res = checkPassword($_POST['username'], $_POST['password']);
            //echo "risultato: ".$res.";<br/>";
            if($res>0){
                $_SESSION['name'] = stripslashes(htmlspecialchars($res));
                echo "Welcome ".$res."!";
            }
            else{
                printLoginForm();
                //echo "Invalid username or password.";
            }
         
        } catch (Exception $e){
        echo $e->getMessage();
        }
        }else{
            printLoginForm();
        }
    }else{
      echo "Ben venuto toro!Il nostro grande user 1 (^__^)";
    }
        
        
        ?>

<?php
    /*session_start();
    require_once("helper.php");
    if(!isset($_SESSION["username"])){
        if((isset($_POST['username']) && isset($_POST['password'])) &&
            $_POST['username'] != "" && $_POST['password'] != "")
        {
            try{ 
                $res = checkPassword($_POST['username'], $_POST['password']);
                echo "risultato: ".$res.";<br/>";
                if($res>0){
                    $_SESSION['username'] = stripslashes(htmlspecialchars($res));
                    echo "Welcome ".$_SESSION['user']."!";
                }
                else{
                    //header("Location: hpauth.php");
                }
            } 
            catch (Exception $e){
                echo $e->getMessage();
            }
        }
        }
    else{
            echo '<form action="login.php" method="post" name="login">
                User:<input class="post_textarea" name="username" type="text" size="10" maxlength="15" />&nbsp;
                Password:<input class="post_textarea" name="password" type="password" size="10" maxlength="15" />&nbsp;
                <input name="submit" class="coloredinput" type="submit" value="log in" onMouseOver="mouse_over_button(this.form.name,this.name)" onMouseOut="mouse_out_button(this.form.name,this.name)" />
                </form>';
        } */     
?>