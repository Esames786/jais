<?php
session_start();
if (!$_SESSION['admin_username']) {

    header("Location: admin_login.php");

}
include "includes/header.php";
include "includes/menu.php";
include "includes/navbar.php";
include "dbConnect.php";

$sql = "SELECT * FROM categories";
$result = $connect->query($sql);
?>


<div id="wrapper">
    <div class="main-content">
        <form class="form-horizontal" action="all_category.php" method="post">
            <div class="form-row">
                <div class="container">
                    <div class="row col-md-8 col-md-offset-2 custyle">
                        <table class="table table-striped custab">
                            <thead>
                            <h2>All Categorys</h2>
                            <a href="add_category.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new
                                categories</a>
                            <tr>
                                <th>Category Name</th>
                                <th>Category Desc</th>
                                <th class="text-center">Logo</th>
                                <th>Editor</th>
                            </tr>
                            </thead>
                            <?php
                            while ($all_category = $result->fetch_array()) {

                                echo "<tr>";
                                echo "<td>" . $all_category['category_name'] . "</td>";
                                echo "<td>" . $all_category['category_desc'] . "</td>";
                                echo "<td>" . $all_category['category_image'] . "</td>";
                                $s= $all_category['category_name'];
                            ?>
                            <td> <a href="all_category_script.php?id=<?php echo "$s" ?>" type="submit" name="submit" class="btn btn-danger">Delete</a> </td>
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
