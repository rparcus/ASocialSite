<html>
<body>
    <?php session_start(); ?>
    
    <div>
    <?php include("menu_top.php"); ?>
    </div>

    <div id="body_container">
        <form action="upload_file.php" method="post"
        enctype="multipart/form-data">
        <label for="file">Filename:</label>
        <input type="file" name="file" id="file" /> 
        <br />
        <input type="submit" name="submit" value="Submit" />
        </form>
    </div>
    
</body>
</html>