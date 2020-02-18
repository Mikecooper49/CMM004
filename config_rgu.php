
<!--
             
Created for module CMM004
Date: Feb 2020
This app uses the sql database
config_rgu.php (opens db1808760_databaseat RGU)
-->

<?php

// connection to RGU database and 1808760 db

define('DB_SERVER', 'localhost');
define('DB_USERNAME', '1808760');
define('DB_PASSWORD', '1808760');
define('DB_DATABASE', 'db1808760_database');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>