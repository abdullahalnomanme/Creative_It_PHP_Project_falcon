<?php
// require_once("includes/db.php");
require_once("includes/functions.php");
$_GET['services_status'];
$service_id = $_GET['service_id'];

if($_GET['services_status']==1){
    $service_status_update = "UPDATE services SET services_status=2 WHERE id=$service_id";
}
else if($_GET['services_status']==2){
    $service_status_update = "UPDATE services SET services_status=1 WHERE id=$service_id";
}
mysqli_query(db(),$service_status_update);

header("location: service.php");


?>