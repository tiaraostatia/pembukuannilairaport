<?php
include "db/koneksi.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_penilaian = $_POST['id_penilaian'];
    $id_siswa = $_POST['id_siswa'];
    $id_mapel = $_POST['id_mapel'];
    $nilai = $_POST['nilai'];
    $tanggal_penilaian = $_POST['tanggal_penilaian'];
    $jenis_penilaian = $_POST['jenis_penilaian'];

    $query = mysqli_query($koneksi, "INSERT INTO penilaian VALUES ('$id_penilaian','$id_siswa','$id_mapel',
    '$nilai','$tanggal_penilaian','$jenis_penilaian')");
    if ($query) {
        echo "<script>
        window.location = 'dashboard.php?dashboard=penilaian&aksi=edit-berhasil';
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
                <h1>menambah penilaian</h1>
                <form action=""method="post">
                    <div class="mb-3">
                        <label for="id_penilaian" class="form-label">id_penilaian</label>
                        <input type="text" id="id_penilaian" name="id_penilaian" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="id_siswa" class="form-label">id_siswa</label>
                        <input type="text" id="id_siswa" name="id_siswa" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="id_mapel" class="form-label">id_mapel</label>
                        <input type="text" id="id_mapel" name="id_mapel" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nilai" class="form-label">nilai</label>
                        <input type="text" id="nilai" name="nilai" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_penilaian" class="form-label">tanggal_penilaian</label>
                        <input type="date" id="tanggal_penilaian" name="tanggal_penilaian" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_penilaian" class="form-label">jenis_penilaian</label>
                        <input type="text" id="jenis_penilaian" name="jenis_penilaian" class="form-control">
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