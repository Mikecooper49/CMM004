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

$emailCheck = "SELECT * FROM users WHERE email = '$email'";
$userResult = mysqli_query($db, $emailCheck);

if (mysqli_num_rows($userResult) == 1) {

    // strip out escape parameters from Interests & Course (later)

    //Inserting the user profile details into the database
    $stmt = $db->prepare("INSERT INTO users WHERE email = '$email'(Interests, Gender, Age, Uni, Course) VALUES(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $Interests, $Gender, $Age, $Uni, $Course);
    // successful profile message
    echo '<script>
alert( "You have successfully added a profile");
window.location.href="index_nav.php";
</script>';
} else {
    echo '<script>
alert( "Sorry no profile added, please try again");
window.location.href="Profile_form.php";
</script>';
}








