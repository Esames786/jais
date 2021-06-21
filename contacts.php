<!DOCTYPE html>
<html class="wide wow-animation smoothscroll scrollTo" lang="en">

<!-- Mirrored from livedemo00.template-help.com/wt_61187/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Aug 2019 12:19:51 GMT -->
<head>
    <!-- Site Title-->
    <title>Contacts</title>
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
            <div class="parallax-content" style="background: rgba(000,000,000,0.2)">
                <div class="shell section-30 section-md-top-125 section-lg-top-210">
                    <div class="veil reveal-md-block">
                        <h1 class="text-bold">Contact Us</h1>
                    </div>
                    <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-md-top-30 offset-md-top-40 offset-lg-top-125">
                        <li><a class="text-white" href="index.php">Home</a></li>
                        <li><a class="text-white" href="#">Contact Us</a></li>
                        <!-- <li>Services
                        </li> -->
                    </ul>
                </div>
            </div>
        </section>
    </header>
    <!-- Page Contents-->
    <main class="page-content">
        <!-- Get in touch-->
        <section class="section-90 section-md-111 text-left">
            <div class="shell">
                <div class="range range-xs-center">
                    <div class="cell-xs-10 cell-md-8">
                        <div class="inset-lg-right-40" id="3">
                            <h2 class="text-bold text-center text-md-left">Get in Touch</h2>
                            <hr class="divider hr-sm-left-0 bg-primary">
                            <div class="offset-top-35 offset-md-top-65">
                                <p>You can contact us any way that is convenient for you. We are available 24/7 via fax
                                    or email. You can also use a quick contact form below or visit our office
                                    personally.</p>
                            </div>
                            <div class="offset-top-6">
                                <p>We would be happy to answer your questions.</p>
                            </div>
                            <div class="offset-top-20 offset-md-top-30">
                                <!-- RD Mailform-->
                                <form class="rd-mailform text-left" method="post" action="mail_script.php" >
                                    <div class="range range-xs-center">
                                        <div class="cell-sm-6">
                                            <div class="form-group form-group-label-outside">
                                                <label class="form-label form-label-outside text-dark"
                                                       for="contacts-first-name">First name</label>
                                                <input class="form-control" id="contacts-first-name" type="text"
                                                       name="username" data-constraints="@Required">
                                            </div>
                                            <div class="form-group form-group-label-outside offset-top-20">
                                                <label class="form-label form-label-outside text-dark"
                                                       for="contacts-email">E-mail</label>
                                                <input class="form-control" id="contacts-email" type="email"
                                                       name="user_email" data-constraints="@Email @Required">
                                            </div>
                                        </div>
                                        <div class="cell-sm-6 offset-top-20 offset-sm-top-0">
                                            <div class="form-group form-group-label-outside">
                                                <label class="form-label form-label-outside text-dark"
                                                       for="contacts-last-name">Last name</label>
                                                <input class="form-control" id="contacts-last-name" type="text"
                                                       name="username_l" data-constraints="@Required">
                                            </div>
                                            <div class="form-group form-group-label-outside offset-top-20">
                                                <label class="form-label form-label-outside text-dark"
                                                       for="contacts-phone">Phone</label>
                                                <input class="form-control" id="contacts-phone" type="text"
                                                       name="user_contact" data-constraints="@IsNumeric @Required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-label-outside offset-top-20">
                                        <label class="form-label form-label-outside text-dark" for="contacts-message">Message</label>
                                        <textarea class="form-control" id="contacts-message" name="user_message"
                                                  data-constraints="@Required" style="max-height: 150px;"></textarea>
                                    </div>
                                    <div class="offset-top-18 offset-sm-top-30 text-center text-sm-left">
                                        <div  class="g-recaptcha" data-sitekey="6LdPkcYUAAAAAHfJmuCJ-cq7DPpL_ZaYESYhxZsQ"></div>
                                    </div>
                                    <div class="offset-top-18 offset-sm-top-30 text-center text-sm-left">
                                        <button class="btn btn-primary" id="mms" name="submit" type="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="cell-xs-10 cell-md-4 offset-top-60 offset-md-top-0">
                        <!-- Sidebar-->
                        <aside class="text-left">
                            <div class="inset-md-left-30">
                                <!-- Socials-->
                                <div>
                                    <h5 class="text-bold">Socials</h5>
                                </div>
                                <div class="offset-top-6">
                                    <div class="text-subline"></div>
                                </div>
                                <div class="offset-top-20">
                                    <ul class="list-inline list-inline-2">
                                        <li><a class="icon icon-xxs icon-silver-filled icon-circle fa fa-facebook"
                                               href="#"></a></li>
                                        <li><a class="icon icon-xxs icon-silver-filled icon-circle fa fa-twitter"
                                               href="#"></a></li>
                                        <li><a class="icon icon-xxs icon-silver-filled icon-circle fa fa-google-plus"
                                               href="#"></a></li>
                                        <li><a class="icon icon-xxs icon-silver-filled icon-circle fa fa-instagram"
                                               href="#"></a></li>
                                        <li><a class="icon icon-xxs icon-silver-filled icon-circle fa fa-rss"
                                               href="#"></a></li>
                                    </ul>
                                </div>
                                <!-- Phones-->
                                <div class="offset-top-30 offset-md-top-60">
                                    <div>
                                        <h5 class="text-bold">Phones</h5>
                                    </div>
                                    <div class="offset-top-6">
                                        <div class="text-subline"></div>
                                    </div>
                                    <div class="offset-top-20">
                                        <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                                            <div class="unit-left"><span
                                                    class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-phone"></span>
                                            </div>
                                            <div class="unit-body text-gray-darker">
                                                <p><a class="reveal-block reveal-xs-inline-block text-gray-darker"
                                                      href="">+92-21-35631235-37</a><span
                                                        class="veil reveal-xs-inline-block"> &nbsp;</span><a
                                                        class="reveal-block reveal-xs-inline-block text-gray-darker"
                                                        href=""></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- E-mail-->
                                <div class="offset-top-30 offset-md-top-60">
                                    <div>
                                        <h5 class="text-bold">E-mail</h5>
                                    </div>
                                    <div class="offset-top-6">
                                        <div class="text-subline"></div>
                                    </div>
                                    <div class="offset-top-20">
                                        <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                                            <div class="unit-left"><span
                                                    class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-email-outline"></span>
                                            </div>
                                            <div class="unit-body">
                                                <p><a class="text-primary"
                                                      href=""><span>info@jaisinternational.com</span></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Address-->
                                <div class="offset-top-30 offset-md-top-60">
                                    <div>
                                        <h5 class="text-bold">Address</h5>
                                    </div>
                                    <div class="offset-top-6">
                                        <div class="text-subline"></div>
                                    </div>
                                    <div class="offset-top-20">
                                        <div class="unit unit-horizontal unit-spacing-xs">
                                            <div class="unit-left"><span
                                                    class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-map-marker"></span>
                                            </div>
                                            <div class="unit-body">
                                                <p><a class="text-gray-darker" href="#">Suite # 516, 5th Floor, Madina
                                                    City Mall <br class="veil reveal-sm-inline-block"> Near Zainab
                                                    Market, Abdullah Haroon Road, Saddar, Karachi-74200, Pakistan.</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Opening Hours-->
                                <div class="offset-top-30 offset-md-top-60">
                                    <div>
                                        <h5 class="text-bold">Opening Hours</h5>
                                    </div>
                                    <div class="offset-top-6">
                                        <div class="text-subline"></div>
                                    </div>
                                    <div class="offset-top-20">
                                        <div class="unit unit-horizontal unit-spacing-xs">
                                            <div class="unit-left"><span
                                                    class="icon icon-xxs icon-primary icon-primary-filled icon-circle mdi mdi-calendar-clock"></span>
                                            </div>
                                            <div class="unit-body">
                                                <p class="text-gray-darker">Mon-Fri: 10:00am–6:00pm</p>

                                                <p class="text-gray-darker">Sat: 10:00am–4:00pm</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="" >
                <iframe style="float: none" class="col-md-12 col-xs-12" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d905.0678064222111!2d67.02897604792571!3d24.854584536134542!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc446c9cc76f528a!2sJais%20international!5e0!3m2!1sen!2s!4v1571917753860!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </section>
    </main>
    <!-- Page Footer-->
    <!-- Footer Minimal Dark-->
    <!-- Footer Minimal Dark-->
    <?php include "foot.php"; ?>
</div>

<!-- Java script-->
<script src="wt_61187/js/core.min.js"></script>
<script src="wt_61187/js/script.js"></script>

<script>
    $('#mms').click(function(){
        var f_n =  $('#contacts-first-name').val();
        var l_n =  $('#contacts-last-name').val();
        var em = $('#contacts-email').val();
        var cont = $('#contacts-phone').val();
        var ms = $('#contacts-message').val();
        if(f_n.length > 0 &&  l_n.length > 0 && em.length > 0 && cont.length > 0 && ms.length > 0){
            alert('Mail Sent Successfully');
        }
    });
</script>

</body><!-- Google Tag Manager -->

</html>