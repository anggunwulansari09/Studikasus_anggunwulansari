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
            var pesanan_id = document.forms["tambahdpForm"]["pesanan_id"].value;
            var barang_id = document.forms["tambahdpForm"]["barang_id"].value;
            var jumlah_barang = document.forms["tambahdpForm"]["jumlah_barang"].value;
            var total_pesanan = document.forms["tambahdpForm"]["total_pesanan"].value;

            if (pesanan_id == "" || barang_id== "" || jumlah_barang== ""|| total_pesanan== "") {
                alert("Semua Field harus di isi!"); //pop up data yang harus diisi
                return false;
            }
        }
    </script>
</head>
<?php

include("connection.php");
$id= $_GET['id'];
$detail_pesanan = mysqli_query($connection, " SELECT * FROM detail_pesanan WHERE id = '$id'");

foreach ($detail_pesanan as $detail_pesanan) {
    $pesanan_id = $detail_pesanan['pesanan_id'];
    $barang_id= $detail_pesanan['barang_id'];
    $jumlah_barang= $detail_pesanan['jumlah_barang'];
    $total_pesanan= $detail_pesanan['total_pesanan'];
    
}
?>
<body style="background-color: #8aa0db;">
    <!-- tabel -->
    <form name="tambahdpForm" action="proses_edit_detail_pesanan.php?id=<?php echo $id; ?>" method="post" onsubmit="return validateForm();">
        <h4 style="margin-top: 50px;  text-align: center; margin-right: 115px;">Edit Data pelanggan</h4>
        <p style="text-align: center; ">Silahkan Untuk Melengkapi data yang benar</p>
        <table width="25%" align="center">
            <tr>
                <td>
                   Pesanan ID
                </td>
                <td><input type="number" class="form-control" name="pesanan_id" value="<?php echo $pesanan_id; ?>"></td>
            </tr>
            <tr>
                <td>
                   Barang ID
                </td>
                <td><input type="number" class="form-control" name="barang_id" value="<?php echo $barang_id; ?>"></td>
            </tr>
            <tr>
                <td>
                   Jumlah Barang
                </td>
                <td><input type="number" class="form-control" name="jumlah_barang" value="<?php echo $jumlah_barang; ?>"></td>
            </tr>
            <tr>
                <td>
                   Total Pesanan
                </td>
                <td><input type="number" class="form-control" name="total_pesanan" value="<?php echo $jumlah_barang; ?>"></td>
            </tr>
            <td></td>
            <td> <input type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"></td>
            </tr>
        </table>
    </form>
</body>

</html>