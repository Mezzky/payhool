<?php 
    // Koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "", "spp_db");

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

    // Function Tambah SPP
    function tambahSPP($nis){
        global $conn;

        $querySPP = "INSERT INTO tb_pembayaran VALUES 
                ('', '$nis', 'Juni', '2022/2023', '', 'I'),
                ('', '$nis', 'Juli', '2022/2023', '', 'I'),
                ('', '$nis', 'Agustus', '2022/2023', '', 'I'),
                ('', '$nis', 'September', '2022/2023', '', 'I'),
                ('', '$nis', 'Oktober', '2022/2023', '', 'I'),
                ('', '$nis', 'November', '2022/2023', '', 'I'),
                ('', '$nis', 'Desember', '2022/2023', '', 'I'),
                ('', '$nis', 'Januari', '2022/2023', '', 'I'),
                ('', '$nis', 'Februari', '2022/2023', '', 'I'),
                ('', '$nis', 'Maret', '2022/2023', '', 'I'),
                ('', '$nis', 'April', '2022/2023', '', 'I'),
                ('', '$nis', 'Mei', '2022/2023', '', 'I'),
                
                ('', '$nis', 'Juni', '2022/2023', '', 'II'),
                ('', '$nis', 'Juli', '2022/2023', '', 'II'),
                ('', '$nis', 'Agustus', '2022/2023', '', 'II'),
                ('', '$nis', 'September', '2022/2023', '', 'II'),
                ('', '$nis', 'Oktober', '2022/2023', '', 'II'),
                ('', '$nis', 'November', '2022/2023', '', 'II'),
                ('', '$nis', 'Desember', '2022/2023', '', 'II'),
                ('', '$nis', 'Januari', '2022/2023', '', 'II'),
                ('', '$nis', 'Februari', '2022/2023', '', 'II'),
                ('', '$nis', 'Maret', '2022/2023', '', 'II'),
                ('', '$nis', 'April', '2022/2023', '', 'II'),
                ('', '$nis', 'Mei', '2022/2023', '', 'II'),

                ('', '$nis', 'Juni', '2022/2023', '', 'III'),
                ('', '$nis', 'Juli', '2022/2023', '', 'III'),
                ('', '$nis', 'Agustus', '2022/2023', '', 'III'),
                ('', '$nis', 'September', '2022/2023', '', 'III'),
                ('', '$nis', 'Oktober', '2022/2023', '', 'III'),
                ('', '$nis', 'November', '2022/2023', '', 'III'),
                ('', '$nis', 'Desember', '2022/2023', '', 'III'),
                ('', '$nis', 'Januari', '2022/2023', '', 'III'),
                ('', '$nis', 'Februari', '2022/2023', '', 'III'),
                ('', '$nis', 'Maret', '2022/2023', '', 'III'),
                ('', '$nis', 'April', '2022/2023', '', 'III'),
                ('', '$nis', 'Mei', '2022/2023', '', 'III')";

        mysqli_query($conn, $querySPP);
    }

    // Function Tambah Siswa
    function createSiswa($data){
        global $conn;

        $nis = htmlspecialchars($data["nis"]);
        $nama = htmlspecialchars($data["nama_siswa"]);
        $id_kelas = htmlspecialchars($data["id_kelas"]);
        $jenisKel = htmlspecialchars($data["jenis_kelamin"]);
        $alamat = htmlspecialchars($data["alamat"]);

        // Query Insert Data
        $query = "INSERT INTO tb_siswa VALUES ('$nis', '$nama', '123456', '$id_kelas', '$jenisKel', '$alamat')";
        mysqli_query($conn, $query);

        tambahSPP($nis);
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