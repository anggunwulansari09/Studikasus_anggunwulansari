<?php

include ("connection.php");

$id = $_GET ['id'];

mysqli_query($connection, "DELETE FROM barang WHERE  id='$id' ");

header("Location:index.php");

