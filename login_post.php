<?php
session_start(); //session start
require_once("includes/db.php");

// $name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$user_check_query = "SELECT COUNT(*) AS is_exists FROM users WHERE email='$email' AND password='$password'";
$users_info_from_db = mysqli_query($db_connect, $user_check_query);
$users_info_from_db_after_assoc = mysqli_fetch_assoc($users_info_from_db);

// print_r($users_info_from_db_after_assoc['is_exists']);
if($users_info_from_db_after_assoc['is_exists'] == 0){
    $_SESSION['login_error'] = "Your email Or password is wrong !";
    header("location: login.php");
}
else{
    $_SESSION['login_success'] = true;
    $_SESSION['login_user_email'] = $email;
    $username_query = "SELECT name FROM users WHERE email='$email'";
    $username_from_db = mysqli_query($db_connect, $username_query);
    $username_fetch_assoc_from_db = mysqli_fetch_assoc($username_from_db);
    // print_r($username_fetch_assoc_from_db);
    $_SESSION['login_user_name'] = $username_fetch_assoc_from_db['name'];
    header("location: dashboard.php");
}

// SELECT COUNT(*) AS is_exists FROM users WHERE email='abd01nom@gmail.com' AND password='p';

?>