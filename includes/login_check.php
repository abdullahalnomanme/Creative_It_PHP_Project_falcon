<?php

if(!isset($_SESSION['login_success'])){
    $_SESSION['deny_error'] = "You have to login first to see this page";
    header("location: login.php");
}


?>