<?php
session_start();
include("resources/includes/config_home.php");
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
    //  if (($row['Interests'] and $row['Gender'] and $row['Age'] and $row['Uni'] and $row['Course']) == NULL) {
    //    echo '<script>
    //alert( "Sorry no have not entered any profile data, please enter data in Enter Profile");
    //window.location.href="Profile_form.php";
    //</script>';
    //   }
    ?>

    <div align="center">
        <h1>Profile View for International Students of Aberdeen </h1>

        <div style="width:500px; border:20px;  align:right">
            <div align="center" class="loginbox" style="margin:40px 40px">
                <form>
                    <h3> Profile for: <?php echo $email; ?></h3>
                    <br>
                    <div class="form-row">
                        <label for="Interests">Interests & Hobbies: </label><br>
                        <textarea class="input" rows="5" cols="55"> <?php echo $row['Interests']; ?></textarea>
                    </div>
                    <div class="form-row">
                        <label for="Gender">Gender: </label> <br>
                        <input name="Gender" id="Gender" size="10" value="<?php echo $row['Gender']; ?>">
                    </div>
                    <div class="form-row">
                        <label for="Age">Age: </label><br>
                        <input name="Age" id="Age" size="4" value="<?php echo $row['Age']; ?>">
                    </div>
                    <div class="form-row">
                        <label for="Uni">University/College: </label><br>
                        <input name="Uni" id="Uni" size="30" value="<?php echo $row['Uni']; ?>">
                    </div>
                    <div class="form-row">
                        <label for="Course">Course: </label><br>
                        <input name="Course" id="Gender" size="30" value="<?php echo $row['Course']; ?>">
                    </div>
                    <br><br>
                    <?php
                    if ($_SESSION['usertype'] == "ADMIN") { ?>
                        <div class="form-row">
                            <input type="button" value="Back to Admin" class="btn btn-primary"
                                   onclick="window.location='Admin.php'">
                        </div>
                        <?php
                    } else { ?>
                        <input type="button" value="Back to homepage" class="btn btn-primary"
                               onclick="window.location.href='index.php';"/>
                        <br><br>
                        <input type="button" value="Edit Profile" class="btn btn-primary"
                               onclick="window.location.href='edit-student.php';"/>
                        <br><br>
                        <input type="button" value="Connect with others" class="btn btn-primary"
                               onclick="window.location.href='connecttwo.php';"/>
                        <?php
                    }
                    ?>
                </form>

            </div>
        </div>
    </div>
</main>
<!-- Main End -->
</body>
</html>