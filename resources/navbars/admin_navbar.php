<!--
          Isa

Created  for module CMM004
Date: March 2020

admin_navbar.html - administrator navigation bar

-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrator Nav Bar</title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            </button>
            <!--      <a class="navbar-brand" href="#">Logo</a> -->
            <img src="resources/images/ISAlogoTransparent_nav.png" alt="ISA Logo">
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="active"><a href="PreArrival.php">PreArrival</a></li>
                <li class="active"><a href="OnArrival_nav.php">OnArrival</a></li>
                <li class="active"><a href="PreDeparture_nav.php">PreDeparture</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a><?php echo 'User: ' . ($_SESSION['email']); ?></a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
                <li><a href="Admin.php"></span> ADMIN </a></li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>