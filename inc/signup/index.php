<?php

	try {
		if (isset($_POST["btnSubmit"])) {
			if (empty($_POST["younickname"]) || empty($_POST["passcode1"]) || empty($_POST["passcode2"])) {
				echo '<div class="alert alert-danger alert-dismissible fade show">';
					echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					echo 'Please enter username and password.';
				echo '</div>';
			} else {
				$query = "SELECT * FROM tblsysuser WHERE username=:younickname LIMIT 1";
				$statement = $cnn->prepare($query);
				$username = $_POST['younickname'];
				$statement->bindParam(':younickname', $username);
				$statement->execute();
				$count = $statement->rowCount();
				if ($count > 0) {
					echo '<div class="alert alert-danger alert-dismissible fade show">';
						echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						echo 'Account already exist';
					echo '</div>';
				} else {
					include_once "../../inc/signup/autogen.php";
					$qry_insert = "INSERT INTO tblsysuser SET usercode=:idx, username=:younicknamex, passcode=:passcode1x";
					$stmt_insert = $cnn->prepare($qry_insert);
					$the_lastid = $thelastid;
					$younickname = $_POST['younickname'];
					$passcode1 = md5($_POST['passcode1']);
					$stmt_insert->bindParam(':idx', $fromidted);
					$stmt_insert->bindParam(':younicknamex', $younickname);
					$stmt_insert->bindParam(':passcode1x', $passcode1);
					$stmt_insert->execute();

					$err_msg = "Save successfully. ".$thelastid;
					echo "<script>alert('".$err_msg."');</script>";
				}
			}
		}
	} catch (PDOException $error) {
		die('ERROR: ' . $error->getMessage());
	}
	
?>