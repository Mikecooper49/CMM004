<?php
session_start();
include("resources/includes/config_home.php");
if ($_SESSION['usertype'] == "ADMIN") {
    $email = $_POST['email'];
}
else {
    $email = $_SESSION['email'];
}
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

</head>
<body class="bg_login">

<?php
include('resources/includes/navbarLogic.php');
?>

<div align="center">
    <h1>Edit Student Profile </h1>

    <div style="width:500px; border:20px;  align:right">
        <div align="center" class="loginbox" style="margin:40px 40px">

            <form action="Profile.php" method="post">
                <?php while ($row = mysqli_fetch_array($results)) { ?>
                <?php echo "Edit User: " . $row['email']; ?>
                <br>
                <hr>
                <div class="form-row">
                    <label for="Interests">Interests & Hobbies: </label><br>
                    <input name="Interests" id="Interests" value="<?php echo $row['Interests']; ?>">

                </div>
                <div class="form-row">
                    <label for="Gender">Gender: </label><br>
                    <select name="Gender" id="Gender">">
                        <?php
                        // some options of the 58 in Facebook !
                        $Gender = array("Rather not say", "Non-Binary", "Male", "Female", "Bigender", "Gender Fluid", "Trans", "Agender");
                        foreach ($Gender as $item) {
                            ?>
                            <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-row">
                    <label for="Age">Age: </label><br>
                    <input type="number" maxlength="2" name="Age" id="Age"
                           value="<?php echo $row['Age']; ?>">
                </div>
                <div class="form-row">
                    <label for="Uni">University/College: </label><br>
                    <input type="hidden" name="email">
                    <!--  <input name="Uni" id="Uni" value="<?php echo $row['Uni']; ?>"> -->
                    <select name="Uni" id="Uni">
                        <?php
                        // Higher Education Institutions in the ABZ area
                        $Uni = array("Robert Gordon University", "Robert Gordon University - Gray's School of Art", "University of Aberdeen", "North East Scotland College", "Robert Gordon College", "Cornhill Community Learning Centre", "Institute of Dentistry", "Scottish Agriculture College");
                        foreach ($Uni as $item) {
                            ?>
                            <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-row">
                    <label for="Course">Course: </label><br>
                    <input name="Course" id="Course" value="<?php echo $row['Course']; ?>">
                </div>
                <br><br>
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>
            <?php
            if ($_SESSION['usertype'] == "ADMIN") { ?>
                <div class="form-row">
                    <input type="button" value="Cancel (back to Admin)" class="btn btn-primary"
                           onclick="window.location='Admin.php'">
                </div>
                <?php
            } else { ?>
                <form action="index.php">
                    <input type="submit" value="Cancel (back to homepage)" id="frm1_submit"
                           class="btn btn-primary"/>
                </form>
                <?php
            }
            ?>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>
