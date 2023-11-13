<?php
include("connection.php");

$id= $_GET ['id'];
$nama_barang= $_POST ['nama_barang'];
$harga= $_POST ['harga'];
$stok=$_POST['stok'];
$penilaian=$_POST ['penilaian'];
$kategori_id=$_POST['kategori_id'];

$result = mysqli_query($connection, "UPDATE barang SET nama_barang = '$nama_barang', harga = '$harga', stok ='$stok', penilaian = '$penilaian', kategori_id = '$kategori_id' WHERE id = '$id'; ");

header("Location:index.php");


