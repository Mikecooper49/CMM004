<?php
/*
            Isa

Created  for module CMM004
Date: Feb 2020

This app uses the sql database

logout.php -  simple logout invoked after user presses 'Logout' button in Nav
and returns to homepage

*/
session_start();

if (session_destroy()) {
    header("Location:../../index.html");
    echo 'you have logged out - if in error please log back in';
}
