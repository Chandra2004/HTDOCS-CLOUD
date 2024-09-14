const video = document.getElementById('qrScanner');
const resultDiv = document.getElementById('result');

navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
    .then(function (stream) {
        video.srcObject = stream;
        video.play();
    })
    .catch(function (err) {
        console.log("An error occurred: " + err);
    });

video.addEventListener('loadeddata', (event) => {
    const canvas = window.jsQR.generateCanvas(video.src, { width: 300 });
    if (canvas) {
        resultDiv.innerHTML = "QR Code berhasil terbaca!";
        resultDiv.style.color = "green";

        const qrData = window.jsQR.decodeQRFromImage(canvas);
        if (qrData) {
            const tableNumber = qrData.data;
            const menuURL = `menu.php?table=${tableNumber}`;
            window.location.href = menuURL;
        }
    } else {
        resultDiv.innerHTML = "Gagal membaca QR Code. Silakan coba lagi.";
        resultDiv.style.color = "red";
    }
});
