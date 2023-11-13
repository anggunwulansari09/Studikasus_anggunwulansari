<?php
$id= $_GET ['id'];
$nama_kategori= $_POST ['nama_kategori'];



include_once("connection.php");

mysqli_query($connection, "UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id= '$id';");
header("Location:index.php");
