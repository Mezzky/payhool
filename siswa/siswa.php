<?php 
    require 'functions_siswa.php';
    require '../views/template/navbar.php';
    $siswa = query("SELECT * FROM tb_siswa INNER JOIN tb_kelas USING(id_kelas) ORDER BY nis ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="../CSS/style.css">
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
            <td><?= $row["kelas"]; ?></td>
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