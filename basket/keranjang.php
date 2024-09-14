<?php
session_start();

// Fungsi tambah ke keranjang
function tambahKeKeranjang($produk_id, $quantity) {
    $_SESSION['keranjang'][$produk_id] += $quantity;
}

// Cek jika form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produk_id = $_POST['produk_id'];
    $quantity = $_POST['quantity'];

    // Inisialisasi keranjang belanja jika belum ada
    if (!isset($_SESSION['keranjang'])) {
        $_SESSION['keranjang'] = array();
    }

    // Tambah produk ke keranjang
    tambahKeKeranjang($produk_id, $quantity);
}

// Redirect kembali ke halaman utama
header('Location: index.php');
?>
