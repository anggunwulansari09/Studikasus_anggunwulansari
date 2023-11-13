<?php

$id= $_POST ['id'];
$pesanan_id = $_POST ['pesanan_id'];
$barang_id = $_POST ['barang_id'];
$jumlah_barang = $_POST ['jumlah_barang'];
$total_pesanan = $_POST ['total_pesanan'];

include_once("connection.php");

$result = mysqli_query($connection, "INSERT INTO `detail_pesanan` (`pesanan_id`,`barang_id`,`jumlah_barang`,`total_pesanan`) VALUES ('$pesanan_id','$barang_id','$jumlah_barang','$total_pesanan');");
header("Location:index.php");

