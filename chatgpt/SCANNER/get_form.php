<?php
// Mulai sesi untuk mengakses data yang disimpan
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <a href="menu.php">beck</a>
    <h1>Nama : <?= $_SESSION['nama'] ?? "Data tidak tersedia"; ?></h1>
    <h1>Telepon : <?= $_SESSION['telepon'] ?? "Data tidak tersedia"; ?></h1>
    <h1>Meja : <?= $_SESSION['nomor_meja'] ?? "Data tidak tersedia"; ?></h1>
</body>
</html>
