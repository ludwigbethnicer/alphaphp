<?php

	include_once "../../inc/srvr.php";
	$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);

	try {
		if (isset($_POST['btnUpdateProfile'])) {
			if (empty($_POST['plname'])) {
				echo '<div class="alert alert-danger alert-dismissible fade show">';
					echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					echo 'Please fill-up the form properly.';
				echo '</div>';
			} else {
				$stblname = "tblsysuser";
				$setstr_id = "usercode";
				$qry_insert = "UPDATE {$stblname} SET lname=:plname WHERE {$setstr_id}=:idnow";
				$stmt_insert = $cnn->prepare($qry_insert);
				$idnow = $_POST['pusercode'];
				$plname = $_POST['plname'];
				$stmt_insert->bindParam(':idnow', $idnow);
				$stmt_insert->bindParam(':plname', $plname);
				$stmt_insert->execute();

				echo "<script>window.open('../../routes/mprofile', '_self');</script>";
			}
		}
	} catch (PDOException $error) {
		$err_msg = $error->getMessage();
		echo "<p>Error: {$err_msg}</p>";
		die;
	}