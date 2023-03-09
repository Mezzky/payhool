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

                    <a href="../login/logout.php">
                        <span>Logout</span>
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

                    <a href="../login/logout.php">
                        <span>Logout</span>
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

                    <a href="../login/logout.php">
                        <span>Logout</span>
                    </a>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <script>
        // Get the current URL
        var currentUrl = window.location.href;

        // Get the container element for the navigation menu
        var navContainer = document.querySelector('header nav');

        // Get all anchor elements in the navigation menu
        var navLinks = navContainer.querySelectorAll('a');

        // Loop through each anchor element
        navLinks.forEach(function(link) {
            // Check if the anchor element's href matches the current URL
            if (link.href === currentUrl) {
                // Add the 'active' class to the matching anchor element
                link.classList.add('active');
            } else {
                // Remove the 'active' class from the non-matching anchor elements
                link.classList.remove('active');
            }
        });
    </script>

</body>

</html>