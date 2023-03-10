<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "
    <script>
    alert('Mohon Login terlebih dahulu');
    window.location.href = '../index.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payhool</title>
    <link rel="stylesheet" href="../../CSS/style.php">
</head>

<body>
    <header>
        <div class="logo">
            <a href="../dashboard/dashboard.php">Payhool</a>
        </div>
        <nav>
            <ul>
                <?php if ($_SESSION['leveluser'] == "Admin") { ?>
                    <a href="../dashboard/dashboard.php">
                        <div class="icon-nav">
                            <img class="icon-sm" src="../Assets/icon/home-icon.svg" alt="home">
                            <img class="icon-sm" src="../Assets/icon/home-icon-ng.svg" alt="home">
                        </div>
                        <span>Beranda</span>
                    </a>

                    <a href="../petugas/petugas.php">
                        <div class="icon-nav">
                            <img class="icon-sm" src="../Assets/icon/petugas-icon.svg" alt="petugas">
                            <img class="icon-sm" src="../Assets/icon/petugas-icon-ng.svg" alt="petugas">
                        </div>
                        <span>Data Petugas</span>
                    </a>

                    <a href="../siswa/siswa.php">
                        <div class="icon-nav">
                            <img class="icon-sm" src="../Assets/icon/siswa-icon.svg" alt="siswa">
                            <img class="icon-sm" src="../Assets/icon/siswa-icon-ng.svg" alt="siswa">
                        </div>
                        <span>Data Siswa</span>
                    </a>

                    <a href="../kelas/kelas.php">
                        <div class="icon-nav">
                            <img class="icon-sm" src="../Assets/icon/kelas-icon.svg" alt="kelas">
                            <img class="icon-sm" src="../Assets/icon/kelas-icon-ng.svg" alt="kelas">
                        </div>
                        <span>Data Kelas</span>
                    </a>

                    <a href="../pembayaran/pembayaran.php">
                        <div class="icon-nav">
                            <img class="icon-sm" src="../Assets/icon/bayar-icon.svg" alt="pay">
                            <img class="icon-sm" src="../Assets/icon/bayar-icon-ng.svg" alt="pay">
                        </div>
                        <span>Pembayaran</span>
                    </a>

                    <a href="../spp/spp.php">
                        <div class="icon-nav">
                            <img class="icon-sm" src="../Assets/icon/histori-icon.svg" alt="histori">
                            <img class="icon-sm" src="../Assets/icon/histori-icon-ng.svg" alt="histori">
                        </div>
                        <span>Histori</span>
                    </a>
                    

                <?php } elseif ($_SESSION['leveluser'] == "Petugas") { ?>
                    <a href="../dashboard/dashboard.php">
                        <div class="icon-nav">
                            <img class="icon-sm" src="../Assets/icon/home-icon.svg" alt="home">
                            <img class="icon-sm" src="../Assets/icon/home-icon-ng.svg" alt="home">
                        </div>
                        <span>Beranda</span>
                    </a>

                    <a href="../siswa/siswa.php">
                        <div class="icon-nav">
                            <img class="icon-sm" src="../Assets/icon/siswa-icon.svg" alt="siswa">
                            <img class="icon-sm" src="../Assets/icon/siswa-icon-ng.svg" alt="siswa">
                        </div>
                        <span>Data Siswa</span>
                    </a>

                    <a href="../pembayaran/pembayaran.php">
                        <div class="icon-nav">
                            <img class="icon-sm" src="../Assets/icon/bayar-icon.svg" alt="pay">
                            <img class="icon-sm" src="../Assets/icon/bayar-icon-ng.svg" alt="pay">
                        </div>
                        <span>Pembayaran</span>
                    </a>

                    <a href="../spp/spp.php">
                        <div class="icon-nav">
                            <img class="icon-sm" src="../Assets/icon/histori-icon.svg" alt="histori">
                            <img class="icon-sm" src="../Assets/icon/histori-icon-ng.svg" alt="histori">
                        </div>
                        <span>Histori</span>
                    </a>
                    

                <?php } else { ?>
                    <a href="../dashboard/dashboard.php">
                        <div class="icon-nav">
                            <img class="icon-sm" src="../Assets/icon/home-icon.svg" alt="home">
                            <img class="icon-sm" src="../Assets/icon/home-icon-ng.svg" alt="home">
                        </div>
                        <span>Beranda</span>
                    </a>

                    <a href="../spp/spp.php">
                        <div class="icon-nav">
                            <img class="icon-sm" src="../Assets/icon/histori-icon.svg" alt="histori">
                            <img class="icon-sm" src="../Assets/icon/histori-icon-ng.svg" alt="histori">
                        </div>
                        <span>Histori Siswa</span>
                    </a>
                    
                <?php } ?>
            </ul>
        </nav>
        
        <footer>
        <p>&copy;Copyright by Payhool <?= date("Y"); ?></p>
        </footer>
    </header>


    <script>
        const currentUrl = window.location.href;

        const navContainer = document.querySelector('header nav');
        const navLinks = navContainer.querySelectorAll('a');

        navLinks.forEach(function(link) {
            if (link.href === currentUrl) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    </script>

</body>

</html>