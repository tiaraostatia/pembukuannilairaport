<?php
include "db/koneksi.php";

$id_siswa = $_GET['id_siswa'];

$pilih = mysqli_query($koneksi, "SELECT * FROM siswa WHERE  id_siswa='$id_siswa'");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_siswa = $_POST[' id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $no_induk = $_POST['no_induk'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat= $_POST['alamat'];
    
    $query = mysqli_query($koneksi, "UPDATE  siswa SET nama_siswa='$nama_siswa',no_induk='$no_induk',
    tanggal_lahir='$tanggal_lahir'alamat='$alamat' WHERE id_siswa='$id_siswa'");
    if ($query) {
        echo "<script>
        window.location = 'dashboard.php?dashboard=siswa&aksi=edit-berhasil';
        </script>";
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
                <h1>mengedit siswa</h1>
                <form action=""method="post">
                <?php
                    while ($data = mysqli_fetch_array($pilih)){
                        ?>
                    <div class="mb-3">
                        <label for="id_siswa" class="form-label">id_siswa</label>
                        <input type="text" id="id_siswa" name="id_siswa" class="form-control"
                        value="<?php echo $data ['id_siswa'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">nama_siswa</label>
                        <input type="text" id="nama_siswa" name="nama_siswa" class="form-control"
                        value="<?php echo $data ['nama_siswa'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="no_induk" class="form-label">no_induk</label>
                        <input type="text" id="no_induk" name="no_induk" class="form-control"
                        value="<?php echo $data ['no_induk'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">tanggal_lahir</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control"
                        value="<?php echo $data ['tanggal_lahir'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control"
                        value="<?php echo $data ['alamat'] ?>">
                    </div>
                    <button type="sumbit" class="btn btn-primary">simpan</button>
                    <?php }  ?>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>