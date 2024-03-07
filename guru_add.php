<?php
include "db/koneksi.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_guru = $_POST['id_guru'];
    $nama_guru = $_POST['nama_guru'];
    $no_induk = $_POST['no_induk'];

    $query = mysqli_query($koneksi, "INSERT INTO guru VALUES ('$id_guru','$nama_guru','$no_induk')");
    if ($query) {
        echo "<script>
        window.location = 'dashboard.php?dashboard=guru&aksi=edit-berhasil';
        </script>";
        echo "berhasil";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>menambah guru</h1>
                <form action=""method="post">
                    <div class="mb-3">
                        <label for="id_guru" class="form-label">id_guru</label>
                        <input type="text" id="id_guru" name="id_guru" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nama_guru" class="form-label">nama_guru</label>
                        <input type="text" id="nama_guru" name="nama_guru" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="no_induk" class="form-label">no_induk</label>
                        <input type="text" id="no_induk" name="no_induk" class="form-control">
                    </div>
                    <button type="sumbit" class="btn btn-primary">simpan</button>
                    <button type="submit" class="btn btn-primary">Reset</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>