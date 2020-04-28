<?php
session_start();
include("resources/includes/config_home.php");
$email = $_SESSION['email'];
$results = mysqli_query($db, "SELECT * FROM users WHERE email = '$email'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RGU International Student Advisor</title>

    <!--Description of the Web App-->
    <meta name="description" content="RGU International Student Advisor Web App">

    <!--keywords for search engines-->
    <meta name="keywords"
          content="RGU, Robert Gordon University, RGU International Student, International Student Aberdeen, International Student Advisor">

    <!--Page author-->
    <meta name="author" content="Jacob">

    <!--Setting the viewport to make the web app look good on all devices:-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- link to team style sheet-->
    <link rel="stylesheet" type="text/css" href="resources/styles/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--  <style>
          label {
              display: block;
          }
      </style> -->

</head>
<body class="bg_login">

<?php
include('resources/includes/navbarLogic.php');
?>

<div align="center">
    <h1>Edit Student details </h1>

    <div style="width:500px; border:20px;  align:right">
        <div align="center" class="loginbox" style="margin:40px 40px">
            <form action="update-student.php" method="post">
                <?php while ($row = mysqli_fetch_array($results)) { ?>
                <div class="form-row">
                    <label for="Interests">Interests & Hobbies: </label><br>
                    <textarea class="input" id="Interests" rows="10"
                              cols="50"><?php echo $row['Interests']; ?></textarea>
                </div>
                <div class="form-row">
                    <label for="Gender">Gender: </label><br>
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
                <br><br>
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>
            <form action="index_nav.php">
                <input type="submit" value="Cancel (back to homepage)" id="frm1_submit"
                       class="btn btn-primary"/>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>