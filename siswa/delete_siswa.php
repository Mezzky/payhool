<?php
    require 'functions_siswa.php';

    $nis = $_GET["nis"];

    if(deleteSiswa($nis) > 0){
            echo "
                <script>
                    alert('Data Berhasil Dihapus!');
                    document.location.href = 'siswa.php';
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('Data Gagal Dihapus!');
                    document.location.href = 'siswa.php';
                </script>
            ";
        }
?>