<?php

	include_once "../config/dbpdo.php";

	$chksql = "SELECT 1 FROM tbl_auditpc LIMIT 1";
	$chksql = $dbcretbl->query($chksql); //$db needs to be PDO instance

	if($chksql) {
		echo "Database Table: Branch Audit PC; Already exist!<br>";
	} else {
		try {
			$sql = "CREATE TABLE IF NOT EXISTS TBL_AUDITPC(
				audit_pc_no INT(11) AUTO_INCREMENT PRIMARY KEY, 
				branch_audit_id INT(11) NOT NULL, 
				pc_no INT(3) NOT NULL, 
				nopcsum INT(1) NOT NULL, 
				createdby VARCHAR(254) NOT NULL, 
				created DATETIME NOT NULL, 
				modifiedby VARCHAR(254) NOT NULL, 
				modified TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp());";
			$dbcretbl->exec($sql);
			echo "Database Table created successfully: Branch Audit PC.<br>";
		} catch(PDOException $e) {
			echo $e->getMessage()."<br>";
		}
		$dbcnn = null;
	}