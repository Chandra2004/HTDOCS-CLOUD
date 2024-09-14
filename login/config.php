<?php
$host = "localhost"; // Ganti dengan host database Anda
$dbname = "db_mini"; // Ganti dengan nama database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda

// Membuat koneksi ke database menggunakan MySQLi
$db = new mysqli($host, $username, $password, $dbname);

// Memeriksa koneksi
if ($db->connect_error) {
    die("Koneksi ke database gagal: " . $db->connect_error);
}
?>