<?php

class Berita {
    private $conn;

    public function __construct() {
        $this->conn = db_connect();
    }

    public function getAllBerita() {
        $query = "SELECT * FROM berita ORDER BY created_at DESC";
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getBeritaById($id) {
        $query = "SELECT * FROM berita WHERE id = ?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        return mysqli_fetch_assoc($result);
    }

    public function createBerita($data) {
        $query = "INSERT INTO berita (judul, thumbnail, isi, created_at, editor) VALUES (?, ?, ?, NOW(), ?)";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'ssss', $data['judul'], $data['thumbnail'], $data['isi'], $data['editor']);
        return mysqli_stmt_execute($stmt);
    }

    public function updateBerita($id, $data) {
        $query = "UPDATE berita SET judul = ?, thumbnail = ?, isi = ?, editor = ? WHERE id = ?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'ssssi', $data['judul'], $data['thumbnail'], $data['isi'], $data['editor'], $id);
        return mysqli_stmt_execute($stmt);
    }

    public function deleteBerita($id) {
        $query = "DELETE FROM berita WHERE id = ?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return mysqli_stmt_execute($stmt);
    }
}
?>
