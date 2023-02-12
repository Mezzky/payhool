<?php 
    require 'functions_siswa.php';

    // Get data dari URL
    $nis = $_GET["nis"];

    $siswa = query("SELECT * FROM tb_siswa WHERE nis = $nis")[0];

    if(isset($_POST["submit"])){
        if(updateSiswa($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'siswa.php';
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('Data Gagal Diubah');
                    document.location.href = 'siswa.php';
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
    <title>Tambah Siswa</title>
</head>
<body>
    <form action="" method="POST">
        <input type="hidden" name="nis" value="<?= $siswa["nis"] ?>">
        <!-- <input type="hidden" name="nis"> -->
        <div class="input-box">
            <label for="nama">Nama</label>
            <input autocomplete="off" required type="text" name="nama_siswa" id="nama" value="<?= $siswa["nama_siswa"] ?>">
        </div>
        <div class="input-box">
            <label for="password">Password</label>
            <input autocomplete="off" required type="text" name="password" id="password" value="<?= $siswa["password"] ?>">
        </div>
        <div class="input-box">
            <label for="kelas">Kelas</label>
            <input autocomplete="off" required type="text" name="kelas" id="kelas" value="<?= $siswa["kelas"] ?>">
        </div>
        <!-- <div class="input-box">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div> -->
        <div class="input-box">
            <label for="alamat">Alamat</label>
            <input autocomplete="off" required type="text" name="alamat" id="alamat" value="<?= $siswa["alamat"] ?>">
        </div>
        <div class="btn">
            <button type="reset">Batal</button>
            <button type="submit" name="submit">Ubah</button>
        </div>
    </form>
</body>
</html>