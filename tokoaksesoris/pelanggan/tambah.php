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
    <form action="proses.php" method="post" >
        <h4 style="margin-top: 20px;  text-align: center; margin-right: 100px;">Tambah Data pelanggan</h4>
        <p style="text-align: center; ">Silahkan lengkapi data untuk menambahkannya </p>
        <table width="25%" align="center">
            <tr>
                <td>
                    Nama
                </td>
                <td><input type="text" name="nama" class="form-control" required=""></td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-button" type="radio" name="jenis_kelamin" value="Pria">
                        <label class="form-check-label">Pria</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-button" type="radio" name="jenis_kelamin" value="Wanita">
                        <label class="form-check-label">Wanita</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Telpon
                </td>
                <td><input type="number" name="no_telp" class="form-control" required=""></td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td> <textarea class="form-control" name="alamat" id="" rows="10" required=""></textarea></td>
            </tr>
            <tr>
                <td>
                    Kota
                </td>
                <td><input type="text" name="kota" class="form-control" required=""></td>
            </tr>
            <tr>
                <td>
                    Kode Pos
                </td>
                <td><input type="number" name="kode_pos" class="form-control"required=""></td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td><input type="text" name="email" class="form-control" required=""></td>
            </tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit" class="btn btn-primary btn-sm"></td>
            </tr>
        </table>
    </form>

</body>

</html>