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
        <form id="myform" action="add_category_script.php" method="post" onsubmit="return formsubmit();">
            <h1>ADD CATEGORY </h1>

            <div class="form-group">
                <label for="add_category_name">Category Name</label>
                <input type="text" class="form-control" name="cat_name" id="add_category_name"
                       placeholder="Category Name "
                       style="width: 50%">
            </div>
            <div class="form-group">
                <label for="add_category_description">Category Description</label>
                <textarea class="form-control" name="cat_desc" id="add_category_description" rows="3"
                          style="width: 50%"></textarea>
            </div>
            <div class="form-group"><br>
                <button type="submit" id="submit" name="submit" value="ok" class="btn btn-primary">Save</button>
            </div>
            <a href="all_category.php" class="btn btn-success btn-xs"><b>+</b> All
                categories</a>

        </form>

        <div class="form-group col-md-12">
            <?php
            include "includes/footer.php";
            ?>
        </div>
    </div>
</div><!--/#wrapper -->

<div class="modal" id="modal" tabindex="-1" role="dialog">
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

<script type="text/javascript">



    function formsubmit() {
        $.ajax({
            type: 'POST',
            url: 'add_category_script.php',
            data: $('#myform').serialize(),
            success: function (response) {
                    let  test = response.toString();
                    let test2 = $.trim(test);
                    $('#success').html(response);
                    let text = "SUCCESS";
                    if(test2 == text)
                    {
                        $('.no').css('display','none');
                        $('.yes').show();
                        $('#modal').modal({
                            show: 'true'
                        });

                    }else{

                        $('.yes').css('display','none');
                        $('.no').show();
                        $('#modal').modal({
                            show: 'true'
                        });
                    }

            }
        });
        var form = document.getElementById('myform').reset();
        return false;
    }
</script>