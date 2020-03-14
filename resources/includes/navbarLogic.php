<?php

$userType = $_SESSION['user_type'];

if ($userType == 'Admin') {

    include("resources/navbars/admin_navbar.html");
}
if  ($userType == 'user') {

    include("resources/navbars/user_navbar.html");
}
if ($userType == 'REG_USER') {

include("resources/navbars/reg_user_navbar.html");
}