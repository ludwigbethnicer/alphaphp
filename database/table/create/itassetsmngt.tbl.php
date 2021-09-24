<!-- Item Description
IT Asset No.
Date Consigned
Branch Consigned
Amount
Remarks -->

<?php

	include_once "../config/dbpdo.php";

	$chksql = "SELECT 1 FROM tbl_itassetsmngt LIMIT 1";
	$chksql = $dbcretbl->query($chksql); //$db needs to be PDO instance

	if($chksql) {
		echo "Database Table: Branch IT Assets; Already exist!<br>";
	} else {
		try {
			$sql = "CREATE TABLE IF NOT EXISTS TBL_ITASSETSMNGT(
				chckpts_subpc_id INT(11) AUTO_INCREMENT PRIMARY KEY, 
				audit_pc_no INT(11) NOT NULL, 
				checkpoint_id INT(11) NOT NULL, 
				secured INT(1) NOT NULL, 
				sumcnt INT(1) NOT NULL, 
				chckpts_notes TEXT NOT NULL, 
				chckpts_response TEXT NOT NULL, 
				personresponse_id INT(11) NOT NULL, 
				personresponse VARCHAR(254) NOT NULL, 
				createdby VARCHAR(254) NOT NULL, 
				usercode INT(11) NOT NULL, 
				created DATETIME NOT NULL, 
				modifiedby VARCHAR(254) NOT NULL, 
				modified TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp());";
			$dbcretbl->exec($sql);
			echo "Database Table created successfully: Branch IT Assets.<br>";
		} catch(PDOException $e) {
			echo $e->getMessage()."<br>";
		}
		$dbcnn = null;
	}