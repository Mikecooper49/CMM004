<?php
//Admin page updated 28/04/2020

session_start();
include("resources/includes/config_lynne.php");

If($_SESSION['usertype'] !== "ADMIN")
{
   header('location: index_nav.php');
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
<body class ="bg_login">

    <!-- set navbar dependent on user_type-->

<?php
include('resources/includes/navbarLogic.php');
?>

    <?php
    if (isset($_GET['emailPass']) && $_GET['emailPass'] == 1)
    {
        echo "Both the email and the password have been updated";
    }
    if (isset($_GET['email']) && $_GET['email'] == 1)
    {
        echo "The email has been updated";
    }
    if (isset($_GET['pass']) && $_GET['pass'] == 1)
    {
        echo "The password has been updated";
    }
    ?>

    <!-- Main Start -->
    <main>
        <h3>Edit User Login Details</h3>
        <form action="EditLogin.php" method="post">
            <select name="userID">
        <?php
        $userquery = mysqli_query($db, "SELECT user_ID, username FROM users");

        while($row = mysqli_fetch_array($userquery))
        {
            ?>
            <option value="<?php echo $row['user_ID']; ?>"> <?php echo $row['username']; ?> </option>
            <?php

        }

        ?>
            </select> <br><br>
            <input type="submit" value="Edit" class="btn btn-primary">

        </form>

    </main>
</body>
</html>