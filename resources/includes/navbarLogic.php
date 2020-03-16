<?php
session_start();
if (isset($_SESSION['usertype'])){
    switch ($_SESSION['usertype']) {
        case 'ADMIN':
            include('resources/navbars/admin_navbar.html');
            break;
        case 'REG_USER':
            include('resources/navbars/reg_user_navbar.html');
            break;
    }
}
if (!isset($_SESSION['usertype'])){
    include('resources/navbars/user_navbar.html');
}

