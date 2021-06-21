<?php

include "dbConnect.php";


$valid_extensions2 = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
// upload directory
if (!empty($_POST['ven_p_pname']) || !empty($_POST['ven_p_pdesc']) || $_FILES['ven_p_ppic2']) {

    $ven_p_pname = $_POST['ven_p_pname'];
    $ven_p_pdesc = $_POST['ven_p_pdesc'];


    $ven_p_ppic2 = $_FILES['ven_p_ppic2']['name'];
    $tmp2 = $_FILES['ven_p_ppic2']['tmp_name'];


    $s = '/';


    $target2 = "../images/jais_image/hotel/$ven_p_pname/";
    $target2 = $target2 . basename($ven_p_ppic2);


// get uploaded file's extension

    $ext2 = strtolower(pathinfo($ven_p_ppic2, PATHINFO_EXTENSION));
// can upload same image using rand function
//$final_image = rand(1000,1000000).$ven_p_ppic1;
// check's valid format

    if (in_array($ext2, $valid_extensions2)) {
        $curdir = "/home/jaisinte/public_html/images/jais_image/hotel";
        if (mkdir($curdir . "/$ven_p_pname", 0777)) {

        }

        //$path = $path.strtolower($final_image);
        if (move_uploaded_file($tmp2, $target2)) {
            $sql = "SELECT * FROM hotel WHERE hotel_name ='$ven_p_pname'";
            $result = $connect->query($sql);
            if ($result->num_rows == 0) {
                $que = "INSERT INTO hotel(hotel_name,hotel_desc,s_product_image) VALUES ('$ven_p_pname','$ven_p_pdesc','$ven_p_ppic2')";
                if ($ins = $connect->query($que)) {
                    echo "SUCCESS";
                } else
                    echo "NOT SAVED";
            } else {
                echo "Hotel Already Exist";

            }
        } else {
            echo 'Upload failed';
        }
    } else {
        echo 'INVALID IMAGE EXTENSION';
    }
} else {
    echo 'Insert input boxes';
}
?>