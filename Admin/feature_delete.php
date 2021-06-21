<?php
include"dbConnect.php";

    $id = $_GET['id'];

    $que = "DELETE FROM feature_products WHERE product_name = '$id'";
    if ($ins = $connect->query($que)) {
        echo "Success";
    } else
        echo $ins;

?>