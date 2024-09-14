<?php
require_once "../app/config/config.php"; // Pastikan untuk menyertakan file konfigurasi
require_once "Database.php";

class Model {
    protected $db;

    public function __construct() {
        $this->db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }
}
?>
