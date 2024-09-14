<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../auth");
    exit;
}
?>
<?php include '../../../app/models/ProfileModel.php'; ?>
<?php
$id_display = $_SESSION['id_display'];
$name_display = $_SESSION['name_display'];
$username_display = $_SESSION['username_display'];
$email_display = $_SESSION['email_display'];
$photo_display = $_SESSION['photo_display'];

$numphone_display = $_SESSION['numphone_display'];
$nik_display = $_SESSION['nik_display'];
$joindate_display = $_SESSION['joindate_display'];
$borndate_display = $_SESSION['borndate_display'];
$lastschool_display = $_SESSION['lastschool_display'];
$address_display = $_SESSION['address_display'];
$whatsapp_display = $_SESSION['whatsapp_display'];
$instagram_display = $_SESSION['instagram_display'];
$tiktok_display = $_SESSION['tiktok_display'];
$facebook_display = $_SESSION['facebook_display'];

$joindate = date_create($joindate_display);
$date = date_format($joindate, "d F Y");
$joindate = ucfirst($date);

$borndate = date_create($borndate_display);
$date = date_format($borndate, "d F Y");
$borndate = ucfirst($date);
?>
<?php
// dashboard.php > mailbox > unread-mailbox
$sqlUnread = "SELECT COUNT(*) AS unread_count FROM mailbox WHERE status_name = 'unread'";
$resultUnread = mysqli_query($conn, $sqlUnread);
$rowUnread = mysqli_fetch_assoc($resultUnread);
$unreadCount = $rowUnread['unread_count'];
?>

<title>Profile | Kami Digital Printing Surabaya</title>
<?php include '../../../app/view/template/dashboard/header.php' ?>

<!-- Main Content -->
<main class="p-3">
    <!-- Section One -->
    <section>
        <div class="mb-4">
            <span class="text-white font-semibold text-lg">Profile</span>
            <div class="flex items-center">
                <span class="text-zinc-400 text-sm uppercase"><a href="main" class="text-blue-600">Dashboard</a></span>
                <span class="text-zinc-400 text-sm mx-2">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                    </svg>
                </span>
                <span class="text-zinc-400 text-sm uppercase">profile</span>
            </div>
        </div>

        <?php include '../../../app/view/template/dashboard/information.php' ?>

    </section>
    <!-- End Section One -->

    <!-- Section Two -->
    <section class="pb-6">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="grid md:grid-cols-2 gap-2">
                <div class="bg-zinc-700 py-5 px-5 rounded-md">
                    <span class="text-white font-semibold text-lg">Standard Profile</span>
                    <div class="mt-3">  
                        <input type="hidden" name="id" value="<?= $id_display ?>"> 
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="name_user" id="name_user" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" value="<?= $name_display ?>" />
                            <label for="name_user" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Lengkap</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input maxlength="8" type="text" name="username_user" id="username_user" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" value="<?= $username_display ?>" />
                            <label for="username_user" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="email" name="email_user" id="email_user" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" value="<?= $email_display ?>" />
                            <label for="email_user" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                        </div>

                        <span class="text-white font-semibold text-sm">Foto Profile</span>
                        <div class="my-3 grid gap-2 sm:grid-cols-2">
                            <div class="aspect-square overflow-hidden flex items-center justify-center rounded-lg">
                                <img class="rounded-lg" alt="Username" src="../../../app/assets/users/user-photo/<?= $photo_display ?>" onerror="this.src='../../../app/assets/users/user-photo/error/user.png';">
                            </div>
                            <div class="" role="alert">
                                <div class="flex justify-center items-center font-medium h-20 mb-2 text-sm rounded-lg text-zinc-800 bg-yellow-300">
                                    <ul class="">
                                        <li>Maks. Ukuran gambar 2MB</li>
                                        <li>Gambar Harus 1:1 (Persegi)</li>
                                    </ul>
                                </div>
                                <input class="block w-full text-sm border text-white border-zinc-300 rounded-lg cursor-pointer" id="file_input" type="file" name="photo_user">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-zinc-700 py-5 px-5 rounded-md">
                    <span class="text-white font-semibold text-lg">Detail Profile</span>
                    <div class="mt-3">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="numphone_user" id="number_user" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" value="<?= $numphone_display ?>" />
                            <label for="number_user" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor Telepon</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input maxlength="16" type="text" name="nik_user" id="nik_user" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" value="<?= $nik_display ?>" />
                            <label for="nik_user" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NIK</label>
                        </div>
                        <div class="flex gap-3">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="date" name="joindate_user" id="joindate_user" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" value="<?= $joindate_display ?>" />
                                <label for="joindate_user" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal Bergabung</label>
                            </div>
                            <div class="bg-zinc-800 rounded-md text-white font-medium w-full flex items-center justify-center relative z-0 mb-6">
                                <p><?= $joindate ?></p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="date" name="borndate_user" id="borndate_user" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" value="<?= $borndate_display ?>" />
                                <label for="borndate_user" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal Kelahiran</label>
                            </div>
                            <div class="bg-zinc-800 rounded-md text-white font-medium w-full flex items-center justify-center relative z-0 mb-6">
                                <p><?= $borndate ?></p>
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="lastschool_user" id="lastschool_user" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" value="<?= $lastschool_display ?>" />
                            <label for="lastschool_user" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pendidikan Terakhir</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="address_user" id="address_user" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" value="<?= $address_display ?>" />
                            <label for="address_user" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                        </div>

                        <span class="text-white font-semibold text-sm">Social Media</span>
                        <div class="mt-3">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="whatsapp_user" id="whatsapp_user" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" value="<?= $whatsapp_display ?>" />
                                <label for="whatsapp_user" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">WhatsApp (with 62)</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="instagram_user" id="instagram_user" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" value="<?= $instagram_display ?>" />
                                <label for="instagram_user" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Instagram (No @)</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="tiktok_user" id="tiktok_user" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" value="<?= $tiktok_display ?>" />
                                <label for="tiktok_user" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tiktok (With @)</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="facebook_user" id="facebook_user" class="text-white block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer" value="<?= $facebook_display ?>" />
                                <label for="facebook_user" class="text-zinc-400 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Facebook</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center gap-2">
                <button type="submit" name="submit_upprofile" class="bg-green-600 hover:bg-green-700 w-full md:w-1/2 mt-2 py-3 rounded-md text-white font-bold hover:text-gray-300">
                    Submit
                </button>
            </form>
            <a href="repassword" class="text-center bg-blue-600 hover:bg-blue-700 w-full md:w-1/2 mt-2 py-3 rounded-md text-white font-bold hover:text-gray-300">
                Change Password
            </a>
        </div>
    </section>
    <!-- End Section Two -->
    <!-- End Main Content -->


    <?php include '../../../app/view/template/dashboard/footer.php' ?>