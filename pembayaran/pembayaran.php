<?php 
    require 'functions_pembayaran.php';
    require '../template/navbar.php';
    
    if(isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        $nama = query("SELECT * FROM tb_siswa WHERE nis = $keyword");
        $pembayaran = query("SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) WHERE nis = $keyword AND angkatan = 'I'");

        if (isset($_POST['angkatan-1'])) {
            $pembayaran = query("SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) WHERE nis = $keyword AND angkatan = 'I'");
        } elseif (isset($_POST['angkatan-2'])) {
            $pembayaran = query("SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) WHERE nis = $keyword AND angkatan = 'II'");
        } elseif (isset($_POST['angkatan-3'])) {
            $pembayaran = query("SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) WHERE nis = $keyword AND angkatan = 'III'");
        }

        $tagihan = query("SELECT SUM(jumlah_bayar) FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) WHERE nis = $keyword AND angkatan='I'")[0];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="../CSS/style.php">
</head>

<body>
    <div class="table-container">
        <div class="tittle">
            <div class="tittle-left">
                <h1>Pembayaran</h1>
            </div>

            <div class="tittle-right">
                <form action="" method="GET" autocomplete="off" class="search-form">
                    <?php if (!isset($_GET['keyword'])) : ?>
                    <input type="text" autofocus name="keyword" placeholder="Cari NIS"  maxlength="4" required>
                    <?php else : ?>
                    <input type="text" name="keyword" placeholder="Cari NIS" value="<?= $_GET['keyword']; ?>"  maxlength="4" required>
                    <?php endif; ?>
                    <button type="submit">
                        <img class="icon-sm" src="../Assets/icon/search-icon.svg" alt="search">
                    </button>
                </form>
                <a onclick="return confirm('Anda Yakin ingin Logout?')" href="../login/logout.php">
                    <img class="icon-md" src="../Assets/icon/logout-icon.svg" alt="logout">
                </a>
            </div>
        </div>

        <div class="table-content">
            <?php if (isset($_GET['keyword'])) : ?>
                <?php if (!empty($nama)) : ?>
                <div class="name-tittle">
                    <h2>Nama Siswa: <?= $nama[0]["nama_siswa"]; ?></h2>
                    <form action="" method="POST">
                        <button type="submit" name="angkatan-1">Angkatan I</button>
                        <button type="submit" name="angkatan-2">Angkatan II</button>
                        <button type="submit" name="angkatan-3">Angkatan III</button>
                    </form>
                </div>

                <table border="0" cellspacing="0" cellpadding="10">
                    <thead>
                        <tr>
                            <th>Angkatan</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Jumlah Bayar</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
    
                    <?php foreach($pembayaran as $row) : ?>
                    <tbody>
                        <tr>
                            <td><?= $row["angkatan"]; ?></td>
                            <td><?= $row["nis"]; ?></td>
                            <td><?= $row["nama_siswa"]; ?></td>
                            <td><?= $row["bulan"]; ?></td>
                            <td><?= $row["tahun"]; ?></td>
                            <td>Rp.<?= number_format($row["jumlah_bayar"], 0, ',', '.'); ?></td>
                            <td>
                                <?php 
                                    if($row["jumlah_bayar"] > 0){
                                        echo "Lunas";
                                    } else{
                                        echo "Belum Lunas";
                                    }
                                ?>
                            </td>
                            <?php 
                                if($row["jumlah_bayar"] == 600000){
                            ?> <td>Terbayar</td>
                            <?php
                                } else{
                            ?>
                            <td>
                                <a onclick="return confirm('Anda yakin ingin membayar Bulan: <?= $row['bulan']; ?>?');" href="proses_bayar.php?id_pembayaran=<?= $row["id_pembayaran"]; ?>&nis=<?= $row["nis"]; ?>">Bayar</a>
                            </td>
                            <?php
                                }
                            ?>
                        </tr>
                    </tbody>
                    <?php endforeach; ?>
                </table>
                <div class="total-tagihan">
                    <?php $totalNominal = 600000 * 36; ?>
                    <h3>Tagihan: Rp<?= number_format($totalNominal - (int) $tagihan['SUM(jumlah_bayar)'], 0, ',', '.'); ?></h3>
                    <h3>Total Bayar: Rp<?= number_format($tagihan['SUM(jumlah_bayar)'], 0, ',', '.'); ?></h3>
                </div>
                <?php else : ?>
                    <p style="align-self: flex-start;">Data tidak ditemukan!</p>
                <?php endif; ?>
            <?php endif; ?>
        </div>

    </div>
</body>

</html>