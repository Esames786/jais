<?php
session_start();
if (!$_SESSION['admin_username']) {

    header("Location: admin_login.php");

}
include "includes/header.php";
include "includes/menu.php";
include "includes/navbar.php";
include "dbConnect.php";

$sql = "SELECT DISTINCT (category_name)FROM products";
$result = $connect->query($sql);


$sql1 = "SELECT DISTINCT (s_product_name) FROM products";
$result1 = $connect->query($sql1);

?>

<div id="wrapper">
    <div class="main-content">
        <form action="all_vendor_display.php" method="post">
            <h1>All Tour's Detail</h1>

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputState">Chose Category</label>
                    <select id="inputState" class="form-control" name="ven_product1">

                        <option selected>Select..</option>
                        <?php while($fetch= $result->fetch_array()) {?>
                            <option><?php echo $fetch['category_name'];?></option>
                        <?php } ?>
                    </select>

                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Tour Name</label>
                    <select id="inputState" class="form-control" name="ven_product2">

                        <option selected>Select..</option>
                        <?php while($fetch1= $result1->fetch_array()) {?>
                            <option><?php echo $fetch1['s_product_name'];?></option>
                        <?php } ?>
                    </select>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-4" style="width: 100%"><br>
                        <button type="submit" name="submit" value="ok" class="btn btn-primary">Search</button>
                    </div>
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

