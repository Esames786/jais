
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Admin Account</title>

<link href="assets/styles/sign_in.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />



<!-- Main Styles -->
<link rel="stylesheet" href="assets/styles/style.min.css">

<!-- mCustomScrollbar -->
<link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

<!-- Waves Effect -->
<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

<!-- Sweet Alert -->
<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">

<!-- Dark Themes -->
<link rel="stylesheet" href="assets/styles/style-dark.min.css">
<link rel="stylesheet" href="assets/styles/succ.css">



<div class="login">
    <div class="container">
        <div class="col-lg-6 col-lg-offset-3">

            <div class="login-box">
                <h1>Admin SIGN-IN</h1>

                <form id="form" action="admin_login_script.php" method="post" enctype="multipart/form-data">

                    <div class="col-lg-12"><br><br>
                        <label style="color: black">User Name</label>
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <label style="color: black">Password</label>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <input class="btn btn-primary btn-lg" type="submit" value="Login">
                    </div>

                </form>

            </div>  <!-- login-box -->

        </div>
    </div>
</div>

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
                url: "admin_login_script.php",
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
                        window.location.assign('http://localhost:8080/jais7/jais%20international/livedemo00.template-help.com/wt_61187/Admin/index.php');
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