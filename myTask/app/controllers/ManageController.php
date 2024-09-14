<?php
    class ManageController {
        public function index() {
            // Logika untuk menampilkan daftar tugas
    
            // Memuat tampilan dari file views/task/index.php
            include('../app/views/manage/index.php');
        }
    }