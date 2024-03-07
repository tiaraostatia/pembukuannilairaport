<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-siswa.xls");
?>

<table class="table mt-3"  border ="1">
    <tr>
    <td>id_siswa </td>
    <td>nama_siswa</td>
    <td>no_induk</td>
    <td>tanggal_lahir</td>
    <td>alamat</td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM siswa");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
            <td><?php echo $data['id_siswa'] ?></td>
            <td><?php echo $data['nama_siswa'] ?></td>
            <td><?php echo $data['tanggal_lahir'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>