<?php 
    require 'functions_pembayaran.php';

    $id = $_GET['id_pembayaran'];

    if(bayarSPP($id) > 0){
        echo "
            <script>
                alert('Berhasil Dibayar!');
                document.location.href = 'pembayaran.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('Gagal Dibayar!');
                document.location.href = 'pembayaran.php';
            </script>
        ";
    }