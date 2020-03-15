<?php
session_start();
print_r($_SESSION);
include_once("resources/includes/config_home.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RGU International Student Advisor</title>

    <!--Description of the Web App-->
    <meta name="description" content="RGU International Student Advisor Web App">

    <!--keywords for search engines-->
    <meta name="keywords" content="RGU, Robert Gordon University, RGU International Student, International Student Aberdeen, International Student Advisor">

    <!--Page author-->
    <meta name="author" content="Jacob">

    <!--Setting the viewport to make the web app look good on all devices:-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- link to team style sheet-->
    <link rel="stylesheet" type="text/css" href="resources/styles/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
     <!--   <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div> -->
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">

                <!-- set navbar dependent on user_type-->

                <?php

                include('resources/includes/navbarLogic.php');

/*if (isset($_SESSION['user_type'])){
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
                } */
                 ?>

                <div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <figure>
                <img src="resources/images/login2.jpg" alt="PhotoOfRGUInt'lStudents" style="width:100%">
            </figure>
            <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <hr>
            <h3>Test</h3>
            <p>Lorem ipsum...</p>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <p>Latest News</p>
            </div>
            <div class="well">
                <p>Upcoming Events</p>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>
</body>
</html>
