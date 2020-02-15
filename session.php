<!--
             Isa
Created for module CMM04
Date: Feb 2020
This app uses the sql database
session.php (validates username and password, sets session variables and user cookies)

Need to publish cookie policy on login page

-->

<?php

session_start();

// using home database for initial testing

include_once('config_home.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // username, password sent from login form on index.php
    echo "Hello";

if (!empty($_POST['username']))
{
        echo "NULL";
        $myusername = $_POST['username'];
        $mypassword = $_POST['password'];
    }

// check whether cookies are set from login page

if(!empty($_POST["rememberme"])) {
    setcookie ('username',$_POST['username'],time()+ 86400); // set time limit to 1 day (we can change this)
    setcookie ('password',$_POST['password'],time()+ 86400); // set time limit to 1 day (we cna change this)

} else {
    setcookie('username', "");
    setcookie('password', "");

}
    // get data from Users table in sql database

    $sql = "SELECT *  FROM Users WHERE name = '$myusername' AND password = '$mypassword' ";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];
    $user_type = $row['user_type'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row and set user type (Admin, User or Reg_User)

    if ($count == 1) {
        $_SESSION['username'] = $myusername;
        $_SESSION['user_type'] = $user_type;
        $_SESSION['password'] = $mypassword;
        header("location:../homepage.php");
    } else {
        $error = "Your Login Name or Password is invalid please try again";
    }
}

?>
