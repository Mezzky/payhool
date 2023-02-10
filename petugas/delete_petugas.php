<?php
    require 'functions_petugas.php';

    $id = $_GET["id_petugas"];

    if(deletePetugas($id) > 0){
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