<?php  
	class About extends Controller {
		public function index($nama = 'User', $kamar = '0') {
			$data['nama'] = $nama;
			$data['kamar'] = $kamar;
			$data['judul'] = 'About';

			$this->view('templates/header', $data);
			$this->view('about/index', $data);
			$this->view('templates/footer');
		}

		public function page() {
			$data['judul'] = 'Pagenation About';

			$this->view('templates/header', $data);
			$this->view('about/page');
			$this->view('templates/footer');
		}
	}
?>