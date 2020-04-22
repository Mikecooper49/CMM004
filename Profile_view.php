<?php
session_start();
include("resources/includes/config_home.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile View</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="resources/styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg_login">

<!-- set navbar dependent on user_type-->
<?php
include('resources/includes/navbarLogic.php');
// get existing email from $_SESSION
$email = ($_SESSION['email']);
?>

<!-- Main Start -->
<main>
    <!-- get data from user profile -->

    <?php
    $emailQuery = "SELECT * FROM users WHERE email = '$email'";
    $emailResult = mysqli_query($db, $emailQuery);
    $row = mysqli_fetch_array($emailResult);
    ?>

    <div align="center">
        <h1>Profile View for International Students of Aberdeen </h1>

        <div style="width:500px; border:20px;  align:right">
            <div align="center" class="loginbox" style="margin:40px 40px">
                <form action="Profile.php" method="post">
                    <h3> Profile for: <?php echo $email; ?></h3>
                    <br>
                    <div class="form-row">
                        <label for="Interests">Interests & Hobbies: </label><br>
                        <output><?php echo $row['Interests']; ?></output>
                    </div>
                    <div class="form-row">
                        <label for="Gender">Gender: </label> <br>
                        <output name="Gender" id="Gender">
                            <?php echo $row['Gender']; ?>
                        </output>
                    </div>
                    <div class="form-row">
                        <label for="Age">Age: </label><br>
                        <output name="Age" id="Age">
                            <?php echo $row['Age']; ?>
                        </output>
                    </div>
                    <div class="form-row">
                        <label for="Uni">University/College: </label><br>
                        <output name="Uni" id="Uni">
                            <?php echo $row['Uni']; ?>
                        </output>
                    </div>
                    <div class="form-row">
                        <label for="Course">Course: </label><br>
                        <output name="Course" id="Gender">
                            <?php echo $row['Course']; ?>
                        </output>
                    </div>
                    <br><br><br><br>
                    <button onclick="window.location='index_nav.php';">Back to Homepage</button>
                    <br>
                </form>
                <?php
                /*
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
                */
                ?>
            </div>
        </div>
    </div>
</main>
<!-- Main End -->
</body>
</html>