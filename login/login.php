<?php
session_start();
require 'functions_login.php';

if(isset($_SESSION['login'])) {
    echo " <script>
    window.location.href = '../siswa/siswa.php'
    </script>";
}

if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $petugas = mysqli_query($conn, "SELECT * FROM tb_petugas WHERE nip=$user");
    $siswa = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE nis=$user");

    if (mysqli_num_rows($petugas) === 1) {
        $dataPetugas = mysqli_fetch_assoc($petugas);
        $_SESSION['login'] = true;
        $_SESSION['key'] = $dataPetugas['nip'];
        $_SESSION['leveluser'] = $dataPetugas['leveluser'];
        $_SESSION['namaPetugas'] = $dataPetugas['nama_petugas'];
        if ("$password" == $dataPetugas['password']) {
            echo " <script>
            alert('Berhasil Login');
            window.location.href = '../siswa/siswa.php';
            </script>";
            exit;
        } else {
            $error = true;
        }
    } elseif (mysqli_num_rows($siswa) === 1) {
        $dataSiswa = mysqli_fetch_assoc($siswa);
        $_SESSION['login'] = true;
        $_SESSION['key'] = $dataSiswa['nis'];
        $_SESSION['leveluser'] = $dataSiswa['nis'];
        $_SESSION['namaSiswa'] = $dataSiswa['nama_siswa'];
        if ("$password" == $dataSiswa['password']) {
            echo " <script>
            alert('Berhasil Login');
            window.location.href = '../siswa/siswa.php';
            </script>";
            exit;
        } else {
            $error = true;
        }
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
</head>
<body>
    <form action="" method="post">
        <?php if(isset($error))  : ?>
         <p>NIP/NIS/Password Salah!</p>
        <?php  endif; ?>
        <div class="user">
            <label for="user">NIP / NIS</label>
            <input type="text" name="user" id="user">
        </div>
        <div class="password">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit" name="login">Masuk</button>
    </form>
</body>
</html>