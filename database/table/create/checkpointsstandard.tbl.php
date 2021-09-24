<?php

	include_once "../config/dbpdo.php";

	$chksql = "SELECT 1 FROM tbl_checkpointsstandard LIMIT 1";
	$chksql = $dbcretbl->query($chksql); //$db needs to be PDO instance

	if($chksql) {
		echo "Database Table: Audit Checkpoints Standard List; Already exist!<br>";
	} else {
		try {
			$sql = "CREATE TABLE IF NOT EXISTS TBL_CHECKPOINTSSTANDARD(
				standard_id INT(11) AUTO_INCREMENT PRIMARY KEY, 
				chckpts_standards_desc VARCHAR(254) NOT NULL, 
				createdby VARCHAR(254) NOT NULL, 
				created DATETIME NOT NULL, 
				modifiedby VARCHAR(254) NOT NULL, 
				modified TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp());";
			$dbcretbl->exec($sql);
			echo "Database Table created successfully: Audit Checkpoints Standard List.<br>";

			$sql = "INSERT INTO tbl_checkpointsstandard (standard_id, chckpts_standards_desc) VALUES ('1', 'Software Standards'), ('2', 'Hardware Standards')";
			// use exec() because no results are returned
			$dbcretbl->exec($sql);
			echo "Added temporary Audit Checkpoint Standards.<br>";

		} catch(PDOException $e) {
			echo $e->getMessage()."<br>";
		}
		$dbcnn = null;
	}