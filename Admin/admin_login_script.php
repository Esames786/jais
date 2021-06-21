<?php
include 'dbConnect.php';


if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM admin_login WHERE admin_username='$username'";

    $result = $connect->query($sql);
    $row = $result->fetch_array();
    $namee=$row["admin_username"];

    if ($result->num_rows == 1) {
        if ($password == $row["admin_password"]) {
            session_start();
            $_SESSION['admin_username'] = $username;
            echo "SUCCESS";
        } else {
            echo "Invalid Password for Username ";
            echo "$namee";
        }
    } else {
        echo "Invalid Username";
    }
}
?>