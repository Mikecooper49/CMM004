<?php
session_start();
include_once("resources/includes/config_home.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <title>ISa | Connect With Other Int'l Students</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<!-- Page Content. The target attribute is set to "_blank", so as to open the link in a new browser window or a new tab-->

<div class="container">

    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3><b>Connect With Other Int'l Students Via Email:</b></h3>
            </div>
            <div class="card-body">
                <?php
                echo "<table class='table table-striped table-bordered' class='display nowrap' style='border: solid 1px black;'>";
                echo "<tr><th>Username</th><th>First Name</th><th>Last Name</th><th>Nationality</th><th>University</th><th>Course</th><th>Interests</th><th>Email</th></tr>";

                class TableRows extends RecursiveIteratorIterator
                {
                    function __construct($it)
                    {
                        parent::__construct($it, self::LEAVES_ONLY);
                    }

                    function current()
                    {
                        return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
                    }

                    function beginChildren()
                    {
                        echo "<tr>";
                    }

                    function endChildren()
                    {
                        echo "</tr>" . "\n";
                    }
                }

                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "Intstu";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT username, firstname, lastname, nationality, Uni, course, Interests,email FROM users");
                    $stmt->execute();

                    // set the resulting array to associative
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                        echo $v;
                    }
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;
                echo "</table>";
                ?>
                <br><br>
                <input type="button" value="Back to homepage" class="btn btn-primary"
                       onclick="window.location.href='index.php';"/>
                <br><br>
            </div>
        </div>
    </div>
</div>

</body>
</html>