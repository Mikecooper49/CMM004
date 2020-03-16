<?php
/*
if($_POST){
    $connection = mysqli_connect("localhost", "root", "", "students");
    if(!$connection){
        die("Unable to connect to database");
    }
*/
 include('resources/includes/include_lynne.php');

    $info = $_POST['information'];
    $title = $_POST['title'];
    $query = mysqli_query($db, "INSERT INTO information (title, information) VALUES ('$title', '$info')");
    if($query) {
        header("Location: OnArrival.php");
    }else{
        header("Location: OnArrival.php");
    }
//}
    
?>