<?php
session_start();
include("resources/includes/config_home.php");
//print_r($_SESSION);
//
//If($_SESSION['usertype'] !== "admin")
//{
 //   header('location: index_nav.php');
//}

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
<body class ="bg_login">

<!-- set navbar dependent on user_type-->

<?php
include('resources/includes/navbarLogic.php');
?>

<!-- Main Start -->
<main>

    <h3> Current user email: </h3>
    <?php
    $userID = $_POST['userID'];

    $emailQuery = "SELECT email FROM users WHERE user_ID = '$userID'";
    $emailResult = mysqli_query($db, $emailQuery);

    while($row = mysqli_fetch_array($emailResult))
    {
        ?>
    <p> <?php echo $row['email']; ?> </p>

    <?php
    }
    ?>

    <div style="width:500px; border:20px;  align:right">
        <div class= "loginbox" align="right"  style="margin:40px 40px">
            <form action="registering.php" method="post">
                <div class="form-row">
                    <label for="email">Enter New User Email: </label><label id="required">*</label>
                    <input type="text" name="email" id="email" placeholder="New Email">
                </div>
                <div class="form-row">
                    <label for="emailConfirm">Confirm New User Email: </label><label id="required">*</label>
                    <input type="text" name="emailConfirm" id="emailConfirm" placeholder="Confirm New Email">
                </div>
                <br>
                <div class="form-row">
                    <label for="password">Enter New User Password: </label> <label id="required">*</label>
                    <input type="text" name="password" id="password" placeholder="New Password">
                </div>
                <div class="form-row">
                    <label for="passConfirm">Confirm New User Password: </label> <label id="required">*</label>
                    <input type="text" name="passConfirm" id="passConfirm" placeholder="Confirm New Password">
                </div>
                <div class="form-row">
                    <input type="submit" value="Submit"><br>
                </div>
            </form>
        </div>
    </div>


</main>
<!-- Main End -->
</body>
</html>