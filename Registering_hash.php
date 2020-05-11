<?php
session_start();
include("resources/includes/config_home.php");

// Checking that all fields have been filled
if (empty($_POST['email']) || $_POST['password'] == "" || $_POST['confirm'] == "" || $_POST['username'] == "") {
    header('location: Registering_hash.php?emptyerr=1');
    exit("");
} else {
    //Taking the Post values and turning them into variables
    $email = $_POST['email'];
    $password = $_POST['password'];
    // hash password before bind statement
    $hash_pw = password_hash($password, PASSWORD_DEFAULT);
    $confirm = $_POST['confirm'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $nationality = $_POST['nationality'];
    $username = $_POST['username'];
    $userType = "REG_USER";
}

$emailCheck = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($db, $emailCheck);

$usernameCheck = "SELECT * FROM users WHERE username = '$username'";
$userResult = mysqli_query($db, $usernameCheck);

if (mysqli_num_rows($result) == 1) {
    header('location: register.php?emailerr=1');
} elseif (mysqli_num_rows($userResult) == 1) {
    header('location: register.php?usererr=1');
} else {
    if ($password == $confirm) {

        //Inserting the new user details into the database

        $stmt = $db->prepare("INSERT INTO users(email, password_text, username, firstname, lastname, nationality, user_type) VALUES(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $email, $hash_pw, $username, $firstname, $lastname, $nationality, $userType);

        if ($stmt->execute()) {

            header('location: login.php?usercreated=1');
        } else {
            echo "Error: " . $stmt . "<br>" . mysqli_error($db);
        }


    } else {
        //If the passwords do not match, echo out this message
        header('location: register.php?messerr=1');

    }
}
