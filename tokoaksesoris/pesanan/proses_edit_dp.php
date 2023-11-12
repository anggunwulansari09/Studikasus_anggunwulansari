<?php
$id= $_GET ['id'];
$pesanan_id= $_POST ['pesanan_id'];
$barang_id= $_POST ['barang_id'];
$jumlah_barang= $_POST ['jumlah_barang'];
$total_pesanan= $_POST ['total_pesanan'];

include_once("connection.php");

mysqli_query($connection, "UPDATE detail_pesanan SET pesanan_id = '$pesanan_id', barang_id = '$barang_id' , jumlah_barang = '$jumlah_barang', total_barang = '$total_barang'  WHERE id= '$id');");
header("Location:index.php");
