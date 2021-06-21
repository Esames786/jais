<?php
session_start();
if (!$_SESSION['admin_username']) {

    header("Location: admin_login.php");

}
include "includes/header.php";
include "includes/menu.php";
include "includes/navbar.php";
include "dbConnect.php";

$sql = "SELECT DISTINCT (category_name)FROM package";
$result = $connect->query($sql);

$sql2 = "SELECT * FROM package";
$result2 = $connect->query($sql2);


?>

<div id="wrapper">
    <div class="main-content">
        <form action="allpackage_display.php" method="post">
            <h1>All Package Detail</h1>

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
                    <label for="inputState">Chose Package Name</label>
                    <select id="inputState" class="form-control" name="ven_product2">

                        <option selected>Select..</option>
                        <?php while($fetch2= $result2->fetch_array()) {?>
                            <option><?php echo $fetch2['s_product_name'];?></option>
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

