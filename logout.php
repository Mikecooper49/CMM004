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

    echo '<script>
alert( "You have logged out");
window.location.href="index_nav.php";
</script>';

    //  header('Location:index_nav.php?status=logged_out');
}
