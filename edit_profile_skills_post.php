<?php
session_start();

require_once("includes/functions.php");
echo "<br/>";
// echo $users_id = $_POST['id'];
echo $users_name = $_POST['name'];
echo "<br/>";
echo $email = $_POST['email'];
echo "<br/>";
echo $skills_title = $_POST['skills_title'];
echo "<br/>";
echo $skills_years = $_POST['skills_years'];
echo "<br/>";
echo $skills_progress_text = $_POST['skills_progress_text'];
echo "<br/>";
echo $skills_progress_count = $_POST['skills_progress_count'];


$insert_bio_query = "INSERT INTO skills (skills_title, skills_years, skills_progress_text, skills_progress_count) VALUES ('$skills_title', $skills_years, '$skills_progress_text', $skills_progress_count)";
mysqli_query(db(), $insert_bio_query);

$_SESSION['skills_title'] = $skills_title;
header("location: edit_profile.php");

die();



$_SESSION['Change_name_status'] = "Your name Set to [ <span class='text-success text-'>".$name."</span> ] from [ <span class='text-danger text-'>".$_SESSION['login_user_name']."</span> ] !";

$_SESSION['users_skills_title'] = $users_skills_title;
echo "Update successfully";
echo"<br/>";
header("location: edit_profile.php");
?>


<?php
$update_query = "UPDATE users SET users_skills_title='$users_skills_title', user_skills_years='$user_skills_years', users_skills_count_text='$users_skills_count_text', user_skills_count_number='$user_skills_count_number', WHERE email='$email'";

mysqli_query(db(), $update_query);
?>
