<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register New User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="resources/styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg_login">

<!-- set navbar dependent on user_type-->
<?php
include('resources/includes/navbarLogic.php');
?>

<!-- Main Start -->
<main>
    <div align="center">
        <h1>Register to International Students of Aberdeen </h1>

        <div style="width:300px; border:20px;  align:right">
            <div class="loginbox" align="right" style="margin:40px 40px">
                <form action="Registering_hash.php" method="post">
                    <div class="form-row">
                        <label for="username">Username: </label><label id="required">*</label> <br>
                        <input type="text" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="form-row">
                        <label for="email">Email Address: </label><label id="required">*</label> <br>
                        <input type="email" name="email" id="email" placeholder="Email Address">
                    </div>
                    <div class="form-row">
                        <label for="password">Password: </label> <label id="required">*</label><br>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="form-row">
                        <label for="confirm">Confirm Password: </label> <label id="required">*</label> <br>
                        <input type="password" name="confirm" id="confirm" placeholder="Confirm Password">
                    </div>
                    <div class="form-row">
                        <label for="firstname">First Name: </label><br>
                        <input type="text" name="firstname" id="firstname" placeholder="First Name">
                    </div>
                    <div class="form-row">
                        <label for="lastname">Last Name: </label><br>
                        <input type="text" name="lastname" id="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-row">
                        <input type="text" name="usertype" id="usertype" value="REG_USER" hidden>
                    </div>
                    <div class="form-row">
                        <label for="nationality">Nationality: </label><br>
                        <input type="hidden" name="test" value="nationality">
                        <select name="nationality" id="nationality">
                            <?php
                            $countries = array("No Nationality", "Azerbaijan", "Bahrain", "Bagladesh", "Botswana", "Brunei", "Cambodia", "Cameroon", "Canada", "China", "Egypt", "Germany", "Ghana", "Hong Kong", "India", "Indonesia", "Iran", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kuwait", "Macau", "Malaysia", "Mauritius", "Mexico", "Namibia", "Nepal", "Nigeria", "Oman", "Pakistan", "Qatar", "Russia", "Rwanda", "Saudi Arabia", "Sierra Leone", "Singapore", "South Africa", "South Korea", "Sri Lanka", "Taiwan", "Tanzania", "Thailand", "Turkey", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "USA", "Vietnam");

                            foreach ($countries as $item) {
                                ?>
                                <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-row">
                        <input type="submit" value="Sign Up"><br>
                        <h3> * Required Field</h3>
                    </div>
                    <br>

                </form>
                <?php
                if (isset($_GET['messerr']) && $_GET['messerr'] == 1) {
                    echo "Password and confirm password do not match";
                }
                if (isset($_GET['emailerr']) && $_GET['emailerr'] == 1) {
                    echo "Email address already registered with us<br>";
                    echo "<a href='login.php'>Login? </a>";
                }
                if (isset($_GET['emptyerr']) && $_GET['emptyerr'] == 1) {
                    echo "Please complete all required fields";
                }
                if (isset($_GET['usererr']) && $_GET['usererr'] == 1) {
                    echo "Username already in use";
                }

                ?>

            </div>
        </div>
    </div>
</main>
<!-- Main End -->
</body>
</html>
