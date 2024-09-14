<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaProduk = $_POST["nama_produk"];

    // Sambungkan ke database (ganti sesuai pengaturan database Anda)
    $conn = new mysqli("localhost", "root", "", "cafe");

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi Gagal: " . $conn->connect_error);
    } else {
        //echo "konek nying";
    }

    // Ambil rata-rata rating dari database
    $sql = "SELECT AVG(rating) AS rata_rata FROM produk_rating WHERE nama_produk = '$namaProduk'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo number_format($row["rata_rata"], 1); // Format dengan satu angka desimal
    } else {
        echo "Belum ada rating untuk produk ini.";
    }

    $conn->close();
}
?>
