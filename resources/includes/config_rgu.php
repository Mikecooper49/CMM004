
<!--
             
Created for module CMM004
Date: Feb 2020
This app uses the sql database
config_rgu.php (opens db1808760_databaseat RGU)
-->

<?php

// connection to RGU database and 1808760 db

define('DB_SERVER', 'csdm-webdev');
define('DB_USERNAME', '0903777');
define('DB_PASSWORD', '0903777');
define('DB_DATABASE', 'db0903777_cmm004');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>