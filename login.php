<?php

// start session

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Login front page</title>

   <!-- we need to chose between an off the shelf style set up like bootstrap or write one ourselves -->

  <link rel="stylesheet" type="text/css" href="resources/styles/style.css">

</head>


<body class ="bg_login" >

<!-- login box and check/set login cookie -->

<div align="center">
    <h1> Welcome to International Students of Aberdeen WebSite (ISa)</h1>
    <div style="width:500px; border=20px;  align="right">


        <div style="margin:40px 40px">

            <div class="loginbox" align="right">
                <form action="session.php" method="post">
                    <div class="form-row">
                        <label> Email : </label><input type="email" name="username">
                    </div>
                    <div class="form-row">
                        <label> Password :</label><input type="password" name="password" required minlength="5">
                    </div>
                    <div class="form-row">
                        Remember Me: <input type="checkbox" name="rememberme" class="box">
                    </div>
                    <div class="form-row">
                        <button type="submit">Login</button>
                    </div>
                    <div class="form-row">
                        <a href="register.php">Register as a new user</a>
                    </div>
                    <br><br><br>
                    <?php
                    //  login error message if set in session

                    if (isset($_SESSION['message']))
                    { ?>
                        <!-- print error message on login page -->

                    <div style="color: #0f22ff"><?php echo $_SESSION['message'];?></div>
                    <?php unset($_SESSION['message']);
                    }

                    if (isset($_GET['usercreated']) && $_GET['usercreated'] == 1)
                    {
                        echo "User account has been created, please log in";
                    }
                    ?>
                    <br>
                </form>
            </div>

        </div>
    </div>
</body>

<!-- end of body -->

</html>
