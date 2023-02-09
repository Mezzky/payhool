<?php 
    // Koneksi Ke Database
    $conn = mysqli_connect("localhost", "root", "", "db_spp");

    // Delete Siswa
    function deleteSiswa($id){
        global $conn;

        mysqli_query($conn, "DELETE FROM tb_siswa WHERE id_siswa = $id");
        return mysqli_affected_rows($conn);
    }
?>