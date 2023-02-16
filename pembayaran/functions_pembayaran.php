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

        // BAYAR
        function bayarSPP($id, $nis) {
            global $conn;

            $query = "UPDATE tb_pembayaran SET
                        tgl_bayar = NOW(),
                        jumlah_bayar = '600000'
                        WHERE id_pembayaran = $id";

            mysqli_query($conn, $query);

            if(mysqli_affected_rows($conn)>0){
                echo "
                    <script>
                        alert('Berhasil Dibayar!');
                        document.location.href = 'pembayaran.php?keyword=$nis';
                    </script>
                ";
            }
        }
