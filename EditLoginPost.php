<?php
session_start();
include("resources/includes/config_lynne.php");

$emailDone = FALSE;
$passDone = FALSE;

if(empty($_POST['email']) != empty($_POST['emailConfirm']) ){
    //throw error confirm email
}else{

    if ($_POST['email'] !== "")
    {
        //Taking the Post values and turning them into variables
        $email = $_POST['email'];
        $emailConfirm = $_POST['emailConfirm'];
        $userID = $_POST['userID'];

        if ($email == $emailConfirm){
            $emailDone = TRUE;
        }
    }
}

if(empty($_POST['password']) != empty($_POST['passConfirm']) ){

}else{

    if ($_POST['password'] !== "")
    {
        //Taking the Post values and turning them into variables
        $password = $_POST['password'];
        $passConfirm = $_POST['passConfirm'];
        $userID = $_POST['userID'];

        if ($password == $passConfirm){
            $passDone = TRUE;
        }
    }
}

if($emailDone == TRUE && $passDone == TRUE)
{
    $stmt = $db->prepare("UPDATE users SET email = ?, password = ? WHERE userID = ?");
    $stmt->bind_param("ssi", $email, $password, $userID);
    $stmt->execute();
}elseif ($emailDone == TRUE && $passDone == FALSE)
{
    $stmt = $db->prepare("UPDATE users SET email = ? WHERE userID = ?");
    $stmt->bind_param("si", $email, $userID);
    $stmt->execute();
}elseif ($emailDone == FALSE && $passDone == TRUE)
{
    $stmt = $db->prepare("UPDATE users SET password = ? WHERE userID = ?");
    $stmt->bind_param("si", $password, $userID);
    $stmt->execute();
}