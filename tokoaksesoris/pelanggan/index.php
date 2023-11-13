<?php
include "connection.php";
$query = mysqli_query($connection, "SELECT * FROM pelanggan");
$psn = mysqli_query($connection, "SELECT * FROM pesanan");
$brg = mysqli_query($connection, "SELECT * FROM barang");
$ktg = mysqli_query($connection, "SELECT * FROM kategori");
$dp = mysqli_query($connection, "SELECT * FROM detail_pesanan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas menyambungkan database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <style>
        .container {
            width: 800px;
            margin: auto;
        }
    </style>
    <!-- javascript -->
    <script>
        function confirmDelete(id) {
            if (confirm("Apakah kamu yakin ingin menghapusnya?")) { // pop up  peringatan data yang akan dihapus
                window.location.href = "delete.php?id=" + id;
            }
        }
    </script>
    <!-- jquerry -->
    <script>
        $(document).ready(function() {
            $('#table-pelanggan').DataTable();
        });
    </script>
    <!-- javascript -->
    <script>
        function confirmDelete(id) {
            if (confirm("Apakah kamu yakin ingin menghapusnya?")) { // pop up  peringatan data yang akan dihapus
                window.location.href = "delete_pesanan.php?id=" + id;
            }
        }
    </script>

    </script>
    <!-- jquerry -->
    <script>
        $(document).ready(function() {
            $('#table-pesanan').DataTable();
        });
    </script>
    <!-- barang -->
    <script>
        function confirmDelete(id) {
            if (confirm("Apakah kamu yakin ingin menghapusnya?")) { // pop up  peringatan data yang akan dihapus
                window.location.href = "delete_barang.php?id=" + id;
            }
        }
    </script>

    </script>
    <!-- jquerry -->
    <script>
        $(document).ready(function() {
            $('#table-barang').DataTable();
        });
    </script>
     <!-- kategori -->
     <script>
        function confirmDelete(id) {
            if (confirm("Apakah kamu yakin ingin menghapusnya?")) { // pop up  peringatan data yang akan dihapus
                window.location.href = "delete_kategori.php?id=" + id;
            }
        }
    </script>

    </script>
    <!-- jquerry -->
    <script>
        $(document).ready(function() {
            $('#table-kategori').DataTable();
        });
    </script>
     <!-- detail pesanan -->
     <script>
        function confirmDelete(id) {
            if (confirm("Apakah kamu yakin ingin menghapusnya?")) { // pop up  peringatan data yang akan dihapus
                window.location.href = "delete_detail_pesanan.php?id=" + id;
            }
        }
    </script>
    </script>
    <!-- jquerry -->
    <script>
        $(document).ready(function() {
            $('#table-detail').DataTable();
        });
    </script>
</head>

<body>
    <h2 style="text-align: center; font-family:'Times New Roman'; color: white; "><u> <br>Toko Sembako Murah</u> </h2>
    <p style="text-align: center; color: skyblue;">Selamat Datang Di Toko Sembako Murah</p>
    <p style="padding-left: 170px; color: white;"><b><i><br>Tabel customer</i></b></p>
    <!-- button tambah -->
    <p style="padding-left: 170px;"><a class="btn btn-primary btn-sm" href="tambah.php" role="button">Tambah Data </a> </p>

    <!-- tabel customer -->
    <div style="width:1200px; margin:0 auto;">
        <table id="table-pelanggan" class="table table-striped-columns">
            <thead>
                <tr>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>ID </i></b></td>
                    <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Nama Customer</i></b></td>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>Jenis Kelamin</i></b></td>
                    <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Telpon </i></b></td>
                    <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Alamat <br></i></b></td>
                    <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>kota <br></i></b></td>
                    <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Kode Pos<br></i></b></td>
                    <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Email <br></i></b></td>
                    <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Aksi<br></i></b></td>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($query)) {
                ?>
                    <?php
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td style="background-color: #9ea6a7; text-align: center;"><?php echo $data['id']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $data['nama']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $data['jenis_kelamin']; ?></td>
                            <td style="background-color: #9ea6a7; text-align: center;"><?php echo $data['no_telp']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $data['alamat']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $data['kota']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $data['kode_pos']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $data['email']; ?></td>
                            <td align="center">
                                <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $data['id']; ?>);" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php
                    } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- pesanan -->
    <p style="padding-left: 170px; color: white;"><b><i><br>Tabel customer</i></b></p>
    <!-- button tambah -->
    <p style="padding-left: 170px;"><a class="btn btn-primary btn-sm" href="tambah_pesanan.php" role="button">Tambah Data </a> </p>

    <!-- tabel customer -->
    <div style="width:800px; margin:0 auto;">
        <table id="table-pesanan" class="table table-striped-columns">
            <thead>
                <tr>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>ID </i></b></td>
                    <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Tanggal_pesanan</i></b></td>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i> ID Pelanggan</i></b></td>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i> Aksi</i></b></td>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($psn)) {
                ?>
                    <?php
                    while ($pesanan = mysqli_fetch_array($psn)) {
                    ?>
                        <tr>
                            <td style="background-color: #9ea6a7; text-align: center;"><?php echo $pesanan['id']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $pesanan['tanggal_pesanan']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $pesanan['pelanggan_id']; ?></td>
                            <td align="center">
                                <a href="edit_pesanan.php?id=<?php echo $pesanan['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $pesanan['id']; ?>);" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php
                    } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- barang -->
    <p style="padding-left: 170px; color: white;"><b><i><br>Tabel customer</i></b></p>
    <!-- button tambah -->
    <p style="padding-left: 170px;"><a class="btn btn-primary btn-sm" href="tambah_barang.php" role="button">Tambah Data </a> </p>
    <!-- tabel customer -->
    <div style="width:1000px; margin:0 auto;">
        <table id="table-barang" class="table table-striped-columns">
            <thead>
                <tr>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>ID </i></b></td>
                    <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Nama barang</i></b></td>
                    <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Harga </i></b></td>
                    <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Stok<br></i></b></td>
                    <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Penilaian<br></i></b></td>
                    <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>ID Kategori<br></i></b></td>
                    <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Aksi<br></i></b></td>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($brg) > 0) {
                    $no = 1;
                ?>
                    <?php
                    while ($barang = mysqli_fetch_array($brg)) {
                    ?>
                        <tr>
                            <td style="background-color: #9ea6a7; text-align: center;"><?php echo $barang['id']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $barang['nama_barang']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $barang['harga']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $barang['stok']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $barang['penilaian']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $barang['kategori_id']; ?></td>
                            <td align="center">
                                <a href="edit_barang.php?id=<?php echo $barang['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $barang['id']; ?>);" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php
                    } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>

     <!-- kategori -->
     <p style="padding-left: 170px; color: white;"><b><i><br>Tabel customer</i></b></p>
    <!-- button tambah -->
    <p style="padding-left: 170px;"><a class="btn btn-primary btn-sm" href="tambah_kategori.php" role="button">Tambah Data </a> </p>

    <!-- tabel customer -->
    <div style="width:800px; margin:0 auto;">
        <table id="table-kategori" class="table table-striped-columns">
            <thead>
                <tr>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>ID </i></b></td>
                    <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Nama Kategori</i></b></td>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i> Aksi</i></b></td>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($ktg)) {
                ?>
                    <?php
                    while ($kategori = mysqli_fetch_array($ktg)) {
                    ?>
                        <tr>
                            <td style="background-color: #9ea6a7; text-align: center;"><?php echo $kategori['id']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $kategori['nama_kategori']; ?></td>
                            <td align="center">
                                <a href="edit_kategori.php?id=<?php echo $kategori['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $kategori['id']; ?>);" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php
                    } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>

 <!-- pesanan -->
 <p style="padding-left: 170px; color: white;"><b><i><br>Tabel customer</i></b></p>
    <!-- button tambah -->
    <p style="padding-left: 170px;"><a class="btn btn-primary btn-sm" href="tambah_detail_pesanan.php" role="button">Tambah Data </a> </p>

    <!-- tabel customer -->
    <div style="width:800px; margin:0 auto;">
        <table id="table-detail" class="table table-striped-columns">
            <thead>
                <tr>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>ID </i></b></td>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>Pesanan ID</i></b></td>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i> Barang ID</b></td>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i> Jumlah Barang<i></b></td>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i> Total Pesanan</i></b></td>
                    <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i> Aksi</i></b></td>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($dp)) {
                ?>
                    <?php
                    while ($detail_pesanan= mysqli_fetch_array($dp)) {
                    ?>
                        <tr>
                            <td style="background-color: #9ea6a7; text-align: center;"><?php echo $detail_pesanan['id']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $detail_pesanan['pesanan_id']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $detail_pesanan['barang_id']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $detail_pesanan['jumlah_barang']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $detail_pesanan['total_pesanan']; ?></td>
                            <td align="center">
                                <a href="edit_detail_pesanan.php?id=<?php echo $detail_pesanan['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $detail_pesanan['id']; ?>);" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php
                    } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- footer -->
    <footer>
        <div class="text-center p-4" style="background-color: #121724; height: 20px;">
            <p style="color: white;">© 2021 Copyright: anggun wulan sari <br></p>
        </div>
    </footer>
</body>

</html>