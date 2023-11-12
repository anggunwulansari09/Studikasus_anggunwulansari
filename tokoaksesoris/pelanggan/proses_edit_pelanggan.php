<?php
$id= $_GET ['id'];
$nama= $_POST ['nama'];
$jenis_kelamin = $_POST ['jenis_kelamin'];
$no_telp = $_POST ['no_telp'];
$alamat = $_POST ['alamat'];
$kota = $_POST ['kota'];
$kode_pos = $_POST ['kode_pos'];
$email = $_POST ['email'];

include_once("connection.php");

mysqli_query($connection, "UPDATE pelanggan SET nama = '$nama',  jenis_kelamin = '$jenis_kelamin', 
no_telp = '$no_telp', alamat = '$alamat' , kota = '$kota', kode_pos = '$kode_pos', email = '$email' WHERE id= '$id';");
header("Location:index.php");
