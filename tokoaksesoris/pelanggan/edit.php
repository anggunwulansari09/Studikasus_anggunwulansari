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
            var nama = document.forms["tambahpelangganForm"]["nama"].value;
            var jenis_kelamin = document.forms["tambahpelangganForm"]["jenis_kelamin"].value;
            var no_telp = document.forms["tambahpelangganForm"]["no_telp"].value;
            var alamat = document.forms["tambahpelangganForm"]["alamat"].value;
            var kota = document.forms["tambahpelangganForm"]["kota"].value;
            var kode_pos = document.forms["tambahpelangganForm"]["kode_pos"].value;
            var email = document.forms["tambahpelangganForm"]["email"].value;

            if (nama == "" || jenis_kelamin == "" || no_telp == "" || alamat == "" || kota == "" || kode_pos == "" || email == "") {
                alert("Semua Field harus di isi!"); //pop up data yang harus diisi
                return false;
            }
        }
    </script>
</head>
<?php

include("connection.php");
$id= $_GET['id'];
$pelanggan = mysqli_query($connection, " SELECT * FROM pelanggan WHERE id = '$id'");

foreach ($pelanggan as $pelanggan) {
    $nama = $pelanggan['nama'];
    $jenis_kelamin= $pelanggan['jenis_kelamin'];
    $no_telp= $pelanggan['no_telp'];
    $alamat= $pelanggan['alamat'];
    $kota= $pelanggan['kota'];
    $kode_pos= $pelanggan['kode_pos'];
    $email= $pelanggan['email'];
}
?>
<body style="background-color: #8aa0db;">
    <!-- navbar dan menu -->
    <nav class="navbar navbar-expand-lg bg-body-#ffd903;" style="background-color: #ffd903; height: 50px;">
        <div class="container-fluid">
            <img src="penjualan.png" alt="Logo" width="70" height="40" style="padding-top: 2px; ">
            <a class="navbar-brand" href="#" style="margin-left: 10px; font-family:Times New Roman;font-size: 25px;">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="http://localhost/Tugas_php/Sesi29/index.php" style="margin-left: 900px; font-family:Times New Roman; font-size: 20px;">Customer</a>
                    <a class="nav-link" href="http://localhost/Tugas_php/Sesi29/barang/index.php" style="font-family:Times New Roman; font-size: 20px;">Barang</a>
                    <a class="nav-link" href="http://localhost/Tugas_php/Sesi29/kategori/index.php" style="font-family:Times New Roman; font-size: 20px;">Kategori</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- tabel -->
    <form name="tambahlanggananForm" action="proses_edit_pelanggan.php?id=<?php echo $id; ?>" method="post" onsubmit="return validateForm();">
        <h4 style="margin-top: 50px;  text-align: center; margin-right: 115px;">Edit Data pelanggan</h4>
        <p style="text-align: center; ">Silahkan Untuk Melengkapi data yang benar</p>
        <table width="25%" align="center">
            <tr>
                <td>
                    Nama
                </td>
                <td><input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    <div class="form-check" >
                        <?php 
                        if($jenis_kelamin == 'Pria'){
                            echo'<input class="form-check-input" type="radio" name="jenis_kelamin" value="Pria" checked="">';
                        }else{
                            echo '<input class="form-check-button" type="radio" name="jenis_kelamin" value="Pria">';
                        }
                        ?>
                        <label class="form-check-label">Pria</label>
                    </div>
                    <div class="form-check" >
                        <?php 
                        if($jenis_kelamin == 'Wanita'){
                            echo'<input class="form-check-input" type="radio" name="jenis_kelamin" value="Wanita" checked="">';
                        }else{
                            echo '<input class="form-check-button" type="radio" name="jenis_kelamin" value="Wanita">';
                        }
                        ?>
                        <label class="form-check-label">Wanita</label>
                    </div>
                  
                </td>
            </tr>
            <tr>
                <td>
                    Telpon
                </td>
                <td><input type="number" name="no_telp" class="form-control" value="<?php echo $no_telp; ?>"></td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td> <textarea class="form-control" name="alamat" id="" rows="10"><?php echo $alamat; ?></textarea></td>
            </tr>
            <tr>
                <td>
                    Kota
                </td>
                <td><input type="text" class="form-control" name="kota" value="<?php echo $kota; ?>"></td>
            </tr>
            <tr>
                <td>
                    Kode Pos
                </td>
                <td><input type="number" name="kode_pos" class="form-control" value="<?php echo $kode_pos; ?>"></td>
            </tr>
            <tr>
            <tr>
                <td>
                    Email
                </td>
                <td><input type="text" name="email" class="form-control" value="<?php echo $email; ?>"></td>
            </tr>
            <td></td>
            <td> <input type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"></td>
            </tr>
        </table>
    </form>
</body>

</html>