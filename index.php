<?php

// start session

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Login front page</title>

   <!-- we need to chose between an off the shelf style set up like bootstrap or write one ourselves -->

  <link rel="stylesheet" type="text/css" href="resources/styles/login.css">

</head>


<body class ="bg" background="resources/images/login2.jpg">

<!-- login box and check/set login cookie -->

<div align="center">
    <h1> Welcome to International Students of Aberdeen WebSite (ISa)</h1>
    <div style="width:400px; border=20px;  align="right">


        <div style="margin:40px 40px">

            <div class="loginbox" align="right">
                <form action="session.php" method="post">
                    <label> Email : </label><input type="email" name="username"><br><br>
                    <label> Password :</label><input type="password" name="password" required minlength="5"><br><br>
                    Remember Me: <input type="checkbox" name="rememberme" class="box"><br><br>
                    <button type="submit">Login</button><br><br><br>
                    <?php
                    //  login error message if set in session

                    if (isset($_SESSION['message']))
                    { ?>
                        <!-- print error message on login page -->

                    <div style="color: #0f22ff"><?php echo $_SESSION['message'];?></div>
                    <?php unset($_SESSION['message']);
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
