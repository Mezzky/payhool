<?php
session_start();
require 'login/functions_login.php';

if(isset($_SESSION['login'])) {
    echo " <script>
    window.location.href = 'dashboard/dashboard.php';
    </script>";
}

if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $petugas = mysqli_query($conn, "SELECT * FROM tb_petugas WHERE nip = '$user' AND password = '$password'");
    $siswa = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE nis = '$user' AND password = '$password'");

    if (mysqli_num_rows($petugas) === 1) {
        $dataPetugas = mysqli_fetch_assoc($petugas);
        $_SESSION['login'] = true;
        $_SESSION['nip'] = $dataPetugas['nip'];
        $_SESSION['leveluser'] = $dataPetugas['leveluser'];
        $_SESSION['nama_petugas'] = $dataPetugas['nama_petugas'];
        echo "<script>
                alert('Berhasil Login Sebagai Petugas');
                window.location.href = 'dashboard/dashboard.php';
            </script>";
    } elseif (mysqli_num_rows($siswa) === 1) {
        $dataSiswa = mysqli_fetch_assoc($siswa);
        $_SESSION['login'] = true;
        $_SESSION['nis'] = $dataSiswa['nis'];
        $_SESSION['leveluser'] = $dataSiswa['nis'];
        $_SESSION['nama_siswa'] = $dataSiswa['nama_siswa'];
        echo "<script>
                alert('Berhasil Login Sebagai Siswa');
                window.location.href = 'dashboard/dashboard.php';
            </script>";
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/style.php">
</head>
<body>
    <div class="form-body">
        <div class="form-container">
            <div class="form-input">
                <form action="" method="post" autocomplete="off">
                    <div class="tittle-login">
                        <h2>Selamat Datang</h2>
                        <h2>di Payhool</h2>
                        <p>Silahkan login di bawah</p>
                    </div>
                    <?php if(isset($error))  : ?>
                    <p>NIP/NIS/Password Salah!</p>
                    <?php  endif; ?>
                    <div class="input-box">
                        <label for="user">NIS / NIP</label>
                        <input type="text" name="user" id="user">
                    </div>
                    <div class="input-box">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <button type="submit" name="login">Masuk</button>
                </form>
            </div>
            <div class="form-img">
                <img src="Assets/img/patterns-img.png">
            </div>
        </div>
    </div>
</body>
</html>