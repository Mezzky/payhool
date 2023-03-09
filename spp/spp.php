<?php
require 'functions_spp.php';
require '../template/navbar.php';

if ($_SESSION['leveluser'] == 'Admin' || $_SESSION['leveluser'] == 'Petugas') {
    $spp = query("SELECT * FROM tb_spp INNER JOIN tb_siswa USING (nis) INNER JOIN tb_petugas USING (nip) ORDER BY id_spp DESC");
} else {
    $nis = $_SESSION['nis'];
    $spp = query("SELECT * FROM tb_spp INNER JOIN tb_siswa USING (nis) INNER JOIN tb_petugas USING (nip) WHERE nis='$nis' ORDER BY id_spp DESC");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori Pembayaran</title>
    <link rel="stylesheet" href="../CSS/style.php">
</head>

<body>
    <div class="table-container">
        <h1>Histori Pembayaran</h1>
        <?php if ($_SESSION['leveluser'] == 'Admin' || $_SESSION['leveluser'] == 'Petugas'): ?>
            <form action="laporan_kelas.php" method="POST" autocomplete="off">
                <select name="kelas" id="kelas" required>
                    <option value="" selected>Pilih Kelas</option>
                    <?php $dataKelas = query("SELECT * FROM tb_kelas"); ?>
                    <?php foreach ($dataKelas as $kelas): ?>
                        <option value="<?= $kelas['id_kelas']; ?>"><?= $kelas['kelas']; ?></option>
                    <?php endforeach; ?>
                </select>
                <select name="angkatan" id="angkatan" required>
                    <option value="" selected>Pilih Angkatan</option>
                    <option value="I">Angkatan I</option>
                    <option value="II">Angkatan II</option>
                    <option value="III">Angkatan III</option>
                </select>
                <button type="submit">Buat Laporan Kelas</button>
            </form>

            <form action="laporan_siswa.php" method="POST" autocomplete="off">
                <input type="text" name="nis" id="nis" placeholder="Masukkan NIS Siswa" required>
                <select name="angkatan" id="angkatan" required>
                    <option value="" selected>Pilih Angkatan</option>
                    <option value="I">Angkatan I</option>
                    <option value="II">Angkatan II</option>
                    <option value="III">Angkatan III</option>
                </select>
                <button type="submit">Buat Laporan Siswa</button>
            </form>
            <a class="logout-btn" href="../login/logout.php">
                <img src="../Assets/icon/logout-icon.svg" alt="logout">
            </a>
        <?php endif; ?>
        <table border="0" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>Petugas</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tanggal Bayar</th>
                    <th>Bayar</th>
                </tr>
            </thead>

            <?php foreach ($spp as $row): ?>
            <tbody>
                <tr>
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
</body>

</html>