<?php
session_start();
if (!$_SESSION['admin_username']) {

    header("Location: admin_login.php");

}
include "includes/header.php";
include "includes/menu.php";
include "includes/navbar.php";
include "dbConnect.php";

$sql = "SELECT * FROM orders";
$result = $connect->query($sql);
?>

<div id="wrapper">
    <div class="main-content">
        <form>
            <div class="col-lg-12 col-xs-12">
                <h1>Order Tracking</h1><br>
            </div>
            <div class="col-lg-12 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Purchases</h4>
                    <!-- /.box-title -->
                    <!-- /.dropdown js__dropdown -->
                    <div class="table-responsive table-purchases">
                        <table class="table table-striped margin-bottom-10">
                            <thead>
                            <tr>
                                <th style="width:40%;">Product Names</th>
                                <th>Quantity Respectively</th>
                                <th>Total Price</th>
                                <th>Customer Name</th>
                                <th>Customer Address</th>
                                <th>Contact NO#</th>
                                <th>Order Date</th>
                                <th style="width:5%;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while($fetch = $result->fetch_array()){
                            ?>
                            <tr>
                                <td><?php echo $fetch['product_name']; ?></td>
                                <td><?php echo $fetch['quantity']; ?></td>
                                <td>Rs.<?php echo $fetch['product_price']; ?>-/</td>
                                <td><?php echo $fetch['customer_name']; ?></td>
                                <td><?php echo $fetch['customer_address']; ?></td>
                                <td><?php echo $fetch['customer_telephone']; ?></td>
                                <td><?php echo $fetch['order_date']; ?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <!-- /.table -->
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.box-content -->
            </div>

        </form>


        <div class="form-group col-md-12">
            <?php
            include "includes/footer.php";
            ?>
        </div>
    </div>
</div><!--/#wrapper -->
<?php
include "includes/end.php";
?>

