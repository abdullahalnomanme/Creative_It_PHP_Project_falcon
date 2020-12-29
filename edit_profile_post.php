<?php
session_start();
require_once("includes/db.php");
 echo $name = $_POST['name'];
echo "<br/>";
echo $email = $_POST['email'];
echo "<br/>";
echo $users_bio = $_POST['users_bio'];

$update_query = "UPDATE users SET name='$name', users_bio='$users_bio' WHERE email='$email'";
mysqli_query($db_connect, $update_query);
$_SESSION['Change_name_status'] = "Your name Set to [ <span class='text-success text-'>".$name."</span> ] from [ <span class='text-danger text-'>".$_SESSION['login_user_name']."</span> ] !";

$_SESSION['login_user_name'] = $name;
$_SESSION['users_bio'] = $users_bio;
echo "Update successfully";
echo"<br/>";
header("location: edit_profile.php");

?>