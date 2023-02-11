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

    // Function Tambah Petugas
    function createPetugas($data){
        global $conn;

        $nip = htmlspecialchars($data["nip"]);
        $nama = htmlspecialchars($data["nama_petugas"]);
        $username = htmlspecialchars($data["username"]);
        $pass = htmlspecialchars($data["password"]); 
        $leveluser = htmlspecialchars($data["leveluser"]);
        $no_telp = htmlspecialchars($data["no_telp"]);

        // Query Insert Data
        $query = "INSERT INTO tb_petugas VALUES ('$nip', '$nama', '$username', '$pass', '$leveluser', '$no_telp')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Function Update Petugas
    function updatePetugas($data){
        global $conn;

        // $id = $data["id_petugas"];
        $nip = htmlspecialchars($data["nip"]);
        $nama = htmlspecialchars($data["nama_petugas"]);
        $username = htmlspecialchars($data["username"]);
        $pass = htmlspecialchars($data["password"]); 
        $leveluser = htmlspecialchars($data["leveluser"]);
        $no_telp = htmlspecialchars($data["no_telp"]);

        // Query Update Data
        $query = "UPDATE tb_petugas SET
                    nama_petugas = '$nama',
                    password = '$pass',
                    username = '$username',
                    leveluser = '$leveluser',
                    no_telp = '$no_telp'
                    WHERE nip = '$nip'";

        mysqli_query($conn, $query) or die(mysqli_error($conn));

        return mysqli_affected_rows($conn);
    }

    // Delete Petugas
    function deletePetugas($nip){
        global $conn;

        mysqli_query($conn, "DELETE FROM tb_petugas WHERE nip = $nip");
        return mysqli_affected_rows($conn);
    }

?>