<!--
             
Created for module CMM004
Date: Feb 2020
This app uses the sql database
config_home.php (opens database on home setup)
-->

<?php

// connection to home database credentials

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'IntStu');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($db->connect_error){
    die("Connection to db failed: " . $db->connect_error);
}

?>
