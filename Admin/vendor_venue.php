<?php
include "includes/header.php";
include "includes/menu.php";
include "includes/navbar.php";
?>


<div id="wrapper">
    <div class="main-content">
        <form class="form-horizontal">
            <div class="form-row">
                <div class="container">
                    <div class="row col-md-8 col-md-offset-2 custyle">
                        <a type="button" class="btn btn-primary" href="vendor_venue.php">Venue list</a>
                        <a type="button" class="btn btn-success" href="vendor_photographer.php">Photographer list</a>
                        <a type="button" class="btn btn-danger">Food list</a>
                        <a type="button" class="btn btn-warning">Men Saloon list</a>
                        <a type="button" class="btn btn-info">Parlor list</a>
                        <table class="table table-striped custab">
                            <thead>
                            <h2>Venue Vendors</h2>

                            <a href="addvendor.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Vendor</a>
                            <tr>
                                <th>Serial #</th>
                                <th>CategoryName</th>
                                <th>Product Name</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Venue</td>
                                <td>The Grant Banquet</td>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span
                                            class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#"
                                                                                                 class="btn btn-danger btn-xs"><span
                                            class="glyphicon glyphicon-remove"></span> Del</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Venue</td>
                                <td>Casmento Hall</td>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span
                                            class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#"
                                                                                                 class="btn btn-danger btn-xs"><span
                                            class="glyphicon glyphicon-remove"></span> Del</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Venues</td>
                                <td>City Lawn</td>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span
                                            class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#"
                                                                                                 class="btn btn-danger btn-xs"><span
                                            class="glyphicon glyphicon-remove"></span> Del</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Venue</td>
                                <td>Elegant Venue</td>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span
                                            class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#"
                                                                                                 class="btn btn-danger btn-xs"><span
                                            class="glyphicon glyphicon-remove"></span> Del</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Venue</td>
                                <td>Grant Venue</td>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span
                                            class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#"
                                                                                                 class="btn btn-danger btn-xs"><span
                                            class="glyphicon glyphicon-remove"></span> Del</a></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Venue</td>
                                <td>Lavish Hall</td>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span
                                            class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#"
                                                                                                 class="btn btn-danger btn-xs"><span
                                            class="glyphicon glyphicon-remove"></span> Del</a></td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>Venue</td>
                                <td>Modern Hall</td>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span
                                            class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#"
                                                                                                 class="btn btn-danger btn-xs"><span
                                            class="glyphicon glyphicon-remove"></span> Del</a></td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>Venue</td>
                                <td>Radiant Hall</td>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span
                                            class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#"
                                                                                                 class="btn btn-danger btn-xs"><span
                                            class="glyphicon glyphicon-remove"></span> Del</a></td>
                            </tr>
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
