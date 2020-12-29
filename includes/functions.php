<?php
// for live server 

// define("HOSTNAME", "localhost");
// define("USERNAME", "nomansof_falcon");
// define("PASSWORD", "@falcon-@");
// define("DATABASE", "nomansof_falcon");


// for localhost

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "falcon");

function db(){
    

return $db_connect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE); //database connect

}

function falcon_all($table_name){
    $select_message_query = "SELECT * FROM $table_name ORDER BY id DESC";
 return $data_from_db = mysqli_query(db(), $select_message_query);

//  print_r($data_from_db);

}
function falcon_count($table_name){

    $select_message_query = "SELECT COUNT(*) AS total_count FROM $table_name WHERE delete_status=1";
 return $data_from_db = mysqli_query(db(), $select_message_query);

//  print_r($data_from_db);

}
function falcon_inbox_count(){
    $count_query = "SELECT COUNT(*) AS total_count FROM contact_messages WHERE message_status=1 AND delete_status=1";
$data_from_db = mysqli_query(db(), $count_query);
$data_after_assoc = mysqli_fetch_assoc($data_from_db);
return $data_after_assoc['total_count'];
}
