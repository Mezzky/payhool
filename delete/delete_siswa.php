<?php
    require 'functions_delete.php';

    $id = $_GET["id_siswa"];

    if(deleteSiswa($id) > 0){
            echo "
                <script>
                    alert('Data Berhasil Dihapus!');
                    document.location.href = '../read/siswa.php';
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('Data Gagal Dihapus!');
                    document.location.href = '../read/siswa.php';
                </script>
            ";
        }
?>