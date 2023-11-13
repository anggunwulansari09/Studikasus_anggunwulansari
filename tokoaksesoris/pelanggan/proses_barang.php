<?php
include("connection.php");

$id= $_POST ['id'];
$nama_barang= $_POST ['nama_barang'];
$harga= $_POST ['harga'];
$stok=$_POST['stok'];
$penilaian=$_POST ['penilaian'];
$kategori_id=$_POST['kategori_id'];

$result = mysqli_query($connection, "INSERT INTO `barang` (`nama_barang`,`harga`,`stok`,`penilaian`,`kategori_id`) VALUES ('$nama_barang','$harga','$stok','$penilaian','$kategori_id');");
header("Location:index.php");



