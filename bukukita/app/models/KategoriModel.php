<?php 
    class KategoriModel {
        private $table = 'kategori';
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllKategori() {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        // public function getKategoriById($id) {

        // }

        // public function tambahKategori($data) {

        // }

        // public function updateDataKategori($data) {
            
        // }

        public function deleteKategori($id) {
            $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            $this->db->execute();
        
            return $this->db->rowCount();
        }

        // public function cariKategori() {
            
        // }
    }
?>