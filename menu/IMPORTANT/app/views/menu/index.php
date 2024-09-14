<?php
    session_start();

    if (empty($_SESSION['table'])) {
        header('Location: ' . BASE_URL . 'error');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon" />
    <title>Menu | Ngopibareng</title>

    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- AOS JS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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
<body class="bg-[#184F38]">
    <h1>Nama : <span id="displayNama"><?= $_SESSION['nama'] ?></span></h1>
    <h1>Nomor : <span id="displayNomor"><?= $_SESSION['nomor'] ?></span></h1>
    <h1>Meja : <span id="displayTable"><?= $_SESSION['table'] ?></span></h1>
    
    <script>
        // // Mendapatkan nilai parameter dari URL
        // const urlParams = new URLSearchParams(window.location.search);
        // const tableValue = urlParams.get('table');
        // const namaValue = urlParams.get('nama');
        // const nomorValue = urlParams.get('nomor');
                
        // // Memasukkan nilai parameter ke dalam elemen input
        // if (tableValue && namaValue && nomorValue) {
        //     // document.getElementById('tableInput').value = tableValue;
        //     document.getElementById('displayTable').textContent = tableValue;
        //     document.getElementById('displayNama').textContent = namaValue;
        //     document.getElementById('displayNomor').textContent = nomorValue;
        // } else {
        //     // Jika nilai 'table' tidak ada, arahkan ke YouTube
        //     window.location.href = '<?= BASE_URL?>error';
        // }
    </script>




    <nav>
        <div class="flex items-center px-6 mt-[35px]">
            <div class="absolute">
                <a href="<?= BASE_URL ?>resevation">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                    </svg>
                </a>
            </div>
            <div class="mx-auto">
                <img class="mx-auto" width="180" src="../assets/img/logo-white.png" alt="Ngopibareng Logo"/>
            </div>
        </div>
    </nav>

    <!-- Section One -->
    <section>
        <div>
            <button id="beveragesBtn" onclick="toggleRoundedClass('beveragesBtn')" type="button" class="bg-white rounded-t-xl rounded-b-xl shadow-2xl px-6 py-4 flex items-center w-[90%] mt-[20px] mx-auto relative z-10 animate__animated animate__fadeIn" aria-controls="beverages-dropdown" data-collapse-toggle="beverages-dropdown">
                <span class="flex-1 text-left text-[16px] whitespace-nowrap text-[#184F38] font-bold">Beverages</span>
                <svg id="food-icon" class="w-3 h-3 text-[#184F38]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="beverages-dropdown" class="hidden w-[90%] h-[500px] p-[12px] bg-white mx-auto rounded-b-xl animate__animated animate__fadeIn">
                <div class="h-full w-full rounded-lg flex flex-col">
                    <div class="w-full h-[60px] overflow-auto flex whitespace-nowrap">
                        <ul class="font-semibold flex items-center whitespace-nowrap gap-1">
                            <li class="py-2"><a href="#coffe" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Coffe</a></li>
                            <li class="py-2"><a href="#tea" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Tea</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Cold</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Herbal</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Non-Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Coffe</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Tea</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Cold</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Herbal</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Non-Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Coffe</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Tea</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Cold</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Herbal</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Non-Alcohol</a></li>
                        </ul>
                    </div>
                    <div class="grid gap-[5px] w-full h-full rounded-lg overflow-auto scroll-smooth">

                        <span id="coffe" class="text-[#184F38] ml-2 text-lg font-semibold">COFFE</span>
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">kopi cak</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product1')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input readonly type="text" inputmode="numeric" id="quantity-product1" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product1')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">kopi cak</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product1')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input readonly type="text" inputmode="numeric" id="quantity-product1" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product1')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">kopi cak</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product1')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input readonly type="text" inputmode="numeric" id="quantity-product1" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product1')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">kopi cak</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product1')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input readonly type="text" inputmode="numeric" id="quantity-product1" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product1')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        

                        <span id="tea" class="text-[#184F38] ml-2 text-lg font-semibold">TEA</span>
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">teh cak</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product5')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product5" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product5')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product6')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product6" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product6')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product7')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product7" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product7')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product8')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product8" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product8')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product9')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product9" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product9')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section One -->






























































    <!-- Section Two -->
    <section>
        <div>
            <button id="foodBtn" onclick="toggleRoundedClass('foodBtn')" type="button" class="bg-white rounded-t-xl rounded-b-xl shadow-2xl px-6 py-4 flex items-center w-[90%] mt-[20px] mx-auto relative z-10 animate__animated animate__fadeIn" aria-controls="food-dropdown" data-collapse-toggle="food-dropdown">
                <span class="flex-1 text-left text-[16px] whitespace-nowrap text-[#184F38] font-bold">Food</span>
                <svg id="food-icon" class="w-3 h-3 text-[#184F38]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="food-dropdown" class="hidden w-[90%] h-[500px] p-[12px] bg-white mx-auto rounded-b-xl animate__animated animate__fadeIn">
                <div class="h-full w-full rounded-lg flex flex-col">
                    <div class="w-full h-[60px] overflow-auto flex whitespace-nowrap">
                        <ul class="font-semibold flex items-center whitespace-nowrap gap-1">
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Coffe</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Tea</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Cold</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Herbal</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Non-Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Coffe</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Tea</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Cold</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Herbal</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Non-Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Coffe</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Tea</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Cold</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Herbal</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Non-Alcohol</a></li>
                        </ul>
                    </div>
                    <div class="grid gap-[5px] w-full h-full rounded-lg overflow-auto">
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product1')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product1" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product1')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product2')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product2" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product2')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product3')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product3" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product3')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product4')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product4" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product4')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product5')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product5" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product5')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product6')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product6" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product6')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product7')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product7" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product7')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product8')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product8" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product8')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product9')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product9" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product9')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product10')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product10" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product10')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product11')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product11" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product11')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product12')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product12" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product12')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Two -->

    <!-- Section Three -->
    <!-- <section class="pb-36">
        <div>
            <button id="box1" onclick="toggleRoundedClass('box1')" type="button" class="bg-white rounded-t-xl rounded-b-xl shadow-2xl px-6 py-4 flex items-center w-[90%] mt-[20px] mx-auto relative z-10 animate__animated animate__fadeIn" aria-controls="beverages-dropdown" data-collapse-toggle="beverages-dropdown">
                <span class="flex-1 text-left text-[16px] whitespace-nowrap text-[#184F38] font-bold">Beverages</span>
                <svg id="svg-icon" class="w-3 h-3 text-[#184F38]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="beverages-dropdown" class="hidden w-[90%] h-[500px] p-[12px] bg-white mx-auto rounded-b-xl animate__animated animate__fadeIn">
                <div class="h-full w-full rounded-lg flex flex-col">
                    <div class="w-full h-[60px] overflow-auto flex whitespace-nowrap">
                        <ul class="font-semibold flex items-center whitespace-nowrap gap-1">
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Coffe</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Tea</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Cold</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Herbal</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Non-Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Coffe</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Tea</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Cold</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Herbal</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Non-Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Coffe</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Tea</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Cold</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Herbal</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Alcohol</a></li>
                            <li class="py-2"><a href="" class="px-[18px] py-[6px] rounded-lg border border-[#184F38] text-[#184F38] hover:bg-[#184F38] hover:text-white">Non-Alcohol</a></li>
                        </ul>
                    </div>
                    <div class="grid gap-[5px] w-full h-full rounded-lg overflow-auto">
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product1')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product1" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product1')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product2')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product2" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product2')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product3')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product3" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product3')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product4')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product4" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product4')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product5')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product5" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product5')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product6')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product6" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product6')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product7')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product7" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product7')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product8')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product8" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product8')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product9')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product9" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product9')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product10')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product10" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product10')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product11')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product11" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product11')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <div class="bg-[#2E2E2E] p-[5px] rounded-lg flex relative">
                            <img src="../assets/img/coffe.png" alt="" class="rounded-md w-32">
                            <div class="ml-2 mt-3">
                                <h1 class="font-semibold text-[14px] text-white">Espresso</h1>
                                <p class="text-[#8C8C8C] text-[12px]">lorem ipsum blablabla</p>
                                <h1 class="font-semibold text-[16px] text-white">Rp 25.000</h1>
                            </div>
                            <svg class="w-6 h-6 text-white absolute right-4 top-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
                            </svg>
        
                            <div class="flex items-center gap-3 absolute right-2 bottom-2">
                                <button onclick="increaseValue('product12')" class="text-white bg-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                    
                                </button>
                                <input type="text" inputmode="numeric" id="quantity-product12" class="font-bold text-white bg-[#2E2E2E] text-[16px] text-center border-none w-[50px]" value="0">
                                <button onclick="decreaseValue('product12')" class="bg-white text-[#184F38] p-2 rounded-full">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Section Three -->  

    <!-- Section Three -->
    <!-- <section>
        <div class="backdrop-blur-sm bg-white/60 px-4 py-5 rounded-t-3xl fixed bottom-0 w-full z-20">
            <button type="button" class="bg-[#184F38] rounded-t-xl rounded-b-xl px-6 py-4 flex items-center w-[90%] mt-[10px] mx-auto relative z-30 text-center animate__animated animate__fadeIn">
                <span class="flex-1 text-[16px] whitespace-nowrap text-white font-bold text-center">CHECKOUT</span>
            </button>
        </div>
    </section> -->
    <!-- End Section Three -->


    


    <script>
        function increaseValue(productId) {
            var quantityElement = document.getElementById('quantity-' + productId);
            var quantity = parseInt(quantityElement.value, 10);
            quantity = isNaN(quantity) ? 0 : quantity;
            quantity++;
            quantityElement.value = quantity;
        }

        function decreaseValue(productId) {
            var quantityElement = document.getElementById('quantity-' + productId);
            var quantity = parseInt(quantityElement.value, 10);
            quantity = isNaN(quantity) ? 0 : quantity;
            if (quantity > 0) {
                quantity--;
            } else {
                quantity = 0; // Jika nilai sudah 0, tetapkan nilainya ke 0
            }
            quantityElement.value = quantity;
        }

        // Menambahkan event listener untuk memastikan nilai tidak kosong dan menghilangkan angka 0
        document.addEventListener('input', function(event) {
            if (event.target.tagName.toLowerCase() === 'input') {
                var quantity = parseInt(event.target.value, 10);
                if (isNaN(quantity) || quantity < 0) {
                    event.target.value = 0;
                } else if (quantity === 0) {
                    event.target.value = ''; // Jika angka 0 dimasukkan, hilangkan nilainya
                }
            }
        });
    </script>

    <script>
    function toggleRoundedClass(boxId) {
        var box = document.getElementById(boxId);
        box.classList.toggle('rounded-b-xl');
        box.classList.toggle('rounded-b-none');
    }
    </script>


    
    <!-- Flowbite JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


<!-- <p>Nama : <span id="nama"></span></p>
    <p>Nomor : <span id="nomor"></span></p>
    <p>Meja : <span id="tableInput"></span></p>

    <script>
        // Mendapatkan nilai parameter dari URL
        const urlParams = new URLSearchParams(window.location.search);
        const nama = urlParams.get('nama');
        const nomor = urlParams.get('nomor');
        const table = urlParams.get('table');
              
        // Memasukkan nilai parameter ke dalam elemen input
        if (table && nama && nomor) {
            document.getElementById('tableInput').textContent = table;
            document.getElementById('nama').textContent = nama;
            document.getElementById('nomor').textContent = nomor;
        } else {
            // Jika nilai 'table' tidak ada, arahkan ke YouTube
            window.location.href = 'error.php';
        }
    </script> -->
</body>
</html>