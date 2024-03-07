<?php
include "db/koneksi.php";

$id_siswa = $_GET['id_siswa'];

$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE id_siswa='$id_siswa'");

if ($query){
    echo "<script>
    window.location = 'dashboard.php?dashboard=siswa&aksi=edit-berhasil';
    </script>";
}