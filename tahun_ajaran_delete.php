<?php
include "db/koneksi.php";

$id_tahun_ajaran = $_GET['id_tahun_ajaran'];

$query = mysqli_query($koneksi, "DELETE FROM tahun_ajaran WHERE id_tahun_ajaran='$id_tahun_ajaran'");

if ($query) {
    echo "<script>
    window.location = 'dashboard.php?dashboard=tahun_ajaran&aksi=edit-berhasil';
    </script>";
}