<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nama = $_POST["nama"];
//     $telepon = $_POST["telepon"];
//     $nomor_meja = $_POST["nomor_meja"];

//     // header("Location: get_form.php?nama=$nama&telepon=$telepon&table=$nomor_meja");
//     header("Location: get_form.php");
// }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $telepon = $_POST["telepon"];
    $nomor_meja = $_POST["nomor_meja"];

    session_start();
    $_SESSION['nama'] = $nama;
    $_SESSION['telepon'] = $telepon;
    $_SESSION['nomor_meja'] = $nomor_meja;

    header("Location: get_form.php");
    exit();
}


?>
