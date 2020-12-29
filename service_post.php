<?php
session_start();
// require_once("includes/functions.php");
require_once("includes/db.php");

$service_title = $_POST['service_title'];
$service_desc = $_POST['service_desc'];
$service_icon = $_POST['service_icon'];


$insert_query = "INSERT INTO services (service_title,service_desc,service_icon) VALUES ('$service_title', '$service_desc', '$service_icon')";
    mysqli_query($db_connect, $insert_query);

$_SESSION['service_insert_status'] = "Service added successfully";
header("location: service.php");

    
?>