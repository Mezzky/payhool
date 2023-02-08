<?php 
    // Koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "", "db_spp");

    // Function Tambah Siswa
    function createSiswa($data){
        global $conn;

        $nis = htmlspecialchars($data["nis"]);
        $nama = htmlspecialchars($data["nama_siswa"]);
        $pass = htmlspecialchars($data["password"]);
        $kelas = htmlspecialchars($data["kelas"]);
        $jenisKel = htmlspecialchars($data["jenis_kelamin"]);
        $alamat = htmlspecialchars($data["alamat"]);

        // Query Insert Data
        $query = "INSERT INTO tb_siswa VALUE ('$nis', '$nama', '$pass', '$kelas', '$jenisKel', '$alamat')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>