<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-tahun_ajaran.xls");
?>

<table class="table mt-3"  border ="1">
    <tr>
    <td>id_tahun_ajaran </td>
    <td>namai_tahun_ajaran </td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM tahun_ajaran ");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
            <td>id_tahun_ajaran </td>
            <td>nama_tahun_ajaran </td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>