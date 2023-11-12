<?php
include("connection.php");

$id= $_POST ['id'];
$nama_barang = $_POST ['nama_barang'];
$harga = $_POST ['harga'];
$stok= $_POST ['stok'];
$penilaian= $_POST ['penilaian'];
$kategori_id=$_POST ['kategori_id'];
$nama_kategori=$_POST ['nama_kategori'];



$result = mysqli_query($connection, "INSERT INTO `barang` (`id`,`nama_barang`,`harga`,`stok`,`penilaian`,`kategori_id`,`nama_kategori`)
VALUES ('$id','$nama_barang','$harga','$stok','$penilaian','$kategori_id','$nama_kategori');");
header("Location:index.php");




