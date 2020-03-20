<?php
session_start();
include_once("resources/includes/config_home.php");
$results = mysqli_query($db, 'SELECT title, advice, username FROM PreDeparture JOIN users ON users.user_ID = PreDeparture.user_ID ');
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 450px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }

        h1 {
            text-align: center;
            text-justify: inter-word;
            color: #0f22ff;
        }
    </style>
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
    <h1> PreDeparture - International Students of Aberdeen </h1>

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <div class="well">
                    <p align="left"><a href="https://ukcisa.org.uk"><b>UKCISA</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a href="https://www.aberdeencity.gov.uk"><b>Aberdeen City Council</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a href="https://www.rgu.ac.uk"><b>RGU</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a href="https://www.abdn.ac.uk"><b>UoA</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a href="https://www.gov.uk/higher-education-courses-find-and-apply"><b>Higher
                                Education Courses</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a href="https://www.ucas.com/what-are-my-options/create-your-ucas-hub-today"><b>UCAS
                                Hub</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a
                            href="https://www.prospects.ac.uk/postgraduate-study/professional-qualifications"><b>Professional
                                Qualifications</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a href="https://www.indeed.co.uk/Apply-UK-jobs"><b>UK Jobs</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a href="https://www.studying-in-uk.org/uk-financial-aid/"><b>UK Financial Aid for
                                International Students</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a href="https://www.gov.uk/browse/visas-immigration/settle-in-the-uk"><b>Settle In
                                The UK</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a
                            href="https://www.ukcisa.org.uk/Information--Advice/Studying--living-in-the-UK/Going-home#layer-5366"><b>Going
                                Home</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a
                            href="https://www.farecompare.com/flights/africa/zone.html?utm_medium=cpc&utm_source=bing&utm_campaign=Flights%20to%20%5Be%5D&utm_content=cheap%20flights%20to%20africa%20(exact)&utm_term=cheap%20flights%20to%20africa&email_jobid=v20200311&msclkid=7563ac0e79d31dc7cae2f2652a04fb1c&utm_source=bing&utm_medium=cpc&utm_campaign=Flights%20to%20%5Be%5D&utm_term=cheap%20flights%20to%20africa&utm_content=cheap%20flights%20to%20africa%20(exact)#quote?quoteKey=CABZCJNB20200407R20200414P1CTF"><b>Cheap
                                Flights To Africa</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a href="https://www.skyscanner.net/flights-to/aq/cheap-flights-to-antarctica.html"><b>Cheap
                                Flights To Antarctica</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a href="https://www.cheapflights.co.uk/flights/Asia/"><b>Cheap Flights To Asia</b></a>
                    </p>
                </div>
                <div class="well">
                    <p align="left"><a href="https://www.jetcost.co.uk/"><b>Cheap Flights To Europe</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a href="https://www.cheapflights.co.uk/flights/South-America/"><b>Cheap Flights To
                                South America</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a href="https://www.cheapflights.co.uk/flights/North-America/"><b>Cheap Flights To
                                North America</b></a></p>
                </div>
                <div class="well">
                    <p align="left"><a href="https://www.cheapflights.co.uk/flights/Oceania/"><b>Cheap Flights To
                                Oceania</b></a></p>
                </div>
            </div>
            <!--<div class="col-sm-2 sidenav">
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
            </div>-->

            <div class="col-sm-8 text-left">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="resources/images/preDepartureTakeOff.jpg" alt="Takeoff" style="width:100%;">
                            <div class="carousel-caption">
                                <h3><b>Before You Think Of Leaving Aberdeen...</b></h3>
                                <p><b>Go Through This Page! I Bet You Are Going To Reconsider Your Options...</b></p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="resources/images/preDepartureAB.jpg" alt="Aerial Photo Of Aberdeen"
                                 style="width:100%;">
                            <div class="carousel-caption">
                                <h3><b>Aberdeen...</b></h3>
                                <p><b>The Friendly Grey Granite City! Live It!! Love It!!!</b></p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="resources/images/preDepartureSkyscraper.jpg" alt="Skyscraper" style="width:100%;">
                            <div class="carousel-caption">
                                <h3><b>Hey...</b></h3>
                                <p><b>There Are Lots Of Opportunities In Here. Make The Sky Your Starting Point!</b></p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="resources/images/preDepartureFlag.jpg" alt="Flag" style="width:100%;">
                            <div class="carousel-caption">
                                <h3><b>Dear Int'l Student,</b></h3>
                                <p><b>ISA Is Sure You'd Love To Become A British Citizen / UK Resident. Don't You?</b>
                                </p>
                            </div>
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

                <h1><b>Before You Leave The UK...</b></h1>
                <p align="justify">Do you as an international student have few months left to finish your course? Are
                    you busy with your final examinations, thesis or dissertation? If yes, then you will be thinking
                    about what to do next. Yeah? Like many international students currently studying here in the UK, you
                    might be impatiently longing to fly back home to see your family and friends or you might be
                    planning to <a href="https://www.gov.uk/higher-education-courses-find-and-apply">apply</a> for
                    another course of study in a university through <a href="https://www.ucas.com/">UCAS</a> or go for
                    an accredited <a href="https://www.prospects.ac.uk/postgraduate-study/professional-qualifications">professional
                        course</a> or to secure a <a href="https://www.indeed.co.uk/Apply-UK-jobs">job</a> in the UK.
                    Whatever your plans are at this stage of your stay in the UK as an international student, these are
                    the big questions, and there are also many practical issues to think about. Nevertheless, it is
                    important to understand that this is a difficult and stressful time for you, and <b><i>ISA</i></b>
                    is here to guide you make the right decisions. This page is designed to help you wisely navigate
                    through this difficult period; and to prepare you for the future before you graduate. Finally,
                    whatever your final decisions are, you should start making the arrangements as early as possible.
                    Remember that in your last months in the UK, examinations, thesis or finishing other works will take
                    up a large part of your time, so planning for your departure or stay should begin early.</p>
                <h5 align="center"><strong><i>Best of luck from all of us at ISA!!!</i></strong></h5>
                <hr>
                <h1><b>Finance & Funding For Further Studies</b></h1>
                <p align="justify">Although the UK is one of the most expensive places to study, it provides financial
                    aid to both home and international students to achieve their academic dreams. The truth remains that
                    most international students do not know about this.</p>
                <p align="justify">Securing financial support for further studies as an international student can be
                    tricky, but there is a wide range of options out there, so you are advised to do plenty of research
                    and explore every avenue. Exchange programmes, international student loans, financial support from
                    private companies, and scholarships are some of the main routes you might want to consider. Why not
                    check out <a
                        href="https://www.rgu.ac.uk/study/international-students/international-fees-costs-funding">RGU</a>'s
                    and <a href="https://www.abdn.ac.uk/study/international/scholarships-and-funding.php">UoA</a>'s
                    Finance and Funding pages for international students?</p>
                <hr>
                <h1><b>Professional Courses For You</b></h1>
                <p align="justify">Have you started planning your next <a
                        href="https://www.rgu.ac.uk/life-at-rgu/support-advice-services/careers-support">career</a>
                    move? Do you want to boost your skills and knowledge, take that first step on the career ladder, <a
                        href="https://www.findcourses.co.uk/">train</a> and gain professional qualifications e.g <a
                        href="http://www.ukcisco.org/cisco-courses/certification/cisco-ccna-routing-switching.html"><i>Cisco
                            CCNA </i></a>that will help you stand out from the pool of international students and
                    graduates here in the UK? If yes, then look no further. Just click <a
                        href="https://www.reed.co.uk/courses/">here</a> to continue your learning with
                    <strong><i>free</i></strong> vast range of professional courses and continuing development (CPD).
                    These are useful for continuing professional development, refreshing your knowledge, or exploring a
                    new area of interest.</p>
                <hr>
                <h1><b>Wish To Become A British Citizen / UK Resident?</b></h1>
                <p align="justify">It is no longer news that many international students, especially those from outside
                    the European Economic Area, coming to study in the United Kingdom end up planning to remain here
                    after studies. Why? Because, great opportunities to start a new life and a successful career for
                    them abound here in the UK. Although, there are <a
                        href="https://www.globalcitizensolutions.com/permanent-residence-uk/">guidelines</a> that every
                    prospective applicant must follow, these rules may be a subject of regular changes.
                    <b><i>ISA</i></b>, advises you to always check the UK Government website for latest updates on <a
                        href="https://www.gov.uk/browse/citizenship/citizenship">citizenship</a> and <a
                        href="https://www.gov.uk/browse/visas-immigration/settle-in-the-uk">living permanently</a> in
                    the UK. This <a
                        href="https://www.studying-in-uk.org/stay-in-uk-after-finishing-your-studies-as-an-international-student/">article</a>
                    contains some basic information about staying in the UK after finishing your studies as an
                    International Student. People applying for UK citizenship or permanent residency are required to
                    take the <a href="https://www.gov.uk/life-in-the-uk-test">Life in the UK Test</a>.</p>
                <hr>
                <h1><b>Cheapest Flights Home</b></h1>
                <p align="justify">Finding cheap airfare isn't easy. Otherwise, everyone would do it. <b>ISA</b>
                    understands how helpless most international students are when it comes to booking flights home, let
                    alone finding cheapest airfares. If you are such an international student, then look no further. You
                    are in the right place. Just check out the links on the left-hand side of this page to make your
                    choice based on the continent you will be flying to. You can find flights well within your budget,
                    leaving you extra money to save or spend once you get to your desired destination.</p>
                <p align="justify">To <b>Africa</b>,<a
                        href="https://www.farecompare.com/flights/africa/zone.html?utm_medium=cpc&utm_source=bing&utm_campaign=Flights%20to%20%5Be%5D&utm_content=cheap%20flights%20to%20africa%20(exact)&utm_term=cheap%20flights%20to%20africa&email_jobid=v20200311&msclkid=48f0fc2a1c8f1d9fce4da2452fb416d1&utm_source=bing&utm_medium=cpc&utm_campaign=Flights%20to%20%5Be%5D&utm_term=cheap%20flights%20to%20africa&utm_content=cheap%20flights%20to%20africa%20(exact)#quote?quoteKey=CABZCJNB20200407R20200414P1CTF"><i>
                            farecompare</i></a>,<a href="https://www.cheapflights.co.uk/flights/Africa/"><i>
                            cheapflights</i></a>,<a href="https://www.statravel.co.uk/cheap-flights-to-africa.htm"><i>
                            statravel</i></a>,<a
                        href="https://www.skyscanner.net/flights-to/f/cheap-flights-to-africa.html"><i>
                            skyscanner</i></a> and<a href="https://www.klm.com"><i> klm</i></a> are the topmost sites
                    for booking cheapest flights to Africa.</p>
                <p align="justify">To <b>Antarctica</b>,<a
                        href="https://www.skyscanner.net/flights-to/aq/cheap-flights-to-antarctica.html"><i>
                            skyscanner</i></a>,<a
                        href="https://www.tripadvisor.co.uk/Flights-g12-Antarctica-Cheap_Discount_Airfares.html"><i>
                            tripadvisor</i></a> and<a
                        href="https://www.expedia.co.uk/Destinations-In-Antarctica.d11700.Flight-Destinations"><i>
                            expedia</i></a> are the topmost sites for booking cheapest flights to Antarctica.</p>
                <p align="justify">To <b>Asia</b>,<a href="https://www.cheapflights.co.uk/flights/Asia/"><i>
                            cheapflights</i></a>,<a
                        href="https://www.kayak.co.uk/flight-routes/United-Kingdom-GB0/Asia-AS0"><i> kayak</i></a>,<a
                        href="https://www.expedia.co.uk/Destinations-In-Asia.d6023099.Flight-Destinations"><i>
                            expedia</i></a>,<a
                        href="https://www.skyscanner.net/flights-to/a/cheap-flights-to-asia.html"><i> skyscanner</i></a>
                    and<a
                        href="https://www.farecompare.com/flights/asia/zone.html?utm_medium=cpc&utm_source=bing&utm_campaign=Flights%20to%20%5Be%5D&utm_content=cheap%20flights%20to%20asia%20(exact)&utm_term=cheap%20flights%20to%20asia&email_jobid=v20200311&msclkid=74607e12d81d1ae6e817207de07349d4&utm_source=bing&utm_medium=cpc&utm_campaign=Flights%20to%20%5Be%5D&utm_term=cheap%20flights%20to%20asia&utm_content=cheap%20flights%20to%20asia%20(exact)#quote?quoteKey=CABZCTYO20200407R20200414P1CTF"><i>
                            farecompare</i></a> are the topmost sites for booking cheapest flights to Asia.</p>
                <p align="justify">To <b>Europe</b>,<a href="https://www.jetcost.co.uk/"><i> jetcost</i></a>,<a
                        href="https://www.cheapflights.co.uk/flights/Europe/"><i> cheapflights</i></a>,<a
                        href="https://www.skyscanner.net/flights-to/e/cheap-flights-to-europe.html"><i>
                            skyscanner</i></a>,<a
                        href="https://www.expedia.co.uk/Destinations-In-Europe.d6022967.Flight-Destinations"><i>
                            expedia</i></a>,<a
                        href="https://www.kayak.co.uk/flight-routes/United-Kingdom-GB0/Europe-EU0"><i> kayak</i></a>,<a
                        href="https://www.lastminute.com/flights/cheap-flights-to-europe.html"><i> lastminute</i></a>
                    and<a
                        href="https://www.omio.com/distil_r_captcha.html?httpReferrer=/flights/cheap-flights-to-europe"><i>
                            omio</i></a> are the topmost sites for booking cheapest flights to Europe.</p>
                <p align="justify">To <b>South America</b>,<a
                        href="https://www.cheapflights.co.uk/flights/South-America/"><i> cheapflights</i></a>,<a
                        href="https://www.skyscanner.net/flights-to/s/cheap-flights-to-south-america.html"><i>
                            skyscanner</i></a>,<a
                        href="https://www.expedia.co.uk/Destinations-In-South-America.d6023117.Flight-Destinations"><i>
                            expedia</i></a> and<a
                        href="https://www.farecompare.com/flights/southamerica/zone.html#quote?quoteKey=CABZCSAO20200407R20200414P1CTF"><i>
                            farecompare</i></a> are the topmost sites for booking cheapest flights to South America.</p>
                <p align="justify">To <b>North America</b>,<a
                        href="https://www.cheapflights.co.uk/flights/North-America/"><i> cheapflights</i></a>,<a
                        href="https://www.skyscanner.net/flights-to/n/cheap-flights-to-north-america.html"><i>
                            skyscanner</i></a>,<a
                        href="https://www.expedia.co.uk/Destinations-In-North-America.d500001.Flight-Destinations"><i>
                            expedia</i></a>,<a href="https://www.statravel.co.uk/cheap-flights-to-north-america.htm"><i>
                            statravel</i></a> and<a href="https://www.globehunters.com/north-america/flights.htm"><i>
                            globehunters</i></a> are the topmost sites for booking cheapest flights to North America.
                </p>
                <p align="justify">To <b>Oceania</b>,<a href="https://www.cheapflights.co.uk/flights/Oceania/"><i>
                            cheapflights</i></a>,<a
                        href="https://www.skyscanner.net/flights-to/o/cheap-flights-to-oceania.html"><i> skyscanner</i></a>
                    and<a href="https://www.globehunters.com/oceania/flights.htm"><i> globehunters</i></a> are the
                    topmost sites for booking cheapest flights to Oceania.</p></p>
                <hr>
                <!--    <h3>*****For The Crowdsourcing*****</h3>
                    <p>Mike, over to you....Keeping To My Words-)</p> -->

            </div>
            <div class="col-sm-2 sidenav">
                <label for="Latest News">Latest News</label>
                <div class="well">
                    <p align="right"><a
                            href="https://www.gov.uk/government/topical-events/coronavirus-covid-19-uk-government-response"><b>Coronavirus
                                (COVID-19): UK Government Response</b></a></p>
                </div>
                <div class="well">
                    <p align="right"><a href="https://www.hps.scot.nhs.uk/a-to-z-of-topics/covid-19/"><b>Coronavirus
                                (COVID-19): Health Protection Scotland</b></a></p>
                </div>
                <div class="well">
                    <p align="right"><a href="https://111.nhs.uk/covid-19"><b>Check If You Have Coronavirus Symptoms:
                                NHS</b></a></p>
                </div>
                <div class="well">
                    <p align="right"><a href="https://rgu.ac.uk/coronavirus-guidance"><b>COVID-19: Advice For Staff And
                                Students</b></a></p>
                </div>
                <div class="well">
                    <p align="right"><a href="https://www.gov.uk/search/news-and-communications"><b>UK Government News &
                                Communications</b></a></p>
                </div>
                <div class="well">
                    <p align="right"><a
                            href="https://www.gov.uk/search/news-and-communications?organisations%5B%5D=uk-visas-and-immigration&parent=uk-visas-and-immigration"><b>UKVI
                                News & Communications</b></a></p>
                </div>
                <div class="well">
                    <p align="right"><a href="https://ukcisa.org.uk/NewsWall"><b>UKCISA News Wall</b></a></p>
                </div>
                <div class="well">
                    <p align="right"><a href="https://news.aberdeencity.gov.uk/"><b>Aberdeen City Council News
                                Releases</b></a></p>
                </div>
                <div class="well">
                    <p align="right"><a href="https://www.rgu.ac.uk/news"><b>RGU News</b></a></p>
                </div>
                <div class="well">
                    <p align="right"><a href="https://www.abdn.ac.uk/news/"><b>UoA News</b></a></p>
                </div>
                <label for="Upcoming Events">Upcoming Events</label>
                <div class="well">
                    <p align="right"><a href="https://www.gov.uk/search/all"><b>UK Government</b></a></p>
                </div>
                <div class="well">
                    <p align="right"><a href="https://www.gov.uk/search/all"><b>UKVI</b></a></p>
                </div>
                <div class="well">
                    <p align="right"><a href="https://ukcisa.org.uk"><b>UKCISA</b></a></p>
                </div>
                <div class="well">
                    <p align="right"><a href="https://www.aberdeencity.gov.uk/events"><b>Aberdeen City Council
                                Events</b></a></p>
                </div>
                <div class="well">
                    <p align="right"><a href="https://www.rgu.ac.uk/events"><b>RGU Events</b></a></p>
                </div>
                <div class="well">
                    <p align="right"><a href="https://www.abdn.ac.uk/events/"><b>UoA Events</b></a></p>
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
                    <form action="PreDepartureCrowd.php" method="post">
                        <div class="form-group">
                            <label for="pwd">Title:</label>
                            <label>
                                <input class="form-control" name="title" required>
                            </label>
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

    <footer class="container-fluid text-center">
        <p>Copyright @ ISA 2020</p>
    </footer>
</body>
</html>