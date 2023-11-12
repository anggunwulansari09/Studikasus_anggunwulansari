<?php
include "connection.php";
$query = mysqli_query($connection, "SELECT * FROM pesanan");
$query1 = mysqli_query($connection, "SELECT * FROM detail_pesanan");
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
    <script>
        function confirmDelete(id) {
            if (confirm("Apakah kamu yakin ingin menghapusnya?")) { // pop up  peringatan data yang akan dihapus
                window.location.href = "delete_dp.php?id=" + id;
            }
        }
    </script>
    <!-- jquerry -->
    <script>
        $(document).ready(function() {
            $('#table-pesanan').DataTable();
        });
    </script>
     <script>
        $(document).ready(function() {
            $('#table-detail_pesanan').DataTable();
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
                <?php if (mysqli_num_rows($query)) {
                ?>
                    <?php
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td style="background-color: #9ea6a7; text-align: center;"><?php echo $data['id']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $data['tanggal_pesanan']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $data['pelanggan_id']; ?></td>
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

    <br> </br>
    <p style="padding-left: 170px;"><a class="btn btn-primary btn-sm" href="tambah_dp.php" role="button">Tambah Data </a> </p>
    <div style="width:800px; margin:0 auto;">
        <table id="table-detail_pesanan" class="table table-striped-columns">
            <thead>
                <tr>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>ID </i></b></td>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i> ID pesanan </i></b></td>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>  ID barang</i></b></td>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>  Jumlah barang</i></b></td>
                    <td width="50px" style="background-color: #5085c7; text-align: center;"> <b><i>  Total Pesanan</i></b></td>
                    <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i> Aksi</i></b></td>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($query1)) {
                ?>
                    <?php
                    while ($dp = mysqli_fetch_array($query1)) {
                    ?>
                        <tr>
                            <td style="background-color: #9ea6a7; text-align: center;"><?php echo $dp['id']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $dp['pesanan_id']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $dp['barang_id']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $dp['jumlah_barang']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $dp['total_pesanan']; ?></td>
                            <td align="center">
                                <a href="edit_dp.php?id=<?php echo $dp['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $dp['id']; ?>);" class="btn btn-danger btn-sm">Delete</a>
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
            <p style="color: white;">© 2022 Copyright: anggun wulan sari <br></p>
        </div>
    </footer>
</body>

</html>