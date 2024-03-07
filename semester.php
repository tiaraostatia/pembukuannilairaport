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
      <div class="row">
        <div class="col-6 d-flex align-items-center">
          <h6 class="mb-0">semester</h6>
        </div>
        <div class="col-6 text-end">
          <form action="" method="get" class="form-inline">
            <div class="row">

              <div class="col-5">
                <input type="text" class="form-control" placeholder="Cari" aria-label="First name" name="cari">
                <input type="hidden" class="form-control" placeholder="Cari" aria-label="First name" name="dashboard" 
                value="siswa">
              </div>
              <div class="col-2">
                <input type="submit" class="btn bg-gradient-primary" value="Cari" aria-label="Last name">
              </div>
          </form>
          <div class="col-4">
            <a class="btn bg-gradient-dark mb-0" href="?dashboard=semester-add"><i class="fas fa-plus" aria-hidden="true"></i>
            &nbsp;&nbsp;Tambahkan</a>
          </div>
          <div class="col-1">
            <a class="btn bg-gradient-dark mb-0" href="semester_excel.php"><i class="fas fa-file-excel" aria-hidden="true"></i></a>
        </div>

      </div>
      </div>
    </div>
    <div class="card-body p-3">
      <div class="row">
        <div class="col-md-12 mb-md-0 mb-4">
          <table class="table mt-3">
            <tr>
            <td>id_semester </td>
            <td>nama_semester</td>
            <td>tanggal_mulai</td>
            <td>tanggal_selesai</td>
            <td>aksi</td>
        </tr>
        <?php if (isset($_GET['cari'])) : ?>
            <?php $cari = $_GET['cari'] ?>
            <?php $query = mysqli_query($koneksi, "select * from semester where id_semester like '%" . $cari . "%'"); ?>
          <?php else : ?>
            <?php $query = mysqli_query($koneksi, "SELECT * FROM semester=id_semester");  ?>
          <?php endif ?>
          <tbody>
            <?php while ($data = mysqli_fetch_array($query)) : ?>
        <tr>
            <td><?php echo $data['id_semester'] ?></td>
            <td><?php echo $data['nama_semester'] ?></td>
            <td><?php echo $data['tanggal_mulai'] ?></td>
            <td><?php echo $data['tanggal_selesai'] ?></td>
            <td>
                  <a href="dashboard.php?dashboard=semester-edit&id_semester=<?php echo $data['id_semester'] ?>">Edit</a>
                  <a href="dashboard.php?dashboard=semester-delete&id_semester=<?php echo $data['id_semester'] ?>"
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