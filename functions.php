<?php 
    // Koneksi ke Database
    $conn = mysqli_connect("Localhost", "root", "", "cekullah");

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

?>