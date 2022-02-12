<?php
	include_once "../../../content/template-part/dashboard-navbar.php";
	include_once "../../../inc/core.php";
	include_once "../../../inc/srvr.php";
	include_once "../../../inc/cnndb.php";
	include_once "../../../inc/random-code/index.php";
	
	$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
?>

<script>
	window.addEventListener('load', function() {
		document.querySelector('#profpic').addEventListener('change', function() {
			if (this.files && this.files[0]) {
				var img = document.querySelector('#imgogsrc3');
				img.onload = () => {
					URL.revokeObjectURL(img.src);  // no longer needed, free memory
				}
				img.src = URL.createObjectURL(this.files[0]); // set src to blob url

				var img2 = document.querySelector('#profvwimgfl3');
				img2.onload = () => {
					URL.revokeObjectURL(img2.src);  // no longer needed, free memory
				}
				img2.src = URL.createObjectURL(this.files[0]); // set src to blob url
			}
		});
	});
</script>

<main class="page-content">
	<div class="container-fluid bg-light-opacity">
		<form id="user-add" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<img id="imgogsrc3" class="img-thumbnail" src="../../../storage/img/no-image.jpg" data-toggle="modal" data-target="#ymModalImgPreview">
					</div>
				</div>
				<div class="col-md-9">
					<div class="form-group">
						<label for="profpic">Profile Picture:</label>
						<div class="input-group mb-3">
							<input type="file" id="profpic" name="profpic" class="form-control" placeholder="Upload File" accept="image/*" required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>
					</div>
				</div>
			</div>

			<div class="input-group mb-3 input-group-sm">
				<div class="input-group-prepend">
					<span class="input-group-text">User Type *</span>
				</div>
				<select id="usertype" class="form-control" name="usertype" required autofocus>
					<option value="" selected>- Select User Type -</option>
					<option value="Subscriber">Subscriber</option>
					<option value="Guest">Guest</option>
					<option value="Cashier">Cashier</option>
					<option value="User">User (Staff)</option>
					<option value="Administrator">Administrator</option>
				</select>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="input-group mb-3 input-group-sm">
				<div class="input-group-prepend">
					<span class="input-group-text">Username *</span>
				</div>
				<input id="idxfieldtxt" type="text" class="form-control" placeholder="Username" name="idxfieldtxt" required autofocus>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="input-group mb-3 input-group-sm">
				<div class="input-group-prepend">
					<span class="input-group-text">E-mail *</span>
				</div>
				<input id="idxfieldtxt" type="email" class="form-control" placeholder="E-mail" name="idxfieldtxt" required autofocus>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="input-group mb-3 input-group-sm">
				<div class="input-group-prepend">
					<span class="input-group-text">Phone *</span>
				</div>
				<input id="idxfieldtxt" type="tel" class="form-control" placeholder="Phone" name="idxfieldtxt" pattern="[0-9]{11}" required autofocus>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="input-group mb-3 input-group-sm">
				<div class="input-group-prepend">
					<span class="input-group-text">Password *</span>
				</div>
				<input id="idxfieldtxt" type="text" class="form-control" placeholder="Temporary Password" value="<?php echo $randWPass; ?>" name="idxfieldtxt" required autofocus>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<!-- div class="input-group mb-3 input-group-sm">
				<div class="input-group-prepend">
					<span class="input-group-text">PIN *</span>
				</div>
				<input id="idxfieldtxt" type="text" class="form-control" placeholder="PIN" value="<?php echo $randcode6; ?>" name="idxfieldtxt" required autofocus>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div -->

			<div class="input-group mb-3 input-group-sm">
				<div class="input-group-prepend">
					<span class="input-group-text">Last Name *</span>
				</div>
				<input id="idxfieldtxt" type="text" class="form-control" placeholder="Last Name" name="idxfieldtxt" required autofocus>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="input-group mb-3 input-group-sm">
				<div class="input-group-prepend">
					<span class="input-group-text">First Name *</span>
				</div>
				<input id="idxfieldtxt" type="text" class="form-control" placeholder="First Name" name="idxfieldtxt" required autofocus>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="input-group mb-3 input-group-sm">
				<div class="input-group-prepend">
					<span class="input-group-text">Middle Name</span>
				</div>
				<input id="idxfieldtxt" type="text" class="form-control" placeholder="Middle Name" name="idxfieldtxt" autofocus>
			</div>

			<div class="input-group mb-3 input-group-sm">
				<div class="input-group-prepend">
					<span class="input-group-text">Address *</span>
				</div>
				<textarea id="zaddress" class="form-control" placeholder="Address" name="zaddress" required readonly autofocus></textarea>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<input id="plsaddrloc" type="button" data-toggle="modal" data-target="#ymModalAddress" value="Add Address">

			<div class="row justify-content-end">
				<input type="submit" name="btnSave" value="Save" class="btn btn-info btn-sm m-2">
				<a href="../../../routes/user" class="btn btn-danger btn-sm m-2">Close</a>
			</div>
		</form>
	</div>
</main>

<div class="modal" id="ymModalImgPreview">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close text-right mr-1" data-dismiss="modal">&times;</button>
			<div class="modal-body">
				<img id="profvwimgfl3" src="../../../storage/img/no-image.jpg">
			</div>
		</div>
	</div>
</div>

<?php

	include_once "../../../inc/address/index.php";

	try {
		if (isset($_POST['btnSave'])) {
			if (empty($_POST['idxfieldtxt'])) {
				$err_msg = "Please fill-up the form properly.";
			} else {
				// search for duplicate
				$stblname = "tblsysuser";
				$dupli_txt = "fieldtxt";
				$qry_dupli = "SELECT {$dupli_txt} FROM {$stblname} WHERE {$dupli_txt}=:txtfields";
				$stmt_dupli = $cnn->prepare($qry_dupli);
				$txtfields = $_POST['idxfieldtxt'];
				$stmt_dupli->bindParam(':txtfields', $txtfields);
				$stmt_dupli->execute();
				$rw_counts = $stmt_dupli->rowCount();

				if ($rw_counts > 0) {
					$err_msg = "Record already exist.";
					echo "<script>alert('".$err_msg."');</script>";
				} else {
					$qry_insert = "INSERT INTO {$stblname} SET {$dupli_txt}=:itxtfields";
					$stmt_insert = $cnn->prepare($qry_insert);
					$itxtfields = $_POST['idxfieldtxt'];
					$stmt_insert->bindParam(':itxtfields', $itxtfields);
					$stmt_insert->execute();

					$err_msg = "Save successfully.";
					echo "<script>alert('".$err_msg."');</script>";
				}
			}
		}
	} catch (PDOException $error) {
		$err_msg = $error->getMessage();
		echo "<p>Error: {$err_msg}</p>";
		die;
	}