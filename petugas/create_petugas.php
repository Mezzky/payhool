<?php 
    require 'functions_petugas.php';

    if(isset($_POST["submit"])){
        if(createPetugas($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'petugas.php';
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('Data Gagal Ditambahkan');
                    document.location.href = 'petugas.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Petugas</title>
</head>
<body>
    <form action="" method="POST">
        <div class="input-box">
            <label for="nip">NIP</label>
            <input autocomplete="off" required type="text" name="nip" id="nip">
        </div>
        <div class="input-box">
            <label for="nama">Nama</label>
            <input autocomplete="off" required type="text" name="nama_petugas" id="nama">
        </div>
        <div class="input-box">
            <label for="username">Username</label>
            <input autocomplete="off" required type="text" name="username" id="username">
        </div>
        <div class="input-box">
            <label for="password">Password</label>
            <input autocomplete="off" required type="text" name="password" id="password">
        </div>
        <div class="input-box">
            <label for="leveluser">Leveluser</label>
            <select name="leveluser" id="leveluser">
                <option value="Admin">Admin</option>
                <option value="Petugas">Petugas</option>
            </select>
        </div>
        <div class="input-box">
            <label for="no_telp">No Telepon</label>
            <input autocomplete="off" maxlength="12" required type="text" name="no_telp" id="no_telp">
        </div>
        <div class="btn">
            <button type="reset">Batal</button>
            <button type="submit" name="submit">Tambah</button>
        </div>
    </form>
</body>
</html>