<?php
require_once '../models/Berita.php';
require_once '../config/config.php';

class BeritaController {
    private $model;

    public function __construct() {
        $this->model = new Berita();
    }

    public function index() {
        $berita = $this->model->getAllBerita();
        require 'views/berita/index.php';
    }

    public function view($id) {
        $berita = $this->model->getBeritaById($id);
        require 'views/berita/view.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'judul' => $_POST['judul'],
                'thumbnail' => $_POST['thumbnail'],
                'isi' => $_POST['isi'],
                'editor' => $_POST['editor']
            ];
            $this->model->createBerita($data);
            header('Location: /berita');
        } else {
            require 'views/berita/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'judul' => $_POST['judul'],
                'thumbnail' => $_POST['thumbnail'],
                'isi' => $_POST['isi'],
                'editor' => $_POST['editor']
            ];
            $this->model->updateBerita($id, $data);
            header('Location: /berita');
        } else {
            $berita = $this->model->getBeritaById($id);
            require 'views/berita/edit.php';
        }
    }

    public function delete($id) {
        $this->model->deleteBerita($id);
        header('Location: /berita');
    }
}
?>
