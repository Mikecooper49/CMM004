<!--
            ISa

Created by for module CMM004
Date: Feb 2020

This app uses sql database

index.php - login page for IntStu database

-->
<?php
session_start();
if (IsSet($_SESSION["username"]))			//if username exists in session, user has logged in
{
    header("Location: testhomepage.php");		//forward to use home page
    exit();
}

// using my home setup & database to start with (config.php) will be the RGU setup

// include_once("config_home.php");

?>

<!DOCTYPE html>
<head>
    <title> Login using PHP</title>

   <!-- we need to chose between an off the shelf style set up like bootstrap or write one ourselves -->

  <link rel="stylesheet" type="text/css" href="login.css">

</head>


<body

<!-- login box and check/set login cookie -->

<div align="center">
    <div style="width:400px; border=0;  align="right">

        <div style="margin:20px 20px">

            <div class="loginbox" align="left">
                <form id = "login" method="post" action="session_old.php">
                    <label> Email : </label><input type="text" name="username"><br><br>
                    <label> Password :</label><input type="password" name="password"><br><br>
                    Remember Me: <input type="checkbox" name="rememberme" class="box"><br><br>
                    <button type="submit">Login</button>
                </form>
            </div>

        </div>
    </div>
</div>

</body>

<!-- end of body -->

</html>
