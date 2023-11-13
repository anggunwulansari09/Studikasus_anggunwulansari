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
    <form action="proses_barang.php" method="post" >
        <h4 style="margin-top: 20px;  text-align: center; margin-right: 100px;">Data pesanan</h4>
        <p style="text-align: center; ">Silahkan lengkapi data untuk menambahkannya </p>
        <table width="25%" align="center">
            <tr>
                <td>
                    Nama Barang
                </td>
                <td><input type="text" name="nama_barang" class="form-control" required=""></td>
            </tr>
            <tr>
                <td>
                    Harga
                </td>
                <td><input type="number" name="harga" class="form-control" required=""></td>
            </tr>
            <tr>
                <td>
                    Stok
                </td>
                <td><input type="number" name="stok" class="form-control" required=""></td>
            </tr>
            <tr>
                <td>
                    Penilaian
                </td>
                <td><input type="text" name="penilaian" class="form-control" required=""></td>
            </tr>
            <tr>
                <td>
                   Kategori ID
                </td>
                <td><select name="kategori_id" id='kategori_id' class="form-control">
                       <option value="1">Bando</option>
                       <option value="2">Jepit</option>
                       <option value="3">gelang</option>
                       <option value="4">Kalung</option>
                       <option value="5">Ikat Rambut</option>
                       <option value="6">Tas</option>
                       <option value="7">Topi</option>
                       <option value="8">cincin</option>
                    </select></td>
            </tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit" class="btn btn-primary btn-sm"></td>
            </tr>
        </table>
    </form>

</body>

</html>