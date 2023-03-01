<?php
session_start(); 
require 'functions_login.php';

if(isset($_POST['login'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];

    $petugas = mysqli_query($conn,"SELECT * FROM tb_petugas WHERE nip='$user'");
    if($petugas['password'] === $password) {
        $_SESSION['login'] = true;
        $_SESSION['namaPetugas'] = $petugas['nama_petugas'];
        echo "<script>
        alert('berhasil login');
        window.location.href = 'http://localhost/payhool-main/siswa/siswa.php;
        </script>";
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
        <div class="username">
            <label for="username">NIP / NIS</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="password">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit" name="login">Masuk</button>
    </form>
</body>
</html>