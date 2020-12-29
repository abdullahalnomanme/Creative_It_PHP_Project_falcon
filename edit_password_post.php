<?php
session_start();
require_once("includes/db.php");

$old_password =  md5($_POST['old_password']);
echo"<br/>";
$new_password = $_POST['new_password'];
$email = $_POST['email'];
echo"<br/>";

$upper = preg_match('@[A-Z]@', $new_password);
$lower = preg_match('@[a-z]@', $new_password);
$number = preg_match('@[0-9]@', $new_password);

if($upper && $lower && $number && strlen($new_password) >= 8){
    // die();

// $old_password_check_query = "UPDATE users SET password='$old_password' WHERE email='$email'";

$old_password_check_query = "SELECT COUNT(*) AS is_exists FROM users WHERE email='$email' AND password='$old_password'";

$old_password_info_from_db = mysqli_query($db_connect, $old_password_check_query);
$old_password_info_from_db_after_assoc = mysqli_fetch_assoc($old_password_info_from_db);

// print_r($users_info_from_db_after_assoc['is_exists']);
if($old_password_info_from_db_after_assoc['is_exists'] == 0){
    $_SESSION['old_password_error'] = "Your Old password is wrong !";
    header("location: edit_profile.php");
}
else{
    $new_encrypt_password = md5($new_password);
    $update_query = "UPDATE users SET password='$new_encrypt_password' WHERE email='$email'";
    mysqli_query($db_connect, $update_query);
    $_SESSION['change_password_status'] = "Your password has been changed successfully!";
    header("location: edit_profile_post.php");
}
    // header("location: edit_profile.php");
}
else{
    $_SESSION['new_password_error'] = "New password must be a capital letter, a Small letter a Number should be more than or equal 8 Charecters";
    header('location: edit_profile.php');
}


?>