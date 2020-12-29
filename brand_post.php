<?php
session_start();

if($_FILES['brand-logo']['name']){
    print_r($_FILES['brand-logo']['name']);
}

else{
    $_SESSION['file_missing_error'] = "Please select a image file";
    header("location:brand.php");
}


?>