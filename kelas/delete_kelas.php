<?php
    require 'functions_kelas.php';

    $id = $_GET["id_kelas"];

    if(deleteKelas($id) > 0){
            echo "
                <script>
                    alert('Data Berhasil Dihapus!');
                    document.location.href = 'kelas.php';
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('Data Gagal Dihapus!');
                    document.location.href = 'kelas.php';
                </script>
            ";
        }
?>