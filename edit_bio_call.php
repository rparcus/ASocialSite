<?php
require_once("helper.php");

$user = $_POST['userID'];
$new_bio = $_POST['new_bio'];

setUserBio($user, $new_bio);
header("location: user_profile.php");
?>