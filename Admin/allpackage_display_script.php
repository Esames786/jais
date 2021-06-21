<?php

include "dbConnect.php";

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
// upload directory
if(!empty($_POST['ven_p_pname']) || !empty($_POST['ven_p_pdesc']) || $_FILES['ven_p_ppic1'])
{

    $check = $_POST['sub'];

    if($check == 'delete'){

        $idd = $_POST['sub_product_id'];
        $g = "";
        $sql5 = "SELECT * FROM package WHERE sub_product_id ='$idd'";
        $result5 = $connect->query($sql5);
        if ($result5->num_rows > 0) {

            $geeting = $result5->fetch_array();
            $g = $geeting['s_product_name'];
        }


        $curdir2 = "C:/xampp/root/jais7/jais international/livedemo00.template-help.com/wt_61187/images/jais_image/package/" . $g;

        array_map('unlink', glob("$curdir2/*.*"));
        rmdir($curdir2);


        $que = "DELETE FROM package WHERE sub_product_id = '$idd'";
        if ($ins = $connect->query($que))
            echo  "SUCCESS";
    }

    else if($check == 'insert')

    {


        $idd = $_POST['sub_product_id'];
        $ven_p_pname = $_POST['ven_p_pname'];
        $ven_p_pdesc = $_POST['ven_p_pdesc'];
        $ven_p_pcatagory = $_POST['ven_p_pcatagory'];
        $ven_p_ppic1 = $_FILES['ven_p_ppic1']['name'];
        $tmp = $_FILES['ven_p_ppic1']['tmp_name'];
        $s = '/';


        $target = "../images/jais_image/package/$ven_p_pname/";
        $target = $target . basename($ven_p_ppic1);

        $g = "";
        $sql5 = "SELECT * FROM package WHERE sub_product_id ='$idd'";
        $result5 = $connect->query($sql5);
        if ($result5->num_rows > 0) {

            $geeting = $result5->fetch_array();
            $g = $geeting['s_product_name'];
        }


        $curdir2 = "C:/xampp/root/jais7/jais international/livedemo00.template-help.com/wt_61187/images/jais_image/package/" . $g;

        array_map('unlink', glob("$curdir2/*.*"));
        rmdir($curdir2);


        $ext = strtolower(pathinfo($ven_p_ppic1, PATHINFO_EXTENSION));

        if (in_array($ext, $valid_extensions)) {

            $curdir = "C:/xampp/root/jais7/jais international/livedemo00.template-help.com/wt_61187/images/jais_image/package";
            if (mkdir($curdir . "/$ven_p_pname", 0777)) {

            }

            if (move_uploaded_file($tmp, $target)) {
                $que = "UPDATE  package set s_product_name = '$ven_p_pname' ,s_product_desc = '$ven_p_pdesc' ,s_product_image = '$ven_p_ppic1', category_name = '$ven_p_pcatagory'  where sub_product_id = '$idd'";
                if ($ins = $connect->query($que)) {
                    echo "SUCCESS";
                } else
                    echo "NOT SAVED";
            } else {
                echo 'Upload failed';
            }
        } else {
            echo 'INVALID FILE EXTENSION';
        }
    }

}else{
    echo 'Insert input boxes';
}
?>