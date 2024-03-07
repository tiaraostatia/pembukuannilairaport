<?php
include "db/koneksi.php";

$username = $_GET['username'];

$query = mysqli_query($koneksi, "DELETE FROM admin WHERE username ='$username'");

if ($query){
    echo "<script>
    window.location = 'dashboard.php?dashboard=admin&aksi=edit-berhasil';
    </script>";
}