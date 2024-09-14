<?php
    if (isset($_POST['submitReservation'])) {
        $nama = $_POST["nama"];
        $nomor = $_POST["nomor"];
        $table = $_POST["table"];

        session_start();
        $_SESSION['nama'] = $nama;
        $_SESSION['nomor'] = $nomor;
        $_SESSION['table'] = $table;

        header('Location: ' . BASE_URL . 'menu');
        exit();
    }
