<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-kelas.xls");
?>

<table class="table mt-3" border ="1">
    <tr>
    <td>id_kelas</td>
    <td>nama_kelas</td>
    <td>id_wali_kelas</td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM kelas");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
            <td>id_kelas</td>
            <td>nama_kelas</td>
            <td>id_wali_kelas</td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>