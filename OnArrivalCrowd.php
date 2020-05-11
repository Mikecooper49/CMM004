<?php
session_start();
include("resources/includes/config_home.php");

$title = $_POST['title'];
$advice = $_POST['information'];

$username = $_SESSION['username'];

echo "username session: " . $username;

$id_query = "SELECT * FROM users WHERE username = '$username'";
$id_result = $db->query($id_query);
while ($row = $id_result->fetch_array()) {
    echo "row user id: " . $row['user_ID'];
    $user_ID = $row['user_ID'];
}


$user_query = "SELECT user_ID FROM users WHERE username = '$username'";


$stmt = $db->prepare("INSERT INTO onarrival(title, advice, user_ID) VALUES(?, ?, ?)");
$stmt->bind_param("sss", $title, $advice, $user_ID);

if ($stmt->execute()) {

    header('location: OnArrival_nav.php');
} else {
    echo "Error: " . $stmt . "<br>" . mysqli_error($db);
}
