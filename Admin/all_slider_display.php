<?php
session_start();
if (!$_SESSION['admin_username']) {

    header("Location: admin_login.php");

}
include "includes/header.php";
include "includes/menu.php";
include "includes/navbar.php";
include "dbConnect.php";

$sql = "SELECT * FROM slider";
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
                            <h2>All Slider</h2>
                            <a href="Add_slider.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Slider</a>
                            <tr>
                                <th>Slider ID</th>
                                <th>Slider NAme</th>
                                <th>Editor</th>
                            </tr>
                            </thead>
                            <?php
                            while ($all_category = $result->fetch_array()) {

                                echo "<tr>";
                                echo "<td>" . $all_category['slider_id'] . "</td>";
                                echo "<td>" . $all_category['picture_name'] . "</td>";

                                $s= $all_category['picture_name'];
                            ?>
                            <td> <a href="slider_dlt_script.php?id=<?php echo "$s" ?>" type="submit" name="submit" class="btn btn-danger">Delete</a> </td>
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
