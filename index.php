<?php 
    require 'functions.php';
    $siswa = query("SELECT * FROM tb_siswa");
    var_dump($siswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
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
    <h1>Data Siswa</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>NIS</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php foreach($siswa as $ssw) : ?> 
        <tr>
            <td><?= $ssw["nis"]; ?></td>
            <td><img src="img/<?= $ssw = ["gambar"]; ?>"></td>
            <td><?= $ssw["nama"]; ?></td>
            <td><?= $ssw["kelas"]; ?></td>
            <td><?= $ssw["jenis_kelamin"]; ?></td>
            <td><?= $ssw["alamat"]; ?></td>
            <td>
                <a href="">Hapus</a>
                <a href="">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>