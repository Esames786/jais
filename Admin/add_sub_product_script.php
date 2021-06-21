<?php

include "dbConnect.php";

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
// upload directory
if(!empty($_POST['ven_p_pname']) || !empty($_POST['ven_p_pdesc']) || $_FILES['ven_p_ppic1'])
{

    $ven_p_pname = $_POST['ven_p_pname'];
    $ven_p_pdesc = $_POST['ven_p_pdesc'];
    $ven_p_pcatagory = $_POST['ven_p_pcatagory'];
    $ven_p_ppic1 = $_FILES['ven_p_ppic1']['name'];
    $tmp = $_FILES['ven_p_ppic1']['tmp_name'];
    $s = '/';


    $target = "../images/jais_image/$ven_p_pcatagory/$ven_p_pname/";
    $target = $target . basename($ven_p_ppic1);



// get uploaded file's extension
    $ext = strtolower(pathinfo($ven_p_ppic1, PATHINFO_EXTENSION));
// can upload same image using rand function
//$final_image = rand(1000,1000000).$ven_p_ppic1;
// check's valid format
    if(in_array($ext, $valid_extensions))
    {
        $curdir = "C:/xampp/root/jais7/jais international/livedemo00.template-help.com/wt_61187/images/jais_image/$ven_p_pcatagory";
        if (mkdir($curdir . "/$ven_p_pname", 0777)) {

        }

        //$path = $path.strtolower($final_image);
        if(move_uploaded_file($tmp, $target))
        {
            $sql = "SELECT * FROM sub_products WHERE s_product_name ='$ven_p_pname'";
            $result = $connect->query($sql);
            if ($result->num_rows == 0) {
                $que = "INSERT INTO sub_products(s_product_name,s_product_desc,s_product_image,category_name) VALUES ('$ven_p_pname','$ven_p_pdesc','$ven_p_ppic1','$ven_p_pcatagory')";
                if ($ins = $connect->query($que)) {
                    echo "SUCCESS";
                } else
                    echo "NOT SAVED";
            } else {
                echo "Product Already Exist";

            }
        }
    }
    else
    {
        echo 'INVALID FILE EXTENSION';
    }
}
?>