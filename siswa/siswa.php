<?php 
    require 'functions_siswa.php';
    require '../template/navbar.php';

    // Proses pencarian
    if(isset($_POST['search'])) {
        $keyword = $_POST['keyword'];
        $siswa = query("SELECT * FROM tb_siswa INNER JOIN tb_kelas USING(id_kelas) WHERE 
                        nis LIKE '%$keyword%' OR 
                        nama_siswa LIKE '%$keyword%' OR 
                        kelas LIKE '%$keyword%' OR 
                        jenis_kelamin LIKE '%$keyword%' OR 
                        alamat LIKE '%$keyword%' ORDER BY nis ASC");
    } else {
        $siswa = query("SELECT * FROM tb_siswa INNER JOIN tb_kelas USING(id_kelas) ORDER BY nis ASC");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="../CSS/style.php">
</head>
<body>
    <h1>Data Siswa</h1>
    <?php if($_SESSION['leveluser'] == 'Admin' ) : ?>
    <a href="create_siswa.php">+ Tambah Siswa</a>
    <?php endif; ?>

    <!-- Form pencarian -->
    <form action="" method="post">
        <input type="text" name="keyword" size="30" placeholder="Cari Siswa" autocomplete="off">
        <button type="submit" name="search">Cari</button>
    </form>
    <a class="logout-btn" href="../login/logout.php">
        <img src="../Assets/icon/logout-icon.svg" alt="logout">
    </a>

    <?php if (empty($siswa)) : ?>
        <p>Data tidak ditemukan</p>
    <?php else : ?>
        <table border="0" cellspacing="0" cellpadding="10">
            <thead>
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
            </thead>

            <?php foreach($siswa as $row) : ?>
            <tbody>
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
            </tbody>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>