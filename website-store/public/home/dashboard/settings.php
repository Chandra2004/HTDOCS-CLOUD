<?php include '../../../app/models/SettingsModel.php'; ?>
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

<title>Settings | Kami Digital Printing Surabaya</title>
<?php include '../../../app/view/template/dashboard/header.php' ?>

    <!-- Main Content -->
    <main class="p-3">
        <!-- Section One -->
        <section>
            <div class="mb-4">
                <span class="text-white font-semibold text-lg">Pengaturan Akun</span>
                <div class="flex items-center">
                    <span class="text-zinc-400 text-sm uppercase"><a href="main" class="text-blue-600">Dashboard</a></span>
                    <span class="text-zinc-400 text-sm mx-2">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                        </svg>
                    </span>
                    <span class="text-zinc-400 text-sm uppercase">Pengaturan Akun</span>
                </div>
            </div>

            <?php include '../../../app/view/template/dashboard/information.php' ?>

        </section>
        <!-- End Section One -->

        <!-- Section Two -->
        <section class="pb-6">     
            <div class="bg-zinc-700 py-5 px-5 rounded-md flex justify-center items-center">
                <h1 class="text-white font-semibold">Settings Will Be Appear Soon</h1>
            </div>
        </section>
        <!-- End Section Two -->
    </main>
    <!-- End Main Content -->

<?php include '../../../app/view/template/dashboard/footer.php' ?>