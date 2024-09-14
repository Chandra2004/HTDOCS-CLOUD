<?php
include '../../app/core/Database.php';
// milestone > list-milestone
$sqlProduct = "SELECT * FROM product";
$resultProduct = mysqli_query($conn, $sqlProduct);
$dataProduct = mysqli_fetch_all($resultProduct, MYSQLI_ASSOC);
?>

<title>Produk | Karya Merapi Indonesia</title>
<?php include '../../app/view/template/home/header.php' ?>

<!-- Main Content -->
<main>
    <!-- Section One -->
    <section class="c-hero-center h-screen w-full relative onlyMobile:transition-height onlyMobile:duration-300 onlyMobile:delay-300 bg-gray-primary" data-theme="dark" data-module="sal" data-cy="c-hero-center">
        <div class="w-full h-full relative c-hero-center__background-image transition-opacity duration-1000">
            <div class="u-lazy">
                <img src="../../app/assets/img/banner/banner_3.jpg" alt="All Team" class="lazy w-full h-full object-cover" />
                <div class="u-lazy__placeholder"></div>
            </div>
        </div>
        <div class="absolute top-0 left-0 z-10 w-full h-full bg-gray-primary opacity-80"></div>
        <div class="absolute top-0 left-0 z-20 w-full h-full">
            <div class="container mx-auto h-full flex justify-center items-center">
                <div data-sal-delay="1000" data-sal-duration="1800" data-sal-once="true">
                    <div class="container mx-auto w-full relative z-10">
                        <div class="w-full h-full pt-48 lg:w-3/4 z-10">
                            <div class="md:mb-16 mb-11 xl:mb-20" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500" data-sal-once="true">
                                <h1 class="font-maisonExtendedExtraBold 
                                        font-extrabold
                                        text-size_13x md:text-size_24x 
                                        tracking-normal xl:tracking-title
                                        leading-height_36x md:leading-height_64x
                                        text-white">
                                    Kami menciptakan<br>
                                    solusi untuk membantumu<br>
                                    mewujudkan imajinasi
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Section One -->

    <!-- Section Two -->
    <section id="feature-card-slider" class="px-2 py-10">
        <div>
            <div class="container mx-auto">
                <div class="text-center mb-8 md:mb-12 xl:mb-16">
                    <h2 class="c-feature-card-spot-brand__title font-maisonExtendedBold md:font-maisonExtendedExtraBold font-bold md:font-extrabold tracking-normal xl:tracking-title text-size_13x md:text-size_18x xl:text-size_24x leading-height_36x md:leading-height_48x xl:leading-height_64x">
                        Produk KAMI
                    </h2>
                </div>
            </div>

            <div class="mx-auto text-lg grid grid-cols-2 gap-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6">
                <?php foreach ($dataProduct as $rowProduct) : ?>
                    <div class="w-full max-w-sm border rounded-xl shadow bg-gray-800 border-gray-700">
                        <!-- <a href="#" class=""> -->
                        <div class="mb-3 aspect-square rounded-tl-xl rounded-tr-lg overflow-hidden flex items-center">
                            <img src="../../app/assets/users/user-product/<?= $rowProduct['photo_product'] ?>" alt="<?= $rowProduct["name_product"]; ?>" onerror="this.src='../../app/assets/users/user-photo/error/user.png';">
                        </div>
                        <!-- </a> -->
                        <div class="px-5 pb-5">
                            <!-- <a href="#"> -->
                            <h5 class="text-xl font-semibold tracking-tight text-white"><?= $rowProduct["name_product"]; ?></h5>
                            <p class="flex text-sm font-thin tracking-tight text-gray-500">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 0 19 9.5 9.5 0 0 0 0-19ZM8.374 17.4a7.6 7.6 0 0 1-5.9-7.4c0-.83.137-1.655.406-2.441l.239.019a3.887 3.887 0 0 1 2.082 2.5 4.1 4.1 0 0 0 2.441 2.8c1.148.522 1.389 2.007.732 4.522Zm3.6-8.829a.997.997 0 0 0-.027-.225 5.456 5.456 0 0 0-2.811-3.662c-.832-.527-1.347-.854-1.486-1.89a7.584 7.584 0 0 1 8.364 2.47c-1.387.208-2.14 2.237-2.14 3.307a1.187 1.187 0 0 1-1.9 0Zm1.626 8.053-.671-2.013a1.9 1.9 0 0 1 1.771-1.757l2.032.619a7.553 7.553 0 0 1-3.132 3.151Z" />
                                </svg>&nbsp;Kota <?= $rowProduct["city_product"]; ?>
                            </p>
                            <!-- </a> -->
                            <div class="flex items-center mt-2.5 mb-5">
                                <p class="flex text-sm font-thin tracking-tight text-gray-500">
                                    <svg class="w-4 h-4 text-gray-500 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>&nbsp;Rating Produk
                                </p>
                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3"><?= $rowProduct["rating_product"]; ?></span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-bold text-white">Rp <?= $rowProduct["price_product"]; ?></span>
                                <a href="https://wa.me/6285730676143?text=Halo%20*KAMI%20DIGITAL%20PRINTING*,%0A%0ASaya%20ingin%20memesan%20produk%20berikut:%0ANama%20Produk:%20*<?= $rowProduct["name_product"]; ?>*%0AHarga%20Produk%20:%20Rp%20*<?= $rowProduct["price_product"]; ?>*%0AFoto%20Produk%20:%20%0Ahttps://images.ctfassets.net/h6goo9gw1hh6/2sNZtFAWOdP1lmQ33VwRN3/24e953b920a9cd0ff2e1d587742a2472/1-intro-photo-final.jpg?w=1200&h=992&fl=progressive&q=70&fm=jpg" target="_blank" class="flex text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                        <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                                    </svg>&nbsp;Pesan
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End of Section Two -->
</main>
<!-- End of Main Content -->

<?php include '../../app/view/template/home/footer.php' ?>