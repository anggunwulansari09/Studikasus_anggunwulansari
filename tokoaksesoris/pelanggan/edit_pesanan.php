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
            var tanggal_pesanan = document.forms["tambahpesananForm"]["tanggal_pesanan"].value;
            var jenis_kelamin = document.forms["tambahpesananForm"]["pelanggan_id"].value;

            if (tanggal_pesanan == "" || pelanggan_id == "" ) {
                alert("Semua Field harus di isi!"); //pop up data yang harus diisi
                return false;
            }
        }
    </script>
</head>
<?php

include("connection.php");
$id= $_GET['id'];
$pesanan = mysqli_query($connection, " SELECT * FROM pesanan WHERE id = '$id'");

foreach ($pesanan as $pesanan) {
    $tanggal_pesanan = $pesanan['tanggal_pesanan'];
    $pelanggan_id= $pesanan['pelanggan_id'];
}
?>
<body style="background-color: #8aa0db;">
    <!-- tabel -->
    <form name="tambahpesananForm" action="proses_edit_pesanan.php?id=<?php echo $id; ?>" method="post" onsubmit="return validateForm();">
        <h4 style="margin-top: 50px;  text-align: center; margin-right: 115px;">Edit Data pelanggan</h4>
        <p style="text-align: center; ">Silahkan Untuk Melengkapi data yang benar</p>
        <table width="25%" align="center">
            <tr>
                <td>
                   tanggal pesanan
                </td>
                <td><input type="date" class="form-control" name="tanggal_pesanan" value="<?php echo $tanggal_pesanan; ?>"></td>
            </tr>
            <tr>
                <td>
                    id pelanggan
                </td>
                <td><input type="number" class="form-control" name="pelanggan_id" value="<?php echo $pelanggan_id; ?>"></td>
            </tr>
            <td></td>
            <td> <input type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"></td>
            </tr>
        </table>
    </form>
</body>

</html>