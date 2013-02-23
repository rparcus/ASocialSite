
<html>
<head>
	<link href="register.css" rel="stylesheet" type="text/css" media="screen" />
</head>	
	
<body>
<?php
	session_start();
	include("menu_top.php"); 
	require_once("helper.php");
	global $avatarFolder;
	if(isset($_GET['username']) && $_GET['username'] != $_SESSION['username']){
	    $user = $_GET['username'];
	    $self = false;
	}else{
	    $user = $_SESSION['username'];
	    $self = true;
	}
	if(isset($_SESSION['admin'])){
	    $admin = $_SESSION['admin'];
	}
	
	$name = getUsername($user);
	$bio = getUserBio($user);
	if(checkAvatar($user)){
		$avatar = $avatarFolder."big_".$user.".jpeg";
	}
	else{
		$avatar = $avatarFolder."big_0.jpeg";
	}
	
?>	
<img class="profileFoto" src="<?php echo $avatar;?>" title="Profile picture" alt="Profile picture" />
<div class="profile">
	<h1>
		<?php echo $name."'s profile"."<br/>";?>
	</h1>
	<?php echo "<div id='bio'>".$bio."</div>";
	
	if($self){
	    ?>
	    <br/><br/><br/><br/>
	    <form name="edit_bio_form" method="post" action="edit_bio_call.php">
        	<textarea id="send_updated_bio" name="new_bio" placeholder="Scrivi qui per modificare la tua bio. Ora i gli altri vedono: '<?php echo $bio; ?>'"></textarea>
        	<br /><br />
        	<input type="hidden" name="userID" value="<?php echo "".$_SESSION['username']; ?>"/>
        	<input class="input" type="submit" value="Edit" />
    	</form><?php
	}?>
</div>

<div id="down" style="color:white; text-align:right; font-size:10px;"><br/>A-Soc!al ©2012 FARP corp - all rights reserved.</div>
</body>
</html>


