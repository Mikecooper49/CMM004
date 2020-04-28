<?php
session_start();
if (isset($_SESSION['usertype'])) {
    switch ($_SESSION['usertype']) {
        case 'ADMIN':
            include('resources/navbars/admin_navbar.php');
            break;
        case 'REG_USER':
            include('resources/navbars/reg_user_navbar.php');
            break;

    }
}
if (!isset($_SESSION['usertype'])) {
    include('resources/navbars/user_navbar.html');
}


