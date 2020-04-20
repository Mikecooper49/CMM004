<?php
session_start();
include_once("resources/includes/config_lynne.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //username, password POSTED from login form on login.php

    $email = $_POST['email'];
    $password = $_POST['password'];

// check whether cookies are set from login page and set cookie if not

    if (!empty($_POST["rememberme"])) {
        setcookie('email', $_POST['email'], time() + 86400); // set time limit to 1 day (we can change this)
        setcookie('password', $_POST['password'], time() + 86400); // set time limit to 1 day (we cna change this)

    } else {
        setcookie('email', "");
        setcookie('password', "");
    }

    //  prepared statements to secure db

    $stmt = $db->prepare("SELECT * FROM users WHERE email=? AND password_text=?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $type_query = "SELECT user_type FROM users WHERE email = '$email'";
        $type_result = $db->query($type_query);
        while ($row = $type_result->fetch_array()) {
            $usertype = $row['user_type'];
        }

        $user_query = "SELECT username FROM users WHERE email = '$email'";
        $user_result = $db->query($user_query);
        while ($row = $user_result->fetch_array()) {
            $username = $row['username'];
        }

        // set username, password and user_type into session file
        $_SESSION['usertype'] = $usertype;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['username'] = $username;
        header('Location:index_nav.php', true, 301);
        //exit();
    } else {
        // set login fail message

        $_SESSION['message'] = "Sorry your login has failed please try again";
        header('Location:login.php', true, 301);
        exit();


    }
}
