<?php
include "connection.php";
$query = mysqli_query($connection, "select * from barang join kategori on barang.kategori_id=kategori.id
");

// $query = mysqli_query($connection, "SELECT * from barang as barang join kategori as kategori on barang.kategori_id = kategori.kategori_id ORDER BY update_at DESC;");

// $query = mysqli_query($conn, "SELECT * from buku as b join pengarang as p on b.id_pengarang = p.id_pengarang
//  join penerbit as pb on b.id_penerbit = pb.id_penerbit 
//  join katalog as k on b.id_katalog=k.id_katalog ORDER BY updated_at DESC;");
                
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
            $('#table-barang').DataTable();
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
                    <td width="100px" style="background-color: #5085c7; text-align: center;"> <b><i>Nama Kategori<br></i></b></td>
                    <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Aksi<br></i></b></td>
                </tr>
            </thead>
            <tbody>
                <?php
                 if (mysqli_num_rows($query)>0) {
                    $no = 1;
                ?>
                    <?php
                    while ($barang = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td style="background-color: #9ea6a7; text-align: center;"><?php echo $barang['id']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $barang['nama_barang']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $barang['harga']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $barang['stok']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $barang['penilaian']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $barang['kategori_id']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $barang['nama_kategori']; ?></td>
                            <td align="center">
                                <a href="edit.php?id=<?php echo $barang['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $barang['id']; ?>);" class="btn btn-danger btn-sm">Delete</a>
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