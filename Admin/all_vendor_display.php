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
$ven_product1 = $_POST['ven_product2'];



$sql = "SELECT * FROM products WHERE category_name ='$ven_product' and s_product_name = '$ven_product1'";
$result = $connect->query($sql);

$sql2 = "SELECT * FROM products WHERE category_name ='$ven_product' and s_product_name = '$ven_product1'";
$result2 = $connect->query($sql2);

$employee2 = $result2->fetch_array()

?>
<style>
    .modal{
        margin-top: 350px!important;

    }
    .modal-backdrop {
        z-index: 0!important;

    }
</style>


<div id="wrapper">
    <div class="main-content">
        <form method="post" id="insert_form" enctype="multipart/form-data">
         <h1>ALL TOUR DETAILS </h1>
            <div class="form-row">
                <div class="container">
                    <div class="row col-md-10 custyle">
                            <span id="error"></span>
                            <div class="form-group col-md-12" style="border: groove">
                            <br>
                                <div class="col-md-6 form-row" style="display: ">
                                <label for="">Category Name</label>
                                <input style="font-size: 18px" name="catt" value="<?php echo $ven_product;?>" />
                                </div>

                                <div class="col-md-6 form-row" style="display: ;">
                                    <label for="">Tour Name</label>
                                    <input  style="font-size: 18px" value="<?php echo $ven_product1;?>" name="tour"/>
                                </div>
                                <br>
                                <div class="col-md-6 form-row">
                                <label for="" class="">Description</label>
                                <textarea style="" class="form-control" name="desc"><?php echo $employee2['product_desc'];?></textarea>
                                <br>
                                </div>

                                <div class="form-row col-md-6">
                                    <label for="" class="">Price</label>
                                    <input  style="font-size: 18px" class="form-control" value="<?php echo $employee2['product_price'];?>" name="price"/>
                                    <input  style="font-size: 18px;display:none" value="" name="sub" id="sub"/>
                                </div>
                            </div>


                        <table class="table table-striped custab" width="600" border="2" cellpadding="1" id="item_table"
                               cellspacing="1">
                            <tr>
                                <th>Day</th>
                                <th>Time</th>
                                <th>Duration</th>
                                <th>Program</th>
                                <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
                            </tr>

                                <?php

                                while ($employee = $result->fetch_array()) {
                                $day = $employee['Dayy'];
                                $time = $employee['timee'];
                                $duration = $employee['duration'];
                                $program = $employee['program'];
                                echo "<tr>";
                                echo "<td>"."<input class='dayy form-control' value = '$day' name='dayy[]' >"."</td>";
                                echo "<td>"."<input class='timee form-control' value = '$time' name='timee[]'>"."</td>";
                                echo "<td>"."<input class='duration form-control' value = '$duration' name='duration[]'>"."</td>";
                                echo "<td>"."<textarea class='program form-control' name='program[]'>".$program."</textarea></td>";
                                echo "<td>"."<button type='button' name='remove' class='btn btn-danger btn-sm remove'><span class='glyphicon glyphicon-minus'></span>"."</button>"."</td>";
                                ?>
                            </tr>
                            <?php

                                }
                            }

                            ?>

                        </table>
                             <center><div class="form-group">
                                   <input type="submit" name="sub" id="ins" class="btn btn-info" value="Update" style="width:18%">
                                   <input type="submit" name="sub2" id="del" class="btn btn-danger" value="Delete" style="width:18%">
                              </div></center>
                    </div>
                </div>
            </div>
        </form>


        <?php
        include "includes/footer.php";
        ?>
    </div>
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
    <!-- /.main-content -->
</div><!--/#wrapper -->
<?php
include "includes/end.php";
?>


<script>
    $(document).ready(function(){


        $(document).on('click', '.add', function(){
            var html = '';
            html += '<tr>';
            html += '<td><input type="text" name="dayy[]" class="form-control dayy" /></td>';
            html += '<td><input type="text" name="timee[]" class="form-control timee" /></td>';
            html += '<td><input name="duration[]" class="form-control duration"></td>';
            html += '<td><textarea name="program[]" class="form-control program"></textarea></td>';
            html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
            $('#item_table').append(html);
        });
        $(document).on('click', '.remove', function(){
            $(this).closest('tr').remove();
        });

        $('#ins').click(function(){
            $('#sub').val('insert');
        });
        $('#del').click(function(){
            $('#sub').val('delete');
        });


        $('#insert_form').on('submit', function(event){
            event.preventDefault();
            var error = '';
            $('.dayy').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Enter Day Name at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });

            $('.timee').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Enter Time Quantity at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });

            $('.duration').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Select Duration at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });
            $('.program').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Select Program at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });
            var form_data = $(this).serialize();
            if(error == '')
            {
                $.ajax({
                    url:"all_vendor_display_script.php",
                    method:"POST",
                    data:form_data,
                    success:function(data)
                    {
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

                        }else{

                            $('.yes').css('display','none');
                            $('.no').show();
                            $('#modal').modal({
                                show: 'true'
                            });
                         }
                    }
                });
            }
            else
            {
                $('#error').html('<div class="alert alert-danger">'+error+'</div>');
            }
        });

    });
</script>

