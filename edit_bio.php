<?php
session_start();
require_once("helper.php");

if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];
    $bio = getUserBio($user);
    ?>
    <form id="send_updated_bio" name="edit_bio_form" method="post" action="edit_bio_call.php">
        <textarea name="new_bio"><?php echo $bio; ?></textarea>
        <input type="hidden" name="userID" value="<?php echo "".$_SESSION['username']; ?>"/>
        <input type="submit" value="edit" />
    </form>

<?php
}else{
    header("location: index.php");
}
?>
