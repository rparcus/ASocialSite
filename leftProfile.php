<?php
/*
 * file per il miniprofilo della colonna di sinistra
 */
    require_once("helper.php");
    ini_set("soap.wsdl_cache_enabled", "0");

    if(isset($_SESSION["username"])){
        //echo "sessione #".$_SESSION["username"]."</br>"; 
        //echo getUsername($_SESSION["username"])."</br></br>";
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
