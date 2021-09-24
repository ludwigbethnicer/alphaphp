<?php

	include_once "../config/dbpdo.php";

	$chksql = "SELECT 1 FROM tbl_branch_auditcheck LIMIT 1";
	$chksql = $dbcretbl->query($chksql); //$db needs to be PDO instance

	if($chksql) {
		echo "Database Table: Branch Audit; Already exist!<br>";
	} else {
		try {
			$sql = "CREATE TABLE IF NOT EXISTS TBL_BRANCH_AUDITCHECK(
				branch_audit_id INT(11) AUTO_INCREMENT PRIMARY KEY, 
				audit_date VARCHAR(10) NOT NULL, 
				timestart VARCHAR(10) NOT NULL, 
				cmpny_zone_no VARCHAR(254) NOT NULL, 
				region_desc VARCHAR(254) NOT NULL, 
				branch_area VARCHAR(254) NOT NULL, 
				branch_desc VARCHAR(254) NOT NULL, 
				addressx VARCHAR(254) NOT NULL, 
				other_observe TEXT NOT NULL, 
				usercode INT(11) NOT NULL,
				field_auditor VARCHAR(254) NOT NULL, 
				rstech VARCHAR(254) NOT NULL, 
				acknowby VARCHAR(254) NOT NULL, 
				yrcrtd VARCHAR(4) NOT NULL, 
				mnthcrtd VARCHAR(9) NOT NULL, 
				modified TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp());";
			$dbcretbl->exec($sql);
			echo "Database Table created successfully: Branch Audit.<br>";
		} catch(PDOException $e) {
			echo $e->getMessage()."<br>";
		}
		$dbcnn = null;
	}