<html>
<head>
	<title>A-Social - Post</title>
</head>
<body>
  
    <?php session_start(); ?>
    
    <div>
    <?php include("menu_top.php"); ?>
    </div>

    <div id="body_container">
    
    <form name="register" method="post" action="register_call.php">
        Username: <input type="text" name="username" /><br/>
        Password: <input type="password" name="password" /><br/>
        Conferma password: <input type="password" name="pwconfirm" /><br/>
        <input type="submit" name="send_registration" value="invia" />
    </form> 
    
    </div>
</body>
</html>
