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
        <div class="tittle">
            <div class="tittle-left">
                <h1>Histori Pembayaran</h1>
            </div>

            <div class="tittle-right-histori">
                <a class="logout-btn" href="../login/logout.php">
                    <img src="../Assets/icon/logout-icon.svg" alt="logout">
                </a>
            </div>
        </div>

        <?php if (!isset($_SESSION['nis'])): ?>
            <div class="btn-histori">
                <button id="kelasBtn">Laporan Kelas</button>
                <button id="siswaBtn">Laporan Siswa</button>
            </div>

            <div class="overlay">
                <form id="laporanKelas" action="laporan_kelas.php" method="POST" autocomplete="off">
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
                    <div class="btn">
                        <button class="closeBtn">Batal</button>
                        <button type="submit">Buat Laporan Kelas</button>
                    </div>
                </form>
        
                <form id="laporanSiswa" action="laporan_siswa.php" method="POST" autocomplete="off">
                    <input type="text" name="nis" id="nis" placeholder="Masukkan NIS Siswa" required>
                    <select name="angkatan" id="angkatan" required>
                        <option value="" selected>Pilih Angkatan</option>
                        <option value="I">Angkatan I</option>
                        <option value="II">Angkatan II</option>
                        <option value="III">Angkatan III</option>
                    </select>
                    <div class="btn">
                        <button type="submit" class="closeBtn">Batal</button>
                        <button type="submit">Buat Laporan Siswa</button>
                    </div>
                </form>
            </div>
        <?php endif; ?>

        <div class="table-content">
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

    <script>
        const overlay = document.querySelector('.overlay');
        const siswaBtn = document.getElementById('siswaBtn');
        const kelasBtn = document.getElementById('kelasBtn');
        const laporanSiswa = document.getElementById('laporanSiswa');
        const laporanKelas = document.getElementById('laporanKelas');
        const closeBtn = document.querySelectorAll('.overlay form .btn .closeBtn');

        kelasBtn.addEventListener('click', () => {
            overlay.classList.add('overlay-active');
            laporanKelas.classList.add('modal-active');
        });
        
        siswaBtn.addEventListener('click', () => {
            overlay.classList.add('overlay-active');
            laporanSiswa.classList.add('modal-active');
        });

        closeBtn.forEach((el) => {
            el.addEventListener('click', (event) => {
                overlay.classList.remove('overlay-active');
                laporanKelas.classList.remove('modal-active');
                laporanSiswa.classList.remove('modal-active');
                event.preventDefault();
            });
        });

    </script>
</body>

</html>