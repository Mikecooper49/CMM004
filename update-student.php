<?php
session_start();
include("resources/includes/config_home.php");

$email = ($_POST['email']);
$Interests = $_POST['Interests'];
$Gender = $_POST['Gender'];
$Age = $_POST['Age'];
$Uni = $_POST['Uni'];
$Course = $_POST['Course'];

$stmt = $db->prepare("UPDATE users SET Interests=?, Gender=?, Age=?, Uni=?, Course=? WHERE email = ?");
$stmt->bind_param("ssisss", $Interests, $Gender, $Age, $Uni, $Course, $email);
$stmt->execute();

if (mysqli_affected_rows($db)) {
    echo '<script>
alert( "You have successfully updated your profile");
window.location.href="index.php";
</script>';

} // unsuccessful profile update (back to edit-student)

else {
    echo '<script>
alert( "Sorry your profile was not updated, please try again");
window.location.href="edit-student.php";
</script>';

}