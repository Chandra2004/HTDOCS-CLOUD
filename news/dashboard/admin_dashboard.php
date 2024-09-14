<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login/index.php");
    exit;
}

    $id_display = $_SESSION['id_display'];
    $name_display = $_SESSION['name_display'];
    $email_display = $_SESSION['email_display'];
    $role_display = $_SESSION['role_display'];

    // Jika tombol "End Session" diklik
    if(isset($_POST['end_session'])) {
        // Hapus semua data sesi
        session_unset();
        // Hancurkan sesi
        session_destroy();
        // Alihkan kembali ke index.php
        header("Location: ../index.php");
        exit();
    }

    // Jika peran tidak sesuai, arahkan ke halaman yang sesuai dengan peran
if ($_SESSION['role_display'] == 'admin' && basename($_SERVER['PHP_SELF']) != 'admin_dashboard.php') {
    header("Location: ../dashboard/admin_dashboard.php");
    exit;
} elseif ($_SESSION['role_display'] == 'user' && basename($_SERVER['PHP_SELF']) != 'user_dashboard.php') {
    header("Location: ../dashboard/user_dashboard.php");
    exit;
} elseif ($_SESSION['role_display'] == 'manager' && basename($_SERVER['PHP_SELF']) != 'manager_dashboard.php') {
    header("Location: ../dashboard/manager_dashboard.php");
    exit;
}


?>

<h1>INI ADMIN BOARD</h1>
<p>ID : <?= $id_display ?></p>
<p>Name : <?= $name_display ?></p>
<p>Email : <?= $email_display ?></p>
<p>Role : <?= $role_display ?></p>

<!-- Form untuk tombol "End Session" -->
<form method="post" action="">
    <input type="submit" name="end_session" value="End Session">
</form>