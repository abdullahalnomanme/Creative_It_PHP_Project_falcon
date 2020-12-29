<?php
session_start();
require_once("includes/db.php");
 echo $experience_icon = $_POST['experience_icon'];
echo "<br/>";
echo $experience_count = $_POST['experience_count'];
echo "<br/>";
echo $experience_text = $_POST['experience_text'];

$insert_query = "INSERT INTO experiences (experience_icon,experience_count,experience_text) VALUES ('$experience_icon', '$experience_count', '$experience_text')";
    mysqli_query($db_connect, $insert_query);

header("location: experiences.php");

die();
$_SESSION['login_user_name'] = $name;
$_SESSION['users_bio'] = $users_bio;
echo "Update successfully";
echo"<br/>";


?>