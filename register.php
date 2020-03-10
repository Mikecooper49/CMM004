<?php

include("resources/includes/config_rgu.php");

// Checking that all fields have been filled
if(empty($_POST['email']) || empty($_POST['password'] || empty($_POST['confirm'])))
{
    echo "all fields are required.";
}else{
    //Taking the Post values and turning them into variables
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $userType = 'USER';
}

//Checking the both passwords given match
if ($password == $confirm) {

    //Inserting the new user details into the database
    $sql_query = "INSERT INTO users(email, password_text, user_type) VALUES ('$email', '$password', '$userType')";


    if (mysqli_query($db, $sql_query)){
        header('location: index.php');
    }
    else{
        echo "Error: ". $sql_query . "<br>" . mysqli_error($db);
    }

    //If the insert query is successful redirect the user to the index page
   # if ($db->query($sql_query) == TRUE){

    #}
    #else {
     #   echo "Error: " . $sql_query . "<br>" . $db->error;
    #}

}else
{
    //If the passwords do not match, echo out this message
   echo "Password and confirm password do not match";
}


?>