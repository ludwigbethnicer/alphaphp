<?php

	include_once "../_.php";

	class Database {

		private $shost = $host_databse;
		private $dbname = $name_databse;
		private $username = $username_database;
		private $password = $password_database;

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

	$dbcretbl = new PDO("mysql:host={$host_databse};dbname={$name_databse}", $username_database, $password_database);
	// 6bNXmSOg6oOfrB3D