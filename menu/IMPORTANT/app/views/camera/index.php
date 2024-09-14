<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" href="<?= BASE_URL ?>assets/img/favicon.png" type="image/x-icon" />
  <title>Scan QR Code Now | Ngopibareng</title>

  <!-- Animate -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Tailwindcss CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Flowbite CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="h-screen bg-cover bg-no-repeat bg-center" style="background-image: url('assets/img/background.png')">
  <div class="h-screen w-full bg-zinc-900/80">
    <div class="h-screen flex items-center justify-center">
      <div class="bg-white/40 w-[80%] text-white p-4 rounded-xl text-center animate__animated animate__fadeInDown">
        <img class="mx-auto" width="180" src="<?= BASE_URL ?>assets/img/logo-green.png" alt="Ngopibareng Logo" />
        <div class="bg-white border-8 border-white w-full h-96 my-4 rounded-md overflow-hidden">
          <video id="qr-video" playsinline autoplay></video>
        </div>
        <div class="flex gap-2">
          <button class="bg-[#184F38] w-[330px] h-[50px] rounded-xl">
            <div class="text-xs text-white font-bold flex items-center justify-center gap-2">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19 5h-1.382l-.171-.342A2.985 2.985 0 0 0 14.764 3H9.236a2.984 2.984 0 0 0-2.683 1.658L6.382 5H5a3 3 0 0 0-3 3v11a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8a3 3 0 0 0-3-3Zm-3.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" />
              </svg>
              <span>Open Camera</span>
            </div>
          </button>
          <button class="bg-white w-[330px] h-[50px] rounded-xl switch" id="flashlightButton">
            <div class="text-xs text-[#184F38] font-bold flex items-center justify-center gap-2">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 20">
                <path d="M9.092 18h-4a1 1 0 0 0 0 2h4a1 1 0 0 0 0-2Zm-2-18a7.009 7.009 0 0 0-7 7 7.8 7.8 0 0 0 2.219 5.123c.956 1.195 1.781 2.228 1.781 3.877a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1c0-1.7.822-2.7 1.774-3.868A7.63 7.63 0 0 0 14.092 7a7.009 7.009 0 0 0-7-7Zm0 5a2 2 0 0 0-2 2 1 1 0 0 1-2 0 4 4 0 0 1 4-4 1 1 0 0 1 0 2Z" />
              </svg>
              <span>Flashlight OFF</span>
            </div>
          </button>
        </div>
        <a href="" id="result" class="bg-gray-500 pointer-events-none text-xs text-white p-3 mt-2 font-bold rounded-xl block">Visit Site</a>

        <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <script>
          document.addEventListener("DOMContentLoaded", function() {
            let scanner = new Instascan.Scanner({
              video: document.getElementById("qr-video"),
              mirror: false
            });

            var linkElement = document.getElementById("result");
            scanner.addListener("scan", function(content) {
              linkElement.href = content;

              if (content.trim() === "") {
                linkElement.removeAttribute("href");
                linkElement.classList.remove("bg-[#184F38]", "pointer-events-auto");
                linkElement.classList.add("bg-gray-500", "pointer-events-none");
              } else {
                linkElement.setAttribute("href", content);
                linkElement.classList.remove("bg-gray-500", "pointer-events-none");
                linkElement.classList.add("bg-[#184F38]", "pointer-events-auto");
              }
            });

            Instascan.Camera.getCameras().then(function(cameras) {
              if (cameras.length > 0) {
                // Ganti 0 dengan 1 untuk menggunakan kamera belakang
                scanner.start(cameras[1]);
                adjustCameraView(); // Panggil fungsi untuk penyesuaian tampilan kamera
              } else {
                console.error("No cameras found.");
              }
            }).catch(function(e) {
              console.error(e);
            });

            function adjustCameraView() {
              // Mendapatkan elemen video dari Instascan
              const videoElement = document.getElementById('your-video-element-id'); // Ganti dengan ID elemen video Anda

              // Mengubah transform untuk memperbaiki orientasi kamera
              videoElement.style.transform = 'scaleX(-1)';
            }
          });
        </script>
      </div>
    </div>
  </div>

  <!-- Flowbite JS CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>