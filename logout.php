<?php

session_start(); // Session start

unset($_SESSION['login_success']);
unset($_SESSION['login_user_email']);

header("location: index.php");


?>