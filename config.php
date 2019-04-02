<?php
class Config {
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $database = "db_kebonsirih";
  private $conn;

  	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->database);
		if (!$conn) {
			die("Gagal terhubung dengan database: " . mysqli_connect_error());
		}
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query) or die(mysqli_error($this->conn));

		if (is_bool($result)) {
			return;
		}

		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}

	function getCon() {
		return $this->conn;
	}

	function cekLogin() {
		if (!isset($_SESSION['username'])) {
			//redirect ke halaman login
			header('location:login.php');
		} 
	}

	function cekLoginAdmin() {
		if ($_SESSION['username'] != "admin") {
			return $this->cekLogin();
		}
	}
}

?>