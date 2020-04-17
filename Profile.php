<?php
session_start();
include("resources/includes/config_home.php");

//Taking the Post values from Profile_form.php and turning them into variables

$Interests = $_POST['Interests'];
$Gender = $_POST['Gender'];
$Age = $_POST['Age'];
$Uni = $_POST['Uni'];
$Course = $_POST['Course'];
// username from session file
$email = ($_SESSION['email']);

// select row for username (logged in)

$usernameCheck = "SELECT * FROM users WHERE email = '$email'";
$userResult = mysqli_query($db, $usernameCheck);

if (mysqli_num_rows($userResult) == 1) {

    // strip out escape parameters from Interests & Course (later)

    //Inserting the user profile details into the database
    $stmt = $db->prepare("INSERT INTO users WHERE email = '$email'(Interests, Gender, Age, Uni, Course) VALUES(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $Interests, $Gender, $Age, $Uni, $Course);
} else {
    // print so sort of error message and return to profile_form
    header('location: Profile_form.php?usererr=1');
}








