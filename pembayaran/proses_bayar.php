<?php 
    require 'functions_pembayaran.php';

    $id = $_GET['id_pembayaran'];
    $nis = $_GET['nis'];

    bayarSPP($id, $nis);
