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

        $tahunI = date("Y");
        $tahunII = date("Y", strtotime("+1 year"));
        $tahunIII = date("Y", strtotime("+2 years"));
        $tahunIIII = date("Y", strtotime("+3 years"));

        $querySPP = "INSERT INTO tb_pembayaran VALUES 
                ('', '$nis', 'Juni', '$tahunI/$tahunII', '', 'I'),
                ('', '$nis', 'Juli', '$tahunI/$tahunII', '', 'I'),
                ('', '$nis', 'Agustus', '$tahunI/$tahunII', '', 'I'),
                ('', '$nis', 'September', '$tahunI/$tahunII', '', 'I'),
                ('', '$nis', 'Oktober', '$tahunI/$tahunII', '', 'I'),
                ('', '$nis', 'November', '$tahunI/$tahunII', '', 'I'),
                ('', '$nis', 'Desember', '$tahunI/$tahunII', '', 'I'),
                ('', '$nis', 'Januari', '$tahunI/$tahunII', '', 'I'),
                ('', '$nis', 'Februari', '$tahunI/$tahunII', '', 'I'),
                ('', '$nis', 'Maret', '$tahunI/$tahunII', '', 'I'),
                ('', '$nis', 'April', '$tahunI/$tahunII', '', 'I'),
                ('', '$nis', 'Mei', '$tahunI/$tahunII', '', 'I'),
                
                ('', '$nis', 'Juni', '$tahunII/$tahunIII', '', 'II'),
                ('', '$nis', 'Juli', '$tahunII/$tahunIII', '', 'II'),
                ('', '$nis', 'Agustus', '$tahunII/$tahunIII', '', 'II'),
                ('', '$nis', 'September', '$tahunII/$tahunIII', '', 'II'),
                ('', '$nis', 'Oktober', '$tahunII/$tahunIII', '', 'II'),
                ('', '$nis', 'November', '$tahunII/$tahunIII', '', 'II'),
                ('', '$nis', 'Desember', '$tahunII/$tahunIII', '', 'II'),
                ('', '$nis', 'Januari', '$tahunII/$tahunIII', '', 'II'),
                ('', '$nis', 'Februari', '$tahunII/$tahunIII', '', 'II'),
                ('', '$nis', 'Maret', '$tahunII/$tahunIII', '', 'II'),
                ('', '$nis', 'April', '$tahunII/$tahunIII', '', 'II'),
                ('', '$nis', 'Mei', '$tahunII/$tahunIII', '', 'II'),

                ('', '$nis', 'Juni', '$tahunIII/$tahunIIII', '', 'III'),
                ('', '$nis', 'Juli', '$tahunIII/$tahunIIII', '', 'III'),
                ('', '$nis', 'Agustus', '$tahunIII/$tahunIIII', '', 'III'),
                ('', '$nis', 'September', '$tahunIII/$tahunIIII', '', 'III'),
                ('', '$nis', 'Oktober', '$tahunIII/$tahunIIII', '', 'III'),
                ('', '$nis', 'November', '$tahunIII/$tahunIIII', '', 'III'),
                ('', '$nis', 'Desember', '$tahunIII/$tahunIIII', '', 'III'),
                ('', '$nis', 'Januari', '$tahunIII/$tahunIIII', '', 'III'),
                ('', '$nis', 'Februari', '$tahunIII/$tahunIIII', '', 'III'),
                ('', '$nis', 'Maret', '$tahunIII/$tahunIIII', '', 'III'),
                ('', '$nis', 'April', '$tahunIII/$tahunIIII', '', 'III'),
                ('', '$nis', 'Mei', '$tahunIII/$tahunIIII', '', 'III')";

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

        $nis = htmlspecialchars($data["nis"]);
        $nama = htmlspecialchars($data["nama_siswa"]);
        $pass = htmlspecialchars($data["password"]); 
        $id_kelas = htmlspecialchars($data["id_kelas"]);
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