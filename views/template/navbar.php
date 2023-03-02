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
    <style>
        html,
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        ul li{
            list-style: none;
        }

        header{
            width: 100%;
            height: 50px;
            background-color: red;
            display: flex;
            /* justify-content: center; */
            align-items: center;
            padding: 10px 20px;
            /* position: fixed;
            top: 0; */
        }

        header nav ul{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        header nav ul li a{
            text-decoration: none;
            color: #fff;
        }
    </style>
    <header>
        <nav>
            <ul>
                <?php if($_SESSION['leveluser'] == "Admin") { ?>
                <li><a href="../dashboard/dashboard.php">Beranda</a></li>
                <li><a href="../petugas/petugas.php">Data Petugas</a></li>
                <li><a href="../siswa/siswa.php">Data Siswa</a></li>
                <li><a href="../kelas/kelas.php">Data Kelas</a></li>
                <li><a href="../pembayaran/pembayaran.php">Data SPP</a></li>
                <li><a href="../spp/spp.php">Histori</a></li>
                <li><a href="../login/logout.php">Logout</a></li>
                <?php } elseif($_SESSION['leveluser'] == "Petugas") { ?>
                <li><a href="../dashboard/dashboard.php">Beranda</a></li>
                <li><a href="../siswa/siswa.php">Data Siswa</a></li>
                <li><a href="../pembayaran/pembayaran.php">Data SPP</a></li>
                <li><a href="../spp/spp.php">Histori</a></li>
                <li><a href="../login/logout.php">Logout</a></li>
                <?php } else { ?>
                <li><a href="../dashboard/dashboard.php">Beranda</a></li>
                <li><a href="../spp/spp.php">Histori</a></li>
                <li><a href="../login/logout.php">Logout</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
</head>
<body>
