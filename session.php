<?php

// start session

session_start();

// connect to database
// using home database for initial testing

include_once("resources/includes/config_rgu.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //username, password POSTED from login form on login.php

    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];
    $user_type = "";

// check whether cookies are set from login page and set cookie if not

    if (!empty($_POST["rememberme"])) {
        setcookie('username', $_POST['username'], time() + 86400); // set time limit to 1 day (we can change this)
        setcookie('password', $_POST['password'], time() + 86400); // set time limit to 1 day (we cna change this)

    } else {
        setcookie('username', "");
        setcookie('password', "");
    }

    //  prepared statements to secure db

    $stmt = $db->prepare("SELECT * FROM users WHERE email=? AND password_text=?");
    $stmt->bind_param("ss", $myusername, $mypassword);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // set username, password and user_type into session file

        $_SESSION['username'] = $myusername;
        $_SESSION['user_type'] = $user_type;
        $_SESSION['password'] = $mypassword;
        header('Location:index.html', true, 301);
        exit();
    } else {
        // set login fail message

        $_SESSION['message'] = "Sorry your login has failed please try again";
        header('Location:login.php', true, 301);
        exit();


    }
}
