<?php
	include_once "../../content/template-part/dashboard-navbar.php";
	include_once "../../inc/core.php";
	include_once "../../inc/srvr.php";
	$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);

	$etblname = "conf";
	$qry_edit = "SELECT * FROM {$etblname} LIMIT 1";
	$stmt_edit = $cnn->prepare($qry_edit);
	$stmt_edit->execute();
	$row_curr = $stmt_edit->fetch(PDO::FETCH_ASSOC);
	$vcmpny_name = $row_curr['cmpny_name'];
	$vsys_name = $row_curr['sys_name'];
	$vsys_ver = $row_curr['sys_ver'];
	$vsys_logo = $row_curr['sys_logo'];
	$vnavbar_logo = $row_curr['navbar_logo'];
	$vfavicon = $row_curr['favicon'];
	$vquote_title = $row_curr['quote_title'];
	$vceo_pres = $row_curr['ceo_pres'];
	$vmemail = $row_curr['memail'];
	$vtelno = $row_curr['telno'];
	$vmobileno = $row_curr['mobileno'];
	$vmaddress = $row_curr['maddress'];
	$vidletime = $row_curr['idletime'];
	$vthemename = $row_curr['themename'];
	$vdomainhome = $row_curr['domainhome'];
	$vgeo_map = $row_curr['geo_map'];
?>

<main class="page-content">
	<div class="container-fluid">
		<h4><?php echo $page_title; ?></h4>
		<form method="post" class="needs-validation" novalidate>
			
			<div class="row">
				<div class="col-lg-6">
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">Company</span>
						</div>
						<input id="idxcmpny_name" type="text" class="form-control" placeholder="Company" name="idxcmpny_name" required value="<?php echo $vcmpny_name; ?>">
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">System Title</span>
						</div>
						<input id="idxsys_name" type="text" class="form-control" placeholder="System Title" name="idxsys_name" required value="<?php echo $vsys_name; ?>">
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">System Version</span>
						</div>
						<input id="idxsys_ver" type="text" class="form-control" placeholder="System Version" name="idxsys_ver" required value="<?php echo $vsys_ver; ?>">
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">Tagline</span>
						</div>
						<textarea class="form-control" id="idxquote_title" name="idxquote_title" placeholder="Tagline" required><?php echo $vquote_title; ?></textarea>				
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">In-Charge</span>
						</div>
						<input id="idxceo_pres" type="text" class="form-control" placeholder="In-Charge" name="idxceo_pres" required value="<?php echo $vceo_pres; ?>">
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">E-mail</span>
						</div>
						<input id="idxmemail" type="email" class="form-control" placeholder="E-mail" name="idxmemail" required value="<?php echo $vmemail; ?>">
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">Tel. No.</span>
						</div>
						<input id="idxtelno" type="text" class="form-control" placeholder="Tel. No." name="idxtelno" required value="<?php echo $vtelno; ?>">
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">Mobile No.</span>
						</div>
						<input id="idxmobileno" type="text" class="form-control" placeholder="Mobile No." name="idxmobileno" required value="<?php echo $vmobileno; ?>">
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">Idle Time</span>
						</div>
						<input id="idxidletime" type="number" class="form-control" placeholder="Idle Time" name="idxidletime" required value="<?php echo $vidletime; ?>">
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">Theme</span>
						</div>
						<input id="idxthemename" type="text" class="form-control" placeholder="Theme" name="idxthemename" list="lstgroupby" required value="<?php echo $vthemename; ?>">
						<datalist id="lstgroupby">
							<?php
								$tblname = "tblthemename";
								$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
								$qry_grpby = $cnn->prepare("SELECT themename FROM {$tblname} WHERE deletedx=0 ORDER BY themename ASC");
								$qry_grpby->execute();
								$rslt_grpby = $qry_grpby->setFetchMode(PDO::FETCH_ASSOC);
								foreach ($qry_grpby as $row_grpby) {
									echo "<option value='".$row_grpby['themename']."'>";
								}
							?>
						</datalist>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">Domain Directory</span>
						</div>
						<input id="idxdomainhome" type="text" class="form-control" placeholder="Domain Directory" name="idxdomainhome" required value="<?php echo $vdomainhome; ?>">
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">Location Coordinate</span>
						</div>
						<input id="idxgeo_map" type="text" class="form-control" placeholder="Location Coordinate" name="idxgeo_map" required value="<?php echo $vgeo_map; ?>">
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="card">
						<div class="bg-secondary" style="height: 100px;">
							<img class="card-img-top" src="../../storage/img/<?php echo $vsys_logo; ?>" alt="System Logo" style="height: inherit; object-fit: contain;">
						</div>
					</div>
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">System Logo</span>
						</div>
						<input id="idxsys_logo" type="text" class="form-control" placeholder="System Logo" name="idxsys_logo" required value="<?php echo $vsys_logo; ?>">
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="card">
						<div class="bg-secondary" style="height: 100px;">
							<img class="card-img-top" src="../../storage/img/<?php echo $vnavbar_logo; ?>" alt="Navbar Logo" style="height: inherit; object-fit: contain;">
						</div>
					</div>
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">Navbar Logo</span>
						</div>
						<input id="idxnavbar_logo" type="text" class="form-control" placeholder="Navbar Logo" name="idxnavbar_logo" required value="<?php echo $vnavbar_logo; ?>">
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="card">
						<div class="bg-secondary" style="height: 100px;">
							<img class="card-img-top" src="../../storage/img/<?php echo $vfavicon; ?>" alt="Web Icon" style="height: inherit; object-fit: contain;">
						</div>
					</div>
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">Web Icon</span>
						</div>
						<input id="idxfavicon" type="text" class="form-control" placeholder="Web Icon" name="idxfavicon" required value="<?php echo $vfavicon; ?>">
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="input-group mb-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">Address</span>
						</div>
						<textarea class="form-control" id="idxmaddress" name="idxmaddress" placeholder="Address" required><?php echo $vmaddress; ?></textarea>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-end">
				<input type="submit" name="btnUpdate" value="Update" class="btn btn-warning btn-sm m-2">
				<a href="../../routes/dashboard" class="btn btn-danger btn-sm m-2">Close</a>
			</div>
		</form>
	</div>
</main>

<?php

	try {
		if (isset($_POST['btnUpdate'])) {
			if (empty(
				$_POST['idxcmpny_name'] || 
				$_POST['idxsys_ver']
			)) {
				$err_msg = "Please fill-up the form properly.";
			} else {
				// search for duplicate
				$stblname = "conf";
				$setstr_cmpny_name = "cmpny_name";
				$setstr_sys_name = "sys_name";
				$setstr_sys_ver = "sys_ver";
				$setstr_sys_logo = "sys_logo";
				$setstr_navbar_logo = "navbar_logo";
				$setstr_favicon = "favicon";
				$setstr_quote_title = "quote_title";
				$setstr_ceo_pres = "ceo_pres";
				$setstr_memail = "memail";
				$setstr_telno = "telno";
				$setstr_mobileno = "mobileno";
				$setstr_maddress = "maddress";
				$setstr_idletime = "idletime";
				$setstr_themename = "themename";
				$setstr_domainhome = "domainhome";
				$setstr_geo_map = "geo_map";

				$qry_insert = "UPDATE {$stblname} SET 
					{$setstr_cmpny_name}=:cmpny_name, 
					{$setstr_sys_name}=:sys_name, 
					{$setstr_sys_ver}=:sys_ver, 
					{$setstr_sys_logo}=:sys_logo, 
					{$setstr_navbar_logo}=:navbar_logo, 
					{$setstr_favicon}=:favicon, 
					{$setstr_quote_title}=:quote_title, 
					{$setstr_ceo_pres}=:ceo_pres, 
					{$setstr_memail}=:memail, 
					{$setstr_telno}=:telno, 
					{$setstr_mobileno}=:mobileno, 
					{$setstr_maddress}=:maddress, 
					{$setstr_idletime}=:idletime, 
					{$setstr_themename}=:themename, 
					{$setstr_domainhome}=:domainhome, 
					{$setstr_geo_map}=:geo_map 
				";
				$stmt_insert = $cnn->prepare($qry_insert);
				$itxtcmpny_name = $_POST['idxcmpny_name'];
				$itxtsys_name = $_POST['idxsys_name'];
				$itxtsys_ver = $_POST['idxsys_ver'];
				$itxtsys_logo = $_POST['idxsys_logo'];
				$itxtnavbar_logo = $_POST['idxnavbar_logo'];
				$itxtfavicon = $_POST['idxfavicon'];
				$itxtquote_title = $_POST['idxquote_title'];
				$itxtceo_pres = $_POST['idxceo_pres'];
				$itxtmemail = $_POST['idxmemail'];
				$itxttelno = $_POST['idxtelno'];
				$itxtmobileno = $_POST['idxmobileno'];
				$itxtmaddress = $_POST['idxmaddress'];
				$itxtidletime = $_POST['idxidletime'];
				$itxtthemename = $_POST['idxthemename'];
				$itxtdomainhome = $_POST['idxdomainhome'];
				$itxtgeo_map = $_POST['idxgeo_map'];
				$stmt_insert->bindParam(':cmpny_name', $itxtcmpny_name);
				$stmt_insert->bindParam(':sys_name', $itxtsys_name);
				$stmt_insert->bindParam(':sys_ver', $itxtsys_ver);
				$stmt_insert->bindParam(':sys_logo', $itxtsys_logo);
				$stmt_insert->bindParam(':navbar_logo', $itxtnavbar_logo);
				$stmt_insert->bindParam(':favicon', $itxtfavicon);
				$stmt_insert->bindParam(':quote_title', $itxtquote_title);
				$stmt_insert->bindParam(':ceo_pres', $itxtceo_pres);
				$stmt_insert->bindParam(':memail', $itxtmemail);
				$stmt_insert->bindParam(':telno', $itxttelno);
				$stmt_insert->bindParam(':mobileno', $itxtmobileno);
				$stmt_insert->bindParam(':maddress', $itxtmaddress);
				$stmt_insert->bindParam(':idletime', $itxtidletime);
				$stmt_insert->bindParam(':themename', $itxtthemename);
				$stmt_insert->bindParam(':domainhome', $itxtdomainhome);
				$stmt_insert->bindParam(':geo_map', $itxtgeo_map);
				$stmt_insert->execute();

				$err_msg = "Update successfully.";
				echo "<script>alert('".$err_msg."');window.location='../../routes/setgener';</script>";
			}
		}
	} catch (PDOException $error) {
		$err_msg = $error->getMessage();
		echo "<p>Error: {$err_msg}</p>";
		die;
	}