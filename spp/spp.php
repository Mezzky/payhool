<?php 
    require 'functions_spp.php';
    require '../views/template/navbar.php';
    $spp = query("SELECT * FROM tb_spp INNER JOIN tb_siswa USING (nis) ORDER BY id_spp DESC")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data SPP</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<h1>Data SPP</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tanggal Bayar</th>
            <th>Bayar</th>
            <th>Aksi</th>
        </tr>

        <?php foreach($spp as $row) : ?>
        <tr>
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["nama_siswa"]; ?></td>
            <td><?= $row["tgl_bayar"] ?></td>
            <td><?= $row["bayar"]; ?></td>
            <td>
                <a href="delete_spp.php?nis=<?= $row["id_spp"]; ?>">Hapus</a>
                <a href="update_spp.php?nis=<?= $row["id_spp"]; ?>">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>