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
    <?php
    include 'connection.php';
    ?>
    <form action="proses.php" method="post">
        <h4 style="margin-top: 20px;  text-align: center; margin-right: 100px;">Tambah Data pelanggan</h4>
        <p style="text-align: center; ">Silahkan lengkapi data untuk menambahkannya </p>
        <table width="25%" align="center">
            <tr>
                <td>
                    Nama Barang
                </td>
                <td><input type="text" name="nama_barang" class="form-control"  ?></td>
            </tr>
            <tr>
                <td>
                    harga
                </td>
                <td><input type="number" name="harga" class="form-control"  ?></td>
            </tr>
            <tr>
                <td>
                    Stok
                </td>
                <td><input type="number" name="stok" class="form-control" ?></td>
            </tr>
            <tr>
                <td>
                    Penilaian
                </td>
                <td><input type="text" name="penilaian" class="form-control" ?></td>
            </tr>
            <tr>
                <td>
                    ID Kategori
                </td>
                <td>
                    <select name="kategori_id" id='kategori_id' class="form-control">
                        <?php
                        // Fetch data from the "items" table
                        $query = mysqli_query($connection, "SELECT * FROM kategori");
                        if (mysqli_num_rows($query) > 0) {
                            while ($data = mysqli_fetch_array($query)) {
                                echo "<option value='" . $data["kategori_id"] . "'>" . $data["nama_kategori"] . "</option>";
                            }
                        } else {
                            echo "<option value=''>No items available</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Nama Kategori
                </td>
                <td>
                <select name="nama_kategori"  id='nama_kategori'  class="form-control">
                        <?php
                        // Fetch data from the "items" table
                        $query = mysqli_query($connection, "SELECT * FROM kategori");
                        if (mysqli_num_rows($query) > 0) {
                            while ($data = mysqli_fetch_array($query)) {
                                echo "<option value='" . $data["kategori_id"] . "'>" . $data["nama_kategori"] . "</option>";
                            }
                        } else {
                            echo "<option value=''>No items available</option>";
                        }
                        ?>
                    </select>
                </td>

            </tr>
            <td></td>
            <td> <input type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"></td>
            </tr>
        </table>
    </form>

</body>

</html>