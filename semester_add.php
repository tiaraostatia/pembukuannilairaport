<?php
include "db/koneksi.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_semester = $_POST[' id_semester'];
    $nama_semester = $_POST['nama_semester'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai= $_POST['tanggal_selesai'];

    $query = mysqli_query($koneksi, "INSERT INTO semester VALUES ('$id_semester',$nama_semester','$tanggal_mulai','$tanggal_selesai')");
    if ($query) {
        echo "<script>
        window.location = 'dashboard.php?dashboard=semester&aksi=edit-berhasil';
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
                <h1>menambah semester</h1>
                <form action=""method="post">
                    <div class="mb-3">
                        <label for="id_semester" class="form-label">id_semester</label>
                        <input type="text" id="id_semester" name="id_semester" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nama_semester" class="form-label">nama_semester</label>
                        <input type="text" id="nama_semester" name="nama_semester" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_mulai" class="form-label">tanggal_mulai</label>
                        <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_selesai" class="form-label">tanggal_selesai</label>
                        <input type="date" id="tanggal_selesai" name="tanggal_selesai" class="form-control">
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