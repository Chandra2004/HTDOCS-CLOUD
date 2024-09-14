<?php 
	class Homepage_model {
		public $db;
	
		public function __construct() {
			// Membuat objek koneksi database
			$this->db = new Database();
		}
	
		public function readMilestone() {
			$this->db->query('SELECT * FROM milestone');
			return $this->db->resultReadMilestone();
		}
	}
	
	

























	//

		// private $table = 'murid';
		// private $db;

		// public function __construct() {
		// 	$this->db = new Database;
		// }

		// public function getAllMurid() {
		// 	$this->db->query('SELECT * FROM ' . $this->table);
		// 	return $this->db->resultSet();
		// }

		// public function getMuridById($id) {
		// 	$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		// 	$this->db->bind('id', $id);
		// 	return $this->db->single();
		// }

		// public function tambahDataMurid($data) {
		// 	$query = "INSERT INTO " . $this->table .  " VALUES ('', :nama, :absen, :kelas, :umur)";
		// 	// $query = "INSERT INTO murid VALUES ('', :nama, :absen, :kelas, :umur)";

		// 	$this->db->query($query);

		// 	$this->db->bind('nama', $data['nama']);
		// 	$this->db->bind('absen', $data['absen']);
		// 	$this->db->bind('kelas', $data['kelas']);
		// 	$this->db->bind('umur', $data['umur']);

		// 	$this->db->execute();

		// 	return $this->db->rowCount();
		// }

		// public function hapusDataMurid($id) {
		// 	$query = "DELETE FROM " . $this->table .  " WHERE id=:id";

		// 	$this->db->query($query);
		// 	$this->db->bind('id', $id);

		// 	$this->db->execute();

		// 	return $this->db->rowCount();
		// }

		// public function ubahDataMurid($data) {
		// 	$query = "UPDATE " . $this->table . " SET nama=:nama, absen=:absen, kelas=:kelas, umur=:umur WHERE id=:id";

		// 	$this->db->query($query);

		// 	$this->db->bind('nama', $data['nama']);
		// 	$this->db->bind('absen', $data['absen']);
		// 	$this->db->bind('kelas', $data['kelas']);
		// 	$this->db->bind('umur', $data['umur']);
		// 	$this->db->bind('id', $data['id']);

		// 	$this->db->execute();

		// 	return $this->db->rowCount();
		// }

		// public function cariDataMurid() {
		// 	$keyword = $_POST['keyword'];
		// 	$query = "SELECT * FROM " . $this->table . " WHERE nama LIKE :keyword";

		// 	$this->db->query($query);

		// 	$this->db->bind('keyword', "%$keyword%");

		// 	return $this->db->resultSet();
		// }
	
?>