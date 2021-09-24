<?php

	include_once "../config/dbpdo.php";

	$chksql = "SELECT 1 FROM tbl_checkpointscategory LIMIT 1";
	$chksql = $dbcretbl->query($chksql); //$db needs to be PDO instance

	if($chksql) {
		echo "Database Table: Audit Checkpoints Category List; Already exist!<br>";
	} else {
		try {
			$sql = "CREATE TABLE IF NOT EXISTS TBL_CHECKPOINTSCATEGORY(
				category_id INT(11) AUTO_INCREMENT PRIMARY KEY, 
				standard_id INT(11) NOT NULL, 
				chckpts_category VARCHAR(254) NOT NULL, 
				responsible VARCHAR(254) NOT NULL, 
				createdby VARCHAR(254) NOT NULL, 
				created DATETIME NOT NULL, 
				modifiedby VARCHAR(254) NOT NULL, 
				modified TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp());";
			$dbcretbl->exec($sql);
			echo "Database Table created successfully: Audit Checkpoints Category List.<br>";

			$sql = "INSERT INTO tbl_checkpointscategory (category_id, standard_id, chckpts_category, responsible) 
				VALUES ('1' , '1', 'Software Requirements', 'RST / MIS'), 
					('2' , '1', 'System Security', 'RST / MIS'), 
					('3' , '1', 'Application Software/Utilities', 'RST / MIS'), 
					('4' , '1', 'Software Version', 'RST / MIS'), 
					('5' , '2', 'Hardware Requirements', 'RST'), 
					('6' , '2', 'Other Hardware', 'RST / MIS')";
			// use exec() because no results are returned
			$dbcretbl->exec($sql);
			echo "Added temporary Audit Checkpoint Category.<br>";

		} catch(PDOException $e) {
			echo $e->getMessage()."<br>";
		}
		$dbcnn = null;
	}