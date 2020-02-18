<?php

// connect to database

include_once("config_rgu.php");


if (IsSet($_SESSION['username']))			//if username exists in session, user has logged in
{
   header('Location:homepage.php', true, 301);		//forward to use home page
   exit();
}

session_start();

// using home database for initial testing



if ($_SERVER["REQUEST_METHOD"] == "POST")

    //username, password sent from login form on index.php

    //$myusername = mysqli_real_escape_string($db, $_POST['username']);
// $mypassword = mysqli_real_escape_string($db, $_POST['password']);


    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];

// check whether cookies are set from login page

    if (!empty($_POST["rememberme"])) {
        setcookie('username', $_POST['username'], time() + 86400); // set time limit to 1 day (we can change this)
        setcookie('password', $_POST['password'], time() + 86400); // set time limit to 1 day (we cna change this)

    } else {
        setcookie('username', "");
        setcookie('password', "");

    }
    // get data from Users table in sql database

    $sql = "SELECT *  FROM Users WHERE username = '$myusername'AND password = '$mypassword'";
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
        header('Location:homepage.php', true, 301);
        exit();
    } else {
        $error = 'Your login failed please try again';
        header('Location:index.php', true, 301);
        exit();
    }