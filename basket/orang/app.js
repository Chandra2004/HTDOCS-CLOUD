// document.addEventListener('DOMContentLoaded', function () {
//     const cartItems = [];

//     function updateCart() {
//         const cartContainer = document.getElementById('cartItems');
//         const totalHargaElement = document.getElementById('totalHarga');

//         cartContainer.innerHTML = '';

//         let totalHarga = 0;

//         cartItems.forEach(item => {
//             const hargaTotal = item.harga * item.kuantitas;
//             totalHarga += hargaTotal;

//             const itemElement = document.createElement('div');
//             itemElement.classList.add('mb-4', 'flex', 'justify-between', 'items-center');

//             itemElement.innerHTML = `
//                 <div>
//                     <p class="font-semibold">${item.nama} - ${item.harga} Rupiah</p>
//                     <p class="text-sm text-gray-500">Kuantitas: ${item.kuantitas}</p>
//                 </div>
//                 <p class="font-semibold">${hargaTotal} Rupiah</p>
//             `;

//             cartContainer.appendChild(itemElement);
//         });

//         totalHargaElement.textContent = totalHarga;
//     }

//     // ... (kode sebelumnya tetap tidak berubah) ...

//     window.addToCart = function (nama, harga, idQuantity) {
//         const existingItem = cartItems.find(item => item.nama === nama);
//         const inputQuantity = document.getElementById(idQuantity);
//         const quantity = parseInt(inputQuantity.value);

//         if (existingItem) {
//             existingItem.kuantitas += quantity;
//         } else {
//             cartItems.push({ nama, harga, kuantitas: quantity });
//         }

//         updateCart();
//     };

//     window.removeCartItem = function (nama) {
//         const index = cartItems.findIndex(item => item.nama === nama);

//         if (index !== -1) {
//             cartItems.splice(index, 1);
//             updateCart();
//         }
//     };

//     // ... (kode sebelumnya tetap tidak berubah) ...



//     window.increaseQuantity = function (nama) {
//         const inputQuantity = document.getElementById(`quantity${nama}`);
//         const currentQuantity = parseInt(inputQuantity.value);
//         inputQuantity.value = currentQuantity + 1;
//         updateQuantity(nama, currentQuantity + 1);
//     };

//     window.decreaseQuantity = function (nama) {
//         const inputQuantity = document.getElementById(`quantity${nama}`);
//         const currentQuantity = parseInt(inputQuantity.value);

//         if (currentQuantity > 0) {
//             inputQuantity.value = currentQuantity - 1;
//             updateQuantity(nama, currentQuantity - 1);
//         }
//     };

//     // ... (kode sebelumnya tetap tidak berubah) ...


//     // ... (kode sebelumnya tetap tidak berubah) ...



//     window.updateQuantity = function (nama, kuantitas) {
//         const item = cartItems.find(item => item.nama === nama);

//         if (item) {
//             item.kuantitas = kuantitas;
//             updateCart();
//         }
//     };

// });




// --------------------------------------------------------------


document.addEventListener('DOMContentLoaded', function () {
    // Contoh definisi cartItems dan fungsi hapusItem
    const cartItems = [];

    function updateCart() {
        const cartContainer = document.getElementById('cartItems');
        const totalHargaElement = document.getElementById('totalHarga');

        cartContainer.innerHTML = '';

        let totalHarga = 0;

        cartItems.forEach(item => {
            const hargaTotal = item.harga * item.kuantitas;
            totalHarga += hargaTotal;

            const itemElement = document.createElement('div');
            itemElement.classList.add('mb-4', 'flex', 'justify-between', 'items-center');

            itemElement.innerHTML = `
                <div>
                    <p class="font-semibold">${item.nama} - ${item.harga} Rupiah</p>
                    <p class="text-sm text-gray-500">Kuantitas: ${item.kuantitas}</p>
                </div>
                <p class="font-semibold">${hargaTotal} Rupiah</p>
                <button onclick="hapusProduk('${item.nama}')" class='text-red-500'>Hapus</button>
            `;

            cartContainer.appendChild(itemElement);
        });

        totalHargaElement.textContent = totalHarga;
    }

    window.hapusProduk = function (nama) {
        const konfirmasi = confirm(`Anda yakin ingin menghapus ${nama} dari keranjang?`);

        if (konfirmasi) {
            const index = cartItems.findIndex(item => item.nama === nama);

            if (index !== -1) {
                cartItems.splice(index, 1);
                updateCart();
            }
        }
    };

    window.removeCartItem = function (nama) {
        const index = cartItems.findIndex(item => item.nama === nama);

        if (index !== -1) {
            cartItems.splice(index, 1);
            updateCart();
        }
    };

    window.addToCart = function (nama, harga, idQuantity) {
        const existingItem = cartItems.find(item => item.nama === nama);
        const inputQuantity = document.getElementById(idQuantity);
        const quantity = parseInt(inputQuantity.value);
    
        if (quantity === 0) {
            alert("Barang harus diisi quantitynya");
            return;
        }
    
        if (existingItem) {
            existingItem.kuantitas += quantity;
        } else {
            cartItems.push({ nama, harga, kuantitas: quantity });
        }
    
        updateCart();
    };
    

    window.increaseQuantity = function (nama) {
        const inputQuantity = document.getElementById(`quantity${nama}`);
        const currentQuantity = parseInt(inputQuantity.value);
        inputQuantity.value = currentQuantity + 1;
        updateQuantity(nama, currentQuantity + 1);
    };

    window.decreaseQuantity = function (nama) {
        const inputQuantity = document.getElementById(`quantity${nama}`);
        const currentQuantity = parseInt(inputQuantity.value);

        if (currentQuantity > 0) {
            inputQuantity.value = currentQuantity - 1;
            updateQuantity(nama, currentQuantity - 1);
        }
    };

    window.updateQuantity = function (nama, kuantitas) {
        const item = cartItems.find(item => item.nama === nama);

        if (item) {
            item.kuantitas = kuantitas;
            updateCart();
        }
    };

    // ... (Fungsi-fungsi lainnya tetap seperti yang Anda berikan sebelumnya)
});
