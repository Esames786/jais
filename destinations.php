<?php

$id = $_GET['id'];

$img = "";
// echo "<script>alert('$id')</script>";

if ($id == "International Tours") {
    $img = "images/backgrounds/travel-2.jpg";

} else
    $img = "images/backgrounds/domestic-cover.jpg";

?>


<!DOCTYPE html>
<html class="wide wow-animation smoothscroll scrollTo" lang="en">

<!-- Mirrored from livedemo00.template-help.com/wt_61187/destinations.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Aug 2019 12:13:07 GMT -->
<head>
    <!-- Site Title-->
    <title><?php echo $id ?></title>
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

</head>
<body>
<!-- Page-->
<div class="page text-center">
    <!-- Page Head-->
    <header class="page-head slider-menu-position">
        <!-- RD Navbar Transparent-->
        <?php include "bar.php"; ?>
        <!-- Modern Breadcrumbs-->
        <section
            class="section parallax-container section-height-800 breadcrumb-modern context-dark bg-teal-blue text-lg-left"
            data-parallax-img="<?php echo $img ?>">

            <div class="parallax-content">
                <div class="shell section-30 section-md-top-125 section-lg-top-210">
                    <div class="veil reveal-md-block">
                        <h1 class="text-bold" style="font-size: 43px"><?php echo $id ?></h1>
                    </div>
                    <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-md-top-30 offset-md-top-40 offset-lg-top-125">
                        <li><a class="text-white" href="index.php">Home</a></li>
                        <li><a class="text-white" href="destinations.php"><?php echo $id ?></a></li>

                    </ul>
                </div>
            </div>
        </section>
    </header>
    <!-- Page Contents-->
    <main class="page-content">
        <!-- Where Will You Go?-->
        <section class="section-90 section-md-111 text-left">
            <div class="shell">
                <div class="range range-xs-center">
                    <div class="cell-md-8">
                        <h2 class="text-bold text-center text-md-left">Where Will You Go?</h2>
                        <hr class="divider hr-md-left-0 bg-primary">
                        <div class="offset-top-30 offset-md-top-60">
                            <p>JAIS International (Pvt) Ltd. Travel Agent & Tour operator offers a real variety of
                                traveling destinations, whatever your initial
                                objective is. We Offers many International & Domestic Tour Packages in a resonable price
                                with good services</p>
                            <a class="btn btn-danger" id="btn">Watch Promotion Video Now</a>
                        </div>
                        <div class="range range-xs-center offset-top-30 offset-md-top-60">
                            <?php
                            include "dbConnect.php";
                            $sql = "SELECT * FROM sub_products where category_name = '$id'";
                            $result = $connect->query($sql);
                            $rowcount = 0;
                            while ($rowcount < 1 && $all_category = $result->fetch_array()) {
                                $rowcount += 1;
                                ?>
                                <div class="cell-xs-10 cell-sm-6">
                                    <!-- Box Member Type 2-->
                                    <div
                                        class="box-member box-member-type-2 box-member-modern box-member-caption-offset">
                                        <div class="box-member-img-wrap"><img class="img-responsive"
                                                                              style="width: 500px;height: 370px"
                                                                              src="images/jais_image/<?php echo $all_category['category_name'] ?>/<?php echo $all_category['s_product_name'] ?>/<?php echo $all_category['s_product_image'] ?>"
                                                                              alt=""/></div>
                                        <div class="box-member-wrap">
                                            <div class="box-member-caption">
                                                <div class="box-member-caption-inner">
                                                    <div class="box-member-caption-wrap">
                                                        <div class="box-member-title">
                                                            <div class="h4 text-bold text-white"><a
                                                                    href="schedule.php?id=<?php echo $all_category['s_product_name'] ?>"><?php echo $all_category['s_product_name'] ?></a>
                                                            </div>
                                                        </div>
                                                        <div class="box-member-description offset-top-6">
                                                            <p></p>
                                                        </div>
                                                        <div class="offset-top-20"><a class="btn btn-primary-inverse"
                                                                                      href="schedule.php?id=<?php echo $all_category['s_product_name'] ?>">GET
                                                                DETAILS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php

                            while ($rowcount < 2 && $all_category = $result->fetch_array()) {
                                $rowcount += 1;
                                ?>
                                <div class="cell-xs-10 cell-sm-6 offset-top-30 offset-sm-top-0">
                                    <!-- Box Member Type 2-->
                                    <div
                                        class="box-member box-member-type-2 box-member-modern box-member-caption-offset">
                                        <div class="box-member-img-wrap"><img class="img-responsive"
                                                                              style="width: 500px;height: 370px"
                                                                              src="images/jais_image/<?php echo $all_category['category_name'] ?>/<?php echo $all_category['s_product_name'] ?>/<?php echo $all_category['s_product_image'] ?>"
                                                                              alt=""/></div>
                                        <div class="box-member-wrap">
                                            <div class="box-member-caption">
                                                <div class="box-member-caption-inner">
                                                    <div class="box-member-caption-wrap">
                                                        <div class="box-member-title">
                                                            <div class="h4 text-bold text-white"><a
                                                                    href="schedule.php?id=<?php echo $all_category['s_product_name'] ?>"><?php echo $all_category['s_product_name'] ?></a>
                                                            </div>
                                                        </div>
                                                        <div class="box-member-description offset-top-6">
                                                            <p></p>
                                                        </div>
                                                        <div class="offset-top-20"><a class="btn btn-primary-inverse"
                                                                                      href="schedule.php?id=<?php echo $all_category['s_product_name'] ?>">Get
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php while ($all_category = $result->fetch_array()) { ?>
                                <div class="cell-xs-10 cell-sm-6 offset-top-30">
                                    <!-- Box Member Type 2-->
                                    <div
                                        class="box-member box-member-type-2 box-member-modern box-member-caption-offset">
                                        <div class="box-member-img-wrap"><img class="img-responsive"
                                                                              style="width: 500px;height: 370px"
                                                                              src="images/jais_image/<?php echo $all_category['category_name'] ?>/<?php echo $all_category['s_product_name'] ?>/<?php echo $all_category['s_product_image'] ?>"
                                                                              alt=""/></div>
                                        <div class="box-member-wrap">
                                            <div class="box-member-caption">
                                                <div class="box-member-caption-inner">
                                                    <div class="box-member-caption-wrap">
                                                        <div class="box-member-title">
                                                            <div class="h4 text-bold text-white"><a
                                                                    href="schedule.php?id=<?php echo $all_category['s_product_name'] ?>"><?php echo $all_category['s_product_name'] ?></a>
                                                            </div>
                                                        </div>
                                                        <div class="box-member-description offset-top-6">
                                                            <p></p>
                                                        </div>
                                                        <div class="offset-top-20"><a class="btn btn-primary-inverse"
                                                                                      href="schedule.php?id=<?php echo $all_category['s_product_name'] ?>">Get
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="text-center text-md-left offset-top-60">
                            <!-- Classic Pagination-->
                            <nav>
                                <ul class="pagination-classic">
                                    <li><a class="icon icon-xxs icon-primary fa fa-chevron-left" href="#"></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a class="icon icon-xxs icon-primary fa fa-chevron-right" href="#"></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- <div class="cell-md-4 offset-top-60 offset-md-top-0">
                        <div class="inset-md-left-30">
                           
                            <div class="panel panel-xl panel-vertical panel-sm-resize panel-md-resize section-bottom-40 bg-teal-blue context-dark text-lg-left">
                                <h5 class="text-bold"><span class="big"><span class="big"><span
                                        class="big">Book Tour</span></span></span></h5>

                                <form class="offset-top-25">
                                    <div class="group group-top">
                                        <div class="group-item element-fullwidth">
                                            <div class="form-group text-left">
                                                <label class="form-label form-label-outside" for="traveling-from">Travelling
                                                    From</label>

                                                <div class="select2-whitout-border shadow-drop-md">
                                                    <select class="form-control" id="traveling-from"
                                                            name="traveling-from"
                                                            data-minimum-results-for-search="Infinity">
                                                        <option value="1">Karachi</option>
                                                        <option value="2">Lahore</option>
                                                        <option value="3">Islamabad</option>
                                                        <option value="4">Faislabad</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group-item element-fullwidth offset-top-6 offset-xs-top-0 offset-lg-top-6">
                                            <div class="form-group text-left">
                                                <label class="form-label form-label-outside" for="traveling-to">Traveling
                                                    To</label>

                                                <div class="select2-whitout-border shadow-drop-md">
                                                    <select class="form-control" id="traveling-to" name="traveling-to"
                                                            data-minimum-results-for-search="Infinity">
                                                        <option value="1">Islamabad</option>
                                                        <option value="2">Karachi</option>
                                                        <option value="3">Laore</option>
                                                        <option value="4">Faisalabad</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group-item element-fullwidth element-fullwidth-xs offset-top-6 offset-md-top-0 offset-lg-top-6">
                                            <div class="form-group text-left">
                                                <label class="form-label form-label-outside" for="depart-date">Departure
                                                    Date</label>

                                                <div class="select2-whitout-border shadow-drop-md">
                                                    <select class="form-control" id="depart-date" name="depart-date"
                                                            data-minimum-results-for-search="Infinity">
                                                        <option value="1">7-11-2016</option>
                                                        <option value="2">8-11-2016</option>
                                                        <option value="3">9-11-2016</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group-item element-fullwidth element-fullwidth-xs offset-top-6 offset-md-top-0 offset-lg-top-6">
                                            <div class="form-group text-left">
                                                <label class="form-label form-label-outside"
                                                       for="passengers">Adults</label>

                                                <div class="select2-whitout-border shadow-drop-md">
                                                    <select class="form-control" id="passengers" name="passengers"
                                                            data-minimum-results-for-search="Infinity">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group-item element-fullwidth element-fullwidth-xs offset-top-6 offset-md-top-0 offset-lg-top-6">
                                            <div class="form-group text-left">
                                                <label class="form-label form-label-outside"
                                                       for="passengers">Childs</label>

                                                <div class="select2-whitout-border shadow-drop-md">
                                                    <select class="form-control" id="passengers" name="passengers"
                                                            data-minimum-results-for-search="Infinity">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group-item element-fullwidth element-fullwidth-xs offset-top-6 offset-md-top-0 offset-lg-top-6">
                                            <div class="form-group text-left">
                                                <label class="form-label form-label-outside"
                                                       for="passengers">Infants</label>

                                                <div class="select2-whitout-border shadow-drop-md">
                                                    <select class="form-control" id="passengers" name="passengers"
                                                            data-minimum-results-for-search="Infinity">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="group-item reveal-block reveal-md-inline-block text-center text-md-left offset-top-15">
                                            <button class="btn btn-primary-inverse shadow-drop-md" type="button">
                                                Send Request
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                           
                            <div class="offset-top-42 text-center text-md-left">
                              
                                <div class="box"
                                     style="background: #033958 url(../../static.livedemo00.template-help.com/wt_61187/images/pages/services.jpg) center/cover no-repeat">
                                    

                                    <div class="offset-top-15 offset-md-top-30"><a class="btn btn-primary"
                                                                                   href="services.php">Check Our Services
                                        </a></div>
                                </div>
                                <br>
                              
                            </div>
                            

                            
                        </div>
                    </div>
 -->

                </div>
            </div>
        </section>
    </main>

    <div class="modal" id="modal" tabindex="-1" role="dialog" style="display: none;margin-top: 100px;z-index: 100000;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background: none">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size: 40px;color: red">&times;</span>
                    </button>
                    <div class="section-30">
                        <div class="text-gray-darker">
                            <center>
                                <iframe frameborder="0" height="360" width="480" class="col-xs-12"
                                        src="https://youtube.com/embed/07nEIMiRnQk?autoplay=1&controls=0&showinfo=0&autohide=1">
                                </iframe>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Footer-->
    <!-- Footer Minimal Dark-->
    <?php include "foot.php"; ?>
</div>

<!-- Java script-->

<script src="wt_61187/js/core.min.js"></script>
<script src="wt_61187/js/script.js"></script>

<?php
if ($id == "Domestic Tours") {
?>
<script>
    $('#btn').click(function() {
        $('#modal').modal({
            show: 'true'
        });
    });
    $('#modal').modal({
        show: 'true'
    });

</script>
<?php } ?>
</body><!-- Google Tag Manager -->
</html>