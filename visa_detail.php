<!DOCTYPE html>
<html class="wide wow-animation smoothscroll scrollTo" lang="en">

<!-- Mirrored from livedemo00.template-help.com/wt_61187/destinations.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Aug 2019 12:13:07 GMT -->
<head>
    <!-- Site Title-->
    <title>Visa Details</title>
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
            data-parallax-img= "images/backgrounds/domestic-cover.jpg">

            <div class="parallax-content">
                <div class="shell section-30 section-md-top-125 section-lg-top-210">
                    <div class="veil reveal-md-block">
                        <h1 class="text-bold" style="font-size: 43px">Visa Details</h1>
                    </div>
                    <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-md-top-30 offset-md-top-40 offset-lg-top-125">
                        <li><a class="text-white" href="index.php">Home</a></li>
                        <li><a class="text-white" href="visa_detail.php"  >Visa Details</a></li>

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
                        <h2 class="text-bold text-center text-md-left">VISA DETAILS</h2>
                        <hr class="divider hr-md-left-0 bg-primary">
                        <div class="offset-top-30 offset-md-top-60">
                            <p></p>
                        </div>
                        <div class="range range-xs-center offset-top-30 offset-md-top-60">
                            <?php
                            include "dbConnect.php";

                            $sql = "SELECT * FROM visa";
                            $result = $connect->query($sql);
                            $rowcount = 0;

                            while ($rowcount < 1 && $all_category = $result->fetch_array()) {
                                $rowcount += 1;
                                $cat_fetch=  $all_category['sub_cat'];


                                ?>
                                <div class="cell-xs-10 cell-sm-6">
                                    <!-- Box Member Type 2-->
                                    <div class="box-member box-member-type-2 box-member-modern box-member-caption-offset">

                                        <div class="box-member-img-wrap"><img class="img-responsive" style="width: 500px;height: 370px"
                                                                              src="images/jais_image/visa/<?php echo $all_category['s_product_name']?>/<?php echo $all_category['s_product_image2']?>"
                                                                              alt=""/></div>
                                        <div class="box-member-wrap">
                                            <div class="box-member-caption">
                                                <div class="box-member-caption-inner">
                                                    <div class="box-member-caption-wrap">
                                                        <div class="box-member-title">
                                                            <div class="h4 text-bold text-white"><a href=""><?php echo $all_category['s_product_name']?></a></div>
                                                        </div>
                                                        <div class="box-member-description offset-top-6">
                                                            <p></p>
                                                        </div>
                                                        <div class="offset-top-20">
                                                            <p style="display: none" class="1"><?php echo $all_category['sub_cat']; ?></p>
                                                            <p style="display: none" class="2"><?php echo $all_category['s_product_image']; ?></p>
                                                            <p style="display: none" class="3"><?php echo $all_category['s_product_name']; ?></p>
                                                            <button class="btn btn-primary-inverse" id="<?php echo $all_category['s_product_name']; ?>">GET DETAILS</button>
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

                                $cat_fetch=  $all_category['sub_cat'];


                                ?>
                                <div class="cell-xs-10 cell-sm-6 offset-top-30 offset-sm-top-0">
                                    <!-- Box Member Type 2-->
                                    <div class="box-member box-member-type-2 box-member-modern box-member-caption-offset">

                                        <div class="box-member-img-wrap"><img class="img-responsive" style="width: 500px;height: 370px"
                                                                              src="images/jais_image/visa/<?php echo $all_category['s_product_name']?>/<?php echo $all_category['s_product_image2']?>"
                                                                              alt=""/></div>
                                        <div class="box-member-wrap">
                                            <div class="box-member-caption">
                                                <div class="box-member-caption-inner">
                                                    <div class="box-member-caption-wrap">
                                                        <div class="box-member-title">
                                                            <div class="h4 text-bold text-white"><a href=""><?php echo $all_category['s_product_name']?></a></div>
                                                        </div>
                                                        <div class="box-member-description offset-top-6">
                                                            <p></p>
                                                        </div>
                                                        <div class="offset-top-20">
                                                            <p style="display: none" class="1"><?php echo $all_category['sub_cat']; ?></p>
                                                            <p style="display: none" class="2"><?php echo $all_category['s_product_image']; ?></p>
                                                            <p style="display: none" class="3"><?php echo $all_category['s_product_name']; ?></p>
                                                            <button class="btn btn-primary-inverse" id="<?php echo $all_category['s_product_name']; ?>">GET DETAILS</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php while ($all_category = $result->fetch_array()) {

                                $cat_fetch=  $all_category['sub_cat'];

                                ?>
                                <div class="cell-xs-10 cell-sm-6 offset-top-30">
                                    <!-- Box Member Type 2-->
                                    <div class="box-member box-member-type-2 box-member-modern box-member-caption-offset">


                                        <div class="box-member-img-wrap"><img class="img-responsive" style="width: 500px;height: 370px"
                                                                              src="images/jais_image/visa/<?php echo $all_category['s_product_name']?>/<?php echo $all_category['s_product_image2']?>"
                                                                              alt=""/></div>
                                        <div class="box-member-wrap">
                                            <div class="box-member-caption">
                                                <div class="box-member-caption-inner">
                                                    <div class="box-member-caption-wrap">
                                                        <div class="box-member-title">
                                                            <div class="h4 text-bold text-white"><a href=""><?php echo $all_category['s_product_name']?></a></div>
                                                        </div>
                                                        <div class="box-member-description offset-top-6">
                                                            <p></p>
                                                        </div>
                                                        <div class="offset-top-20">
                                                            <p style="display: none" class="1"><?php echo $all_category['sub_cat']; ?></p>
                                                            <p style="display: none" class="2"><?php echo $all_category['s_product_image']; ?></p>
                                                            <p style="display: none" class="3"><?php echo $all_category['s_product_name']; ?></p>
                                                            <button class="btn btn-primary-inverse" id="<?php echo $all_category['s_product_name']; ?>">GET DETAILS</button>
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


                </div>
            </div>
        </section>
    </main>

    <div class="modal" id="modal" tabindex="-1" role="dialog" style="display: none;margin-top: 200px">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5  class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="section-30">
                        <div class="text-gray-darker">
                        <center style="color: black">Download Visa Details <br>

                            <a id="select" href="images/ie8-panel/warning_bar_0000_us.jpg"
                               download>
                                <span style="color: #1d79b5;"><u>Download Here</u></span>
                            </a></center>
                        <center><p id="download" style=""></p></center>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

<script>


    $(document).ready(function() {
        $("button").click(function(event) {
            var get_id = event.target.id;

            var inputt3 = $('.3');
            var inputt2 = $('.2');
            var inputt1 = $('.1');

            for(var i = 0; i < inputt3.length; i++){

                var get_name =$(inputt3[i]).text();
                var get_img = $(inputt2[i]).text();
                var get_cat = $(inputt1[i]).text();
                if(get_name==get_id){
                    var link = "images/jais_image/visa/" + get_name + "/" + get_img;
                    $("#select").attr("href", link);
                    $('#modal').modal({
                        show: 'true'
                    });
                }
            }

        });
    });




</script>

</body><!-- Google Tag Manager -->
</html>