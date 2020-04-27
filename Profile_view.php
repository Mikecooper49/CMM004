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
?>
<!-- Main Start -->
<main>
    <!-- get data from user profile -->
    <?php
    // get existing email from $_SESSION
    $email = ($_SESSION['email']);
    // Select row from user table
    $emailQuery = "SELECT * FROM users WHERE email = '$email'";
    $emailResult = mysqli_query($db, $emailQuery);
    $row = mysqli_fetch_array($emailResult);
    //    check to see if any profile data has been entered
    if (($row['Interests'] and $row['Gender'] and $row['Age'] and $row['Uni'] and $row['Course']) == NULL) {
        echo '<script>
alert( "Sorry no have not entered any profile data, please enter data in Enter Profile");
window.location.href="Profile_form.php";
</script>';
    }
    ?>
    <div align="center">
        <h1>Profile View for International Students of Aberdeen </h1>

        <div style="width:500px; border:20px;  align:right">
            <div align="center" class="loginbox" style="margin:40px 40px">
                <form>
                    <!--  <form action="Profile.php" method="post"> -->
                    <h3> Profile for: <?php echo $email; ?></h3>
                    <br>
                    <div class="form-row">
                        <label for="Interests">Interests & Hobbies: </label><br>
                        <input name="Interests" id="Interests" value="<?php echo $row['Interests']; ?>"/>
                    </div>
                    <div class="form-row">
                        <label for="Gender">Gender: </label> <br>
                        <input name="Gender" id="Gender" value="<?php echo $row['Gender']; ?>">
                    </div>
                    <div class="form-row">
                        <label for="Age">Age: </label><br>
                        <input name="Age" id="Age" value="<?php echo $row['Age']; ?>">
                    </div>
                    <div class="form-row">
                        <label for="Uni">University/College: </label><br>
                        <input name="Uni" id="Uni" value="<?php echo $row['Uni']; ?>">
                    </div>
                    <div class="form-row">
                        <label for="Course">Course: </label><br>
                        <input name="Course" id="Gender" value="<?php echo $row['Course']; ?>">
                    </div>
                    <br><br><br><br>
                    <input type="button" value="Back to homepage" onclick="window.location.href='index_nav.php';"/>
                    <br><br>
                    <!--  waiting for Babs's code <input type="button" value="Edit Profile" onclick="window.location.href='Profile_edit.php';"/> -->
                </form>

            </div>
        </div>
    </div>
</main>
<!-- Main End -->
</body>
</html>