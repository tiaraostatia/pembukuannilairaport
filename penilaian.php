<?php include 'db/koneksi.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>nilai</h1>
    <?php
    if (isset($_GET['aksi'])){
      if ($_GET['aksi'] == "hapus-berhasil") {
        echo"
        <div class='alert alert-primary' role='alert'>
         Data Berhasil Dihapus!
        </div>
        ";
      }
        if ($_GET['aksi'] == "add-berhasil"){
          echo"
          <div class='alert alert-success' role='alert'>
           Data Berhasil Ditambahkan!
          </div>
          ";
        }
    }
  ?>
  <div class="col-md-12 mb-lg-0 mb-4">
  <div class="card mt-4">
    <div class="card-header pb-0 p-3">
      <div class="row">
        <div class="col-6 d-flex align-items-center">
          <h6 class="mb-0">penilaian</h6>
        </div>
        <div class="col-6 text-end">
          <form action="" method="get" class="form-inline">
            <div class="row">
              <div class="col-5">
                <input type="text" class="form-control" placeholder="Cari" aria-label="First name" name="cari">
                <input type="hidden" class="form-control" placeholder="Cari" aria-label="First name" name="dashboard"
                value="nilai">
              </div>
              <div class="col-2">
                <input type="submit" class="btn bg-gradient-primary" value="Cari" aria-label="Last name">
              </div>
            </form>
          <div class="col-4">
            <a class="btn bg-gradient-dark mb-0" href="?dashboard=penilaian-add"><i class="fas fa-plus" aria-hidden="true"></i>
            &nbsp;&nbsp;Tambahkan</a>
          </div>
          <div class="col-1">
          <a class="btn bg-gradient-dark mb-0" href="penilaian_excel.php"><i class="fas fa-file-excel" aria-hidden="true"></i></a>
      </div>
        </div>
    </div>
  </div>
  <div class="card-body p-3">
    <div class="row">
      <div class="col-md-12 mb-md-0 mb-4">
        <table class="table mt-3">
          <table class="table">
        <tr>
            <td>id_penilaian</td>
            <td>id_siswa</td>
            <td>id_mapel</td>
            <td>nilai</td>
            <td>tanggal_penilaian</td>
            <td>jenis_penilaian</td>
            <td>aksi</td>
        </tr>
        <?php if (isset($_GET['cari'])) : ?>
            <?php $cari = $_GET['cari'] ?>
            <?php $query = mysqli_query($koneksi, "select * from penilaian where id_penilaian like '%" . $cari . "%'"); ?>
          <?php else : ?>
            <?php $query = mysqli_query($koneksi, "SELECT * FROM penilaian");  ?>
          <?php endif ?>
          <tbody>
            <?php while ($data = mysqli_fetch_array($query)) : ?>
              <tr>
            <td><?php echo $data['id_penilaian'] ?></td>
            <td><?php echo $data['id_siswa'] ?></td>
            <td><?php echo $data['id_mapel'] ?></td>
            <td><?php echo $data['nilai'] ?></td>
            <td><?php echo $data['tanggal_penilaian'] ?></td>
            <td><?php echo $data['jenis_penilaian'] ?></td>
               <td>
                  <a href="dashboard.php?dashboard=penilaian-edit&id_penilaian=<?php echo $data['id_penilaian'] ?>">Edit</a>
                  <a href="dashboard.php?dashboard=penilaian-delete&id_penilaian=<?php echo $data['id_penilaian'] ?>"
                  onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
              </tr>
            <?php endwhile ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>