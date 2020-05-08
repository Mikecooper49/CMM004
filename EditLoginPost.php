<?php
session_start();
include("resources/includes/config_home.php");

$emailDone = FALSE;
$passDone = FALSE;

if(empty($_POST['email']) && empty($_POST['emailConfirm']) && empty($_POST['password']) && empty($_POST['passConfirm']))
{
    header('location: EditLogin.php?emptyerr=1');
}

if(empty($_POST['email']) != empty($_POST['emailConfirm']) ){
    header('location: EditLogin.php?emailerr=1');
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
    header("location: EditLogin.php?passerr=1");
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
    $stmt = $db->prepare("UPDATE users SET email = ?, password_text = ? WHERE user_ID = ?");
    $stmt->bind_param("ssi", $email, $password, $userID);
    $stmt->execute();
    header('location: Admin.php?emailPass=1');
}elseif ($emailDone == TRUE && $passDone == FALSE)
{
    $stmt = $db->prepare("UPDATE users SET email = ? WHERE user_ID = ?");
    $stmt->bind_param("si", $email, $userID);
    $stmt->execute();
    header('location: Admin.php?email=1');
}elseif ($emailDone == FALSE && $passDone == TRUE)
{
    $stmt = $db->prepare("UPDATE users SET password_text = ? WHERE user_ID = ?");
    $stmt->bind_param("si", $password, $userID);
    $stmt->execute();
    header('location: Admin.php?pass=1');
}