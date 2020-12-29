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

$db_connect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE); //database connect

?>