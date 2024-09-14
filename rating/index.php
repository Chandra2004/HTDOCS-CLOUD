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
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Rating Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php foreach ($kategori_produk as $kategori => $produk) : ?>
        <div class="kelompok">
            <h2><?= $kategori ?></h2>
            <div class="kategori-container">
                <?php foreach ($produk as $item) : ?>
                    <div class="produk-container">
                        <img src='' alt='Foto Produk'>
                        <h3><?= $item['nama_produk']?></h3>
                        <p><?= $item['deskripsi_produk']?></p>
                        <p>Harga: Rp <?= number_format($item['harga_produk'])?></p>
                        <div id="rating_produk_<?= $item['nama_produk'] ?>"></div>
                        <button onclick="tampilkanForm('<?= $item['nama_produk'] ?>')">Beri Rating</button>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    <?php endforeach; ?>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="tutupForm()">&times;</span>
            <form id="formRating" onsubmit="kirimRating(); return false;">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
                <label for="rating">Rating:</label>
                <input type="number" id="rating" name="rating" step="0.1" min="0" max="5" required>
                <input type="submit" value="Submit Rating">
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Daftar produk
        var daftarProduk = [
            <?php foreach ($kategori_produk as $kategori => $produk) : ?>
                <?php foreach ($produk as $item) : ?>
                    "<?= $item['nama_produk'] ?>",
                <?php endforeach;?>
            <?php endforeach;?>
        ];

        console.log(daftarProduk);

        // Loop untuk setiap produk
        daftarProduk.forEach(function (namaProduk) {
            perbaruiRating(namaProduk);
        });
    });
</script>

























<span>--------------------------------------------------------------</span>

<!-- <div class="produk">
    <h2>Produk 1</h2>
    <div id="rating_produk_1"></div>
    <button onclick="tampilkanForm('Produk 1')">Beri Rating</button>
</div>

<div class="produk">
    <h2>Produk 2</h2>
    <div id="rating_produk_2"></div>
    <button onclick="tampilkanForm('Produk 2')">Beri Rating</button>
</div>

<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="tutupForm()">&times;</span>
        <form id="formRating" onsubmit="kirimRating(); return false;">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="rating">Rating:</label>
            <input type="number" id="rating" name="rating" step="0.1" min="0" max="5" required>
            <input type="submit" value="Submit Rating">
        </form>
    </div>
</div> -->




</body>
</html>
