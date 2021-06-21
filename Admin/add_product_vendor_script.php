<?php
include "dbConnect.php";

if (isset($_POST["day"])) {

    $str = "";

    $desc = $_POST['ven_p_pdesc'];
    $price = $_POST['ven_p_prangemax'];
    $category = $_POST['ven_p_pcatagory'];
    $tour_name = $_POST['sub_products'];
    $sql = "SELECT * FROM products WHERE category_name='$category' and s_product_name = '$tour_name'";
    $result = $connect->query($sql);

    if ($result->num_rows == 0) {

        for ($count = 0; $count < count($_POST["day"]); $count++) {
            $ar = array(
                ':day' => $_POST["day"][$count],
                ':time' => $_POST["time"][$count],
                ':duration' => $_POST["duration"][$count],
                ':program' => $_POST["program"][$count]
            );

            $day = $ar[':day'];
            $time = $ar[':time'];
            $duration = $ar[':duration'];
            $program = $ar[':program'];


            $que = "INSERT INTO products (Dayy, timee, duration, program,product_desc,product_price,category_name,s_product_name)VALUES ('$day','$time','$duration','$program','$desc','$price','$category','$tour_name')";
            if ($ins = $connect->query($que)) {
                $str = "ok";
            } else {
                $str = "NOT Saved";
            }

        }
    }else {
        $str = "Already Exist";
    }


    echo $str;
}

?>

