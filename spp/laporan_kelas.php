<?php
    session_start();
    require_once 'functions_spp.php'; 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kelas</title>
</head>

<body>
    <h1>Laporan SPP</h1>
    <?php $idKelas =  $_POST['kelas']; ?>
    <?php $dataKelas = query("SELECT * FROM tb_kelas WHERE id_kelas = '$idKelas'")[0]; ?>
    <h3>Kelas: <?= $dataKelas['kelas']; ?></h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <?php $dataBulan = query("SELECT bulan FROM tb_pembayaran GROUP BY bulan ORDER BY id_pembayaran"); ?>
                <?php foreach ($dataBulan as $bulan) : ?>
                    <th><?= $bulan['bulan']; ?></th>
                <?php endforeach; ?>
                <th>Jumlah Bayar</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php $angkatan = $_POST['angkatan']; ?>
            <?php $dataSiswaByKelas = query("SELECT * FROM tb_siswa WHERE id_kelas = '$idKelas'"); ?>
            <?php $dataPembayaran = query("SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_kelas USING(id_kelas) WHERE id_kelas = '$idKelas' AND angkatan = '$angkatan' ORDER BY nama_siswa ASC"); ?>
            <?php $dataTerbayar = query("SELECT nama_siswa, SUM(jumlah_bayar) FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_kelas USING(id_kelas) WHERE id_kelas = '$idKelas' AND angkatan = '$angkatan' AND jumlah_bayar IS NOT NULL GROUP BY nama_siswa ORDER BY nama_siswa ASC"); ?>
            <?php foreach ($dataSiswaByKelas as $siswa) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $siswa['nama_siswa']; ?></td>
                    <?php foreach ($dataPembayaran as $bayar) : ?>
                        <?php if ($bayar['nama_siswa'] == $siswa['nama_siswa']) : ?>
                            <td>Rp<?= number_format($bayar['jumlah_bayar'], 0, ',', '.'); ?></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <?php foreach ($dataTerbayar as $terbayar) : ?>
                        <?php if ($terbayar['nama_siswa'] == $siswa['nama_siswa']) : ?>
                            <td>Rp<?= number_format($terbayar['SUM(jumlah_bayar)'], 0, ',', '.'); ?></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
            <tr>
                <?php $totalBayar = query("SELECT SUM(jumlah_bayar) FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_kelas USING(id_kelas) WHERE id_kelas = '$idKelas' AND angkatan = '$angkatan' AND jumlah_bayar IS NOT NULL ORDER BY nama_siswa ASC")[0]; ?>
                <td colspan="14">Total</td>
                <td>Rp<?= number_format($totalBayar['SUM(jumlah_bayar)'], 0, ',', '.'); ?></td>
            </tr>
        </tbody>
    </table>

    <p>Note: Jika total bayar = 0, berarti belum dibayar</p>

    <p>Denpasar, <?= date('d-m-Y'); ?></p>
    <?php if (isset($_SESSION['nama_petugas'])) : ?>
    <p><?= $_SESSION["nama_petugas"]; ?></p>
    <?php endif; ?>
</body>
<script>
    window.print();
    window.onafterprint = () => history.back();
</script>


</html>