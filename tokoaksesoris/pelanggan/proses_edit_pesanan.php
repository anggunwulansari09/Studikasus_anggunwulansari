<?php
$id= $_GET ['id'];
$tanggal_pesanan= $_POST ['tanggal_pesanan'];
$pelanggan_id= $_POST ['pelanggan_id'];


include_once("connection.php");

mysqli_query($connection, "UPDATE pesanan SET tanggal_pesanan = '$tanggal_pesanan', pelanggan_id = '$pelanggan_id' WHERE id= '$id';");
header("Location:index.php");
