<?php

	include_once "../_.php";

	$dbcretbl = new PDO("mysql:host={$host_databse};dbname={$name_databse}", $username_database, $password_database);
	// 6bNXmSOg6oOfrB3D

	try {
		$pdo = new PDO('mysql:host={$host_databse};dbname={$name_databse}', $username_database, $password_database, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
		echo "Database Exist!<br>";
	} catch (PDOException $e) {
		try {
			$conn = new PDO("mysql:host={$host_databse};", $username_database, $password_database);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "CREATE DATABASE IF NOT EXISTS {$name_databse}";
			$conn->exec($sql);
			$sql = "use {$name_databse}";
			$conn->exec($sql);
			echo "Database: {$name_databse}; Successfully Created!<br>";
		} catch(PDOException $e) {
			echo "Error".$e->getMessage()."<br>";
		}
	}