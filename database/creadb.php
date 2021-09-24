<?php

	try {
		$pdo = new PDO('mysql:host=localhost;dbname=alpaphpdb', 'root', '', [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
		echo '<a href="../">Continue..</a>';
		die('Database Exist!');
	} catch (PDOException $e) {
		try {
			$conn = new PDO("mysql:host=localhost;", "root", "");
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "CREATE DATABASE IF NOT EXISTS alpaphpdb";
			$conn->exec($sql);
			$sql = "use alpaphpdb";
			$conn->exec($sql);
			echo "Database: alpaphpdb; Successfully Created!<br>";
		} catch(PDOException $e) {
			echo "Error".$e->getMessage()."<br>";
		}
	}