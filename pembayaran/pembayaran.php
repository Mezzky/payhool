<?php 
    require 'functions_pembayaran.php';
    $pembayaran = query("SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis)");
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
    <a href="create_pembayaran.php">Tambah Pembayaran</a>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tanggal Bayar</th>
            <th>Jumlah Bayar</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>

        <?php foreach($pembayaran as $row) : ?> 
        <tr>
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["nama_siswa"]; ?></td>
            <td><?= $row["tgl_bayar"]; ?></td>
            <td><?= $row["jumlah_bayar"] ?></td>
            <td>Belum Lunas</td>
            <td>
                <a href="delete_pembayaran.php?id_pembayaran=<?= $row["id_pembayaran"]; ?>">Hapus</a>
                <a href="update_pembayaran.php?id_pembayaran=<?= $row["id_pembayaran"]; ?>">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>