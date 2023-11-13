<?php

$id= $_POST ['id'];
$nama_kategori = $_POST ['nama_kategori'];

include_once("connection.php");

$result = mysqli_query($connection, "INSERT INTO `kategori` (`nama_kategori`) VALUES ('$nama_kategori');");
header("Location:index.php");

