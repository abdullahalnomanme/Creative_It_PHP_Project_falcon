<?php
// require_once("includes/db.php");
require_once("includes/functions.php");
// echo $_GET['delete_type'];


if($_GET['delete_type']=="single"){
    $id = $_GET['contact_id'];
    $delete_query = "DELETE FROM contact_messages WHERE id=$id";
}
else{
    $delete_query = "DELETE FROM contact_messages";
}
mysqli_query(db(),$delete_query);
header("location:inbox.php");

?>