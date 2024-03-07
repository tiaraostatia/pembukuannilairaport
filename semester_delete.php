<?php
include "db/koneksi.php";

$id_semester = $_GET['id_semester'];

$query = mysqli_query($koneksi, "DELETE FROM semester WHERE id_semester='$id_semester'");

if ($query){
    echo "<script>
    window.location = 'dashboard.php?dashboard=semester&aksi=edit-berhasil';
    </script>";
}