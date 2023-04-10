<?php 
    require 'functions_dashboard.php';
    require '../template/navbar.php';
    $siswa = query("SELECT * FROM tb_siswa");
    $petugas = query("SELECT * FROM tb_petugas");
    $sppTotal = query("SELECT * FROM tb_spp INNER JOIN tb_siswa USING (nis) INNER JOIN tb_petugas USING (nip) ORDER BY id_spp DESC");
    
    if($_SESSION["leveluser"] == "Admin"){
        $spp = array_slice($sppTotal, 0, 3);
    } elseif($_SESSION["leveluser"] == "Petugas"){
        $spp = array_slice($sppTotal, 0, 3);
    } else{
        $nis = $_SESSION['nis'];
        $sppSiswa = query("SELECT * FROM tb_spp INNER JOIN tb_siswa USING (nis) INNER JOIN tb_petugas USING (nip) WHERE nis='$nis' ORDER BY id_spp DESC");
        $spp = array_slice($sppSiswa, 0, 5);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../CSS/style.php">
</head>

<body>
    <div class="dash-container">
        <div class="dash-content">
            <div class="left-content">
                <div class="welcome">
                    <?php if (isset($_SESSION['nama_petugas'])) : ?>
                    <h1>Halo, <?= $_SESSION["nama_petugas"]; ?></h1>
                    <p>selamat bertugas yaa!</p>
                    <?php elseif (isset($_SESSION['nis'])) : ?>
                    <h1>Halo, <?= $_SESSION["nama_siswa"]; ?></h1>
                    <p>jangan lupa bayar yaa!</p>
                    <?php endif; ?>
                </div>
                <?php if($_SESSION['leveluser'] == 'Admin') : ?>
                <div class="dash-data">
                    <div class="data">
                        <div class="count">
                            <img src="../Assets/icon/jumlah-siswa.svg" alt="jumlah-siswa">
                            <span id="jumlah-siswa"><?= count($siswa) ?></span>
                        </div>
                        <p>Jumlah Siswa</p>
                    </div>
                    
                    <div class="data">
                        <div class="count">
                            <img src="../Assets/icon/jumlah-petugas.svg" alt="jumlah-petugas">
                            <span id="jumlah-petugas"><?= count($petugas) ?></span>
                        </div>
                        <p>Jumlah Petugas</p>
                    </div>
                </div>
                <?php elseif($_SESSION['leveluser'] == 'Petugas') : ?>
                <div class="dash-data">
                    <div class="data">
                        <div class="count">
                            <img src="../Assets/icon/jumlah-siswa.svg" alt="jumlah-siswa">
                            <span id="jumlah-siswa"><?= count($siswa) ?></span>
                        </div>
                        <p>Jumlah Siswa</p>
                    </div>
                    
                    <div class="data">
                        <div class="count">
                            <img src="../Assets/icon/jumlah_spp.svg" alt="jumlah-transaksi">
                            <span id="jumlah-transaksi"><?= count($sppTotal) ?></span>
                        </div>
                        <p>Jumlah Transaksi</p>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <div class="right-content">
                <div class="top">
                    <p>Selamat Datang</p>
                    <a class="logout-dashboard" href="../login/logout.php">
                        <img src="../Assets/icon/logout-icon.svg" alt="logout">
                    </a>
                </div>

                <?php if($_SESSION['leveluser'] == 'Admin' || $_SESSION['leveluser'] == 'Petugas') : ?>
                <div class="img">
                    <img src="../Assets/img/stonk-img.png" alt="stonk-img">
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="table-content">
            <h2 class="align-start">Transaksi Terakhir</h2>
            <table border="0" cellspacing="0" cellpadding="10">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Petugas</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Tanggal Bayar</th>
                        <th>Bayar</th>
                    </tr>
                </thead>

                <?php $i = 1; ?>
                <?php foreach ($spp as $row): ?>
                <tbody>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["nama_petugas"]; ?></td>
                        <td><?= $row["nis"]; ?></td>
                        <td><?= $row["nama_siswa"]; ?></td>
                        <td><?= $row["tgl_bayar"] ?></td>
                        <td>Rp.<?= number_format($row["bayar"], 0, ',', '.'); ?></td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>
