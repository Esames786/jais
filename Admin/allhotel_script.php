<?php

include "dbConnect.php";

$valid_extensions2 = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions

// upload directory
if (!empty($_POST['ven_p_pname']) || !empty($_POST['ven_p_pdesc']) || $_FILES['ven_p_ppic2']) {

    $check = $_POST['sub'];

    if ($check == 'delete') {

        $idd = $_POST['sub_product_id'];
        $g = "";
        $sql5 = "SELECT * FROM hotel WHERE id ='$idd'";
        $result5 = $connect->query($sql5);
        if ($result5->num_rows > 0) {

            $geeting = $result5->fetch_array();
            $g = $geeting['hotel_name'];
        }


        $curdir2 = "/home/jaisinte/public_html/images/jais_image/hotel/" . $g;

        array_map('unlink', glob("$curdir2/*.*"));
        rmdir($curdir2);


        $que = "DELETE FROM hotel WHERE id = '$idd'";
        if ($ins = $connect->query($que))
            echo "SUCCESS";
    } else if ($check == 'insert') {
        $idd = $_POST['sub_product_id'];
        $ven_p_pname = $_POST['ven_p_pname'];
        $ven_p_pdesc = $_POST['ven_p_pdesc'];


        $ven_p_ppic2 = $_FILES['ven_p_ppic2']['name'];
        $tmp2 = $_FILES['ven_p_ppic2']['tmp_name'];

        $s = '/';


        $target2 = "../images/jais_image/hotel/$ven_p_pname/";
        $target2 = $target2 . basename($ven_p_ppic2);

        $g = "";
        $sql5 = "SELECT * FROM hotel WHERE id ='$idd'";
        $result5 = $connect->query($sql5);
        if ($result5->num_rows > 0) {

            $geeting = $result5->fetch_array();
            $g = $geeting['hotel_name'];
        }


        $curdir2 = "/home/jaisinte/public_html/images/jais_image/hotel/" . $g;

        array_map('unlink', glob("$curdir2/*.*"));
        rmdir($curdir2);


        $ext2 = strtolower(pathinfo($ven_p_ppic2, PATHINFO_EXTENSION));


        if (in_array($ext2, $valid_extensions2)) {
            $curdir = "/home/jaisinte/public_html/images/jais_image/hotel";
            if (mkdir($curdir . "/$ven_p_pname", 0777)) {

            }

            //$path = $path.strtolower($final_image);
            if (move_uploaded_file($tmp2, $target2)) {
                $que = "UPDATE  hotel set hotel_name = '$ven_p_pname' ,hotel_desc = '$ven_p_pdesc' ,s_product_image = '$ven_p_ppic2' where id = '$idd'";
                if ($ins = $connect->query($que)) {
                    echo "SUCCESS";
                } else
                    echo "NOT SAVED";
            } else
                echo 'Upload failed';
        } else
            echo 'INVALID IMAGE EXTENSION';

    }

} else {
    echo 'Insert input boxes';
}
?>