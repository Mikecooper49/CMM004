<?php
//Admin page updated 28/04/2020
session_start();
include("resources/includes/config_home.php");

if ($_SESSION['usertype'] !== "ADMIN") {
    header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Edit Login Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="resources/styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg_login">

<!-- set navbar dependent on user_type and messages-->

<?php
include('resources/includes/navbarLogic.php');

//   notify user of any input errors
if (isset($_GET['emailPass']) && $_GET['emailPass'] == 1) {
    echo '<script>
alert( "Both the email and the password have been updated");
window.location.href="Admin.php";
</script>';

}
if (isset($_GET['email']) && $_GET['email'] == 1) {
    echo '<script>
alert( "The email has been updated");
window.location.href="Admin.php";
</script>';

}
if (isset($_GET['pass']) && $_GET['pass'] == 1) {
    echo '<script>
alert( "The password been updated");
window.location.href="Admin.php";
</script>';

}
?>

<!-- Main Start -->
<main>
    <div align="center">
        <h1>Admin - change & edit user Profile and Login </h1>

        <div style="width:500px; border:20px;  align:right">
            <div align="center" class="loginbox" style="margin:40px 40px">

                <h3>Edit User Login</h3>
                <form action="EditLogin.php" method="post">
                    <select name="userID">
                        <?php
                        $userquery = mysqli_query($db, "SELECT user_ID, username FROM users");

                        while ($row = mysqli_fetch_array($userquery)) {
                            ?>
                            <option value="<?php echo $row['user_ID']; ?>"> <?php echo $row['username']; ?> </option>
                            <?php

                        }

                        ?>
                    </select> <br><br>

                    <input type="submit" value="Edit" class="btn btn-primary">
                    <hr>
                </form>
                <h3>Edit User Profile</h3>
                <form action="edit-student.php" method="post">
                    <select name="email">
                        <?php
                        $userquery = mysqli_query($db, "SELECT email, username FROM users");

                        while ($row = mysqli_fetch_array($userquery)) {
                            ?>
                            <option value="<?php echo $row['email']; ?>"> <?php echo $row['username']; ?> </option>
                            <?php

                        }

                        ?>
                    </select> <br><br>
                    <input type="submit" value="Edit" class="btn btn-primary">

                </form>
            </div>
        </div>
    </div>

</main>

</body>
</html>

