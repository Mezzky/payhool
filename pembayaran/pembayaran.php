<?php 
    require 'functions_pembayaran.php';
    
    if(isset($_POST['submit'])) {
        $nis = $_POST['keyword'];
        $pembayaran = query("SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) WHERE nis = $nis");
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

    <form action="http://localhost/rizky-nitip/payhool/pembayaran/pembayaran.php" method="POST" autocomplete="off" class="search-form">
        <input type="text" name="keyword" placeholder="NIS atau Nama Siswa" required>
        <button type="submit" name="submit">Cari</button>
    </form>

  <?php if(isset($_POST['submit'])) : ?>
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
            <td>Belum Lunas</td>
            <td>
                <a href="proses_bayar.php?id_pembayaran=<?= $row["id_pembayaran"]; ?>">Bayar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
</body>
</html>