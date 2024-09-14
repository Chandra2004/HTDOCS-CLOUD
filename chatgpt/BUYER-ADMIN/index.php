<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">
    <div class="mb-8">
        <h3 class="text-lg font-semibold mb-2">Tambahkan ke Keranjang:</h3>
        <div class="grid grid-cols-2 gap-4">
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="bg-white p-4 rounded shadow-md">
                    <p class="text-lg font-semibold mb-2">Mainan <?= $i ?></p>
                    <p class="text-gray-500">Harga: <?= $i * 2000 ?> Rupiah</p>
                    <div class="flex items-center mt-4">
                        <button onclick="decreaseQuantity('Mainan<?= $i ?>')" class="bg-gray-300 text-gray-600 py-1 px-2 rounded-l">-</button>
                        <input type="text" id="quantityMainan<?= $i ?>" class="mx-2 w-8 text-center" value="0" readonly>
                        <button onclick="increaseQuantity('Mainan<?= $i ?>')" class="bg-gray-300 text-gray-600 py-1 px-2 rounded-r">+</button>
                    </div>
                    <button onclick="addToCart('Mainan<?= $i ?>', <?= $i * 2000 ?>, 'quantityMainan<?= $i ?>')" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Tambahkan ke Keranjang</button>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Keranjang Belanja</h2>
        <div id="cartItems">
            <!-- Produk akan ditambahkan di sini melalui JavaScript -->
        </div>
        <div class="mt-4">
            <p class="text-lg font-semibold">Total: <span id="totalHarga">0</span> Rupiah</p>
        </div>
        <div class="mt-4">
            <button onclick="checkout()" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Checkout</button>
        </div>

        <script>
            function createCartItemElement(nama, harga, kuantitas) {
                const hargaTotal = harga * kuantitas;
                const itemElement = document.createElement('div');
                itemElement.classList.add('mb-4', 'flex', 'justify-between', 'items-center');
                itemElement.innerHTML = `
                    <div>
                        <p class="font-semibold">${nama} - ${harga} Rupiah</p>
                        <p class="text-sm text-gray-500">Kuantitas: ${kuantitas}</p>
                    </div>
                    <div class="flex items-center">
                        <p class="font-semibold mr-2">${hargaTotal} Rupiah</p>
                        <button onclick="removeCartItem('${nama}')" class="bg-red-500 text-white py-1 px-2 rounded">Hapus</button>
                    </div>
                `;
                return itemElement;
            }
        </script>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="app.js" defer></script>
</body>

</html>