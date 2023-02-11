<?php
    require 'functions_petugas.php';

    $nip = $_GET["nip"];

    if(deletePetugas($nip) > 0){
            echo "
                <script>
                    alert('Data Berhasil Dihapus!');
                    document.location.href = 'petugas.php';
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('Data Gagal Dihapus!');
                    document.location.href = 'petugas.php';
                </script>
            ";
        }
?>