<?php
// Koneksi ke database (gantilah dengan informasi koneksi sesuai kebutuhan)
$host = "localhost";
$user = "root";
$password = "";
$database = "cafe";

$koneksi = mysqli_connect($host, $user, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data produk dan kategori dari database
$query = "SELECT menu.*, kategori.nama_kategori
          FROM menu
          JOIN kategori ON menu.kategori_produk = kategori.id";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}

// Inisialisasi variabel untuk menyimpan produk berdasarkan kategori
$kategori_produk = array();

// Mengelompokkan produk berdasarkan kategori
while ($row = mysqli_fetch_assoc($result)) {
    $kategori = $row['nama_kategori'];
    $kategori_produk[$kategori][] = $row;
}

// Menampilkan produk dengan kontainer div sesuai kategori
foreach ($kategori_produk as $kategori => $produk) {
    echo "<h2>$kategori</h2>";
    echo "<div class='kategori-container'>";
    
    foreach ($produk as $item) {
        echo "<div class='produk-container'>";
        echo "<img src='data:image/jpeg;base64," . base64_encode($item['foto_produk']) . "' alt='Foto Produk'>";
        echo "<h3>" . $item['nama_produk'] . " , " . "</h3>";
        echo "<p>" . $item['deskripsi_produk'] . "</p>";
        echo "<p>Harga: Rp " . number_format($item['harga_produk']) . "</p>";
        echo "</div>";
    }
    
    echo "</div>";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
