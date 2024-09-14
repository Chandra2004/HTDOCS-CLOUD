<?php
    session_start();

    if (!isset($_SESSION['login'])) {
        header("Location: login/index.php");
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
        header("Location: index.php");
        exit();
    }
?>

<p>ID : <?= $id_display ?></p>
<p>Name : <?= $name_display ?></p>
<p>Email : <?= $email_display ?></p>
<p>Role : <?= $role_display ?></p>

<!-- Form untuk tombol "End Session" -->
<form method="post" action="">
    <input type="submit" name="end_session" value="End Session">
</form>