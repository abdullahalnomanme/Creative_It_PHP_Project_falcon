<?php

session_start();

$_SESSION['random_password'] = substr(strtoupper(uniqid()),5,8);

// echo $_SESSION['random_password'];

header("location: register.php")


?>