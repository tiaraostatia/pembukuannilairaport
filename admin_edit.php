<?php
include "db/koneksi.php";

$username = $_GET['username'];

$pilih = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $query = mysqli_query($koneksi, "UPDATE admin SET password='$password',email='$email'
    WHERE username='$username'");
    if ($query) {
        echo "<script>
        window.location = 'dashboard.php?dashboard=admin&aksi=edit-berhasil';
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
                <h1>mengedit admin</h1>
                <form action=""method="post">
                 <?php
                 while ($data = mysqli_fetch_array($pilih)){
                    ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">username</label>
                        <input type="text" id="username" name="username" class="form-control"
                        value="<?php echo $data['username']?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="text" id="password" name="password" class="form-control"
                        value="<?php echo $data['password']?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="text" id="email" name="email" class="form-control"
                        value="<?php echo $data['email']?>">
                    </div>
                    <button type="sumbit" class="btn btn-primary">simpan</button>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>