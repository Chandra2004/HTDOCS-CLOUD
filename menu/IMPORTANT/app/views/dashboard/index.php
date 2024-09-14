<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" href="<?= BASE_URL ?>assets/img/favicon.png" type="image/x-icon" />
  <title>Admin Dashboard | Ngopibareng</title>

  <!-- Animate -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Tailwindcss CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Flowbite CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    ::-webkit-scrollbar {
      width: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="h-screen bg-cover bg-no-repeat bg-center" style="background-image: url('assets/img/background.png')">
  <div class="h-screen w-full overflow-auto bg-zinc-900/30">

    <?php include '../app/views/template/navbar.php'; ?>

    <div class="p-4 sm:ml-64">
      <div class="p-4 border-dashed rounded-lg bg-white/15 backdrop-blur-sm">

        <!-- Submain -->
        <main class="grid md:grid-cols-2 gap-4">
          <!-- Submain Section Two -->
          <section class="">

            <div class="flex items-center p-4 text-white rounded-tl-lg rounded-tr-lg bg-[#184F38]">
              <svg class="text-white flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
              </svg>
              <span class="text-white font-bold flex-1 ml-3 whitespace-nowrap">Customer</span>
              <a href="">
                <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                </svg>
              </a>
            </div>
            <div class="flex gap-2 items-center justify-center p-4 rounded-bl-lg rounded-br-lg bg-[#29835e]">
              <div class="flex bg-white rounded-md p-3 justify-center items-center">
                <div class="bg-[#29835e] p-3 rounded-md">
                  <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                  </svg>
                </div>
                <div class="px-2 text-center">
                  <span class="text-gray-800">Total Customer :</span>
                  <br>
                  <span class="text-gray-800 text-lg font-bold">900</span>
                </div>
              </div>
              <div class="flex bg-white rounded-md p-3 justify-center items-center">
                <div class="bg-[#29835e] p-3 rounded-md">
                  <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 18" fill="currentColor">
                    <path d="M18 4H16V9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13H9L6.846 14.615C7.17993 14.8628 7.58418 14.9977 8 15H11.667L15.4 17.8C15.5731 17.9298 15.7836 18 16 18C16.2652 18 16.5196 17.8946 16.7071 17.7071C16.8946 17.5196 17 17.2652 17 17V15H18C18.5304 15 19.0391 14.7893 19.4142 14.4142C19.7893 14.0391 20 13.5304 20 13V6C20 5.46957 19.7893 4.96086 19.4142 4.58579C19.0391 4.21071 18.5304 4 18 4Z" fill="currentColor" />
                    <path d="M12 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V9C0 9.53043 0.210714 10.0391 0.585786 10.4142C0.960859 10.7893 1.46957 11 2 11H3V13C3 13.1857 3.05171 13.3678 3.14935 13.5257C3.24698 13.6837 3.38668 13.8114 3.55279 13.8944C3.71889 13.9775 3.90484 14.0126 4.08981 13.996C4.27477 13.9793 4.45143 13.9114 4.6 13.8L8.333 11H12C12.5304 11 13.0391 10.7893 13.4142 10.4142C13.7893 10.0391 14 9.53043 14 9V2C14 1.46957 13.7893 0.960859 13.4142 0.585786C13.0391 0.210714 12.5304 0 12 0Z" fill="currentColor" />
                  </svg>
                </div>
                <div class="px-2 text-center">
                  <span class="text-gray-800">Customer Order :</span>
                  <br>
                  <span class="text-gray-800 text-lg font-bold">89</span>
                </div>
              </div>
            </div>
          </section>
          <!-- End Submain Section Two -->
        </main>
        <!-- End Submain -->



























































      </div>
    </div>
























































































    <!-- <div class="h-screen flex items-center justify-center">
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
    </div> -->
  </div>

  <!-- Flowbite JS CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>