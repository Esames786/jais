<!DOCTYPE html>
<html class="wide wow-animation smoothscroll scrollTo" lang="en">

<!-- Mirrored from livedemo00.template-help.com/wt_61187/schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Aug 2019 12:16:16 GMT -->
<head>
    <!-- Site Title-->
    <title>Schedule</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <link rel="icon" href="http://static.livedemo00.template-help.com/wt_61187/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
          href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,700%7CLato:400">
    <link rel="stylesheet" href="wt_61187/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
<!-- Page-->
<div class="page text-center">
    <!-- Page Head-->
    <header class="page-head slider-menu-position">
        <!-- RD Navbar Transparent-->
        <?php include "bar.php" ?>
        <!-- Modern Breadcrumbs-->
        <section
            class="section parallax-container section-height-800 breadcrumb-modern context-dark bg-teal-blue text-lg-left"
            data-parallax-img="images/backgrounds/travel-2.jpg">
            <div class="parallax-content">
                <div class="shell section-30 section-md-top-125 section-lg-top-210">
                    <div class="veil reveal-md-block">
                        <h1 class="text-bold">Schedule</h1>
                    </div>
                    <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-md-top-30 offset-md-top-40 offset-lg-top-125">
                        <li><a class="text-white" href="index.php">Home</a></li>
                        <li><a class="text-white" href="schedule.php">Schedule</a></li>
                        <!-- <li>Services
                        </li> -->
                    </ul>
                </div>
            </div>
        </section>
    </header>

    <!-- Page Contents-->
    <main class="page-content">


        <!-- Hot Deals-->
        <div class="shell offset-top-60 offset-md-top-111">

            <div class="panel panel-md bg-teal-blue context-dark text-lg-left">
                <h3><span class="small text-bold text-white">Make a Request</span></h3>

                <form class="offset-top-10 offset-sm-top-15" method="post" action="mail_script.php">
                    <div class="group group-bottom">
                        <div class="group-item element-fullwidth element-fullwidth-lg">
                            <div class="form-group text-left">
                                <label class="form-label form-label-outside"
                                       for="form-filter-location-from">Full Name</label>

                                <div class="select2-whitout-border shadow-drop-md">
                                    <input type="text" class="form-control" id="form-filter-location-from"
                                           name="f_name" data-minimum-results-for-search="Infinity" style="background: white;" placeholder="name" required />
                                </div>
                            </div>
                        </div>
                        <div class="group-item element-fullwidth element-fullwidth-lg">
                            <div class="form-group text-left">
                                <label class="form-label form-label-outside"
                                       for="form-filter-location-from">Email Address</label>

                                <div class="select2-whitout-border shadow-drop-md">
                                    <input type="email" class="form-control" id="form-filter-location-from"
                                           name="email" data-minimum-results-for-search="Infinity" style="background: white;" placeholder="abc@gmail.com" required />
                                </div>
                            </div>
                        </div>
                        <div class="group-item element-fullwidth element-fullwidth-lg">
                            <div class="form-group text-left">
                                <label class="form-label form-label-outside"
                                       for="form-filter-location-from">Contact</label>

                                <div class="select2-whitout-border shadow-drop-md">
                                    <input type="text" class="form-control" id="form-filter-location-from"
                                           name="f_contact" data-minimum-results-for-search="Infinity" style="background: white;" placeholder="+923331234567" required />
                                </div>
                            </div>
                        </div>
                        <div class="group-item element-fullwidth element-fullwidth-lg">
                            <div class="form-group text-left">
                                <label class="form-label form-label-outside"
                                       for="form-filter-location-from">Traveling From</label>

                                <div class="select2-whitout-border shadow-drop-md">
                                    <input type="text" class="form-control" id="form-filter-location-from"
                                           name="location-from" data-minimum-results-for-search="Infinity" style="background: white;" placeholder="KHI" required />
                                </div>
                            </div>
                        </div>
                        <div class="group-item element-fullwidth element-fullwidth-lg">
                            <div class="form-group text-left">
                                <label class="form-label form-label-outside" for="form-filter-location-to">Traveling
                                    To</label>

                                <div class="select2-whitout-border shadow-drop-md">
                                    <input type="text" placeholder="LHR" class="form-control" id="form-filter-location-to"
                                           name="location-to" data-minimum-results-for-search="Infinity"  style="background: white;" required />
                                </div>
                            </div>
                        </div>


                        <div class="group-item element-fullwidth element-fullwidth-lg">
                            <div class="form-group text-left">
                                <label class="form-label form-label-outside"
                                       for="form-filter-location-to-date">Ticket Type</label>

                                <div class="select2-whitout-border shadow-drop-md">
                                    <select class="form-control" id="form-filter-location-to-date"
                                            onchange="showDiv(this)" required
                                            name="way" data-minimum-results-for-search="Infinity">
                                        <option>One Way</option>
                                        <option>Round Trip</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="group-item element-fullwidth element-fullwidth-lg">
                            <div class="form-group text-left">
                                <label class="form-label form-label-outside"
                                       for="form-filter-location-from-date">Departure Date</label>

                                <div class="select2-whitout-border shadow-drop-md">
                                    <input class="form-control" id="form-filter-location-from-date"
                                           style="background: white"
                                           name="dep_date" data-minimum-results-for-search="Infinity" type="date" required>
                                </div>
                            </div>
                        </div>
                        <div class="group-item element-fullwidth element-fullwidth-md" id="dis" style="display: none">
                            <div class="form-group text-left">
                                <label class="form-label form-label-outside"
                                       for="form-filter-location-from-date">Arival Date</label>

                                <div class="select2-whitout-border shadow-drop-md">
                                    <input class="form-control" id="form-filter-location-from-date"
                                           style="background: white"
                                           name="arr_date" data-minimum-results-for-search="Infinity" type="date">
                                </div>
                            </div>
                        </div>

                        <div class="group-item element-fullwidth element-fullwidth-xs">
                            <div class="form-group text-left">
                                <label class="form-label form-label-outside" for="form-filter-location-to">
                                    AirLine</label>

                                <div class="select2-whitout-border shadow-drop-md">
                                    <select class="form-control" id="form-filter-location-to"
                                            name="flight_name" data-minimum-results-for-search="Infinity" required >
                                        <option>PIA</option>
                                        <option>Emirates</option>
                                        <option>Fly Dubai</option>
                                        <option>Qatar Airways</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="group-item element-fullwidth-xs offset-lg-top-4">
                            <div class="form-group text-left">
                                <label class="form-label form-label-outside" for="passengers">Adults</label>

                                <div class="select2-whitout-border shadow-drop-md">
                                    <input class="form-control" id="passengers" name="adults" style="background: white;"
                                           value="0" type="number"
                                           data-minimum-results-for-search="Infinity" required />
                                </div>
                            </div>
                        </div>

                        <div class="group-item  element-fullwidth-xs offset-lg-top-4">
                            <div class="form-group text-left">
                                <label class="form-label form-label-outside" for="passengers">Child</label>

                                <div class="select2-whitout-border shadow-drop-md">
                                    <input class="form-control" id="passengers" name="childs" style="background: white;"
                                           value="0" type="number"
                                           data-minimum-results-for-search="Infinity" required />
                                </div>
                            </div>
                        </div>

                        <div class="group-item  element-fullwidth-xs offset-lg-top-4">
                            <div class="form-group text-left">
                                <label class="form-label form-label-outside" for="passengers">Child Age</label>

                                <div class="select2-whitout-border shadow-drop-md">
                                    <input class="form-control" id="passengers" name="childs_age"
                                           style="background: white;"
                                           value="0" type="number"
                                           data-minimum-results-for-search="Infinity" required />
                                </div>
                            </div>
                        </div>

                        <div class="group-item  element-fullwidth-xs offset-lg-top-4">
                            <div class="form-group text-left">
                                <label class="form-label form-label-outside"
                                       for="passengers">Infants</label>

                                <div class="select2-whitout-border shadow-drop-md">

                                    <input class="form-control" id="passengers" name="infants"
                                           style="background: white;" value="0" type="number"
                                           data-minimum-results-for-search="Infinity" required />
                                </div>
                            </div>
                        </div>

                        <div class="group-item  element-fullwidth-xs offset-lg-top-4">
                            <div class="form-group text-left">
                                <label class="form-label form-label-outside"
                                       for="passengers">Infants Age</label>

                                <div class="select2-whitout-border shadow-drop-md">

                                    <input class="form-control" id="passengers" name="infants_age"
                                           style="background: white;" value="0" type="number"
                                           data-minimum-results-for-search="Infinity" required />
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="group-item  element-fullwidth-md offset-lg-top-4">
                            <div class="g-recaptcha" data-sitekey="6LdPkcYUAAAAAHfJmuCJ-cq7DPpL_ZaYESYhxZsQ"></div>
                        </div>
                        <br>

                        <div class="group-item element-fullwidth element-fullwidth-md offset-lg-top-4">
                            <button name="submit1" class="shadow-drop-md btn btn-block btn-primary-inverse"
                                    type="submit">
                                Send
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="offset-top-60">
                <div class="range range-xs-center range-md-left">
                    <div class="cell-sm-10 cell-lg-12">

                    </div>
                </div>
            </div>

    </main>
    <!-- Page Footer-->
    <!-- Footer Minimal Dark-->
    <?php include "foot.php"; ?>

</div>
<!-- Java script-->
<script src="wt_61187/js/jquerry.js"></script>
<script src="js/html5shiv.min.js"></script>
<script src="wt_61187/js/core.min.js"></script>
<script src="wt_61187/js/script.js"></script>

<script type="text/javascript">
    function showDiv(select) {
        if (select.value == 'One Way') {
            document.getElementById('dis').style.display = "none";
        } else {
            document.getElementById('dis').style.display = "inline-block";
        }
    }
</script>

<script>


    $("#select").click(function () {
        $('#download').html("Wait Download In progress");
    });

</script>

</body><!-- Google Tag Manager -->


</html>