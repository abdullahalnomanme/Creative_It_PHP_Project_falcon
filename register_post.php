<?php
session_start(); //session start
require_once("includes/db.php");


 
// print_r($_POST);

$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['email'];

$has_error = false;

if(!$_POST['name']){
    $_SESSION['name_error'] = "name is required!";
    $has_error = true;
}
if(!$_POST['email']){
    $_SESSION['email_error1'] = "Email is required!";
    $has_error = true;
}
else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $_SESSION['email_error2'] = "This email address is not valid";
    $has_error = true;
}
if(!$_POST['password']){
    $_SESSION['password_error'] = "Password is required";
    $has_error = true;
}
if(!$_POST['confirm_password']){
    $_SESSION['confirm_password_error1'] = "confirm password is required";
    $has_error = true;
}
else if($_POST['confirm_password'] != $_POST['password']){
    $_SESSION['confirm_password_error2'] = "Password and confirm password does not matched";
    $has_error = true;
}
// header("location: register.php");

if($has_error){
    header("location: register.php"); //redirect to page
}
else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $check_query= "SELECT COUNT(*) AS COUNT FROM users WHERE email='$email'";
    $check_from_db =  mysqli_query($db_connect, $check_query);
    // print_r($check_from_db);
   $check_assoc = mysqli_fetch_assoc($check_from_db);
//    print_r($check_assoc['COUNT']);
    
   if($check_assoc['COUNT'] == 0){
    $insert_query = "INSERT INTO users (name,email,password) VALUES (' $name', '$email', '$password')";
    mysqli_query($db_connect, $insert_query);
    $_SESSION['account_create_success'] = "Your Account created successfully, Now you can Sign In!";
    header("location: login.php");
   }

    else{
        $_SESSION["email_exist_error"] = "This Email Address "."[ ".$email." ]"." is already Registered!";
        header("location: register.php");
    }
}





// SELECT COUNT(*) AS COUNT FROM users WHERE email='ka@ami.com';



// $name = $_POST["name"];
// $email = $_POST["email"];
// $password = $_POST["password"];
// $confirm_password = $_POST["confirm_password"];


// echo $name;
// echo "<br/>";
// echo $email;
// echo "<br/>";
// echo $password;
// echo "<br/>";
// echo $confirm_password;