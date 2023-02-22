<?php 
    // Koneksi Ke Database
    $conn =  mysqli_connect("localhost", "root", "", "spp_db");

    // READ
    function query($query){
        global $conn;

        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ){
            $rows[] = $row; 
        }
        return $rows;
    }

    // Function Tambah Petugas
    function createKelas($data){
        global $conn;

        $id_kelas = htmlspecialchars($data["id_kelas"]);
        $kelas = htmlspecialchars($data["kelas"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        // Query Insert Data
        $query = "INSERT INTO tb_kelas VALUES ('$id_kelas', '$kelas', '$jurusan')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Function Update Petugas
    function updateKelas($data){
        global $conn;

        $id = htmlspecialchars($data["id_kelas"]);
        $kelas = htmlspecialchars($data["kelas"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        // Query Update Data
        $query = "UPDATE tb_kelas SET
                    kelas = '$kelas',
                    jurusan = '$jurusan',
                    WHERE id_kelas = '$id'";

        mysqli_query($conn, $query) or die(mysqli_error($conn));

        return mysqli_affected_rows($conn);
    }

    // Delete Petugas
    function deleteKelas($id){
        global $conn;

        mysqli_query($conn, "DELETE FROM tb_kelas WHERE id_kelas = '$id'");

        return mysqli_affected_rows($conn);

    }
?>