<?php

if($_POST){
    $connection = mysqli_connect("localhost", "root", "", "students");
    if(!$connection){
        die("Unable to connect to database");
    }

    $info = $_POST['information'];
    $title = $_POST['title'];
    $query = mysqli_query($connection, "INSERT INTO information (title, information) VALUES ('$title', '$info')");
    if($query) {
        header("Location: OnArrival.php");
    }else{
        header("Location: OnArrival.php");
    }
}
    
?>