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
				$qry_insert = "UPDATE {$stblname} SET 
					lname=:plname, 
					fname=:pfname, 
					mname=:pmname, 
					umobileno=:pmobilephone, 
					cmpny=:pemployer, 
					address=:paddress, 
					cmpny_position=:pjobposition 
					WHERE {$setstr_id}=:idnow
				";
				$stmt_insert = $cnn->prepare($qry_insert);

				$idnow = $_POST['pusercode'];
				$plname = $_POST['plname'];
				$pfname = $_POST['pfname'];
				$pmname = $_POST['pmname'];
				$pmobilephone = $_POST['pmobilephone'];
				$pemployer = $_POST['pemployer'];
				$pjobposition = $_POST['pjobposition'];
				$paddress = $_POST['zaddress'];

				$stmt_insert->bindParam(':idnow', $idnow);
				$stmt_insert->bindParam(':plname', $plname);
				$stmt_insert->bindParam(':pfname', $pfname);
				$stmt_insert->bindParam(':pmname', $pmname);
				$stmt_insert->bindParam(':pmobilephone', $pmobilephone);
				$stmt_insert->bindParam(':pemployer', $pemployer);
				$stmt_insert->bindParam(':pjobposition', $pjobposition);
				$stmt_insert->bindParam(':paddress', $paddress);

				$stmt_insert->execute();

				$ptarget_dir = "../../../storage/img/items/".$imgitemnem.".".$ext;
				$ptarget_file = $target_dir . basename($_FILES["itemfilenem"]["name"]);
				$puploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				echo "<script>window.open('../../routes/mprofile', '_self');</script>";
			}
		}
	} catch (PDOException $error) {
		$err_msg = $error->getMessage();
		echo "<p>Error: {$err_msg}</p>";
		die;
	}