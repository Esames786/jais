<?php
session_start();
if (!$_SESSION['admin_username']) {

    header("Location: admin_login.php");

}
include "includes/header.php";
include "includes/menu.php";
include "includes/navbar.php";

?>
<style>
    .modal{
        margin-top: 100px!important;

    }
    .modal-backdrop {
        z-index: 0!important;

    }
</style>

<div id="wrapper">
    <div class="main-content">
        <form id="form" action="add_visa_script.php" method="post" enctype="multipart/form-data">
            <h1>ADD VISA </h1>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="input_pname">Visa Name</label>
                    <input type="text" class="form-control" id="ven_p_pname" placeholder="Visa Name" name="ven_p_pname" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="input_pdescription">Visa Description</label>
                    <textarea type="text" class="form-control" id="ven_p_pdesc" placeholder="example : xyz" name="ven_p_pdesc" required></textarea>
                </div>
            </div>
            <div class="form-row">

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="input_category">Category</label>
                        <select name="ven_p_pcatagory" id="ven_p_pcatagory" class="form-control" required>
                            <option selected>Choose...</option>
                            <?php
                            include "dbConnect.php";
                            $sql = "SELECT * FROM categories where category_name ='INTERNATIONAL TOURS'";
                            $result = $connect->query($sql);
                            while ($all_category = $result->fetch_array()) {

                                ?>
                                <option><?php echo $all_category['category_name']; ?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input_sub_products">Sub-Category</label>
                        <select name="sub_products" id="input_sub_products" class="form-control" required>
                            <option selected>Choose...</option>
                            <?php
                            include "dbConnect.php";
                            $sql = "SELECT s_product_name FROM sub_products Where category_name = 'INTERNATIONAL TOURS'";
                            $result = $connect->query($sql);
                            while ($all_category = $result->fetch_array()) {

                                ?>
                                <option><?php echo $all_category['s_product_name']; ?></option>
                            <?php } ?>
                            <?php
                            $sql4 = "SELECT s_product_name FROM package Where category_name = 'INTERNATIONAL TOURS'";
                            $result4 = $connect->query($sql4);
                            while ($all_category4 = $result4->fetch_array()) {
                                ?>
                                <option><?php echo $all_category4['s_product_name']; ?></option>
                            <?php } ?>

                            <option>Random</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="input_image1">Visa Detail File</label>
                        <input id="uploadImage" type="file" accept="application/pdf"  name="ven_p_ppic1" required/>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="input_image2">Visa Flag Image</label>
                        <input id="uploadImage2" type="file" accept="image/*"  name="ven_p_ppic2" required/>
                    </div>
                </div>

                <div id="preview"><img src=""/></div>
                <div id="err"></div>

                <!--PACKAGE 3 END-->

                <div class="row">
                    <div class="form-group col-md-12 col-lg-offset-4" style="margin-bottom: 100px">
                        <input class="btn btn-primary btn-lg" type="submit" value="Save and Insert">
                        <a href="all_visa.php" class="btn btn-success btn-lg"><b>+</b> All
                            Visa Details</a>
                    </div>

                </div>
        </form>



        <?php
        include "includes/footer.php";
        ?>
    </div>
</div><!--/#wrapper -->

<div class="modal" id="modal" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5  class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div id="yes" class="swal2-icon swal2-success swal2-animate-success-icon yes" style="display: flex;">
                    <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                    <span class="swal2-success-line-tip"></span>
                    <span class="swal2-success-line-long"></span>

                    <div class="swal2-success-ring"></div>
                    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                </div>

                <div id="no" class="swal2-icon swal2-error swal2-animate-error-icon no" style="display: flex;"><span
                        class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span
                            class="swal2-x-mark-line-right"></span></span></div>
                <p id="success" class="successs" style="text-align: center;font-size: 17px"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php
include "includes/end.php";
?>

<script>

    $(document).ready(function (e) {
        $("#form").on('submit', (function (e) {
            e.preventDefault();
            $.ajax({
                url: "add_visa_script.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function (data) {

                    // view uploaded file.
                    //$("#preview").html(data).fadeIn();

                    let  test = data.toString();
                    let test2 = $.trim(test);
                    $('#success').html(data);
                    let text = "SUCCESS";
                    if(test2 == text)
                    {
                        $('.no').css('display','none');
                        $('.yes').show();
                        $('#modal').modal({
                            show: 'true'
                        });
                        $("#form")[0].reset();

                    }else{

                        $('.yes').css('display','none');
                        $('.no').show();
                        $('#modal').modal({
                            show: 'true'
                        });
                    }

                },
                error: function (e) {
                    $("#err").html(e).fadeIn();
                }
            });
        }));
    });
</script>

