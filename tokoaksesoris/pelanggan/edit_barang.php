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
            var nama_barang = document.forms["tambahbarangForm"]["nama_barang"].value;
            var harga = document.forms["tambahbarangForm"]["harga"].value;
            var stok = document.forms["tambahbarangForm"]["stok"].value;
            var penilaian = document.forms["tambahbarangForm"]["penilaian"].value;
            var kategori_id = document.forms["tambahbarangForm"]["kategori_id"].value;

            if (nama_barang == "" || harga == "" || stok == "" || penilaian == "" || kategori_id == "") {
                alert("Semua Field harus di isi!"); //pop up data yang harus diisi
                return false;
            }
        }
    </script>
</head>
<?php

include("connection.php");
$id = $_GET['id'];
$barang = mysqli_query($connection, " SELECT * FROM barang WHERE id = '$id'");

foreach ($barang as $barang) {
    $nama_barang = $barang['nama_barang'];
    $harga = $barang['harga'];
    $stok = $barang['stok'];
    $penilaian = $barang['penilaian'];
    $kategori_id = $barang['kategori_id'];
}
?>

<body style="background-color: #8aa0db;">
    <!-- tabel -->
    <form name="tambahbarangForm" action="proses_edit_barang.php?id=<?php echo $id; ?>" method="post" onsubmit="return validateForm();">
        <h4 style="margin-top: 50px;  text-align: center; margin-right: 115px;">Edit Data pelanggan</h4>
        <p style="text-align: center; ">Silahkan Untuk Melengkapi data yang benar</p>
        <table width="25%" align="center">
            <tr>
                <td>
                    Nama Barang
                </td>
                <td><input type="text" class="form-control" name="nama_barang" value="<?php echo $nama_barang; ?>"></td>
            </tr>
            <tr>
                <td>
                    harga
                </td>
                <td><input type="number" class="form-control" name="harga" value="<?php echo $harga; ?>"></td>
            </tr>
            <tr>
                <td>
                    Stok
                </td>
                <td><input type="number" class="form-control" name="stok" value="<?php echo $stok; ?>"></td>
            </tr>
            <tr>
                <td>
                    Penilaian
                </td>
                <td><input type="text" class="form-control" name="penilaian" value="<?php echo $penilaian; ?>"></td>
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
            <td> <input type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"></td>
            </tr>
        </table>
    </form>
</body>

</html>