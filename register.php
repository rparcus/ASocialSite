<html>
<head>
	<title>A-Social - Post</title>
	<link href="AsocialStyle.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="register.css" rel="stylesheet" type="text/css" media="screen" />
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
  
    <?php session_start(); ?>
    
    <div>
    <?php include("menu_top.php"); ?>
    </div>
	
	<div id="contact">
	<h1>
		Iscriviti ad Asocial :D
	</h1>
	<form name="register" action="register_call.php" method="post">
		<fieldset>
			<label for="name">Nick:</label>
			<input class="input" type="text" name="nick" placeholder="Inserire nome utente" />
			
			<label for="email">Password:</label>
			<input class="input" type="password" name="pw" placeholder="Inserire una password" />		
			
			<label for="email">Conferma:</label>
			<input class="input" type="password" name="pwconfirm" placeholder="Inserire una password" />
			
			<input class="input" type="submit" name="send_registration" value="Registrati" />		
		</fieldset>
	</form>
</div>
<div id="down" style="color:white; text-align:right; font-size:10px;"><br/>A-Soc!al ©2012 FARP corp - all rights reserved.</div>
</body>
</html>
