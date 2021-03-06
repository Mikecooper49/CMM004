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

// check if any profile fields were filled out

//Update the user profile details into the database

$stmt = $db->prepare("UPDATE users SET Interests=?, Gender=?, Age=?, Uni=?, Course=? WHERE email = ?");
$stmt->bind_param("ssisss", $Interests, $Gender, $Age, $Uni, $Course, $email);
$stmt->execute();

// successful profile message (to profile view)

if (mysqli_affected_rows($db)) {
    echo '<script>
alert( "You have successfully added a profile");
window.location.href="Profile_view.php";
</script>';
} // unsuccessful profile (back to profile form entry)

else {
    echo '<script>
alert( "Sorry no profile added, please try again");
window.location.href="Profile_form.php";
</script>';
}










