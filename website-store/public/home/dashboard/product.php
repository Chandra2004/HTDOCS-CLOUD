<?php include '../../../app/models/ProductModel.php'; ?>
<?php
    session_start();

    if (!isset($_SESSION['login'])) {
        header("Location: ../auth");
        exit;
    }
?>
<?php
// dashboard.php > mailbox > unread-mailbox
$sqlUnread = "SELECT COUNT(*) AS unread_count FROM mailbox WHERE status_name = 'unread'";
$resultUnread = mysqli_query($conn, $sqlUnread);
$rowUnread = mysqli_fetch_assoc($resultUnread);
$unreadCount = $rowUnread['unread_count'];
?>

<title>Product | Kami Digital Printing Surabaya</title>
<?php include '../../../app/view/template/dashboard/header.php' ?>

<!-- Main Content -->
<main class="p-3">
    <!-- Section One -->
    <section>
        <div class="mb-4">
            <span class="text-white font-semibold text-lg">Products</span>
            <div class="flex items-center">
                <span class="text-zinc-400 text-sm uppercase"><a href="main" class="text-blue-600">Dashboard</a></span>
                <span class="text-zinc-400 text-sm mx-2">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                    </svg>
                </span>
                <span class="text-zinc-400 text-sm uppercase">Products</span>
            </div>
        </div>

        <?php include '../../../app/view/template/dashboard/information.php' ?>

    </section>
    <!-- End Section One -->

    <!-- Section Two -->
    <section class="pb-6">
        <div class="md:w-1/2 mx-auto">
            <div class="bg-zinc-700 py-5 px-5 rounded-md">
                <span class="text-white font-semibold text-lg">Products</span>

                <!-- Error Messafe -->
                <div class="mt-3">
                    <?php if (!empty($errNamaBaru)) : ?>
                        <div class="flex items-center p-4 mb-4 text-sm rounded-lg text-zinc-800 bg-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Danger alert!</span>
                                <span class="font-bold">
                                    <?= $errNamaBaru ?>
                                </span>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($errProduk)) : ?>
                        <div class="flex items-center p-4 mb-4 text-sm rounded-lg text-zinc-800 bg-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Danger alert!</span>
                                <span class="font-bold">
                                    <?= $errProduk ?>
                                </span>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($errUkuranGambar)) : ?>
                        <div class="flex items-center p-4 mb-4 text-sm rounded-lg text-zinc-800 bg-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Danger alert!</span>
                                <span class="font-bold">
                                    <?= $errUkuranGambar ?>
                                </span>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($errEkstensiGambar)) : ?>
                        <div class="flex items-center p-4 mb-4 text-sm rounded-lg text-zinc-800 bg-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Danger alert!</span>
                                <span class="font-bold">
                                    <?= $errEkstensiGambar ?>
                                </span>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($errPilihanGambar)) : ?>
                        <div class="flex items-center p-4 mb-4 text-sm rounded-lg text-zinc-800 bg-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Danger alert!</span>
                                <span class="font-bold">
                                    <?= $errPilihanGambar ?>
                                </span>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($gagalTambah)) : ?>
                        <div class="flex items-center p-4 mb-4 text-sm rounded-lg text-zinc-800 bg-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Danger alert!</span>
                                <span class="font-bold">
                                    <?= $gagalTambah ?>
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center p-4 mb-4 text-sm rounded-lg text-zinc-800 bg-yellow-300" role="alert">
                            <p class="mx-auto font-semibold" id="timer">Halaman akan merefresh selama 5</p>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- End Error Messafe -->

                <div class="my-3 flex justify-center items-center font-medium h-20 mb-2 text-sm rounded-lg text-zinc-800 bg-yellow-300">
                    <ul class="">
                        <li>Maks. Ukuran gambar 2MB</li>
                        <li>Gambar Harus 1:1 (Persegi)</li>
                    </ul>
                </div>
                <div class="mt-3">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="relative z-0 w-full mb-6 group">
                            <input id="file_input" type="file" name="photo_product" class="border border-gray-500 text-white w-full rounded-lg" placeholder="">
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" id="nama_products" name="name_product" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" placeholder="Nama Produk">
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <select id="rating" name="rating_product" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                <?php foreach ($rate['ratings'] as $ratings) : ?>
                                    <option value="<?= $ratings ?>"><?= $ratings ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <select id="cities" name="city_product" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                <?php foreach ($city['cities'] as $cities) : ?>
                                    <option value="<?= $cities ?>"><?= $cities ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" id="harga_products" name="price_product" oninput="formatHarga(this)" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" placeholder="Harga">
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" name="submit_product" class="bg-green-600 hover:bg-green-700 w-full mt-2 py-3 rounded-md text-white font-bold hover:text-gray-300">
                                Submit New Products
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Two -->

    <!-- Section Three -->
    <section class="pb-6">
        <div class="lg:w-1/2 mx-auto overflow-x-auto rounded-md">
            <table class="w-full">
                <thead class="uppercase text-white bg-zinc-700">
                    <tr>
                        <th class="py-2 px-4 border-r border-zinc-600">action</th>
                        <th class="py-2 px-4 border-r border-zinc-600">photo</th>
                        <th class="py-2 px-4 border-r border-zinc-600">name</th>
                        <th class="py-2 px-4">overall</th>
                    </tr>
                </thead>
                <tbody class="bg-zinc-500 text-white">
                    <?php foreach ($dataProduct as $rowProduct) : ?>
                        <tr class="border-b border-zinc-700">
                            <td class="border-r border-zinc-700">
                                <span class="flex justify-center items-center cursor-pointer gap-1">
                                    <a href="DeleteModel?id=<?= $rowProduct['id']; ?>" class="flex justify-center items-center">
                                        <span class="bg-red-500 p-2 rounded-md">
                                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                                <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                                            </svg>
                                        </span>
                                    </a>
                                    <span class="bg-green-500 p-2 rounded-md" data-modal-target="update-modal<?= $rowProduct['id']; ?>" data-modal-toggle="update-modal<?= $rowProduct['id']; ?>">
                                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                            <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                                            <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                                        </svg>
                                    </span>
                                </span>
                            </td>
                            <td class="py-2 px-4 text-center border-r border-zinc-700">
                                <div class="flex justify-center">
                                    <div class="w-20 aspect-square overflow-hidden rounded-lg flex items-center">
                                        <img class="rounded-lg cursor-pointer" src="../../../app/assets/users/user-product/<?= $rowProduct['photo_product']; ?>" onerror="this.src='../../../app/assets/users/user-photo/error/user.png';" alt="<?= $rowProduct['name_product']; ?>" class="w-20 mx-auto cursor-pointer" data-modal-target="photo-modal<?= $rowProduct['id']; ?>" data-modal-toggle="photo-modal<?= $rowProduct['id']; ?>">
                                    </div>
                                </div>
                            </td>
                            <td class="py-2 px-4 text-center font-bold border-r border-zinc-700"><?= $rowProduct['name_product']; ?></td>
                            <td>
                                <span class="flex justify-center items-center cursor-pointer" data-modal-target="large-modal<?= $rowProduct['id']; ?>" data-modal-toggle="large-modal<?= $rowProduct['id']; ?>">
                                    <span class="bg-blue-500 p-2 rounded-md">
                                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                            <path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                        </svg>
                                    </span>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- End Section Three -->

    <?php foreach ($dataProduct as $rowProduct) : ?>
        <div id="large-modal<?= $rowProduct['id']; ?>" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-4xl max-h-full">
                <!-- Modal content -->
                <div class="relative rounded-lg shadow bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-5 border-b rounded-t border-gray-600">
                        <h3 class="text-xl font-medium text-white">
                            <?= $rowProduct['name_product']; ?>
                        </h3>
                        <button type="button" class="bg-transparent rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center text-white" data-modal-hide="large-modal<?= $rowProduct['id']; ?>">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="w-1/2 aspect-square overflow-hidden rounded-lg flex items-center mx-auto">
                            <img class="rounded-lg" src="../../../app/assets/users/user-product/<?= $rowProduct['photo_product']; ?>" onerror="this.src='../../../app/assets/users/user-photo/error/user.png';" alt="<?= $rowProduct['name_product']; ?>">
                        </div>
                        <p class="text-base leading-relaxed text-gray-400">
                            Product : <span class="text-white font-semibold"><?= $rowProduct['name_product']; ?></span> <br>
                            Rating : <span class="text-white"><?= $rowProduct['rating_product']; ?></span> <br>
                            Kota : <span class="text-white"><?= $rowProduct['city_product']; ?></span>
                            <br><br>
                            Harga : <br>
                            <span class="text-white text-lg">
                                Rp
                            </span>
                            <span class="text-white font-extrabold text-lg">
                                <?= $rowProduct['price_product']; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach ($dataProduct as $rowProduct) : ?>
        <div id="photo-modal<?= $rowProduct['id']; ?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative rounded-lg shadow bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white" data-modal-hide="photo-modal<?= $rowProduct['id']; ?>">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-white"><?= $rowProduct['name_product']; ?></h3>
                        <div class="aspect-square overflow-hidden rounded-lg flex items-center">
                            <img class="rounded-lg" src="../../../app/assets/users/user-product/<?= $rowProduct['photo_product']; ?>" onerror="this.src='../../../app/assets/users/user-photo/error/user.png';" alt="<?= $rowProduct['name_product']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach ($dataProduct as $rowProduct) : ?>
        <div id="update-modal<?= $rowProduct['id']; ?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative rounded-lg shadow bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white" data-modal-hide="update-modal<?= $rowProduct['id']; ?>">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-white">Update Your Product</h3>

                        <!-- Error Messafe -->
                        <div class="mt-3">
                            <?php if (!empty($errNamaBaru)) : ?>
                                <div class="flex items-center p-4 mb-4 text-sm rounded-lg text-zinc-800 bg-red-400" role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">Danger alert!</span>
                                        <span class="font-bold">
                                            <?= $errNamaBaru ?>
                                        </span>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($errProduk)) : ?>
                                <div class="flex items-center p-4 mb-4 text-sm rounded-lg text-zinc-800 bg-red-400" role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">Danger alert!</span>
                                        <span class="font-bold">
                                            <?= $errProduk ?>
                                        </span>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($errUkuranGambar)) : ?>
                                <div class="flex items-center p-4 mb-4 text-sm rounded-lg text-zinc-800 bg-red-400" role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">Danger alert!</span>
                                        <span class="font-bold">
                                            <?= $errUkuranGambar ?>
                                        </span>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($errEkstensiGambar)) : ?>
                                <div class="flex items-center p-4 mb-4 text-sm rounded-lg text-zinc-800 bg-red-400" role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">Danger alert!</span>
                                        <span class="font-bold">
                                            <?= $errEkstensiGambar ?>
                                        </span>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($errPilihanGambar)) : ?>
                                <div class="flex items-center p-4 mb-4 text-sm rounded-lg text-zinc-800 bg-red-400" role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">Danger alert!</span>
                                        <span class="font-bold">
                                            <?= $errPilihanGambar ?>
                                        </span>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($gagalTambah)) : ?>
                                <div class="flex items-center p-4 mb-4 text-sm rounded-lg text-zinc-800 bg-red-400" role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">Danger alert!</span>
                                        <span class="font-bold">
                                            <?= $gagalTambah ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="flex items-center p-4 mb-4 text-sm rounded-lg text-zinc-800 bg-yellow-300" role="alert">
                                    <p class="mx-auto font-semibold" id="timer">Halaman akan merefresh selama 5</p>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- End Error Messafe -->
                        
                        <div class="my-3 flex justify-center items-center font-medium h-20 mb-2 text-sm rounded-lg text-zinc-800 bg-yellow-300">
                            <ul class="">
                                <li>Maks. Ukuran gambar 2MB</li>
                                <li>Gambar Harus 1:1 (Persegi)</li>
                            </ul>
                        </div>
                        <div class="mt-3">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="hidden" id="nama_products" name="id_product" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" value="<?= $rowProduct['id']; ?>">
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input id="file_input" type="file" name="photo_product" class="border border-gray-500 text-white w-full rounded-lg" placeholder="">
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" id="nama_products" name="name_product" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" placeholder="<?= $rowProduct['name_product']; ?>">
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <select id="rating" name="rating_product" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                        <?php foreach ($rate['ratings'] as $ratings) : ?>
                                            <option value="<?= $ratings ?>"><?= $ratings ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <select id="cities" name="city_product" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                        <?php foreach ($city['cities'] as $cities) : ?>
                                            <option value="<?= $cities ?>"><?= $cities ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" id="harga_products" name="price_product" oninput="formatHarga(this)" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" placeholder="<?= $rowProduct['price_product']; ?>">
                                </div>
                                <div class="flex justify-center">
                                    <button type="submit" name="submit_upproduct" class="bg-green-600 hover:bg-green-700 w-full mt-2 py-3 rounded-md text-white font-bold hover:text-gray-300">
                                        Update Products
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</main>
<!-- End Main Content -->

<script>
    function formatHarga(input) {
        // Menghapus semua karakter selain angka
        let harga = input.value.replace(/\D/g, '');

        // Menambahkan titik setiap 3 digit dari belakang
        harga = harga.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        // Memasukkan kembali hasil format ke dalam input
        input.value = harga;
    }
</script>

<script>
    // Fungsi untuk mengatur countdown selama 6 detik
    function countdown() {
        let seconds = 4;
        const timerElement = document.getElementById('timer'); // Ganti 'timer' dengan ID yang sesuai

        // Update teks pada elemen 'timer' setiap detik
        const interval = setInterval(function() {
            timerElement.textContent = 'Halaman akan merefresh selama ' + seconds;
            seconds--;
            if (seconds < 0) {
                clearInterval(interval);
                timerElement.textContent = 'Halaman merefresh.';
            }
        }, 1000); // 1000 milidetik = 1 detik
    }

    // Panggil fungsi countdown jika salah satu pesan kesalahan muncul
    if (<?= !empty($gagalTambah) ? 'true' : 'false' ?>) {
        countdown();
    }
</script>

<?php include '../../../app/view/template/dashboard/footer.php' ?>