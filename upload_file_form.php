<html>
<head>
	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<link href="register.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
    <?php session_start(); ?>
    
    <div>
    <?php include("menu_top.php"); ?>
    </div>
	<div id="contact">
		<h1>
			Carica un avatar
		</h1>
		<div class ="preview">
		<label>Preview:</label>
		<img id="thumb" width="100px" height="100px" src="avatar/big_
		<?php
			 if (isset($_SESSION["username"]) && checkAvatar($_SESSION["username"])){
			 	echo "".$_SESSION["username"].".jpeg";
			 }else{
			 	echo "0.jpeg";
			 }?>">
		</div>
		    <form action="upload_file.php" method="post" enctype="multipart/form-data">
		        <label for="file">Nome File:</label>
		        <input type="file" name="file" id="file" onchange="readURL(this);"/> 
		        <br />
		        <div style="position=absolute;">
		        	<input class="input" type="submit" name="submit" value="Submit" style="position:relative; left:-120px; top: 25px;" />
		        </div>
		        <br />
		        <br />
	        </form>
	</div>
    <div id="down" style="color:white; text-align:right; font-size:10px;"><br/>A-Soc!al ©2012 FARP corp - all rights reserved.</div>
	<script type="text/javascript">
	        function readURL(input) {
	            if (input.files && input.files[0]) {
	                var reader = new FileReader();
	
	                reader.onload = function (e) {
	                    $('#thumb')
	                        .attr('src', e.target.result)
	                        .width(100)
	                        .height(100);
	                };
	
	                reader.readAsDataURL(input.files[0]);
	            }
	        }
	</script>
    
</body>
</html>