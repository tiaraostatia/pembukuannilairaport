<?php
include "db/koneksi.php";

$id_penilaian = $_GET['id_penilaian'];

$query = mysqli_query($koneksi, "DELETE FROM penilaian WHERE id_penilaian='$id_penilaian'");

if ($query){
    echo "<script>
    window.location = 'dashboard.php?dashboard=nilai&aksi=edit-berhasil';
    </script>";
}