<?php 
    require 'functions_spp.php';
    $spp = query("SELECT * FROM tb_spp INNER JOIN tb_siswa USING (nis) INNER JOIN tb_petugas USING (nip) ORDER BY id_spp DESC")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<h1>Laporan Pembayaran</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Petugas</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tanggal Bayar</th>
            <th>Bayar</th>
        </tr>

        <?php foreach($spp as $row) : ?>
        <tr>
            <td><?= $row["nama_petugas"]; ?></td>
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["nama_siswa"]; ?></td>
            <td><?= $row["tgl_bayar"] ?></td>
            <td><?= $row["bayar"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="box-ttd">
            <p>Denpasar, <?= date('d-m-Y'); ?></p>
            <p>Gungde Solahudin</p>
        </div>
        <div class="layer"></div>
    </div>

    <script>
        window.print();
        window.onafterprint = () => history.back();
    </script>
</body>
</html>