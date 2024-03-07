<?php include 'db/koneksi.php' ?>
<?php
if (isset($_GET['aksi'])) {
  if ($_GET['aksi'] == "hapus-berhasil") {
    echo "
        <div class='alert alert-primary' role='alert'>
         Data Berhasil Dihapus!
        </div>
        ";
  }
  if ($_GET['aksi'] == "add-berhasil") {
    echo "
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
          <h6 class="mb-0">mata_pelajaran</h6>
        </div>
        <div class="col-6 text-end">
          <form action="" method="get" class="form-inline">
            <div class="row">

              <div class="col-5">
                <input type="text" class="form-control" placeholder="Cari" aria-label="First name" name="cari">
                <input type="hidden" class="form-control" placeholder="Cari" aria-label="First name" name="dashboard" value="mengajar">
              </div>
              <div class="col-2">
                <input type="submit" class="btn bg-gradient-primary" value="Cari" aria-label="Last name">
              </div>
          </form>
          <div class="col-4">
            <a class="btn bg-gradient-dark mb-0" href="?dashboard=mata_pelajaran-add"><i class="fas fa-plus" aria-hidden="true"></i>
            &nbsp;&nbsp;Tambahkan</a>
          </div>
          <div class="col-1">
            <a class="btn bg-gradient-dark mb-0" href="mengajar_excel.php"><i class="fas fa-file-excel" aria-hidden="true"></i></a>
        </div>

      </div>

    </div>
  </div>
  <div class="card-body p-3">
    <div class="row">
      <div class="col-md-12 mb-md-0 mb-4">
        <table class="table mt-3">
        <tr>
          <td>id_mapel</td>
          <td>nama_mapel</td>
          <td>kode_mapel</td>
          <td>aksi</td>
        </tr>
        <?php if (isset($_GET['cari'])) : ?>
            <?php $cari = $_GET['cari'] ?>
            <?php $query = mysqli_query($koneksi, "select * from mata_pelajaran where id_mapel like '%" . $cari . "%'"); ?>
          <?php else : ?>
            <?php $query = mysqli_query($koneksi, "SELECT * FROM mata_pelajaran");  ?>
          <?php endif ?>
          <tbody>
            <?php while ($data = mysqli_fetch_array($query)) : ?>
              <tr>
            <td><?php echo $data['id_mapel'] ?></td>
            <td><?php echo $data['nama_mapel'] ?></td>
            <td><?php echo $data['kode_mapel'] ?></td>
            <td>
                  <a href="dashboard.php?dashboard=mata_pelajaran-edit&id_mapel=<?php echo $data['id_mapel'] ?>">Edit</a>
                  <a href="dashboard.php?dashboard=mata_pelajaran-delete&id_mapel=<?php echo $data['id_mapel'] ?>
                 "onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
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