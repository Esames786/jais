<?php
session_start();
if (!$_SESSION['admin_username']) {

    header("Location: admin_login.php");

}
include "includes/header.php";
include "includes/menu.php";
include "includes/navbar.php";

$employee2 = "";
if (isset($_POST['submit'])) {

    $ven_product1 = $_POST['ven_product1'];
    $ven_product2 = $_POST['ven_product2'];


    $sql = "SELECT * FROM package WHERE category_name ='$ven_product1' and s_product_name = '$ven_product2'";
    $result = $connect->query($sql);

    $employee2 = $result->fetch_array();
}


?>
<style>

    .modal-backdrop {
        z-index: 0!important;

    }
</style>

<div id="wrapper">
    <div class="main-content">
        <form id="form" action="allpackage_display_script.php" method="post" enctype="multipart/form-data">
            <h1>Update Package </h1>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="input_pname">Package Name</label>
                    <input style="display: none" type="text" class="form-control" id="sub_product_id" placeholder="id" name="sub_product_id" value="<?php echo $employee2['sub_product_id']; ?>" />
                    <input type="text" class="form-control" id="ven_p_pname" placeholder="Visa Name" name="ven_p_pname" value="<?php echo $employee2['s_product_name']; ?>" required/>
                </div>
                <div class="form-group col-md-6">
                    <label for="input_pdescription">Package Price</label>
                    <input type="text" class="form-control" id="ven_p_pdesc" placeholder="example : xyz" name="ven_p_pdesc" value="<?php echo $employee2['s_product_desc']; ?>" required/>
                </div>
            </div>
            <div class="form-row">

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="input_category">Category</label>
                        <select name="ven_p_pcatagory" id="ven_p_pcatagory" class="form-control" required>
                            <option><?php echo $employee2['category_name']; ?></option>
                            <?php
                            include "dbConnect.php";
                            $sql3 = "SELECT * FROM categories";
                            $result3 = $connect->query($sql3);
                            while ($all_category = $result3->fetch_array()) {
                                ?>
                                <option><?php echo $all_category['category_name']; ?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input_pdescription">Image Name</label>
                        <p  class="form-control" id="imgg"><?php echo $employee2['s_product_image']; ?></p>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input_image1">Change File</label>
                        <input id="uploadImage" type="file" accept=""  name="ven_p_ppic1" required/>
                    </div>
                </div>

                <div id="preview"><img src=""/></div>
                <div id="err"></div>

                <!--PACKAGE 3 END-->

                <div class="row">
                    <div class="form-group col-md-12 col-lg-offset-4" style="margin-bottom: 100px">
                        <input  style="font-size: 18px;display:none" value="" name="sub" id="sub"/>
                        <input type="submit" name="submit1" id="ins" class="btn btn-info" value="Update" style="width:18%">
                        <input type="submit" name="submit2" id="del" class="btn btn-danger" value="Delete" style="width:18%">
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


    $('#ins').click(function(){
        $('#sub').val('insert');
    });
    $('#del').click(function(){
        $('#sub').val('delete');
    });


    $(document).ready(function (e) {
        $("#form").on('submit', (function (e) {
            e.preventDefault();
            $.ajax({
                url: "allpackage_display_script.php",
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
                        //location.reload();


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

