<div class="pt-5 pb-5">
	<div id="contact" class="container">
		<h2 class="text-center">Contact Us</h2>
		<br>
		<div class="row">
			<div class="col-sm-5">
				<p>Contact us and will be in touch to you as soon as we get online.</p>
				<p><a class="text-body" href="//google.com/maps/place/@<?php echo $geomap; ?>,17z" target="_blank"><span class="fas fa-map-marker-alt"></span> <?php echo $maddress ?></a></p>
				<p><a class="text-body" href="tel:<?php echo $mobileno ?>"><span class="fas fa-phone"></span> <?php echo $mobileno ?></a></p>
				<p><a class="text-body" href="mailto:<?php echo $memail ?>"><span class="fas fa-envelope-square"></span> <?php echo $memail ?></a></p>
				<p><a class="text-body" href="//facebook.com" target="_blank"><span class="fab fa-facebook-square"></span> facebookname | facebookid</a></p>
			</div>
			<div class="col-sm-7 slideanim">
				<form method="post" class="needs-validation" novalidate>
					<div class="row">
						<div class="col-sm-6 form-group">
							<input class="form-control" id="fullname" name="fullname" placeholder="Name" type="text" required>
						</div>
						<div class="col-sm-6 form-group">
							<input class="form-control" id="mphone" name="mphone" placeholder="Phone" type="text">
						</div>
					</div>
					<div class="form-group">
						<input class="form-control" id="emailx" name="emailx" placeholder="Email" type="email" required>
					</div>
					<div class="form-group">
						<input class="form-control" id="subjects" name="subjects" placeholder="Subject" type="text">
					</div>
					<textarea class="form-control" id="messages" name="messages" placeholder="Message" rows="5" required></textarea><br>
					<div class="row">
						<div class="col-sm-12 form-group">
							<input type="submit" name="btnSend" value="Send" class="btn btn-warning pull-right">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php

	$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);

	try {
		if (isset($_POST['btnSend'])) {
			if (empty($_POST['fullname']) || empty($_POST['emailx']) || empty($_POST['messages'])) {
				$err_msg = "Please fill-up the form properly.";
			} else {
				$stblname = "tbl_contactform";
				$qry_insert = "INSERT INTO {$stblname} SET fullname=:fullname, email=:emailx, phone=:mphone, subject=:subjects, message=:messages, deleted=0";
				$stmt_insert = $cnn->prepare($qry_insert);
				$fullname = $_POST['fullname'];
				$emailx = $_POST['emailx'];
				$mphone = $_POST['mphone'];
				$subjects = $_POST['subjects'];
				$messages = $_POST['messages'];
				$stmt_insert->bindParam(':fullname', $fullname);
				$stmt_insert->bindParam(':emailx', $emailx);
				$stmt_insert->bindParam(':mphone', $mphone);
				$stmt_insert->bindParam(':subjects', $subjects);
				$stmt_insert->bindParam(':messages', $messages);
				$stmt_insert->execute();

				$err_msg = "Message successfully sent.";
				echo "<script>alert('".$err_msg."');</script>";
			}
		}
	} catch (PDOException $error) {
		$err_msg = $error->getMessage();
		echo "<p>Error: {$err_msg}</p>";
		die;
	}

?>