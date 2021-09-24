<?php

	include_once "../config/dbpdo.php";

	$chksql = "SELECT 1 FROM tbl_auditcheckpoints LIMIT 1";
	$chksql = $dbcretbl->query($chksql); //$db needs to be PDO instance

	if($chksql) {
		echo "Database Table: Audit Checkpoints List; Already exist!<br>";
	} else {
		try {
			$sql = "CREATE TABLE IF NOT EXISTS TBL_AUDITCHECKPOINTS(
				checkpoint_id INT(11) AUTO_INCREMENT PRIMARY KEY, 
				category_id INT(11) NOT NULL, 
				chckpts_desc VARCHAR(254) NOT NULL, 
				risk TEXT NOT NULL, 
				rcomndtion TEXT NOT NULL, 
				display INT(1) NOT NULL, 
				createdby VARCHAR(254) NOT NULL, 
				created DATETIME NOT NULL, 
				modifiedby VARCHAR(254) NOT NULL, 
				modified TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp());";
			$dbcretbl->exec($sql);
			echo "Database Table created successfully: Audit Checkpoints List.<br>";

			$sql = "INSERT INTO tbl_auditcheckpoints (checkpoint_id, category_id, chckpts_desc, display, risk, rcomndtion) VALUES ('1', '1', 'Windows 8.1', '1', 'Obsolete Windows operating system', 'Management should look into this matter and update the Operating Systems (OS) if necessary, especially the PC server. Because non-current OS is more vulnerable to malware attacks, data breaches & security threats.'), 
					('2', '1', 'SQL 2000 Personal Edition or SQL 2016 Express Edition', '1', 'Unsecured SQL Enterprise manager', 'We remind RST to secure properly the SQL Enterprise Manager because if the user can access directly theapplication, vital information will be at high risk.'), 
					('3', '2', 'Secured BIOS', '1', 'Unsecured BIOS due to the following; BIOS was not password protected. Blank & easy to guess password.', 'It is recommended that BIOS settings should be password protected to prevent the user from modifyingthe system’s settings and to avoid them from changing the system’s date & time which very essential to the operation.'), 
					('4', '2', 'BOS Control', '1', 'Unsecured BOS Control account: The BOS control account password is known to branch personnel.', 'We recommend RST to create a strong password andthis should not be disclosed to the branch personnel because having access to this account allows the user to modify/change PC security configurations which makes the system more susceptible to risk.'), 
					('5', '2', 'Branch Account', '1', 'Branch Account with administrator privilege', 'We recommend RST to check the privilege granted to this account because if given an administrative privilege, modifying system settings can easily be performed.'), 
					('6', '2', 'Locked Desktop', '1', 'Users can delete, rename, and modify desktop settings.', 'We recommend desktop properties should be properly secured to prevent branch personnel from deleting, renaming important desktop icons, and changing desktop settingsbecause an unorganized desktop will bring confusion to the users.'), 
					('7', '2', 'Disabled Media Player and Games', '1', 'Enabled Media Player', 'Media Player should be disabled to prevent the user from playing music and video file which is unnecessary to the branch also, playing video files during office hours could compromise the business operation.'), 
					('8', '2', 'Locked Taskbar', '1', 'Unsecured taskbar', 'It is important to lock the taskbar to avoid unnecessary movement or placement of the taskbar menu. '), 
					('9', '2', 'Secured Date and Time', '1', 'Unsecured Date and Time because; User can adjust date and time. The time zone was not properly set to (UTC +8:00 Taipei)', 'Branch PC’s date and time should be properly secured, to avoid users from changing date & time because this will allow them to perform system backdating.'), 
					('10', '2', 'Secured Control Panel', '1', 'Control Panel was not disabled', 'Control Panel should be properly secured to prevent the user from viewing and changing a system setting.  Also, it has the ability to remove the software (branch application)/hardware that is necessary for the business operation.'), 
					('11', '2', 'Disabled Run Command', '1', 'Enable Run Command', 'We suggest that the run command should be disabled to prevent the user from accessing critical windows application which has the ability to modify system security configuration.'), 
					('12', '2', 'Disabled Registry Editor', '1', 'The registry editor is accessible via run command.', 'Registry Editor should be disabled in the BM’s account because one wrong edit in the registry, can makebranch pc unusable or worse-unbootable, which could highly affect the branch transactions.'), 
					('13', '2', 'Disabled Right Click', '1', 'The right-click was not disabled', 'Disabling the right-click option is important to avoid the user from accessing the Computer Management in the context menu.'), 
					('14', '2', 'Disabled Computer Management', '1', 'Computer Management is visible in the context menu', 'Securing this item is very important because users can access SQL Ent. Mgr. via computer management. Note: for Windows 7 server only.'), 
					('15', '2', 'Secured Internet Access', '1', 'Unknown web sites were not blocked by Sophos antivirus software.', 'We recommend TG to review the policy of the Sophos antivirus software to prevent users from accessing malicious sites that could harm the data in the branch.')
					";
			// use exec() because no results are returned
			$dbcretbl->exec($sql);
			echo "Added temporary Audit Checkpoints.<br>";
		} catch(PDOException $e) {
			echo $e->getMessage()."<br>";
		}
		$dbcnn = null;
	}