<?php 
    require 'functions_siswa.php';
    require '../views/template/navbar.php';
    $siswa = query("SELECT * FROM tb_siswa INNER JOIN tb_kelas USING(id_kelas) ORDER BY nis ASC");

    $nis = $_SESSION['key'];
    if($_SESSION['leveluser'] == $nis ) {
        $siswa = query("SELECT * FROM tb_siswa INNER JOIN tb_kelas USING(id_kelas) WHERE nis=$nis ORDER BY nis ASC");
    }
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
    <?php if($_SESSION['leveluser'] == 'Admin' ) : ?>
    <a href="create_siswa.php">Tambah Siswa</a>
    <?php endif; ?>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Password</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
             <?php if($_SESSION['leveluser'] == 'Admin' ) : ?>
                <th>Aksi</th>
            <?php endif; ?>
        </tr>

        <?php foreach($siswa as $row) : ?>
        <tr>
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["nama_siswa"]; ?></td>
            <td><?= $row["password"] ?></td>
            <td><?= $row["kelas"]; ?></td>
            <td><?= $row["jenis_kelamin"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <?php if($_SESSION['leveluser'] == 'Admin' ) : ?>
                <td>
                    <a href="delete_siswa.php?nis=<?= $row["nis"]; ?>">Hapus</a>
                    <a href="update_siswa.php?nis=<?= $row["nis"]; ?>">Edit</a>
                    </td>
            <?php endif; ?>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>