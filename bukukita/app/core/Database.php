<?php
    class Database {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbnm = DB_NAME;

        private $dbh;
        private $stmt;

        public function __construct() {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbnm;

            $options = [
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            try {
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        public function query($query) {
            $this->stmt = $this->dbh->prepare($query);
        }

        public function bind($param, $value, $type = null) {
            if (is_null($type)) {
                switch (true) {
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }

            $this->stmt->bindValue($param, $value, $type);
        }

        public function execute() {
            return $this->stmt->execute();
        }

        public function resultSet() {
            $query = "SELECT * FROM kategori"; // Gantilah dengan query SQL yang sesuai
            $this->query($query);
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function single() {
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function rowCount() {
            return $this->stmt->rowCount();
        }
    }

































    // class Database {
    //     private $host = DB_HOST;
    //     private $user = DB_USER;
    //     private $pass = DB_PASS;
    //     private $dbnm = DB_NAME;

    //     private $dbh;
    //     private $stmt;

    //     public function __construct() {
    //         $dsn = 'mysql:host= ' . $this->host . ',dbname= ' . $this->dbnm;

    //         $option = [
    //             PDO::ATTR_PERSISTENT => true,
    //             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    //         ];

    //         try {
    //             $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
    //         } catch(PDOException $e) {
    //             die($e->getMessage());
    //         }
    //     }

    //     public function query($query) {
    //         $this->stmt = $this->dbh->prepare($query);
    //     }

    //     public function bind($param, $value, $type = null) {
    //         if (is_null($type)) {
    //             switch (true) {
    //                 case is_int($value):
    //                     $type = PDO::PARAM_INT;
    //                     break;
    //                 case is_bool($value):
    //                     $type = PDO::PARAM_BOOL;
    //                     break;
    //                 case is_null($value):
    //                     $type = PDO::PARAM_STR;
    //                     break;
    //             }
    //         }

    //         $this->stmt->bindValue($param, $value, $type);
    //     }

    //     public function execute() {
    //         $this->stmt->execute();
    //     }

    //     public function resultSet() {
    //         //$this->execute();
    //         //return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

    //         $query = "SELECT * FROM kategori"; // Gantilah dengan query SQL yang sesuai
	// 		$result = $this->executeQuery($query);
	// 		$data = array();

	// 		if ($result->num_rows > 0) {
	// 			while ($row = $result->fetch_assoc()) {
	// 				$data[] = $row;
	// 			}
	// 		}

	// 		return $data;
    //     }

    //     public function single() {
    //         $this->execute();
    //         return $this->stmt->fetch(PDO::FETCH_ASSOC);
    //     }

    //     public function rowCount() {
    //         return $this->stmt->rowCount();
    //     }
    // }

    // class Database {
	// 	private $host = DB_HOST;
	// 	private $username = DB_USER;
	// 	private $password = DB_PASS;
	// 	private $database = DB_NAME;
	
	// 	private $connection;
	
	// 	// Konstruktor untuk menginisialisasi koneksi
	// 	public function __construct() {
	// 		$this->connection = $this->connect();
	// 	}
	
	// 	// Fungsi untuk melakukan koneksi ke database
	// 	private function connect() {
	// 		$conn = new mysqli($this->host, $this->username, $this->password, $this->database);
	
	// 		if ($conn->connect_error) {
	// 			die("Koneksi ke database gagal: " . $conn->connect_error);
	// 		}
	
	// 		return $conn;
	// 	}
	
	// 	// Fungsi untuk mendapatkan data dari database
	// 	public function getData($query) {
	// 		$result = $this->executeQuery($query);
	// 		$data = array();
			
	// 		if ($result->num_rows > 0) {
	// 			while ($row = $result->fetch_assoc()) {
	// 				$data[] = $row;
	// 			}
	// 		}
			
	// 		return $data;
	// 	}
		
	// 	// Fungsi untuk menjalankan query SQL
	// 	public function executeQuery($query) {
	// 		return $this->connection->query($query);
	// 	}

	// 	public function resultSet() {
	// 		$query = "SELECT * FROM kategori"; // Gantilah dengan query SQL yang sesuai
	// 		$result = $this->executeQuery($query);
	// 		$data = array();

	// 		if ($result->num_rows > 0) {
	// 			while ($row = $result->fetch_assoc()) {
	// 				$data[] = $row;
	// 			}
	// 		}

	// 		return $data;
	// 	}

	// // 	public function resultSet() {
	// // 		$this->execute();
	// // 		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	// // 	}
	
	// 	// Fungsi untuk menghentikan koneksi database
	// 	public function close() {
	// 		$this->connection->close();
	// 	}
	// }
?>