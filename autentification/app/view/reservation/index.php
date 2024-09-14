<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon"/>
    <title>Reservation | Ngopibareng</title>

    <!-- Animate -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- Tailwindcss CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite CDN -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"
      rel="stylesheet"
    />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      body {
        font-family: 'Poppins', sans-serif;
      }
    </style>
  </head>
  <body class="h-screen bg-cover bg-no-repeat bg-center" style="background-image: url('../assets/img/background.png')">
    <div class="h-screen w-full bg-zinc-900/80">
      <div class="h-screen flex items-center justify-center">
        <div class="bg-white/40 px-[10px] pt-[18px] pb-[10px] rounded-2xl md:hidden text-center">
          <img class="mx-auto" width="180" src="../assets/img/logo-green.png" alt="Ngopibareng Logo"/>
          <form action="<?= BASE_URL ?>menu" method="get">
            <input required type="text" name="nama" class="mt-[18px] w-[330px] h-[50px] p-4 text-sm rounded-xl border-none outline-none" placeholder="Nama Anda"/>
            <div class="flex gap-[10px] mt-[10px]">
                <span class="h-[50px] w-[50px] bg-white items-center inline-flex justify-center font-bold rounded-xl text-sm">+62</span>
                <input required maxlength="16" type="text" name="nomor" id="nomorInput" class="w-[270px] h-[50px] p-4 text-sm rounded-xl border-none outline-none" placeholder="Nomor telepon anda" oninput="validateNumberInput(this)"/>
            </div>
            <div class="my-[20px]">
                <p class="text-base text-white/30">Your table number</p>
                <input readonly id="tableInput" type="hidden" name="table">
                <h1 id="displayTable" class="cursor-default text-center bg-transparent border-none text-white font-bold text-[40px]"></h1>
                <script>
                    const urlParams = new URLSearchParams(window.location.search);
                    const tableValue = urlParams.get('table');

                    console.log('tableValue:', tableValue);

                    if (tableValue) {
                        document.getElementById('tableInput').value = tableValue;
                        document.getElementById('displayTable').textContent = tableValue;
                    } else {
                        window.location.href = '<?= BASE_URL?>error';
                    }
                </script>
            </div>
            <button type="submit" class="bg-[#184F38] w-[330px] h-[50px] rounded-xl">
                <div class="text-xs text-white font-bold flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 15">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 7.5h11m0 0L8 3.786M12 7.5l-4 3.714M12 1h3c.53 0 1.04.196 1.414.544.375.348.586.82.586 1.313v9.286c0 .492-.21.965-.586 1.313A2.081 2.081 0 0 1 15 14h-3"/>
                    </svg>
                    <span>Masuk</span>
                </div>
            </button>
            <a href="<?= BASE_URL ?>auth" class="flex mt-2 bg-[#ffffff] w-[330px] h-[50px] rounded-xl items-center justify-center">
              <div class="flex items-center justify-center font-semibold">
                <img src="../assets/img/google-icon.png" alt="" width="25" class="mr-2">
                <span>Sign In With Google</span>
              </div>
            </a>
          </form>
        </div>
        <div class="bg-white/40 text-white p-4 max-sm:hidden sm:hidden md:block rounded-md text-center animate__animated animate__fadeInDown">
          <img
            class="mx-auto"
            width="100"
            height="100"
            src="https://img.icons8.com/clouds/100/sad.png"
            alt="sad"
          />
          <p>
            <span class="font-bold text-lg">Mohon Maaf</span>
            <br />
            Website Ini Tidak Tersedia pada Perangkat Selain Mobile Phone
          </p>
        </div>
        <p class="absolute bottom-10 text-white">version 1.0.0</p>
      </div>
    </div>

    <script>
      function validateNumberInput(inputElement) {
        // Hanya izinkan angka
        inputElement.value = inputElement.value.replace(/\D/g, '');

        // Jika panjang input lebih dari 4 digit, tambahkan tanda strip setiap 4 digit
        if (inputElement.value.length > 4) {
            inputElement.value = inputElement.value.replace(/(\d{4})(?=\d)/g, '$1-');
        }
        
        // Anda juga dapat memberikan pesan atau tindakan lain sesuai kebutuhan
      }
    </script>

    <!-- Flowbite JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  </body>
</html>
