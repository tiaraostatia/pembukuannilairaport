<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-penilaian.xls");
?>

<table class="table mt-3" border ="1">
    <tr>
            <td>id_penilaian</td>
            <td>id_siswa</td>
            <td>id_mapel</td>
            <td>nilai</td>
            <td>tanggal_penilaian</td>
            <td>tanggal_penilaian</td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM penilaian");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
            <td><?php echo $data['id_penilaian'] ?></td>
            <td><?php echo $data['id_siswa'] ?></td>
            <td><?php echo $data['id_mapel'] ?></td>
            <td><?php echo $data['nilai'] ?></td>
            <td><?php echo $data['tanggal_penilaian'] ?></td>
            <td><?php echo $data['jenis_penilaian'] ?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>