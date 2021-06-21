<?php session_start();
if (!$_SESSION['admin_username']) {

    header("Location: admin_login.php");

}
?>
<?php
include "includes/header.php";
include "includes/menu.php";
include "includes/navbar.php";
?>



<div id="wrapper mainpage">
    <div class="main-content">
        <div class="row small-spacing">
            <!-- /.col-xs-12 -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Orders</h4>
                    <!-- /.box-title -->
                    <div class="dropdown js__drop_down">
                        <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                        <ul class="sub-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else there</a></li>
                            <li class="split"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        <!-- /.sub-menu -->
                    </div>
                    <!-- /.dropdown js__dropdown -->
                    <div class="content widget-stat">
                        <div class="percent bg-warning"><i class="fa fa-line-chart"></i>53%</div>
                        <!-- /.percent -->
                        <div class="right-content">
                            <h2 class="counter">837</h2>
                            <!-- /.counter -->
                            <p class="text">Projects</p>
                            <!-- /.text -->
                        </div>
                        <!-- /.right-content -->
                        <div class="clear"></div>
                        <!-- /.clear -->
                        <div class="process-bar">
                            <div class="bar-bg bg-warning"></div>
                            <div class="bar js__width bg-warning" data-width="70%"></div>
                            <!-- /.bar js__width bg-success -->
                        </div>
                        <!-- /.process-bar -->
                    </div>
                    <!-- /.content widget-stat -->
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-lg-3 col-md-6 col-xs-12 -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Customer's</h4>
                    <!-- /.box-title -->
                    <div class="dropdown js__drop_down">
                        <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                        <ul class="sub-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else there</a></li>
                            <li class="split"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        <!-- /.sub-menu -->
                    </div>
                    <!-- /.dropdown js__dropdown -->
                    <div class="content widget-stat-chart">
                        <div class="c100 p76 small blue js__circle">
                            <span>76%</span>

                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <!-- /.c100 p58 -->
                        <div class="right-content">
                            <h2 class="counter">804</h2>
                            <!-- /.counter -->
                            <p class="text">Disk usage</p>
                            <!-- /.text -->
                        </div>
                        <!-- /.right-content -->
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-lg-3 col-md-6 col-xs-12 -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Visitor's</h4>
                    <!-- /.box-title -->
                    <div class="dropdown js__drop_down">
                        <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                        <ul class="sub-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else there</a></li>
                            <li class="split"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        <!-- /.sub-menu -->
                    </div>
                    <!-- /.dropdown js__dropdown -->
                    <div class="content widget-stat">
                        <div class="percent bg-danger"><i class="fa fa-line-chart"></i>+40%</div>
                        <!-- /.percent -->
                        <div class="right-content">
                            <h2 class="counter">976</h2>
                            <!-- /.counter -->
                            <p class="text">Visitors today</p>
                            <!-- /.text -->
                        </div>
                        <!-- /.right-content -->
                        <div class="clear"></div>
                        <!-- /.clear -->
                        <div class="process-bar">
                            <div class="bar-bg bg-danger"></div>
                            <div class="bar js__width bg-danger" data-width="70%"></div>
                            <!-- /.bar js__width bg-success -->
                        </div>
                        <!-- /.process-bar -->
                    </div>
                    <!-- /.content widget-stat -->
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-lg-3 col-md-6 col-xs-12 -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Monthly Report</h4>
                    <!-- /.box-title -->
                    <div class="dropdown js__drop_down">
                        <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                        <ul class="sub-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else there</a></li>
                            <li class="split"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        <!-- /.sub-menu -->
                    </div>
                    <!-- /.dropdown js__dropdown -->
                    <div class="content widget-stat-chart">
                        <div class="c100 p94 small green js__circle">
                            <span>94%</span>

                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <!-- /.c100 p58 -->
                        <div class="right-content">
                            <h2 class="counter">3922</h2>
                            <!-- /.counter -->
                            <p class="text">Sales</p>
                            <!-- /.text -->
                        </div>
                        <!-- /.right-content -->
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.box-content -->
            </div>

            <!-- /.col-lg-6 col-xs-12 -->

        </div>
        <!-- /.row -->


    </div>
    <!-- /.main-content -->
</div><!--/#wrapper -->
<div class="col-lg-offset-3">
<?php include "includes/footer.php"; ?>
</div>
<?php

include "includes/end.php";
?>
