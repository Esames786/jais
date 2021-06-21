<?php
session_start();
if (!$_SESSION['admin_username']) {

    header("Location: admin_login.php");

}
include "includes/header.php";
include "includes/menu.php";
include "includes/navbar.php";
include "dbConnect.php";



    $sql = "SELECT * FROM products";
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
        <th>Product Price</th>
        <th>Product Description</th>
        <th>Product Address</th>
        
        <th>Category</th>
        <th>Sub Product</th>
        <th>Editor</th>

    </tr>
    <?php
    while ($employee = $result->fetch_array()) {
        $s = $employee['product_name'];
        echo "<tr>";
        echo "<td>" . $employee['product_name'] . "</td>";
        echo "<td>" . $employee['product_price'] . "</td>";
        echo "<td>" . $employee['product_desc'] . "</td>";
        echo "<td>" . $employee['product_address'] . "</td>";

        echo "<td>" . $employee['category_name'] . "</td>";
        echo "<td>" . $employee['s_product_name'] . "</td>";
        $s=$employee['product_name'];
        ?>
        <td> <a href="add_feature_script.php?id=<?php echo "$s" ?>" name="submit" class="btn btn-primary">Add to Feature</a> </td>
        </tr>
        <?php

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
<?php
include "includes/end.php";
?>

