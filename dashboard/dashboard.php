<?php 
    require '../template/navbar.php';
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
        <?php if (isset($_SESSION['nama_petugas'])) : ?>
        <h1>Selamat Datang <?= $_SESSION["nama_petugas"]; ?></h1>
        <?php elseif (isset($_SESSION['nis'])) : ?>
        <h1>Selamat Datang <?= $_SESSION["nama_siswa"]; ?></h1>
        <?php endif; ?>
        <a class="logout-btn" href="../login/logout.php">
            <img src="../Assets/icon/logout-icon.svg" alt="logout">
        </a>
    </div>
</body>

</html>