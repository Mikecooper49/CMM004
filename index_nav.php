<?php
if (!empty($_GET['status'])) {
    session_unset();
    echo '<div>You have logged out</div>';
}
session_start();
print_r($_SESSION);
include_once("resources/includes/config_home.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RGU International Student Advisor</title>

    <!--Description of the Web App-->
    <meta name="description" content="RGU International Student Advisor Web App">

    <!--keywords for search engines-->
    <meta name="keywords" content="RGU, Robert Gordon University, RGU International Student, International Student Aberdeen, International Student Advisor">

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
<body>

                <!-- set navbar dependent on user_type-->

                <?php
                include('resources/includes/navbarLogic.php');
                 ?>

                <div align="center">
                    <h1> Home - International Students of Aberdeen </h1>

                    <div class="container-fluid text-center">
                        <div class="row content">
                            <div class="col-sm-2 sidenav">
                                <li class="list-group-item"><a href="https://www.ukcisa.org.uk/">UKCISA</a></li>
                                <li class="list-group-item"><a href="https://www.aberdeencity.gov.uk/">Aberdeen City
                                        Council</a></li>
                                <li class="list-group-item"><a href="https://www.rgu.ac.uk/"> Robert Gordon
                                        University</a></li>
                                <li class="list-group-item"><a href="https://www.abdn.ac.uk/"> University of
                                        Aberdeen</a></li>
                            </div>
                            <div class="col-sm-8 text-left">
                                <figure>
                                    <img src="resources/images/login2.jpg" alt="PhotoOfRGUInt'lStudents"
                                         style="width:100%">
                                </figure>
                                <h1>Welcome</h1>
                                <p>Welcome to the International Students of Aberdeen (ISa). Our hope is that this site
                                    will
                                    promote links between students from the same home country as well as foster some
                                    international dialogue.
                                    There is information on what to before to travel to study in Aberdeen
                                    PreArrival
                                    on what to do during your stay whilst studying
                                    OnArrival
                                    and what considerations to take into account when returning home for vacation during
                                    your course.
                                    PreDeparture

                                    There is also the opportunity to Register to enable you to contact/link with other
                                    students, maybe from
                                    your own home country, but also to develop links with other nationalities.
                                    Registering also provides you
                                    with the opportunity to provide information on whats going on in Aberdeen.
                                    Registered users also get the opportunity to fill out a profile to that maybe viewed
                                    by other registered users.
                                </p>
                                <hr>
                                <h3>Content</h3>
                                <p>The site’s main content is displayed within 3 major content pages:

                                    PreArrival ( for planning before arriving to study )
                                    Onarrival ( what’s going on in Aberdeen and where to go )
                                    PreDeparture ( considerations for traveling or returning to home base whilst
                                    studying )
                                </p>
                            </div>
                            <div class="col-sm-2 sidenav">
                                <div class="well">
                                    <p>Latest News</p>
                                </div>
                                <div class="well">
                                    <p>Upcoming Events</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="page-footer font-small black">
                        <div class="footer-copyright text-center py-3">© <?php echo date('Y'); ?> Copyright:
                            Aberdeen International Student Directory
                        </div>
                    </footer>

</body>
</html>
