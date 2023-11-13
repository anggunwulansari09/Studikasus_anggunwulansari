<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data pelanggan </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #8aa0db;">
    <!-- tabel -->
    <form action="proses_detail_pesanan.php" method="post" >
        <h4 style="margin-top: 20px;  text-align: center; margin-right: 100px;">Data pesanan</h4>
        <p style="text-align: center; ">Silahkan lengkapi data untuk menambahkannya </p>
        <table width="25%" align="center">
            <tr>
                <td>
                   Pesanan ID
                </td>
                <td><input type="number" name="pesanan_id" class="form-control" required=""></td>
            </tr>
            <tr>
                <td>
                    Barang ID
                </td>
                <td><input type="number" name="barang_id" class="form-control" required=""></td>
            </tr>
            <tr>
                <td>
                    Jumlah Barang
                </td>
                <td><input type="number" name="jumlah_barang" class="form-control" required=""></td>
            </tr>
            <tr>
                <td>
                    Total Pesanan
                </td>
                <td><input type="number" name="total_pesanan" class="form-control" required=""></td>
            </tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit" class="btn btn-primary btn-sm"></td>
            </tr>
        </table>
    </form>
</body>

</html>