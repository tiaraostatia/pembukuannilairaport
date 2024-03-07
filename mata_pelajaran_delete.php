<?php
include "db/koneksi.php";

$id_mapel = $_GET['id_mapel'];

$query = mysqli_query($koneksi, "DELETE FROM mata_pelajaran WHERE id_mapel='$id_mapel'");

if ($query){
    echo "<script>
    window.location = 'dashboard.php?dashboard=mata_pelajaran&aksi=edit-berhasil';
    </script>";
}