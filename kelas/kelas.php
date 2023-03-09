<?php 
    require 'functions_kelas.php';
    require '../template/navbar.php';
    $kelas = query("SELECT * FROM tb_kelas");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
    <link rel="stylesheet" href="../CSS/style.php">
</head>
<body>
    <h1>Data Kelas</h1>
    <a href="create_kelas.php">Tambah Kelas</a>
    <table border="0" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Keterangan</th>
            </tr>
        </thead>

        <?php foreach($kelas as $row) : ?>
        <tbody>
            <tr>
                <td><?= $row["id_kelas"]; ?></td>
                <td><?= $row["kelas"]; ?></td>
                <td><?= $row["jurusan"] ?></td>
                <td>
                    <a href="delete_kelas.php?id_kelas=<?= $row["id_kelas"]; ?>">Hapus</a>
                    <a href="update_kelas.php?id_kelas=<?= $row["id_kelas"]; ?>">Edit</a>
                </td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
</body>
</html>