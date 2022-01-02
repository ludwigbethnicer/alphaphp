<?php

	$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
	try {
		if (isset($_POST["btnGContin"])) {
			if (empty($_POST["gogid"]) || empty($_POST["username2"]) || empty($_POST["email2"]) || empty($_POST["fullname2"]) || empty($_POST["lastname2"]) || empty($_POST["firstname2"]) || empty($_POST["tokenidz2"])) {
				echo '<div class="alert alert-danger alert-dismissible fade show">';
					echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					echo 'Access denied!';
				echo '</div>';
			} else {
				$query = "SELECT * FROM tblsysuser WHERE username=:username2 OR uemail=:email2 OR usercode=:gogid LIMIT 1";
				$statement = $cnn->prepare($query);
				$gogid = $_POST['gogid'];
				$username2 = $_POST['username2'];
				$email2 = $_POST['email2'];
				$statement->bindParam(':gogid', $gogid);
				$statement->bindParam(':username2', $username2);
				$statement->bindParam(':email2', $email2);
				$statement->execute();
				$row_uzr = $statement->fetch(PDO::FETCH_ASSOC);
				$count = $statement->rowCount();
				if ($count > 0) {
					$_SESSION["usercode"] = $gogid;
					$_SESSION["username"] = $username2;
					$_SESSION["fullname"] = $_POST["fullname2"];
					$_SESSION["ulevpos"] =  $row_uzr['ulevpos'];
					$_SESSION["surname"] = $_POST["lastname2"];
					$_SESSION["firstname"] = $_POST["firstname2"];
					$_SESSION["middlename"] = $row_uzr['mname'];
					$_SESSION["postitle"] = $row_uzr['xposition'];
					$_SESSION["imglnkurl"] = $row_uzr['img_url'];
					
					$err_msg = "Already registered. ".$gogid;
					echo "<script>window.open('../../', '_self');</script>";
					header('location:../../');
				} else {
					$qry_insert = "INSERT INTO tblsysuser SET usercode=:idx, username=:younicknamex, passcode=:passcode1x, ulevpos=6, xposition=:xposition, ustatz=1, pin=:pin, uemail=:email9, fullname=:fullname, lname=:lname, fname=:fname, img_url=:imgurl";
					$stmt_insert = $cnn->prepare($qry_insert);
					$gogid9 = $_POST['gogid'];
					$younickname = $_POST['username2'];
					$email9 = $_POST['email2'];
					$fullname = $_POST['fullname2'];
					$lname = $_POST['lastname2'];
					$fname = $_POST['firstname2'];
					$imgurl = $_POST['imgurl2'];
					$permitted_chars2 = '0123456789';
					$pin = substr(str_shuffle($permitted_chars2), 0, 6);
					$passcode1 = md5($pin);
					$xposition = "Subscriber";
					$stmt_insert->bindParam(':idx', $gogid9);
					$stmt_insert->bindParam(':younicknamex', $younickname);
					$stmt_insert->bindParam(':email9', $email9);
					$stmt_insert->bindParam(':xposition', $xposition);
					$stmt_insert->bindParam(':fullname', $fullname);
					$stmt_insert->bindParam(':lname', $lname);
					$stmt_insert->bindParam(':fname', $fname);
					$stmt_insert->bindParam(':imgurl', $imgurl);
					$stmt_insert->bindParam(':pin', $pin);
					$stmt_insert->bindParam(':passcode1x', $passcode1);
					$stmt_insert->execute();

					$_SESSION["imglnkurl"] = $imgurl;
					$_SESSION["usercode"] = $gogid9;
					$_SESSION["username"] = $younickname;
					$_SESSION["fullname"] = $fullname;
					$_SESSION["ulevpos"] =  6;
					$_SESSION["surname"] = $lname;
					$_SESSION["firstname"] = $fname;
					$_SESSION["postitle"] = $xposition;

					$err_msg = "Successfully registered. ".$gogid9;
					echo "<script>window.open('../../', '_self');</script>";
					header('location:../../');
				}
			}
		}
	} catch (PDOException $error) {
		die('ERROR: ' . $error->getMessage());
	}