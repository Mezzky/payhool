<?php 
    require 'functions_siswa.php';

    if(isset($_POST["submit"])) {
        if(createSiswa($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'siswa.php';
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('Data Gagal Ditambahkan');
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
    <link rel="stylesheet" href="../CSS/style.php">
</head>
<body>
    <div class="modal-body">
        <a href="siswa.php" class="back-btn">&larr;</a>
        <div class="modal-container">
            <h1>Tambah Siswa</h1>
            <form action="" method="POST">
                <div class="input-box">
                    <label for="nis">NIS</label>
                    <input autocomplete="off" required type="number" maxlength="4" name="nis" id="nis" placeholder="NIS harus berupa angka 4 digit">
                </div>
                <div class="input-box">
                    <label for="nama">Nama</label>
                    <input autocomplete="off" required type="text" name="nama_siswa" id="nama">
                </div>
                <div class="input-box">
                    <label for="id_kelas">Kelas</label>
                    <select name="id_kelas" id="id_kelas">
                        <?php $kelas = query("SELECT * FROM tb_kelas"); ?>
                        <?php foreach($kelas as $kls) : ?>
                        <option value="<?= $kls['id_kelas']; ?>"><?= $kls['kelas']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="input-box">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="alamat">Alamat</label>
                    <input autocomplete="off" required type="text" name="alamat" id="alamat">
                </div>
                <div class="btn">
                    <button type="reset">Batal</button>
                    <button type="submit" name="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>