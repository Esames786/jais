<?php
session_start();
if (!$_SESSION['admin_username']) {

    header("Location: admin_login.php");

}
include "includes/header.php";
include "includes/menu.php";
include "includes/navbar.php";
include "dbConnect.php";

$sql = "SELECT * FROM feature_products";
$result = $connect->query($sql);
?>


<div id="wrapper">
    <div class="main-content">
        <form class="form-horizontal" action="all_feature_display.php" method="post">
            <div class="form-row">
                <div class="container">
                    <div class="row col-md-8 col-md-offset-2 custyle">
                        <table class="table table-striped custab">
                            <thead>
                            <h2>All Categorys</h2>
                            <a href="add_feature.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new
                                Feature</a>
                            <tr>
                                <th>Product Name</th>
                                <th>Sub Product</th>
                                <th>Image1</th>
                                <th>Price</th>
                                <th class="text-center">Category Name</th>
                                <th>Editor</th>
                            </tr>
                            </thead>
                            <?php
                            while ($all_category = $result->fetch_array()) {

                                echo "<tr>";
                                echo "<td>" . $all_category['product_name'] . "</td>";
                                echo "<td>" . $all_category['s_product_name'] . "</td>";
                                echo "<td>" . $all_category['product_img1'] . "</td>";
                                echo "<td>" . $all_category['product_price'] . "</td>";
                                echo "<td>" . $all_category['category_name'] . "</td>";
                                $s= $all_category['product_name'];
                            ?>
                            <td> <a href="feature_delete.php?id=<?php echo "$s" ?>" type="submit" name="submit" class="btn btn-danger">Delete</a> </td>
                            </tr>
                            <?php } ?>

                        </table>
                    </div>
                </div>
            </div>

        </form>

        <!--drop down end -->

        <?php
        include "includes/footer.php";
        ?>
    </div>
    <!-- /.main-content -->
</div><!--/#wrapper -->
<?php
include "includes/end.php";
?>
