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
    <title>Laporan Siswa</title>
    <style>
        table{
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Laporan SPP</h1>
    <?php $nis =  $_POST['nis']; ?>
    <?php $dataSiswa = query("SELECT * FROM tb_siswa INNER JOIN tb_kelas USING(id_kelas) WHERE nis = $nis")[0]; ?>
    <h3>Nama: <?= $dataSiswa['nama_siswa']; ?></h3>
    <h3>Kelas: <?= $dataSiswa['kelas']; ?></h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Bulan</th>
                <th>Jumlah Bayar</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php $angkatan = $_POST['angkatan']; ?>
            <?php $dataPembayaran = query("SELECT * FROM tb_pembayaran WHERE nis = $nis AND angkatan = '$angkatan'"); ?>
            <?php foreach ($dataPembayaran as $data) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $data['bulan']; ?></td>
                    <td><?= $data['jumlah_bayar']; ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <!-- <?php $totalBayar = query("SELECT SUM(jumlah_bayar) FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_kelas USING(id_kelas) WHERE id_kelas = '$idKelas' AND angkatan = '$angkatan' AND jumlah_bayar IS NOT NULL ORDER BY nama_siswa ASC")[0]; ?> -->
                <td colspan="2">Total</td>
                <td colspan="1">Rp<?= number_format($totalBayar['SUM(jumlah_bayar)'], 0, ',', '.'); ?></td>
            </tr>
        </tbody>
    </table>

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