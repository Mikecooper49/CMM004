<?php
session_start();
include("resources/includes/config_home.php");
//print_r($_SESSION);
$results = mysqli_query($db, 'SELECT title, advice, username FROM onarrival JOIN users ON users.user_ID = onarrival.user_ID ');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>On Arrival - Aberdeen International Student Guide</title>
    <meta name="description" content="Aberdeen International Student Guide App">
    <meta name="keywords"
          content="RGU, Robert Gordon University, RGU International Student, International Student Aberdeen, International Student Advisor">
    <meta name="author" content="Segun">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="resources/styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="resources/styles/style.css">

    <link rel="stylesheet" href="asset/style.css">

</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <?php
        include('resources/includes/navbarLogic.php');
        ?>
    </div>
</nav>

<div align="center">
    <h1> OnArrival - International Students of Aberdeen </h1>


    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav" style='text-align: left;'>
                <div class="col-md-12">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="https://www.ukcisa.org.uk/">UKCISA</a></li>
                        <li class="list-group-item"><a href="https://www.aberdeencity.gov.uk/">Aberdeen City Council</a>
                        </li>
                        <li class="list-group-item"><a href="https://www.rgu.ac.uk/"> Robert Gordon University</a></li>
                        <li class="list-group-item"><a href="https://www.abdn.ac.uk/"> University of Aberdeen</a></li>
                        <li class="list-group-item"><a href="https://www.google.com/maps/@57.1401561,-2.1010407,14z"> My
                                Map</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-8 text-left">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="resources/images/union_street_image.png" alt="Caption of Union Street"
                                 style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="resources/images/SunsetAberdeenbeach.jpg" alt="Aberdeen Beach at Sunset"
                                 style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="resources/images/Aberdeen.jpg" alt="Beautiful Scene" style="width:100%" ;>
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


                <h1>Welcome to Aberdeen</h1>
                <p>
                    Aberdeen is Scotland's third most populous city and the United Kingdom's 39th most populous built-up
                    area. Since the discovery of North Sea oil in the 1970s, Aberdeen has been known as the off-shore
                    oil capital of Europe.The area around Aberdeen has been settled for at least 8,000 years when
                    prehistoric villages lay around the mouths of the rivers Dee and Don. The city has a long, sandy
                    coastline and a marine climate, the latter resulting in chilly summers and mild winters.
                </p>
                <hr>
                <div class="row">
                    <h4><b>Local Malls</b></h4>
                    <hr>
                    <div class="col-md-3">
                        <a href="https://www.unionsquareaberdeen.com">
                            <img src="resources/images/unionsquare.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://www.bonaccordaberdeen.com/">
                            <img src="resources/images/bonaccourd.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://www.trinityaberdeen.co.uk/">
                            <img src="resources/images/trinity.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://stores.primark.com/united-kingdom/aberdeen/153-union-street/">
                            <img src="resources/images/primark.png">
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h4><b>Local Supermarkets</b></h4>
                    <hr>
                    <div class="col-md-3">
                        <a href="https://www.asda.com/">
                            <img src="resources/images/asda.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://www.boots.com/?utm_source=google-maps&utm_medium=google-maps&utm_campaign=google-maps">
                            <img src="resources/images/boots.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://www.sainsburys.co.uk/">
                            <img src="resources/images/sainsbury.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://www.tesco.com/store-locator/uk/?bID=2007">
                            <img src="resources/images/tesco.png">
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h4><b>Local Bus Services</b></h4>
                    <hr>
                    <div class="col-md-3">
                        <a href="https://www.firstgroup.com/aberdeen">
                            <img src="resources/images/firstbus.png">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://www.stagecoachbus.com/tickets/unirider">
                            <img src="resources/images/stagecoach.png">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 sidenav">
                <div class="Latest News">Latest News & Events</label>
                    <div class="well">
                        <p align="center"><a
                                    href="https://www.gov.uk/government/topical-events/coronavirus-covid-19-uk-government-response"><b>Coronavirus
                                    (COVID-19): UK Government Response</b></a></p>
                    </div>
                    <div class="well">
                        <p align="center"><a href="https://www.aberdeencity.gov.uk/events"><b>Aberdeen City Council
                                    Events</b></a></p>
                    </div>
                    <div class="well">
                        <p align="center"><a href="https://www.rgu.ac.uk/events"><b>RGU Events</b></a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div style="max-width: 900px; margin: auto">
        <div class="col-md-12" style="text-align: left">
            <hr>
            <p> Crowd Source Information - <a data-toggle="modal" data-target="#myModal" href="javascript:;"> Add
                    new </a></p>
            <table class="table table-bordered">
                <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td>
                            <b>
                                <?php echo $row['title']; ?> </b><br>
                            <i> <?php echo "Submitted by: " . $row['username']; ?></i> <br>
                            <?php echo $row['advice']; ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Add Information </h4>
                </div>
                <div class="modal-body">
                    <form action="OnArrivalCrowd.php" method="post">
                        <div class="form-group">
                            <label for="pwd">Title:</label>
                            <input class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Information:</label>
                            <textarea class="form-control" rows="6" id="pwd" name="information" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</body>
</html>