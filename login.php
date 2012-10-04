<?php
    require_once("helper.php");
    if(!isset($_SESSION["username"])){       
        if((isset($_POST['username']) && isset($_POST['password'])) &&
            $_POST['username'] != "" && $_POST['password'] != ""){
       try{ 
            $res = checkPassword($_POST['username'], $_POST['password']);
            //se user e pass sono giusti...
            if($res>0){
                $_SESSION['username'] = stripslashes(htmlspecialchars($res));
                echo "user_id: ".$res.' <a href="logout.php">logout</a>';
            }
            else{
                //Invalid username or password.
                printLoginForm(-1);

            }
         
        } catch (Exception $e){
        echo $e->getMessage();
        }
        }else{
            //normal login
            printLoginForm(0);
        }
    }else{
        echo '<a href="logout.php">logout</a>';
    }
?>