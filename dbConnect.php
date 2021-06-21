<?php
$connect = new mysqli("localhost", "root", "usbw", "jais");

if ($connect->connect_error) { die($connect->connect_error); }
?>
