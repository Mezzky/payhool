<?php
    require 'functions_siswa.php';

    $id = $_GET["id_siswa"];

    if(deleteSiswa($id) > 0){
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