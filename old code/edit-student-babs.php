<?php
$connection = mysqli_connect("localhost", "root", "", "rgu_international_student");
$id = $_GET['id'];
$results = mysqli_query($connection, "SELECT * FROM users WHERE user_ID = '$id'");
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
    <link rel="stylesheet" type="text/css" href="../resources/styles/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        label {
            display: block;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav" style='text-align: left;'>
            <div class="col-md-12">
                <h5><b> Edit student details </b></h5>
                <form action="../update-student.php" method="post">
                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                        <div class="form-group">
                            <label> Username </label>
                            <input type="hidden" name="id" value="<?php echo $row['user_ID']; ?>">
                            <input type="text" name="username" value="<?php echo $row['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label> First Name </label>
                            <input type="text" name="firstname" value="<?php echo $row['firstname'] ?>">
                        </div>
                        <div class="form-group">
                            <label> Last Name </label>
                            <input type="text" name="lastname" value="<?php echo $row['lastname'] ?>">
                        </div>
                        <div class="form-group">
                            <label> Interests </label>
                            <input type="text" name="interests" value="<?php echo $row['Interests'] ?>">
                        </div>
                        <div class="form-group">
                            <label> University </label>
                            <input type="text" name="university" value="<?php echo $row['Uni'] ?>">
                        </div>
                        <div class="form-group">
                            <label> Course </label>
                            <input type="text" name="course" value="<?php echo $row['Course'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update" class="btn btn-primary">
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>


<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>
</body>
</html>