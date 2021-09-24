<?php

	include_once "../config/dbpdo.php";

	$chksql = "SELECT 1 FROM tbl_user LIMIT 1";
	$chksql = $dbcretbl->query($chksql); //$db needs to be PDO instance

	if($chksql) {
		echo "Database Table: System User; Already exist!<br>";
	} else {
		try {
			$sql = "CREATE TABLE IF NOT EXISTS TBL_USER(
				usercode INT(11) AUTO_INCREMENT PRIMARY KEY, 
				username VARCHAR(254) NOT NULL, 
				passcode TEXT NOT NULL, 
				fullname VARCHAR(254) NOT NULL, 
				uemail VARCHAR(254) NOT NULL, 
				umobileno VARCHAR(13) NOT NULL, 
				ulevpos VARCHAR(254) NOT NULL, 
				createdby VARCHAR(254) NOT NULL, 
				uonline INT(1) NOT NULL, 
				ustatz INT(1) NOT NULL, 
				created DATETIME NOT NULL, 
				modified TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp());";
			$dbcretbl->exec($sql);
			echo "Database Table created successfully: System User.<br>";

			$sql = "INSERT INTO tbl_user (username, passcode, fullname, ulevpos, createdby, created, uonline, ustatz, uemail, umobileno) 
				VALUES ('admin', 'admin', 'Firstname M. Surname', 'Head', 'admin', '2020-11-03', '0', '1', 'headadmin@email.com', '+639154826025'), 
				('user', 'user', 'Username C. Doe', 'Staff', 'admin', '2020-11-04', '0', '1', 'usermember@email.com', '+639123456789'), 
				('customer', 'customer', 'Customer B. Sample', 'Customer', 'admin', '2020-11-04', '0', '0', 'customer@email.com', '+639098765432')";
			// use exec() because no results are returned
			$dbcretbl->exec($sql);
			echo "Added default temporary user.<br>";

		} catch(PDOException $e) {
			echo $e->getMessage()."<br>";
		}
		$dbcnn = null;
	}