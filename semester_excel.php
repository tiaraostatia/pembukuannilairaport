<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-penilaian.xls");
?>

<table class="table mt-3" border ="1">
    <tr>
            <td>id_semester </td>
            <td>nama_semester</td>
            <td>tanggal_mulai</td>
            <td>tanggal_selesai</td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM penilaian");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
            <td><?php echo $data['id_semester'] ?></td>
            <td><?php echo $data['nama_semester'] ?></td>
            <td><?php echo $data['tanggal_mulai'] ?></td>
            <td><?php echo $data['tanggal_selesai'] ?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>