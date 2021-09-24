<?php

	include_once "./_.php";

	// used to connect to the database 6bNXmSOg6oOfrB3D
	$host = $host_databse;
	$db_name = $name_databse;
	$db_username = $username_database;
	$db_password = $password_database;
	$error_message = "";
	$dbcon = null;
	
	try {
		$dbcon = new PDO("mysql:host={$host};dbname={$db_name}", $db_username, $db_password);
		$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $exception) {
		// show error
		$error_message = $exception->getMessage();
		echo "<a href='database'>Fix It!</a>";
		// echo "Connection error: " . $error_message;
	}
	
?>