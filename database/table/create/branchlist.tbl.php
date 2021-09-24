<?php

	include_once "../config/dbpdo.php";

	$chksql = "SELECT 1 FROM tbl_branchlist LIMIT 1";
	$chksql = $dbcretbl->query($chksql); //$db needs to be PDO instance

	if($chksql) {
		echo "Database Table: Branch List; Already exist!<br>";
	} else {
		try {
			$sql = "CREATE TABLE IF NOT EXISTS TBL_BRANCHLIST(
				branch_id INT(3) UNSIGNED ZEROFILL AUTO_INCREMENT PRIMARY KEY NOT NULL, 
				branch_desc VARCHAR(254) NOT NULL, 
				createdby VARCHAR(254) NOT NULL, 
				usercode INT(11) NOT NULL, 
				created DATETIME NOT NULL, 
				modifiedby VARCHAR(254) NOT NULL, 
				modified TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp());";
			$dbcretbl->exec($sql);
			echo "Database Table created successfully: Branch List.<br>";

		} catch(PDOException $e) {
			echo $e->getMessage()."<br>";
		}
		$dbcnn = null;
	}