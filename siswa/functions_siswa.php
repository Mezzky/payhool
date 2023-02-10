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
        $kelas = htmlspecialchars($data["kelas"]);
        $jenisKel = htmlspecialchars($data["jenis_kelamin"]);
        $alamat = htmlspecialchars($data["alamat"]);

        // Query Insert Data
        $query = "INSERT INTO tb_siswa VALUES ('', '$nis', '$nama', '$pass', '$kelas', '$jenisKel', '$alamat')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Function Update Siswa
    function updateSiswa($data){
        global $conn;

        $id = $data["id_siswa"];
        $nis = htmlspecialchars($data["nis"]);
        $nama = htmlspecialchars($data["nama_siswa"]);
        $pass = htmlspecialchars($data["password"]); 
        $kelas = htmlspecialchars($data["kelas"]);
        $jenisKel = htmlspecialchars($data["jenis_kelamin"]);
        $alamat = htmlspecialchars($data["alamat"]);

        // Query Update Data
        $query = "UPDATE tb_siswa SET
                    nis = '$nis',
                    nama_siswa = '$nama',
                    password = '$pass',
                    kelas = '$kelas',
                    jenis_kelamin = '$jenisKel',
                    alamat = '$alamat'
                    WHERE id_siswa = '$id'";

        mysqli_query($conn, $query) or die(mysqli_error($conn));

        return mysqli_affected_rows($conn);
    }

    // Delete Siswa
    function deleteSiswa($id){
        global $conn;

        mysqli_query($conn, "DELETE FROM tb_siswa WHERE id_siswa = $id");
        return mysqli_affected_rows($conn);
    }

?>