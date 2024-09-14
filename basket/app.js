// app.js

let keranjang = [];

// Produk 1
tambahItem(1, 'Produk 1', 100000, 1);

// Produk 2
tambahItem(2, 'Produk 2', 150000, 2);

// Produk 3
tambahItem(3, 'Produk 3', 200000, 3);


function tambahItem(id, nama, harga, inputId) {
    const quantityInput = document.getElementById(`quantity${inputId}`);
    const quantity = parseInt(quantityInput.value);

    const existingItem = keranjang.find(item => item.id === id);

    if (existingItem) {
        existingItem.quantity += quantity;
    } else {
        keranjang.push({ id, nama, harga, quantity });
    }

    updateKeranjang();
}

function hapusItem(index) {
    keranjang.splice(index, 1);
    updateKeranjang();
}

function updateKeranjang() {
    const keranjangElement = document.getElementById('keranjang');
    keranjangElement.innerHTML = '';

    let totalHarga = 0;

    keranjang.forEach((item, index) => {
        const subtotal = item.harga * item.quantity;
        totalHarga += subtotal;

        keranjangElement.innerHTML += `
            <div class="flex justify-between items-center mb-2">
                <span>${item.nama} (Qty: ${item.quantity})</span>
                <span>Rp ${subtotal}</span>
                <button onclick="hapusItem(${index})" class="text-red-500">Hapus</button>
            </div>
        `;
    });

    keranjangElement.innerHTML += `
        <div class="flex justify-between items-center mt-4">
            <span class="font-bold">Total Harga</span>
            <span class="font-bold text-xl">Rp ${totalHarga}</span>
        </div>
    `;
}



function checkout() {
    // Kirim data keranjang ke server PHP (Anda dapat menangani ini sesuai kebutuhan Anda)
    const data = JSON.stringify(keranjang);
    alert('Data keranjang dikirim ke server: ' + data);
}

// Bersihkan Local Storage pada inisialisasi
localStorage.clear();

