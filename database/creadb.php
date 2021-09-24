<?php

	try {
		$conn = new PDO("mysql:host=localhost;", "root", "6bNXmSOg6oOfrB3D");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE DATABASE IF NOT EXISTS dbiads";
		$conn->exec($sql);
		$sql = "use dbiads";
		$conn->exec($sql);
		echo "Database: dbiads; Successfully Created!<br>";
	} catch(PDOException $e) {
	    echo "Error".$e->getMessage()."<br>";
	}