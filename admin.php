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
          <h6 class="mb-0">admin</h6>
        </div>
        <div class="col-6 text-end">
          <form action="" method="get" class="form-inline">
            <div class="row">
              </div>
              <div class="col-4">
            <a class="btn bg-gradient-dark mb-0" href="?dashboard=admin-add"><i class="fas fa-plus" aria-hidden="true"></i>
            &nbsp;&nbsp;Tambahkan</a>
            <div class="col-4">
          </form>
         </div>
       </div>
      </div>
    </div>
    <div class="card-body p-3">
      <div class="row">
        <div class="col-md-12 mb-md-0 mb-4">
          <table class="table mt-3">
            <tr>
              <td>username</td>
              <td>password</td>
              <td>email</td>
              <td>aksi</td>
            </tr>

            <?php if (isset($_GET['cari'])) : ?>
              <?php $cari = $_GET['cari'] ?>
              <?php $query = mysqli_query($koneksi, "select * from admin where username like '%" . $cari . "%'"); ?>
            <?php else : ?>
              <?php $query = mysqli_query($koneksi, "SELECT * FROM admin");  ?>
            <?php endif ?>
            <tbody>
              <?php while ($data = mysqli_fetch_array($query)) : ?>
                <tr>
                  <td><?php echo $data['username'] ?></td>
                  <td><?php echo $data['password'] ?></td>
                  <td><?php echo $data['email'] ?></td>
                  <td>
                    <a href="dashboard.php?dashboard=admin-edit&username=<?php echo $data['username'] ?>">Edit</a>
                    <a href="admin_delete.php?dashboard=admin-delete&username=<?php echo $data['username'] ?>">Hapus</a>
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