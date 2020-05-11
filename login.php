<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Login front page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- link to team style sheet-->
    <link rel="stylesheet" type="text/css" href="resources/styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body class="bg_login">

<!-- login box and check/set login cookie -->

<div align="center">
    <h1> Welcome to International Students of Aberdeen WebSite (ISa)</h1>
    <div style="width:500px; border=20px;">
        <div style="margin:40px 40px">

            <div class="loginbox" align="right">
                <form action="session_hash.php" method="post">
                    <div class="form-row">
                        <label> Email : </label>
                        <label>
                            <input type="email" name="email">
                        </label>
                    </div>
                    <div class="form-row">
                        <label> Password :</label><label>
                            <input type="password" name="password" required minlength="5">
                        </label>
                    </div>
                    <div class="form-row">
                        Remember Me: <label>
                            <input type="checkbox" name="rememberme" class="box">
                        </label>
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div class="form-row">
                        <a href="register.php">Register as a new user</a>
                    </div>
                    <?php

                    //  login error message if set in session

                    if (isset($_SESSION['message'])) { ?>
                        <!-- print error message on login page -->

                        <div style="color: #0f22ff"><?php echo $_SESSION['message']; ?></div>
                        <?php unset($_SESSION['message']);
                    }

                    if (isset($_GET['usercreated']) && $_GET['usercreated'] == 1) {
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
