<?php 
    require '../views/template/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <h1>Selamat Datang <?= $_SESSION["namaPetugas"]; ?></h1>
</body>
</html>