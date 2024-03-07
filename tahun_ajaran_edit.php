<?php
include "db/koneksi.php";

$id_tahun_ajaran = $_GET['id_tahun_ajaran'];

$pilih = mysqli_query($koneksi, "SELECT * FROM tahun_ajaran WHERE id_tahun_ajaran ='$id_tahun_ajaran '");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_tahun_ajaran  = $_POST['id_tahun_ajaran'];
    $nama_tahun_ajaran  = $_POST['nama_tahun_ajaran '];

    $query = mysqli_query($koneksi, "UPDATE tahun_ajaran SET id_tahun_ajaran='$id_tahun_ajaran' WHERE nama_tahun_ajaran='$nama_tahun_ajaran'");
    if ($query) {
        echo "<script>
        window.location = 'dashboard.php?dashboard=tahun_ajaran &aksi=edit-berhasil';
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
                <h1>mengedit tahun_ajaran </h1>
                <form action=""method="post">
                <?php
                    while ($data = mysqli_fetch_array($pilih)){
                        ?>
                    <div class="mb-3">
                        <label for="id_tahun_ajaran " class="form-label">id_tahun_ajaran </label>
                        <input type="text" id="id_tahun_ajaran " name="id_tahun_ajaran " class="form-control"
                        value="<?php echo $data ['id_tahun_ajaran'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_tahun_ajaran" class="form-label">nama_tahun_ajaran</label>
                        <input type="text" id="nama_tahun_ajaran" name="nama_tahun_ajaran" class="form-control"
                        value="<?php echo $data ['nama_tahun_ajaran'] ?>">
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