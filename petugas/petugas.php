<?php 
    require 'functions_petugas.php';
    require '../template/navbar.php';

    // Cek apakah form pencarian telah disubmit
    if(isset($_POST['search'])) {
        $keyword = $_POST['keyword'];
        $petugas = query("SELECT * FROM tb_petugas WHERE 
                        nip LIKE '%$keyword%' OR 
                        nama_petugas LIKE '%$keyword%' OR
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
    <div class="table-container">
        <div class="tittle">
            <div class="tittle-left">
                <h1>Data Petugas</h1>
                <p><?= count($petugas); ?> Data</p>
            </div>

            <div class="tittle-right">
                <!-- Formulir pencarian -->
                <form action="" method="POST">
                    <input type="text" name="keyword" size="30" placeholder="Cari Petugas" autocomplete="off">
                    <button type="submit" name="search">
                        <img class="icon-sm" src="../Assets/icon/search-icon.svg" alt="search">
                    </button>
                </form>
                <a onclick="return confirm('Anda Yakin ingin Logout?')" href="../login/logout.php">
                    <img class="icon-md" src="../Assets/icon/logout-icon.svg" alt="logout">
                </a>
            </div>
        </div>
        
        <div class="table-content">
            <a href="create_petugas.php">+ Tambah Petugas</a>
            <?php if(empty($petugas)) : ?>
            <p>Data tidak ditemukan</p>
            <?php else : ?>
            <table border="0" cellspacing="0" cellpadding="10">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
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
                        <td><?= $row["password"]; ?></td>
                        <td><?= $row["leveluser"]; ?></td>
                        <td><?= $row["no_telp"]; ?></td>
                        <td>
                            <div class="btn">
                                <?php if ($_SESSION['nip'] == $row['nip']) : ?>
                                    <a href="update_petugas.php?nip=<?= $row["nip"]; ?>">
                                        <img class="icon-sm" src="../Assets/icon/pencil-icon.svg" alt="edit">
                                    </a>
                                    <a class="disabled" style="background-color: var(--border-color);">
                                        <img class="icon-sm" src="../Assets/icon/trash-icon.svg" alt="delete">
                                    </a>
                                    <?php else : ?>
                                        <a href="update_petugas.php?nip=<?= $row["nip"]; ?>">
                                            <img class="icon-sm" src="../Assets/icon/pencil-icon.svg" alt="edit">
                                        </a>
                                        <a onclick="return confirm('Anda yakin ingin menghapus Data: <?= $row['nama_petugas']; ?>?');" href="delete_petugas.php?nip=<?= $row["nip"]; ?>">
                                            <img class="icon-sm" src="../Assets/icon/trash-icon.svg" alt="delete">
                                        </a>
                                    <?php endif; ?>
                            </div>
                        </td> 
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>