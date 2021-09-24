<div class="w360center">
	<h5 class="card-title text-center">Sign In</h5>
	
	<form method="post" class="needs-validation" novalidate>
		<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" class="form-control" id="username" placeholder="Username" name="username" autofocus required>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill out this field.</div>
		</div>

		<div class="form-group">
			<label for="passcode">Password:</label>
			<input type="password" class="form-control" id="passcode" placeholder="Password" name="passcode"  required>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill out this field.</div>
		</div>
		
		<div class="row">
			<div class="col-sm-6 mb-2">
				<button type="submit" class="btn btn-block btn-primary" name="btnLogin">Login <i class='fas fa-key'></i></button>
			</div>
			<div class="col-sm-6 mb-2">
				<a class="btn btn-block btn-danger" title="Enter Username">Change Password</a>
			</div>
		</div>

		<a href="psschng.php" >Forgot password?</a>
	</form>

	<?php

		try {
			if (isset($_POST["btnLogin"])) {
				if (empty($_POST["username"]) || empty($_POST["passcode"])) {
					$error_message = '<label>Please enter your username and password</label>';
				} else {
					$query = "SELECT * FROM tbl_user WHERE username = :username AND passcode = :passcode";
					$statement = $dbcon->prepare($query);
					$statement->execute(array(
						'username'	=>	$_POST["username"],
						'passcode'	=>	$_POST["passcode"]));

					$row = $statement->fetch(PDO::FETCH_ASSOC);

					$count = $statement->rowCount();
					if ($count > 0) {
						$usercode = $row['usercode'];
						$fullname = $row['fullname'];
						$useclev = $row['ulevpos'];
						
						$_SESSION["usercode"] = $usercode;
						$_SESSION["username"] = $_POST["username"];
						$_SESSION["fullname"] = $fullname;
						$_SESSION["ulevpos"] = $useclev;

						if ($useclev == "Field" || $useclev == "Head") {
							header("location:../index.php");
						} else {
							$error_message = 'Access Denied!';
						}
					} else {
						$error_message = 'Please enter valid username and password.';
					}
				}
			}
		} catch (PDOException $error) {
			die('ERROR: ' . $exception->getMessage());
		}

		if ($error_message == "") {
			echo '<label id="1" class="text-danger">'.$error_message.'</label>';
		} else {
			echo '<label id="2" class="text-danger float-right">'.$error_message.'</label>';
		}
	?>
</div>