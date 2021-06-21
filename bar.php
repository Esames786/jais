<div class="rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-top-panel rd-navbar-default rd-navbar-white rd-navbar-static-fullwidth-transparent"
         data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="90px"
         data-lg-stick-up-offset="75px" data-auto-height="false" data-lg-auto-height="true"
         data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" data-lg-stick-up="true"
         style=" height : 110px;">
        <div class="rd-navbar-inner">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span>
                </button>
                <!-- Navbar Brand-->
                <div class="rd-navbar-brand" style=" margin-top : -20px; "><a href=""><img width='300' height='110'
                                                                                           src='wt_61187/images/jaisUpdatedPng.png'
                                                                                           alt=''/></a></div>
            </div>
            <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                    <div class="rd-navbar-mobile-scroll">
                        <!-- Navbar Brand Mobile-->
                        <div class="rd-navbar-mobile-brand"><a href=""><img width='250' height='100'
                                                                            src='wt_61187/images/jaisUpdatedPng.png' alt=''/></a>
                        </div>
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="our-history.php">About</a>
                                <!-- RD Navbar Dropdown-->
                                <!-- <ul class="rd-navbar-dropdown">
                                  <li><a href="our-history.html">Our History</a></li>
                                  <li><a href="our-team.html">Our Team</a></li>
                                  <li><a href="testimonials.html">Testimonials</a></li>
                                  <li><a href="faq.html">FAQ Page</a></li>
                                  <li><a href="press.html">Press</a></li>
                                </ul> -->
                            </li>
                            <li><a href="services.php">Services</a>
                                <!--<ul class="rd-navbar-dropdown">
                                    <li><a href="packages.php">Packages</a></li>
                                    <li><a href="services.php">All Services</a></li>
                                </ul>-->
                            </li>
                            <li><a href="packages.php">HAJJ/UMRAH</a></li>
                            <li><a href="#">Tours</a>
                                <!-- RD Navbar Dropdown-->
                                <ul class="rd-navbar-dropdown">
                                    <?php
                                    include "dbConnect.php";
                                    $sql = "SELECT * FROM categories";
                                    $result = $connect->query($sql);
                                    while ($all_category = $result->fetch_array()) {
                                        ?>
                                        <li><a href="destinations.php?id=<?php echo $all_category['category_name']; ?>"
                                               style="font-size: 14px"><?php echo $all_category['category_name']; ?></a>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </li>

                            <!--<li><a href="contacts.php#3">Ticket</a></li>-->
                            <li><a href="visa_detail.php">Visa</a></li>
                            <li><a href="hotels.php">Hotels</a></li>
                            <li><a href="ticket.php">Ticket</a></li>
                            <li><a href="contacts.php">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>