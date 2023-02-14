<?php 
    // Koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "", "db_spp");

    // READ
    function query($query){
        global $conn;

        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    // Function Tambah Siswa
    function createSiswa($data){
        global $conn;

        $nis = htmlspecialchars($data["nis"]);
        $nama = htmlspecialchars($data["nama_siswa"]);
        $pass = htmlspecialchars($data["password"]); 
        $id_kelas = htmlspecialchars($data["id_kelas"]);
        $jenisKel = htmlspecialchars($data["jenis_kelamin"]);
        $alamat = htmlspecialchars($data["alamat"]);

        // Query Insert Data
        $query = "INSERT INTO tb_siswa VALUES ('$nis', '$nama', '$pass', '$id_kelas', '$jenisKel', '$alamat')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Function Update Siswa
    function updateSiswa($data){
        global $conn;

        // $id = $data["id_siswa"];
        $nis = htmlspecialchars($data["nis"]);
        $nama = htmlspecialchars($data["nama_siswa"]);
        $pass = htmlspecialchars($data["password"]); 
        $id_kelas = htmlspecialchars($data["id_kelas"]);
        $jenisKel = htmlspecialchars($data["jenis_kelamin"]);
        $alamat = htmlspecialchars($data["alamat"]);

        // Query Update Data
        $query = "UPDATE tb_siswa SET
                    nama_siswa = '$nama',
                    password = '$pass',
                    id_kelas = '$id_kelas',
                    alamat = '$alamat'
                    WHERE nis = '$nis'";

        mysqli_query($conn, $query) or die(mysqli_error($conn));

        return mysqli_affected_rows($conn);
    }

    // Delete Siswa
    function deleteSiswa($nis){
        global $conn;

        mysqli_query($conn, "DELETE FROM tb_siswa WHERE nis = $nis");
        return mysqli_affected_rows($conn);
    }

?>