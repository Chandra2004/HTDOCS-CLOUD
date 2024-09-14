<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaProduk = $_POST["nama_produk"];
    $nama = $_POST["nama"];
    $rating = $_POST["rating"];

    // Sambungkan ke database (ganti sesuai pengaturan database Anda)
    $conn = new mysqli("localhost", "root", "", "cafe");

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi Gagal: " . $conn->connect_error);
    } else {
       // echo "konek nying";
    }

    // Simpan rating ke database
    $sql = "INSERT INTO produk_rating (nama_produk, nama, rating) VALUES ('$namaProduk', '$nama', $rating)";
    if ($conn->query($sql) === TRUE) {
        echo "Rating berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
