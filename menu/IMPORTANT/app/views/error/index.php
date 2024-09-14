<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" href="<?= BASE_URL ?>assets/img/favicon.png" type="image/x-icon" />
  <title>Error Reservation | Ngopibareng</title>

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
      <div class="bg-white/40 text-white p-4 rounded-xl text-center animate__animated animate__fadeInDown">
        <img class="mx-auto" width="100" height="100" src="https://img.icons8.com/clouds/100/sad.png" alt="sad" />
        <p>
          <span class="font-bold text-lg">Mohon Maaf</span>
          <br />
          ANDA HARUS SCAN ULANG QR CODE
        </p>
        <a href="<?= BASE_URL ?>camera" class="flex justify-center bg-[#184F38] p-3 mt-2 rounded-md">
          <div class="flex items-center justify-center">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
              <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z" />
            </svg>&nbsp;&nbsp;
            <span>Scan QR Code Now</span>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- Flowbite JS CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>