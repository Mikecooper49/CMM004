<?php
if (isset($_SESSION['user_type'])){
    switch ($_SESSION['user_type']) {
        case "ADMIN":
            include('resources/navbars/admin_navbar.html');
            break;
        case "REG_USER":
            include('resources/navbars/reg_user_navbar.html');
            break;
    }
}
if (!isset($_SESSION['user_type'])){
    include('resources/navbars/user_navbar.html');
}

