<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register New User</title>
    <link rel="stylesheet" type="text/css" href="resources/styles/style.css">
</head>
<body class ="bg_login">

<nav>
    <ul>
        <li><a>Logo</a> </li>
        <li><a href="index.html">Home</a> </li>
        <li id = "login"><a href="login.php">Login</a> </li>
    </ul>
</nav>

<!-- Main Start -->
<main>
    <div align="center">
        <h1>Register to International Students of Aberdeen </h1>
        <h2> Connecting International Students in Aberdeen</h2>

        <div style="width:300px; border:20px;  align:right">
            <div class= "loginbox" align="right"  style="margin:40px 40px">
                <form action="registering.php" method="post">
                    <div class="form-row">
                        <label for="username">Username: </label> <br>
                        <input type="text" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="form-row">
                        <label for="email">Email Address: </label> <br>
                        <input type="email" name="email" id="email" placeholder="Email Address">
                    </div>
                    <div class="form-row">
                        <label for="password">Password: </label> <br>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="form-row">
                        <label for="confirm">Confirm Password: </label> <br>
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
                        <label for="nationality">Nationality: </label><br>
                        <select name = "nationality" id="nationality">
                            <?php
                            $countries = array("No Nationality", "Azerbaijan", "Bahrain", "Bagladesh", "Botswana", "Brunei", "Cambodia", "Cameroon", "Canada", "China", "Egypt", "Germany", "Ghana", "Hong Kong", "India", "Indonesia", "Iran", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kuwait", "Macau", "Malaysia", "Mauritius", "Mexico", "Namibia", "Nepal", "Nigeria", "Oman", "Pakistan", "Qatar", "Russia", "Rwanda", "Saudi Arabia", "Sierra Leone", "Singapore", "South Africa", "South Korea", "Sri Lanka", "Taiwan", "Tanzania", "Thailand", "Turkey", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "USA", "Vietnam");

                            foreach ($countries as $item)
                            {
                                ?>
                                <option value="<? echo strtolower($item); ?>"><?php echo $item; ?></option>*
                                <?php
                            }

                            ?>

                        </select>

                    </div>
                    <div class="form-row">
                        <input type="submit" value="Sign Up">
                    </div>
                    <br>

                </form>
                <?php
                if (isset($_GET['messerr']) && $_GET['messerr'] == 1)
                {
                    echo "Password and confirm password do not match";
                }
                if (isset($_GET['emailerr']) && $_GET['emailerr'] == 1)
                {
                    echo "Email address already registered with us<br>";
                    echo "<a href='login.php'>Login? </a>";
                }
                if (isset($_GET['emptyerr']) && $_GET['emptyerr'] == 1)
                {
                    echo "All fields are required";
                }

                ?>

            </div>
        </div>
    </div>




</main>
<!-- Main End -->


</body>
</html>
