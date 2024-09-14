<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="<?= BASE_URL ?>/assets/img/logo.png" type="image/x-icon">
    <title><?= $title ?></title>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <!-- Flowbite CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.1/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-gray-700 hover:text-gray-900">Profile</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-gray-900">Log-Out</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md h-screen p-4">
            <nav class="mt-8">
                <ul>
                    <li class="mb-4">
                        <a href="<?= BASE_URL ?>/dashboard" class="flex items-center p-2 text-gray-700 hover:bg-gray-100 rounded-md">
                            <span class="mr-3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h2a1 1 0 011 1v1h10V4a1 1 0 011-1h2a1 1 0 011 1v1h1a2 2 0 012 2v11a2 2 0 01-2 2h-5a2 2 0 01-2 2H8a2 2 0 01-2-2H3a2 2 0 01-2-2V6a2 2 0 012-2h1V4z"></path>
                                </svg>
                            </span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="<?= BASE_URL ?>/save-account" class="flex items-center p-2 text-gray-700 hover:bg-gray-100 rounded-md">
                            <span class="mr-3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V7a1 1 0 00-1-1h-4a1 1 0 00-1 1v6M4 6h16M4 12h16m-7 6h7M4 18h7"></path>
                                </svg>
                            </span>
                            <span>Save Account</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="<?= BASE_URL ?>/premium" class="flex items-center p-2 text-gray-700 hover:bg-gray-100 rounded-md">
                            <span class="mr-3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m-4 4h10m2 4H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2z"></path>
                                </svg>
                            </span>
                            <span>Premium</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>