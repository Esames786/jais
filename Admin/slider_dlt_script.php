<?php
include"dbConnect.php";
$id = $_GET['id'];

$que = "DELETE FROM slider WHERE picture_name = '$id'";
if ($ins = $connect->query($que)) {
    echo "Success !";
} else
    echo $ins;


?>