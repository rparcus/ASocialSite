<?php
/*
 * file per il miniprofilo della colonna di sinistra
 */
    require_once("helper.php");
    ini_set("soap.wsdl_cache_enabled", "0");

    if(isset($_SESSION["username"])){
        //echo "sessione #".$_SESSION["username"]."</br>"; 
        echo "<a href='user_profile.php'>".getUsername($_SESSION["username"])."<a/></br></br>";
		//echo checkAvatar($_SESSION["username"]);
        global $avatarFolder;
    ?>
        <div id="profile_s">    
        <img src="<?php
        	if (isset($_SESSION["username"]) and checkAvatar($_SESSION["username"])){
        	echo $avatarFolder."big_".$_SESSION["username"].".jpeg";
       		}
			else{
				echo $avatarFolder."big_0.jpeg";
			}
        	?>" width="100%" height="250px" />
        </div>
              <div>
          <ul>
          		<?php 
          		if(!isset($_SESSION["username"])){
					echo '<li><a href="register.php"><button class="register_button_right" type="button" value="Registrati" >Registrati</button></a></li>';
				}
				else{
				echo'<li><a href="upload_file_form.php"><button class="register_button_right" type="button" value="Registrati" >Upload Avatar</button></a></li>';
				}?>
		  </ul>
      </div>
    <?php
        }
        else{
            //echo "sessione non inizializzata";
			?>
			<div id="profile_s">    
        	<img src="<?php echo $avatarFolder."big_0.jpeg" ?>" width="100%" height="250px" />
        	</div>
        	<?php
        }
    ?>
<!--<div id="profile_s">    
<img src="<?php// echo $avatarFolder."big_".$_SESSION["username"].".jpeg" ?>" width="100%" height="300" />
</div>--> 
