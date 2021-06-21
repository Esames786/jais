<?php

include"dbConnect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE product_name ='$id'";
$result = $connect->query($sql);
$fetch = $result->fetch_array();
$a=$fetch['product_name'];
$b=$fetch['s_product_name'];
$c=$fetch['product_img1'];
$d=$fetch['product_price'];
$e=$fetch['category_name'];

$q = "SELECT * FROM promotion WHERE product_name ='$id'";
$r = $connect->query($q);
if($r->num_rows == 0 ){
    $que = "INSERT INTO promotion(product_name,s_product_name,product_img1,product_price,category_name) VALUES ('$a','$b','$c','$d','$e')";
    if ($ins = $connect->query($que)) {
        echo "<script type='text/javascript'>alert(' Product Added to Promotions!')</script>";
    } else
        echo $ins;

}
else
{
    echo "<script type='text/javascript'>alert(' Feature Product Already Exist!')</script>";
}
?>
<a class="col-md-offset-5" href="add_promotion.php">
  Go Back
</a>
