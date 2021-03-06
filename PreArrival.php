<?php
session_start();
include_once("resources/includes/config_home.php");
$results = mysqli_query($db, 'SELECT title, advice, username FROM PreArrival JOIN users ON users.user_ID = PreArrival.user_ID ');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pre Arrival</title>
    <!--bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="resources/styles/stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!--Navigation Bar-->

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="#"><img src="resources/images/ISAlogoTransparent_nav.png" alt="ISAlogo"></a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="old code/PreArrival.html">PreArrival</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="OnArrival_nav.php">OnArrival</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="PreDeparture_nav.php">PreDeparture</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div align="center">
    <h1> PreArrival - International Students of Aberdeen </h1>

    <header class="page-header header container-fluid">
    </header>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

    <!--jquery -->
    <script src="resources/javascript/main.js"></script>

    <div class="description">
        <h1 class="display-1">Welcome to Aberdeen</h1>
        <h2>This website was created for International Students</h2>
        <!-- Buddy Up  and register buttons-->
        <!--   <input type="button" value="Register" class="btn btn-primary"
                  onclick="window.location.href='Profile_form.php';"/>

           <input type="button" value="Connect with others" class="btn btn-primary"
                  onclick="window.location.href='connecttwo.php';"/> -->

    </div>
    <!-- BOOTSTRAP GRIDS, EACH GRID MUST ADD UP TO 12 -->
    <div class="container features">
        <div class="row">
            <!--Immigration -->
            <div class="col-lg-3 col-md-3 col-sm-12">
                <h3 class="feature-title">Visa/Immigration</h3>
                <img src="resources/images/CARD Images/visa2.jpg" class="img-fluid">
                <p>The Link below will take you to the UK Council for International Offers website. Where you can find
                    all relevant information. </p>
                <a class="btn btn-primary" href="https://www.ukcisa.org.uk/" role="button">Link</a>
            </div>
            <!--Banking -->
            <div class="col-lg-3 col-md-3 col-sm-12">
                <h3 class="feature-title">Banking</h3>
                <img src="resources/images/CARD Images/Bank.jpg" class="img-fluid">
                <p>The UK banking sector is dominated by a few very large banks, including the Lloyds Group, Barclays,
                    Bank of Scotland, the Royal Bank of Scotland (RBS), and HSBC. </p>
                <a class="btn btn-primary" href="https://www.lloydsbank.com/" role="button">Lloyds Bank</a>

                <a class="btn btn-primary" href="https://www.barclays.co.uk/" role="button">Barclays Bank</a>

                <a class="btn-primary btn-md" href="https://www.bankofscotland.co.uk/" role="button">Bank of
                    Scotland</a>

                <a class="btn-primary btn-md" href="https://personal.rbs.co.uk/" role="button">HSBC</a>
                <a class="btn btn-primary" href="https://www.hsbc.co.uk/" role="button">Royal Bank of Scotland</a>
            </div>

            <!--Accommodation -->
            <div class="col-lg-3 col-md-3 col-sm-12">
                <h3 class=feature-title">Accommodation</h3>
                <img src="resources/images/CARD Images/Accommodation02.jpg" class="img-fluid">
                <p>There are several ways to find your perfect accomodation. You can googlesearch the letting agents,
                    contact your university accomodation team or find a temporary accommodation via booking.com or
                    AirBnB. You can find the links below.</p>
                <a class="btn-primary btn-sm" href="https://www.airbnb.co.uk/" role="button">Link to AirBnB</a>
                <a class="btn-secondary btn-sm" href="https://www.booking.com/">Link to Booking.com</a>
            </div>

            <!-- Visit Scotland -->
            <div class="col-lg-3 col-md-3 col-sm-12">
                <h3 class="feature-title">Visit Scotland</h3>
                <img src="resources/images/CARD Images/VisitScotland.png" class="img-fluid">
                <p>VisitScotland, formerly the Scottish Tourist Board, is a national tourism organisation for Scotland.
                    It is an executive non-departmental public body of the Scottish Government, with offices in
                    Edinburgh, Glasgow, Inverness, and other parts of Scotland.</p>
                <a class="btn btn-primary" href="https://www.visitscotland.com/">Link</a>

            </div>

        </div>
    </div>
</div>


<!--SECOND ROW -->

<div class="container features">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <!--Bus -->
            <h3 class="feature-title">Bus</h3>
            <img src="resources/images/CARD Images/Buses.png" class="img-fluid">
            <p>First Aberdeen and Stagecoach operate a network of high frequency services across Aberdeen city. Follow
                the links and you will find maps, fares and journey planners.
            </p>
            <a class="btn btn-seondary" href="https://www.firstgroup.com/aberdeen">FirstAberdeen</a>
            <a class="btn btn-secondary"
               href="https://www.stagecoachbus.com/promos-and-offers/north-scotland/aberdeen-bus-travel">Stagecoach</a>
        </div>
        <!--Train -->
        <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class="feature-title">Train</h3>
            <img src="resources/images/CARD Images/Train.jpg" class="img-fluid">
            <p>UK wide train services connect Aberdeen with direct trains to London, Edinburgh, Glasgow and
                Inverness.</p>
            <a class="btn btn-secondary"
               href="https://www.scotrail.co.uk/plan-your-journey/stations-and-facilities/abd">ScotRail</a>
            <a class="btn btn-secondary" href="https://www.lner.co.uk/">LNER</a>
        </div>
        <!--Airport -->
        <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class=feature-title">Airport</h3>
            <img src="resources/images/CARD Images/Airport.jpg" class="img-fluid">
            <p>Aberdeen boasts excellent direct air links to major UK and European cities. Local bus and taxi services
                offer fast, convenient connections from the airport to the University.</p>
            <a class="btn btn-secondary" href="https://www.aberdeenairport.com/">Airport</a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class="feature-title">Taxi</h3>
            <img src="resources/images/CARD Images/Taxi.jpg" class="img-fluid">
            <p>You can catch a taxi from the airport, the centre of town and by telephoning individual taxi
                companies.</p>
            <a class="btn btn-secondary"
               href="https://www.taxisaberdeenairport.co.uk/?_kk=taxis%20aberdeen%20airport&_kt=b3faffe4-9451-48d5-98a6-5d186aa42fb3&gclid=EAIaIQobChMI7YP8gvaa6AIViK3tCh3aDgX-EAAYASAAEgKioPD_BwE">Taxi
                fare calculator</a>
        </div>

    </div>
</div>
</div>

<!-- THIRD ROW -->
<div class="container features">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class="feature-title">Robert Gordon University</h3>
            <img src="resources/images/CARD Images/RGU.jpg" class="img-fluid">
            <p>Robert Gordon University provides industry led undergraduate and postgraduate courses leading to highly
                relevant awards and degrees. Situated on one of the most beautiful campuses in the UK, the university
                provides facilities that will have a real influence on your capacity to learn.</p>
            <a class="btn btn-secondary" href="https://www.rgu.ac.uk/about">Robert Gordon University</a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class="feature-title">University of Aberdeen</h3>
            <img src="resources/images/CARD Images/University-of-Aberdeen1.jpg" class="img-fluid">
            <p>Teaching at the University of Aberdeen is organised across 12 schools which encompass a broad range of
                disciplines. Multidisciplinary research centres and institutes bring together experts at the
                cutting-edge of their fields to work with colleagues across the UK and beyond.</p>
            <a class="btn btn-secondary" href="https://www.abdn.ac.uk/">University of Aberdeen</a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class=feature-title">NHS</h3>
            <img src="resources/images/CARD Images/NHS.png" class="img-fluid">
            <p>NHS Scotland, sometimes styled NHSScotland, is the publicly funded healthcare system in Scotland, and one
                of the four systems which make up the National Health Service in the United Kingdom. It operates
                fourteen territorial NHS boards across Scotland, seven special non-geographic health boards and NHS
                Health Scotland.</p>
            <a class="btn btn-secondary" href="https://www.scot.nhs.uk/">NHS</a>
        </div>

        <!--WEATHER WIDGET -->
        <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class=feature-title">Weather</h3>
            <p><a class="weatherwidget-io" href="https://forecast7.com/en/57d15n2d09/aberdeen/" data-label_1="ABERDEEN"
                  data-label_2="WEATHER" data-days="5" data-theme="desert">ABERDEEN WEATHER</a>
                <script>
                    !function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = 'https://weatherwidget.io/js/widget.min.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, 'script', 'weatherwidget-io-js');
                </script>
            </p>
        </div>

    </div>
</div>

<div style="max-width: 900px; margin: auto">
    <div class="col-md-12" style="text-align: left">
        <hr>
        <p> Crowd Source Information - <a data-toggle="modal" data-target="#myModal" href="javascript:;"> Add new </a>
        </p>
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
                <form action="PreArrivalCrowd.php" method="post">
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