<?php 
    require 'functions_petugas.php';
    $petugas = query("SELECT * FROM tb_petugas");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Petugas</title>
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
    <h1>Data Petugas</h1>
    <a href="create_petugas.php">Tambah Petugas</a>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>leveluser</th>
            <th>No Telepon</th>
            <th>Aksi</th>
        </tr>

        <?php foreach($petugas as $row) : ?> 
        <tr>
            <td><?= $row["nip"]; ?></td>
            <td><?= $row["nama_petugas"]; ?></td>
            <td><?= $row["username"] ?></td>
            <td><?= $row["password"]; ?></td>
            <td><?= $row["leveluser"]; ?></td>
            <td><?= $row["no_telp"]; ?></td>
            <td>
                <a href="delete_petugas.php?nip=<?= $row["nip"]; ?>">Hapus</a>
                <a href="update_petugas.php?nip=<?= $row["nip"]; ?>">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>