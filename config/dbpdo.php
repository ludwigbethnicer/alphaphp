<?php

	class Database {

		private $shost = "localhost";
		private $dbname = "alpaphpdb";
		private $username = "root";
		private $password = "";

		private $dbcnn;

		public function getConnection() {

			$this->dbcnn = null;

			try {
				$this->dbcnn = new PDO("mysql:dbname=".$this->dbname.";host=".$this->shost, $this->username, $this->password);
				$this->dbcnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $exception) {
				echo "Database Connection error: " . $exception->getMessage();
			}

			return $this->dbcnn;

		}

	}

	$dbcretbl = new PDO("mysql:host=localhost;dbname=alpaphpdb", "root", "6bNXmSOg6oOfrB3D");
	// 6bNXmSOg6oOfrB3D