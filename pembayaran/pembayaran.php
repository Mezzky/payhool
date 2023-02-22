<?php 
    require 'functions_pembayaran.php';
    require '../views/template/navbar.php';
    
    if(isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];

        $pembayaran = query("SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) WHERE nis = $keyword");
        $tagihan = query("SELECT SUM(jumlah_bayar) FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) WHERE nis = $keyword")[0];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayaran</title>
    <style>
        html,
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>
<body>
    <h1>Data Pembayaran</h1>

    <form action="pembayaran.php" method="GET" autocomplete="off" class="search-form">
        <input type="number" name="keyword" placeholder="Cari NIS" required>
        <button type="submit">Cari</button>
    </form>

    <?php if(isset($_GET['keyword'])) : ?>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Bulan</th>
            <th>Tanggal Bayar</th>
            <th>Jumlah Bayar</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>

        <?php foreach($pembayaran as $row) : ?> 
        <tr>
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["nama_siswa"]; ?></td>
            <td><?= $row["bulan"]; ?></td>
            <td><?= $row["tgl_bayar"]; ?></td>
            <td><?= $row["jumlah_bayar"] ?></td>
            <td>
                <?php 
                    if($row["jumlah_bayar"] > 0){
                        echo "Lunas";
                    } else{
                        echo "Belum Lunas";
                    }
                ?>
            </td>
            <?php 
                if($row["jumlah_bayar"] == 600000){
            ?>      <td>Terbayar</td>
            <?php
                } else{
            ?>
                    <td>
                        <a href="proses_bayar.php?id_pembayaran=<?= $row["id_pembayaran"]; ?>&nis=<?= $row["nis"]; ?>">Bayar</a>
                    </td>
            <?php
                }
            ?>
        </tr>
        <?php endforeach; ?>
    </table>
    <h3>Total Bayar: Rp<?= number_format($tagihan['SUM(jumlah_bayar)'], 0, ',', '.'); ?></h3>
    <?php $totalNominal = 600000 * 12; ?>
    <h3>Tagihan: Rp<?= number_format($totalNominal - (int) $tagihan['SUM(jumlah_bayar)'], 0, ',', '.'); ?></h3>
    <?php endif; ?>
</body>
</html>