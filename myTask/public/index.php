<?php
// public/index.php

// Memuat file konfigurasi
require_once('config.php');

require_once('../app/controllers/TaskController.php');
require_once('../app/controllers/ManageController.php');


// Memuat file autoload Composer (jika menggunakan Composer)
// require_once('../vendor/autoload.php');

// Memulai sesi atau melakukan inisialisasi, jika diperlukan

// Memanggil controller dan metode yang sesuai berdasarkan permintaan pengguna
// Misalnya, menggunakan framework atau melakukan pemrosesan manual

// Contoh sederhana tanpa framework:
$controller = new TaskController();
$controller->index();
