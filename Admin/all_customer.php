<?php
session_start();
if (!$_SESSION['admin_username']) {

    header("Location: admin_login.php");

}
include "includes/header.php";
include "includes/menu.php";
include "includes/navbar.php";

?>

<div id="wrapper">
    <div class="main-content">
        <form>
            <div class="col-lg-12 col-xs-12">
                <h1>All Customers</h1><br>
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
                                <th style="width:40%;">Name</th>
                                <th>Gender</th>
                                <th>City</th>
                                <th>Province</th>
                                <th>Email</th>
                                <th>telephone</th>
                                <th>address</th>
                                <th>password</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM customer_register";
                            $result = $connect->query($sql);
                            while($fetch = $result->fetch_array()){
                            ?>
                            <tr>
                                <td><?php echo $fetch['first_name'].' '.$fetch['last_name']; ?></td>
                                <td><?php echo $fetch['gender']; ?></td>
                                <td><?php echo $fetch['city']; ?></td>
                                <td><?php echo $fetch['province']; ?></td>
                                <td><?php echo $fetch['email']; ?></td>
                                <td><?php echo $fetch['telephone']; ?></td>
                                <td><?php echo $fetch['address']; ?></td>
                                <td><?php echo $fetch['password']; ?></td>
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

