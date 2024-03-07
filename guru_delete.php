<?php
include "db/koneksi.php";

$id_guru = $_GET['id_guru'];

$query = mysqli_query($koneksi, "DELETE FROM guru WHERE id_guru ='$id_guru'");

if ($query){
    echo "<script>
    window.location = 'dashboard.php?dashboard=guru&aksi=edit-berhasil';
    </script>";
}