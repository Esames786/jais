<?php
session_start();
if (isset($_SESSION['admin_username'])) {
    $name= $_SESSION['admin_username'];
}

include "dbConnect.php";

$sql = "SELECT * FROM admin_login WHERE admin_username='$name'";

$result = $connect->query($sql);
$row = $result->fetch_array();
$namee=$row["admin_username"];
?>
<div class="main-menu">
    <header class="header">
        <a href="index.php" class="logo">JAIS INTERNATIONAL</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
        <div class="user">
            <a href="#" class="avatar"><img src="../wt_61187/images/jaislogo.png" alt="" style="width: 80px;height: 80px"><span class="status online"></span></a>
            <h5 class="name"><a href=""><?php echo $namee; ?></a></h5>
            <h5 class="position">Administrator</h5>
            <!-- /.name -->
        </div>
        <!-- /.user -->
    </header>
    <!-- /.header -->
    <div class="content">

        <div class="navigation">
            <h5 class="title">Navigation</h5>
            <!-- /.title -->
            <ul class="menu js__accordion">
                <li>
                    <a class="waves-effect" href="index.php"><i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
                </li>
                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-flag"></i><span>Categories</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="all_category.php">All Categories</a></li>
                        <li><a href="add_category.php">Add Categories</a></li>

                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-plane"></i><span>TOURS</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="add_sub_product.php">Add Tour</a></li>
                        <li><a href="all_sub_products.php">All Tour Details</a></li>

                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-sticky-note"></i><span>Tour Details</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="add_product_by_vendor.php">Add Tour Details</a></li>
                        <li><a href="All_vendor.php">All Tour Details</a></li>

                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>

                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-book"></i><span>Visa </span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="add_visa.php">Add Visa</a></li>
                        <li><a href="all_visa.php">All Visa Details</a></li>

                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>

                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-gift"></i><span>Umrah/Hajj</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="addpackage.php">Add Umrah/Hajj</a></li>
                        <li><a href="allpackage.php">All Umrah/Hajj</a></li>

                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-search-plus"></i><span>Umrah/Hajj Detail</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="addpackage_details.php">Add Umrah/Hajj Details</a></li>
                        <li><a href="allpackage_details.php">All Umrah/Hajj Details</a></li>

                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-adjust"></i><span>Hotels Detail</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="addhotel.php">Add Hotel</a></li>
                        <li><a href="allhotel.php">All Hotels</a></li>

                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
            </ul>
            <!-- /.menu js__accordion -->

            <!-- /.menu js__accordion -->
            <h5 class="title">Additions</h5>
            <!-- /.title -->

            <!-- /.menu js__accordion -->
        </div>
        <!-- /.navigation -->
    </div>
    <!-- /.content -->
</div>
<!-- /.main-menu -->
