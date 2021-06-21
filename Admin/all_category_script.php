<?php
include"dbConnect.php";
$id = $_GET['id'];

$que = "DELETE FROM categories WHERE category_name = '$id'";
if ($ins = $connect->query($que)) {
    echo "Success !";

    echo "<script>window.location.assign('http://localhost:8080/jais7/jais%20international/livedemo00.template-help.com/wt_61187/Admin/all_category.php')</script>";
} else
    echo $ins;


?>