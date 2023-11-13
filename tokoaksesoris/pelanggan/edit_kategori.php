<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
          function validateForm() {
            var nama_kategori = document.forms["tambahkategoriForm"]["nama_kategori"].value;
            if (nama_kategori== "" ) {
                alert("Semua Field harus di isi!"); //pop up data yang harus diisi
                return false;
            }
        }
    </script>
</head>
<?php

include("connection.php");
$id= $_GET['id'];
$kategori = mysqli_query($connection, " SELECT * FROM kategori WHERE id = '$id'");

foreach ($kategori as $kategori) {
    $nama_kategori = $kategori['nama_kategori'];
}
?>
<body style="background-color: #8aa0db;">
    <!-- tabel -->
    <form name="tambahkategoriForm" action="proses_edit_kategori.php?id=<?php echo $id; ?>" method="post" onsubmit="return validateForm();">
        <h4 style="margin-top: 50px;  text-align: center; margin-right: 115px;">Edit Data pelanggan</h4>
        <p style="text-align: center; ">Silahkan Untuk Melengkapi data yang benar</p>
        <table width="25%" align="center">
            <tr>
                <td>
                   Nama Kategori
                </td>
                <td><input type="text" class="form-control" name="nama_kategori" value="<?php echo $nama_kategori; ?>"></td>
            </tr>
            <td></td>
            <td> <input type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"></td>
            </tr>
        </table>
    </form>
</body>

</html>