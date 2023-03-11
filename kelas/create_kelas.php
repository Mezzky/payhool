<?php 
    require 'functions_kelas.php';

    if(isset($_POST["submit"])) {
        if(createKelas($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'kelas.php';
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('Data Gagal Ditambahkan');
                    document.location.href = 'kelas.php';
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
    <title>Tambah Kelas</title>
    <link rel="stylesheet" href="../CSS/style.php">
</head>
<body>
    <div class="modal-body">
        <a href="kelas.php" class="back-btn">&larr;</a>
        <div class="modal-container">
            <h1>Tambah Kelas</h1>
            <form action="" method="POST">
                <div class="input-box">
                    <label for="id_kelas">ID Kelas</label>
                    <input autocomplete="off" required type="text" name="id_kelas" id="id_kelas">
                </div>
                <div class="input-box">
                    <label for="kelas">kelas</label>
                    <input autocomplete="off" required type="text" name="kelas" id="kelas">
                </div>
                <div class="input-box">
                    <label for="jurusan">Jurusan</label>
                    <input autocomplete="off" required type="text" name="jurusan" id="jurusan">
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