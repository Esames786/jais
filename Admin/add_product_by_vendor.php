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
        <form method="post" id="insert_form" enctype="multipart/form-data">
            <h1>Tour Product </h1>
            <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                    <label for="input_pdescription">Additional Description</label>
                    <textarea class="form-control" id="input_pdescription" placeholder="Description" name="ven_p_pdesc"
                              required></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="input_price_min">Product Price</label>
                    <input type="text" class="form-control" id="input_price_min" name="ven_p_prangemax" required
                           placeholder="Price Range">
                </div>
            </div>
            <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                    <label for="input_category">Category</label>
                    <select name="ven_p_pcatagory" id="input_category" class="form-control" required>
                        <option selected>Choose...</option>
                        <?php
                        include "dbConnect.php";
                        $sql = "SELECT * FROM categories";
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
                        $sql = "SELECT * FROM sub_products";
                        $result = $connect->query($sql);
                        while ($all_category = $result->fetch_array()) {

                            ?>
                            <option><?php echo $all_category['s_product_name']; ?></option>
                        <?php } ?>

                    </select>
                </div>
            </div>

            <div class="form-row col-md-12">
                <div class="table-repsonsive">
                    <span id="error"></span>
                    <table class="table table-bordered" id="item_table">
                        <tr>
                            <th>Day</th>
                            <th>Time</th>
                            <th>Duration</th>
                            <th>Program</th>
                            <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
                        </tr>
                    </table>
                </div>
            </div>

            <!--PACKAGE 3 END-->

            <div class="row">
                <div class="form-group col-md-12 col-lg-offset-4">
                    <input type="submit" name="submit" class="btn btn-info" value="Insert" style="width:18%">
                </div>
            </div>


        </form>
        <?php
        include "includes/footer.php";
        ?>
    </div>
</div><!--/#wrapper -->
<?php
include "includes/end.php";
?>

<script>
    $(document).ready(function(){

        var html = '';
        html += '<tr>';
        html += '<td><input type="text" name="day[]" class="form-control dayy"  /></td>';
        html += '<td><input type="text" name="time[]" class="form-control timee" value="-" /></td>';
        html += '<td><input name="duration[]" class="form-control duration" value="-" ></td>';
        html += '<td><input name="program[]" class="form-control program" ></td>';
        html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
        $('#item_table').append(html);

        $(document).on('click', '.add', function(){
            var html = '';
            html += '<tr>';
            html += '<td><input type="text" name="day[]" class="form-control dayy" /></td>';
            html += '<td><input type="text" name="time[]" class="form-control timee" /></td>';
            html += '<td><input name="duration[]" class="form-control duration"></td>';
            html += '<td><input name="program[]" class="form-control program"></td>';
            html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
            $('#item_table').append(html);
        });

        $(document).on('click', '.remove', function(){
            $(this).closest('tr').remove();
        });

        $('#insert_form').on('submit', function(event){
            event.preventDefault();
            var error = '';
            $('.dayy').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Enter Item Name at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });

            $('.timee').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Enter Item Quantity at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });

            $('.duration').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Select Unit at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });
            $('.program').each(function(){
                var count = 1;
                if($(this).val() == '')
                {
                    error += "<p>Select Unit at "+count+" Row</p>";
                    return false;
                }
                count = count + 1;
            });
            var form_data = $(this).serialize();
            if(error == '')
            {
                $.ajax({
                    url:"add_product_vendor_script.php",
                    method:"POST",
                    data:form_data,
                    success:function(data)
                    {
                        var test = $.trim(data);
                        if(test == 'ok')
                        {
                            $('#item_table').find("tr:gt(0)").remove();
                            var form = document.getElementById('insert_form').reset();
                            $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
                        } else {
                            $('#error').html('<div class="alert alert-danger">NOT SAVED OR ALREADY EXIST</div>');
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
