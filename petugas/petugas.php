<?php 
    require 'functions_petugas.php';
    require '../template/navbar.php';

    // Cek apakah form pencarian telah disubmit
    if(isset($_POST['search'])) {
        $keyword = $_POST['keyword'];
        $petugas = query("SELECT * FROM tb_petugas WHERE 
                        nip LIKE '%$keyword%' OR 
                        nama_petugas LIKE '%$keyword%' OR 
                        username LIKE '%$keyword%' OR
                        leveluser LIKE '%$keyword%' OR 
                        no_telp LIKE '%$keyword%'");
    } else {
        $petugas = query("SELECT * FROM tb_petugas ORDER BY nip ASC");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Petugas</title>
    <link rel="stylesheet" href="../CSS/style.php">
</head>
<body>
    <h1>Data Petugas</h1>
    <a href="create_petugas.php">Tambah Petugas</a>

    <!-- Formulir pencarian -->
    <form action="" method="POST">
        <input type="text" name="keyword" size="30" autofocus placeholder="Cari Petugas" autocomplete="off">
        <button type="submit" name="search">Cari</button>
    </form>
    <a class="logout-btn" href="../login/logout.php">
        <img src="../Assets/icon/logout-icon.svg" alt="logout">
    </a>

    <?php if(empty($petugas)) : ?>
        <p>Data tidak ditemukan</p>
    <?php else : ?>
        <table border="0" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>leveluser</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <?php foreach($petugas as $row) : ?> 
            <tbody>
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
            </tbody>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>