<?php
session_start();
print_r($_SESSION);
if ($_SESSION['email'] == "test4@test.com")
{
    $_SESSION['user_type'] = "ADMIN";
} else {
    $_SESSION['user_type'] = "REG_USER";
}
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Login front page</title>

  <link rel="stylesheet" type="text/css" href="resources/styles/style.css">

</head>


<body class ="bg_login" >

<!-- login box and check/set login cookie -->

<div align="center">
    <h1> Welcome to International Students of Aberdeen WebSite (ISa)</h1>
    <div style="width:500px; border=20px;  align=" right">


        <div style="margin:40px 40px">

            <div class="loginbox" align="right">
                <form action="session.php" method="post">
                    <div class="form-row">
                        <label> Email : </label><label>
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
