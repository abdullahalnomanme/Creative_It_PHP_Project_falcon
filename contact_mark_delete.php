<?php
// require_once("includes/db.php");
require_once("includes/functions.php");


if(isset($_POST['message_check']))
{
    foreach($_POST['message_check'] as $delete_contact_id){
        $delete_query = "DELETE FROM contact_messages WHERE id=$delete_contact_id";
        mysqli_query(db(),$delete_query);
    }
}
header("location:inbox.php");
?>

