<?php
session_start();
if (!$_SESSION['admin_username']) {

    header("Location: admin_login.php");

}
include "includes/header.php";
include "includes/menu.php";
include "includes/navbar.php";
include "dbConnect.php";


if (isset($_POST['submit'])) {
    $ven_product = $_POST['ven_product1'];
    $sql = "SELECT * FROM sub_products WHERE category_name ='$ven_product'";
    $result = $connect->query($sql);

    ?>


    <div id="wrapper">
    <div class="main-content">
    <form action="all_vendor_display.php" method="post" class="form-horizontal">
    <div class="form-row">
    <div class="container">
    <div class="row col-md-10 custyle">
    <table class="table table-striped custab" width="600" border="1" cellpadding="1"
    cellspacing="1">
    <tr>
        <th>Product Name</th>
        <th>Product Desc</th>
        <th>Image</th>
        <th>Category</th>
        <th>Editor</th>

    </tr>
    <?php
    while ($employee = $result->fetch_array()) {
        $s = $employee['s_product_name'];
        echo "<tr>";
        echo "<td>" . $employee['s_product_name'] . "</td>";
        echo "<td>" . $employee['s_product_desc'] . "</td>";
        echo "<td>" . $employee['s_product_image']. "</td>";
        echo "<td>" . $employee['category_name'] . "</td>";

        $s=$employee['s_product_name'];
        ?>
        <td> <a href="all_sub_products_script.php?id=<?php echo "$s" ?>" name="submit" class="btn btn-primary">Delete</a> </td>
        </tr>
        <?php

    }
}

?>
<div class="#step1">




</div>

    </table>
    </div>
    </div>
    </div>

    </form>


<?php
include "includes/footer.php";
?>
    </div>
    <!-- /.main-content -->
    </div><!--/#wrapper -->
<div class="col-md-12 col-lg-offset-8">
<?php
include "includes/end.php";
?>
</div>
