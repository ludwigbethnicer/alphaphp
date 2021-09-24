<?php

	include_once "../config/dbpdo.php";

	$chksql = "SELECT 1 FROM tbl_system_settings LIMIT 1";
	$chksql = $dbcretbl->query($chksql); //$db needs to be PDO instance

	if($chksql) {
		echo "Database Table: System Settings; Already exist!<br>";
	} else {
		try {
			$sql = "CREATE TABLE IF NOT EXISTS TBL_SYSTEM_SETTINGS(
				sys_title VARCHAR(254) NOT NULL, 
				tagline TEXT NOT NULL, 
				main_logo TEXT NOT NULL, 
				favicon TEXT NOT NULL, 
				mobile_icon TEXT NOT NULL, 
				page_loader TEXT NOT NULL, 
				loader_duration FLOAT(2) NOT NULL, 
				company_name VARCHAR(254) NOT NULL, 
				created DATETIME NOT NULL,
				modified TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp());";
			$dbcretbl->exec($sql);
			echo "Database Table created successfully: System Settings.<br>";

			$sql = "INSERT INTO tbl_system_settings (
				sys_title, 
				tagline
			) 
				VALUES (
				'AlphaPHP', 
				'AlphaPHP_CMS'
			)";
			// use exec() because no results are returned
			$dbcretbl->exec($sql);
			echo "Added default temporary system settings.<br>";

		} catch(PDOException $e) {
			echo $e->getMessage()."<br>";
		}
		$dbcnn = null;
	}