<?php
session_start();
include_once("resources/includes/config_home.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //username, password POSTED from login form on login.php

    $email = $_POST['email'];
    $password = $_POST['password'];

// check whether cookies are set from login page and set cookie if not

    if (!empty($_POST["rememberme"])) {
        setcookie('email', $_POST['email'], time() + 86400); // set time limit to 1 day (we can change this)
        //   setcookie('password', $_POST['password'], time() + 86400); // set time limit to 1 day (we cna change this)

    } else {
        setcookie('email', "");
        //  setcookie('password', "");
    }

    //  prepared statements to secure db

    $stmt = $db->prepare("SELECT password_text,username, user_type FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($pw, $username_hash, $usertype_hash);

    if ($stmt->num_rows == 1) {
        $stmt->fetch();
        if (password_verify($password, $pw)) {
            $_SESSION['usertype'] = $usertype_hash;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username_hash;
            header('Location:index_nav.php', true, 301);
        } else {
            $_SESSION['message'] = "Sorry your login has failed please try again";
            session_destroy();
            header('Location:login.php', true, 301);
            exit();
        }
    }
}