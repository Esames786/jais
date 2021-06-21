<?php
include "dbConnect.php";


    $cat_name = test_input($_POST['cat_name']);
    $cat_desc = test_input($_POST['cat_desc']);

    $sql = "SELECT * FROM categories WHERE category_name='$cat_name'";
    $result = $connect->query($sql);

    if ($result->num_rows == 0) {
        $que = "INSERT INTO categories(category_name, category_desc) VALUES ('$cat_name','$cat_desc')";
        if (mysqli_query($connect, $que)) {
            $curdir = "C:/xampp/root/jais7/jais international/livedemo00.template-help.com/wt_61187/images/jais_image";
            if (mkdir($curdir . "/$cat_name", 0777)) {

            }
            echo "SUCCESS";
        } else
            echo "NOT SAVED";
    } else
        echo "ALREADY SAVED";


    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }

?>

