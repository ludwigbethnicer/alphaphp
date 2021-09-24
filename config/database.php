<?php

	// used to connect to the database 6bNXmSOg6oOfrB3D
	$host = "localhost";
	$db_name = "alpaphpdb";
	$db_username = "root";
	$db_password = "";
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