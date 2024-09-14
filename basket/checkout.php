<?php
// checkout.php

$data = json_decode(file_get_contents('php://input'), true);

// Proses data keranjang di sini (Anda dapat menangani ini sesuai kebutuhan Anda)

// Contoh: Menampilkan data keranjang yang diterima
echo 'Data Keranjang:';
print_r($data);
?>
