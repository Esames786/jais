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
        <form action="Add_slider.php" method="post" enctype="multipart/form-data">
            <h1>Add Slider </h1>

                    <div class="form-group col-md-12">
                        <label for="input_image5">Slider Image</label>
                        <input type="file" class="input-file" id="input_image5" name="slider_image" required>
                    </div>
                </div>


                <!--PACKAGE 3 END-->

                <div class="row">
                    <div class="form-group col-md-12 col-lg-offset-4">
                        <button type="submit" class="btn btn-primary" name="submit" style="width:18%">Insert & Save</button>
                    </div>
                </div>

        </form>
        <div style="margin-top: 19%;margin-left: 20%">
        <?php
        include "includes/footer.php";
        ?>
        </div>
    </div>
</div><!--/#wrapper -->
<?php
include "includes/end.php";
?>
<?php
include "dbConnect.php";

if(isset($_POST['submit'])) {
    $slider_image = $_FILES['slider_image']['name'];

    $sql = "SELECT * FROM slider WHERE picture_name ='$slider_image'";
    $result = $connect->query($sql);
    echo $result->num_rows;
    if ($result->num_rows == 0) {


        $target = "../images/slider/";
        $target = $target . basename($slider_image);
        move_uploaded_file($_FILES['slider_image']['tmp_name'], $target);
        $que = "INSERT INTO slider(picture_name) VALUES ('$slider_image')";
        if ($ins = $connect->query($que)) {
            echo "<script type='text/javascript'>alert('Successfully Inserted')</script>";


        } else
        {
            echo "<script type='text/javascript'>alert('Failed To insert!')</script>";
        }

    }
    else {
        echo "<script type='text/javascript'>alert('This Image Name Already Exist!')</script>";
    }
}
?>


