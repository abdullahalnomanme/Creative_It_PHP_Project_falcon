<?php
require_once("includes/functions.php");
require_once("includes/header.php");
// require_once("includes/navber.php");
// require_once("includes/db.php");
require_once("includes/login_check.php");

$id = $_GET['contact_id'];
$update_query = "UPDATE contact_messages SET message_status=1 WHERE id=$id";
    mysqli_query(db(),$update_query);
    header('location:inbox.php');
?>
 

<?php
require_once("includes/footer.php");
?>