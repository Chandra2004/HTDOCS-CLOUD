<?php
class TaskController {
    public function index() {
        // Logika untuk menampilkan daftar tugas

        // Memuat tampilan dari file views/task/index.php
        include('../app/views/task/index.php');
    }

    public function create() {
        // Logika untuk menampilkan formulir pembuatan tugas
    }

    public function store() {
        // Logika untuk menyimpan tugas yang baru dibuat
    }

    public function edit($taskId) {
        // Logika untuk menampilkan formulir pengeditan tugas
    }

    public function update($taskId) {
        // Logika untuk menyimpan perubahan pada tugas
    }

    public function delete($taskId) {
        // Logika untuk menghapus tugas
    }
}
