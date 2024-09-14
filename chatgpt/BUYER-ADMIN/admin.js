// Mock data pesan dari pembeli
const messages = [
    { id: 1, products: [{ name: 'Produk A', price: 10000, quantity: 2 }, { name: 'Produk B', price: 15000, quantity: 1 }] },
    // Tambahkan pesan lain sesuai kebutuhan
];

// Fungsi untuk menampilkan pesan dari pembeli
function displayMessages() {
    const messagesContainer = document.getElementById('messages');
    messagesContainer.innerHTML = '';

    messages.forEach(message => {
        const messageItem = document.createElement('div');
        messageItem.innerHTML = `
            <h3>Pesanan Baru</h3>
            <ul>
                ${message.products.map(product => `<li>${product.name} - Rp ${product.price} x ${product.quantity}</li>`).join('')}
            </ul>
            <p>Total Harga: Rp ${calculateTotalPrice(message.products)}</p>
        `;
        messagesContainer.appendChild(messageItem);
    });
}

// Fungsi untuk menghitung total harga pesanan
function calculateTotalPrice(products) {
    return products.reduce((total, product) => total + product.price * product.quantity, 0);
}

// Tampilkan pesan dari pembeli pada load awal
displayMessages();
