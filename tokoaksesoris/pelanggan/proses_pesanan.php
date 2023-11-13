<?php

$id= $_POST ['id'];
$tanggal_pesanan = $_POST ['tanggal_pesanan'];
$pelanggan_id = $_POST ['pelanggan_id'];

include_once("connection.php");

$result = mysqli_query($connection, "INSERT INTO `pesanan` (`tanggal_pesanan`,`pelanggan_id`) VALUES ('$tanggal_pesanan','$pelanggan_id');");
header("Location:index.php");

