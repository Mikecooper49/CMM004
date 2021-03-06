<?php
session_start();
include("resources/includes/config_home.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile Input Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="resources/styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg_login">

<!-- set navbar dependent on user_type-->

<?php
include('resources/includes/navbarLogic.php');
// get existing username data from $_SESSION
$email = ($_SESSION['email']);
?>

<!-- Main Start -->
<main>
    <div align="center">
        <h1>Profile form for International Students of Aberdeen</h1>

        <div style="width:500px; border:20px;  align:right">
            <div align="center" class="loginbox" style="margin:40px 40px">
                <form action="Profile.php" method="post">
                    <h3> Profile input for: <?php echo $email; ?></h3>
                    <br>
                    <div class="form-row">
                        <label for="Interests">Interests & Hobbies: </label><br>
                        <textarea type="text" rows="5" cols="60" name="Interests" id="Interests"></textarea>
                    </div>
                    <div class="form-row">
                        <label for="Gender">Gender: </label> <br>
                        <input type="hidden" name="test" value="Gender">
                        <select name="Gender" id="Gender">
                            <?php
                            // some options of the 58 in Facebook !
                            $Gender = array("", "Rather not say", "Non-Binary", "Male", "Female", "Bigender", "Gender Fluid", "Trans", "Agender");
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
                        <input type="number" maxlength="2" name="Age" id="Age" placeholder="">
                    </div>
                    <div class="form-row">
                        <label for="Uni">University/College: </label> <br>
                        <input type="hidden" name="Uni" value="Uni">
                        <select name="Uni" id="Uni">
                            <?php
                            // Higher Education Institutions in the ABZ area
                            $Uni = array("", "Robert Gordon University", "Robert Gordon University - Gray's School of Art", "University of Aberdeen", "North East Scotland College", "Robert Gordon College", "Cornhill Community Learning Centre", "Institute of Dentistry", "Scottish Agriculture College");
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
                        <input type="text" name="Course" id="Course" placeholder="">
                    </div>
                    <br><br>
                    <div class="form-row">
                        <input type="submit" value="Submit Profile" class="btn btn-primary">
                        <!--check to see if any profile data has been entered -->

                        <br><br>
                    </div>
                </form>
                <form action="index.php">
                    <input type="submit" value="Cancel (back to homepage)" name="Submit" id="frm1_submit"
                           class="btn btn-primary"/>
                </form>
                <br>
            </div>
        </div>
    </div>
</main>
<!-- Main End -->
</body>
</html>
