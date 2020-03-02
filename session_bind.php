<?php

// connect to database

include_once("config_home.php");


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

        //  prepared statements to secure db

        $stmt = $db->prepare("SELECT * FROM Users WHERE username=? AND password=?");
        $stmt->bind_param("ss", $myusername, $mypassword);
        $stmt->execute();
        $result=$stmt->get_result();
        if($result->num_rows==1)
        {
            $row=$result->fetch_assoc();
            $_SESSION['username'] = $myusername;
            $_SESSION['user_type'] = $user_type;
            $_SESSION['password'] = $mypassword;
            header('Location:home.html', true, 301);
            exit();
        } else {
            $error = 'Your login failed please try again';
            header('Location:index.php', true, 301);
            exit();
        }
    }
