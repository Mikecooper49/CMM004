<!--
            ISa

Created by for module CMM004
Date: Feb 2020

This app uses sql database

index.php - login page for IntStu database

-->
<?php

// using my home setup & database to start with (config.php) will be the RGU setup

include_once("config_home.php");

include_once("session.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>

   <!-- we need to chose between an off the shelf style set up like bootstrap or write one ourselves -->

 <!--  <link rel="stylesheet" type="text/css" href="resources/style/style.css"> -->

</head>

<!-- background photo for login page?-->

<!-- <body class="bg" background="resources/images/login_pic.jpg"> -->

<!-- login box and check/set login cookie -->

<div align="left">
    <div style="width:400px; border=0;  align=right">

        <div style="margin:20px 20px">

            <div class="loginbox" align="right">
                <form action="session.php" method="post">
                    <label> Email : </label><input type="text" name="username" value="<?php if(isset($_COOKIE['username'])) { echo $_COOKIE['username']; } ?>" class="box"><br><br>
                    <label> Password : </label><input type="password" name="password" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>" class="box"><br><br>
                    Remember Me: <input type="checkbox" name="rememberme" class="box"><br><br>
                    <input type="submit" value="Log On">
                </form>
            </div>

            <?php if(isset($error)) {
            echo "<p>Sorry, you're login hasn't worked.<br>
             Please try again.</p>";}?>
        </div>
    </div>
</div>

</body>

<!-- end of body -->

</html>
