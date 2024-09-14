<?php  
	class Homepage extends Controller {
		public function index() {
			$data['title'] = 'Homepage';
			$data['readMilestone'] = $this->model('Homepage_model')->readMilestone();
	
			// Membuat objek Homepage_model
	
			// Menjalankan query sederhana untuk memeriksa koneksi database
			//$testQuery = "SELECT 1";
			//$testResult = $homepageModel->db->executeQuery($testQuery);
	
			//if ($testResult) {
			//	echo "Koneksi database berhasil!";
			//} else {
			//	echo "Koneksi database gagal!";
			//}
	
			// Menggunakan metode dari Homepage_model
			//$dataFromDatabase = $homepageModel->getDataFromDatabase();
			
			// $data['nama'] = $homepageModel->getUser();
	
			$this->view('templates/main-templates/header', $data);
			$this->view('homepage/index');
			$this->view('templates/main-templates/footer');
		}
	}
	
	
	
	











	// class Homepage extends Controller {
	// 	public function index() {
	// 		$data['title'] = 'Homepage';
	// 		// $data['nama'] = $this->model('Homepage_model')->getUser();

	// 		$this->view('templates/main-templates/header', $data);
	// 		$this->view('homepage/index');
	// 		$this->view('templates/main-templates/footer');
	// 	}
	// }
?>