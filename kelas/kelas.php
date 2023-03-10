<?php 
    require 'functions_kelas.php';
    require '../template/navbar.php';
    
    // Cek apakah form pencarian telah disubmit
    if(isset($_POST['search'])) {
        $keyword = $_POST['keyword'];
        $kelas = query("SELECT * FROM tb_kelas WHERE
                        kelas LIKE '%$keyword%' OR
                        jurusan LIKE '%$keyword%'");
    } else {
        $kelas = query("SELECT * FROM tb_kelas");
    }
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
    <div class="table-container">
        <div class="tittle">
            <div class="tittle-left">
                <h1>Data Kelas</h1>
                <p><?= count($kelas); ?> Data</p>
            </div>
            <div class="tittle-right">
                <!-- Formulir pencarian -->
                <form action="" method="POST">
                    <input type="text" name="keyword" size="30" autofocus placeholder="Cari Kelas" autocomplete="off">
                    <button type="submit" name="search">
                        <img class="icon-sm" src="../Assets/icon/search-icon.svg" alt="search">
                    </button>
                </form>
                <a class="logout-btn" href="../login/logout.php">
                    <img src="../Assets/icon/logout-icon.svg" alt="logout">
                </a>
            </div>
        </div>
        <div class="table-content">
            <a href="create_kelas.php">+ Tambah Kelas</a>

            <?php if (empty($kelas)) : ?>
            <p>Data tidak ditemukan</p>
            <?php else : ?>

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
                            <div class="btn">
                                <a href="delete_kelas.php?id_kelas=<?= $row["id_kelas"]; ?>">
                                    <img class="icon-sm" src="../Assets/icon/trash-icon.svg" alt="delete">
                                </a>
                                <a href="update_kelas.php?id_kelas=<?= $row["id_kelas"]; ?>">
                                    <img class="icon-sm" src="../Assets/icon/pencil-icon.svg" alt="edit">
                                </a>
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