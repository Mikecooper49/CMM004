<?php
/*
if($_POST){
    $connection = mysqli_connect("localhost", "root", "", "students");
    if(!$connection){
        die("Unable to connect to database");
    }
*/
 include('resources/includes/config_home.php');

    $info = $_POST['information'];
$title = $_POST['title'];
$query = mysqli_query($db, "INSERT INTO onarrival (title, advice) VALUES ('$title', '$info')");
    if($query) {
        header("Location: OnArrival_nav.php");
    }else{
        header("Location: OnArrival_nav.php");
    }
//}
    
?>