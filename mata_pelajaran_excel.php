<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-jurusan.xls");
?>

<table class="table mt-3" border ="1">
    <tr>
    <td>id_mapel</td>
    <td>nama_mapel</td>
    <td>kode_mapel</td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM jurusan");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
            <td>id_mapel</td>
            <td>nama_mapel</td>
            <td>kode_mapel</td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>