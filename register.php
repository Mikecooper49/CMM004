<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register New User</title>
    <link rel="stylesheet" type="text/css" href="resources/styles/style.css">
</head>
<body class ="bg_login">

<!-- Main Start -->
<main>
    <div align="center">
        <h1>Register to International Students of Aberdeen </h1>

        <div style="width:500px; border:20px;  align:right">
            <div class= "loginbox" align="right"  style="margin:40px 40px">
                <form action="registering.php" method="post">
                    <div class="form-row">
                        <label for="email">Please enter your email address: </label>
                        <input type="email" name="email" id="email" placeholder="Email Address">
                    </div>
                    <div class="form-row">
                        <label for="password">Please enter your password: </label>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="form-row">
                        <label for="confirm">Please confirm your password: </label>
                        <input type="password" name="confirm" id="confirm" placeholder="Confirm Password">
                    </div>
                    <div class="form-row">
                        <input type="submit" value="Submit">
                    </div>
                    <br>
                    <p hidden="true">  </p>
                </form>
                <?php
                if (isset($_GET['messerr']) && $_GET['messerr'] == 1)
                {
                    echo "Password and confirm password do not match";
                }
                if (isset($_GET['emailerr']) && $_GET['emailerr'] == 1)
                {
                    echo "Email already registered with us";
                }

                ?>

            </div>



        </div>
    </div>




</main>
<!-- Main End -->


</body>
</html>
