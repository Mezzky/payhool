<?php 
    require 'functions_siswa.php';
    require '../views/template/navbar.php';
    $siswa = query("SELECT * FROM tb_siswa");
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
    <a href="create_siswa.php">Tambah Siswa</a>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Password</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php foreach($siswa as $row) : ?> 
        <tr>
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["nama_siswa"]; ?></td>
            <td><?= $row["password"] ?></td>
            <td><?= $row["id_kelas"]; ?></td>
            <td><?= $row["jenis_kelamin"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td>
                <a href="delete_siswa.php?nis=<?= $row["nis"]; ?>">Hapus</a>
                <a href="update_siswa.php?nis=<?= $row["nis"]; ?>">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>