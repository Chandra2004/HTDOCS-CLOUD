<?php
session_start();

// Hentikan sesi
session_destroy();

// Redirect ke halaman login setelah keluar
header("Location: index.php");
exit;
?>
