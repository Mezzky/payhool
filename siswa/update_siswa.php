<?php 
    require 'functions_siswa.php';

    // Get data dari URL
    $nis = $_GET["nis"];
    $siswa = query("SELECT * FROM tb_siswa INNER JOIN tb_kelas USING(id_kelas) WHERE nis = $nis")[0];

    if(isset($_POST["submit"])) {
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
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="../CSS/style.php">
</head>
<body>
    <div class="modal-body">
    <a href="siswa.php" class="back-btn">&larr;</a>
        <div class="modal-container">
            <h1>Edit Siswa</h1>
            <form action="" method="POST">
                <input type="hidden" name="nis" value="<?= $siswa["nis"] ?>">
                <div class="input-box">
                    <label for="nama">Nama</label>
                    <input autocomplete="off" required type="text" name="nama_siswa" id="nama" value="<?= $siswa["nama_siswa"] ?>">
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input autocomplete="off" required type="text" readonly name="password" id="password" value="<?= $siswa["password"] ?>">
                </div>
                <div class="input-box">
                    <label for="id_kelas">Kelas</label>
                    <select name="id_kelas" id="id_kelas">
                        <?php $kelas = query("SELECT * FROM tb_kelas"); ?>
                        <?php foreach($kelas as $kls) : ?>
                        <?php if ($siswa['id_kelas'] == $kls['id_kelas']) : ?>
                        <option value="<?= $siswa['id_kelas']; ?>" selected><?= $siswa['kelas']; ?></option>
                        <?php else : ?>
                        <option value="<?= $kls['id_kelas']; ?>"><?= $kls['kelas']; ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="input-box">
                    <label for="alamat">Alamat</label>
                    <input autocomplete="off" required type="text" name="alamat" id="alamat" value="<?= $siswa["alamat"] ?>">
                </div>
                <div class="btn">
                    <button type="reset">Batal</button>
                    <button type="submit" name="submit">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>