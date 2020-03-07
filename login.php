<?php

// start session

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Login page</title>

   <!--  modifying bootstrap style -->

  <link rel="stylesheet" type="text/css" href="resources/styles/style.css">

</head>


<body class ="bg_login">

<!-- login box and check/set login cookie -->

<div align="center">
    <h1> Welcome to International Students of Aberdeen WebSite (ISa)</h1>
    <div style="width:400px; border=20px;  align=" right">


        <div style="margin:40px 40px">

            <div class="loginbox" align="right">
                <form action="session.php" method="post">
                    <label> Email : </label><label>
                        <input type="email" name="username">
                    </label><br><br>
                    <label> Password :</label><label>
                        <input type="password" name="password" required minlength="5">
                    </label><br><br>
                    Remember Me: <label>
                        <input type="checkbox" name="rememberme" class="box">
                    </label><br><br>
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
