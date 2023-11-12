<?php

$id= $_POST ['id'];
$nama = $_POST ['nama'];
$jenis_kelamin = $_POST ['jenis_kelamin'];
$no_telp = $_POST ['no_telp'];
$alamat= $_POST ['alamat'];
$kota= $_POST ['kota'];
$kode_pos= $_POST ['kode_Pos'];
$email= $_POST ['email'];

include_once("connection.php");

$result = mysqli_query($connection, "INSERT INTO `pelanggan` (`nama`,`jenis_kelamin`,`no_telp`,`alamat`,`kota`,`kode_pos`,`email`)
VALUES ('$nama','$jenis_kelamin','$no_telp','$alamat','$kota','$kode_pos','$email');");
header("Location:index.php");

