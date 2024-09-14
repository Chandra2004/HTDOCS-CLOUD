<?php 
    class Kategori extends Controller {
        public function index() {
            $data['title'] = 'Halaman Categories';
            
            $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
            
            $this->view('template/header', $data);
            $this->view('kategori/index', $data);
            $this->view('template/footer');
        }

        public function hapus($id) {
            // Panggil model untuk menghapus kategori berdasarkan id
            $kategoriModel = $this->model('KategoriModel');
            if($kategoriModel->deleteKategori($id) > 0 ) {
                // Redirect ke halaman kategori setelah menghapus
                header('Location: ' . base_url . '/kategori');
                exit;
            } else {
                // Redirect ke halaman kategori jika tidak ada data yang dihapus
                header('Location: ' . base_url . '/kategori');
                exit;
            }
        }
    }

    // public function cari() {
        
    // }

    // public function edit($id) {

    // }

    // public function tambah() {
        
    // }

    // public function simpanKategori() {
        
    // }

    // public function updateKategori() {
        
    // }

    
?>