<?php 
    require 'functions_kelas.php';
    require '../views/template/navbar.php';
    $kelas = query("SELECT * FROM tb_kelas");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
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
    <a href="create_kelas.php">Tambah Kelas</a>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Keterangan</th>
        </tr>

        <?php foreach($kelas as $row) : ?> 
        <tr>
            <td><?= $row["id_kelas"]; ?></td>
            <td><?= $row["kelas"]; ?></td>
            <td><?= $row["jurusan"] ?></td>
            <td>
                <a href="delete_kelas.php?id_kelas=<?= $row["id_kelas"]; ?>">Hapus</a>
                <a href="update_kelas.php?id_kelas=<?= $row["id_kelas"]; ?>">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>