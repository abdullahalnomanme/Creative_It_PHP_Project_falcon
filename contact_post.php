<?php
session_start(); //session start
require_once("includes/db.php");


$_SESSION['guest_name'] = $_POST['guest_name']; 
$_SESSION['guest_email'] = $_POST['guest_email']; 
$_SESSION['guest_message'] = $_POST['guest_message']; 


$has_error = false;

if(!$_POST['guest_name']){
    $_SESSION['guest_name_error'] = "Please Type your Name!";
    $has_error = true;
    
}
if(!$_POST['guest_email']){
    $_SESSION['guest_email_error'] = "Please Type your Name!";
    $has_error = true;
    
}
if(!$_POST['guest_message']){
    $_SESSION['guest_message_error'] = "Please Type your message";
    $has_error = true;
    
}

if($has_error){
    header("location: index.php#contact");
}

else{
$guest_name = $_POST['guest_name'];
$guest_email = $_POST['guest_email'];
$guest_message = htmlentities($_POST['guest_message']);
date_default_timezone_set('Asia/dhaka');
$message_date_time = date('Y-m-d H:i:s');


$insert_query = "INSERT INTO contact_messages (guest_name,guest_email,guest_message,message_date_time) VALUES ('$guest_name', '$guest_email', '$guest_message', '$message_date_time')";
    mysqli_query($db_connect, $insert_query);

$_SESSION['contact_success'] = "Your message has been sent successfuly";


    header("location: index.php#contact");
}

// header("location: index.php#contact");












// echo date('Y-m-d H:i:s');
// echo "<br/>";
// echo $guest_name;
// echo "<br/>";
// echo $guest_email;
// echo "<br/>";
// echo $guest_message;
// echo "<br/>";
// echo $message_date_time;
// echo "<br/>";
// echo "<br/>";

// print_r($_POST);
// ?>