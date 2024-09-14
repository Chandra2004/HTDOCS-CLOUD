<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Keranjang Belanja</title>
</head>

<body class="bg-gray-200 p-4">

    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Keranjang Belanja</h1>

        <!-- Tambahkan ini sebelum tag <script> -->
        <div class="my-4">
            <h2 class="text-xl font-bold mb-2">Produk Tersedia</h2>
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h3 class="font-bold text-lg mb-2">Produk 1</h3>
                    <p>Harga: Rp 100.000</p>
                    <input type="number" id="quantity1" class="mt-2 p-2 border border-gray-300" placeholder="Qty" min="1" value="1">
                    <button onclick="tambahItem(1, 'Produk 1', 100000, 1)" class="bg-blue-500 text-white py-2 px-4 mt-2 rounded-md">Tambahkan ke Keranjang</button>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h3 class="font-bold text-lg mb-2">Produk 2</h3>
                    <p>Harga: Rp 150.000</p>
                    <input type="number" id="quantity2" class="mt-2 p-2 border border-gray-300" placeholder="Qty" min="1" value="1">
                    <button onclick="tambahItem(2, 'Produk 2', 150000, 2)" class="bg-blue-500 text-white py-2 px-4 mt-2 rounded-md">Tambahkan ke Keranjang</button>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h3 class="font-bold text-lg mb-2">Produk 3</h3>
                    <p>Harga: Rp 200.000</p>
                    <input type="number" id="quantity3" class="mt-2 p-2 border border-gray-300" placeholder="Qty" min="1" value="1">
                    <button onclick="tambahItem(3, 'Produk 3', 200000, 3)" class="bg-blue-500 text-white py-2 px-4 mt-2 rounded-md">Tambahkan ke Keranjang</button>
                </div>
            </div>
        </div>


        <div id="keranjang" class="bg-white p-4 rounded-md shadow-md">
            <!-- Daftar item akan muncul di sini -->
        </div>

        <div class="mt-4">
            <button onclick="checkout()" class="bg-blue-500 text-white py-2 px-4 rounded-md">Checkout</button>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>