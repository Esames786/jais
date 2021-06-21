<?php
include "dbConnect.php";

if (isset($_POST['sub'])) {

    $check = $_POST['sub'];
    $str = '';

    if ($check == 'delete') {

        $cat = $_POST['catt'];
        $tour = $_POST['tour'];

        $que = "DELETE FROM package_details WHERE s_product_name = '$tour' and category_name = '$cat'";
        if ($ins = $connect->query($que)) {
            $str ="SUCCESS";
        } else {
            $str = "NOT DELETED";
        }

    } else if ($check == 'insert') {


        $cat = $_POST['catt'];
        $tour = $_POST['tour'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];

        $que = "DELETE FROM package_details WHERE s_product_name = '$tour' AND category_name = '$cat'";
        if ($ins = $connect->query($que)) {

        }


        for ($count = 0; $count < count($_POST["dayy"]); $count++) {

            $ar = array(
                ':day' => $_POST["dayy"][$count],
                ':time' => $_POST["timee"][$count],
                ':duration' => $_POST["duration"][$count],
                ':program' => $_POST["program"][$count]
            );

            $day = $ar[':day'];
            $time = $ar[':time'];
            $duration = $ar[':duration'];
            $program = $ar[':program'];

            $que1 = "INSERT INTO package_details (Dayy, timee, duration, program,product_desc,product_price,category_name,s_product_name) VALUES ('$day','$time','$duration','$program','$desc','$price','$cat','$tour')";
            if ($ins1 = $connect->query($que1)) {
                $str = "SUCCESS";
            } else {
                $str = "NOT Saved";
            }


        }


    }
    echo $str;
}



?>