<?php

	if ($_SESSION["ulevpos"] == "Field" || $_SESSION["ulevpos"] == "Head") {
		
	} else {
		session_start();
		session_destroy();
		header("location:login.php");
	}

	if(empty($_SESSION["usercode"])) {
		$usercodenow = null;
	} else {
		$usercodenow = $_SESSION["usercode"];
	}
	
?>

<script>
	function showUser(str) {
		if (str == "") {
			document.getElementById("listBranchAudit2").style.display = 'none';
			location.reload();
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("txtHint").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","view/ajaxaudlist.php?controlnum="+str,true);
			xmlhttp.send();
			document.getElementById("listBranchAudit").style.display = 'none';
		}
	}
</script>

<div class="text-left">
	<a class="btn btn-sm btn-inline btn-danger" href="config/logout.php">Logout</a>
	<?php
		if ($_SESSION["ulevpos"] == "Head") {
			echo "<a class='btn btn-sm btn-inline btn-link' href='dashadmin.php'>Dashboard</a>";
		}
	?>
	<h6 class="d-inline"><?php echo $_SESSION["fullname"]; ?></h6>
</div>

<br>

<div class="row">
	<div class="col-md-5">
		<div class="card mt-2">
			<div class="card-header">Select Entry:</div>
			<div class="card-body">
				<a class="btn btn-md btn-danger btn-block" href="createaudit.php">New Audit</a>
				<button class="btn btn-md btn-danger btn-block" data-toggle="collapse" data-target="#newaudit">Search Audit</button>
				<div id="newaudit" class="collapse mt-2">
					<button class="btn btn-md btn-info btn-block mb-2" data-toggle="collapse" data-target="#auditid">Control No.</button>
					<div id="auditid" class="collapse mt-2">
						<form>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Ctrl No.</span>
								</div>
								<input type="number" class="form-control" id="controlNo" name="controlnum" oninput="showUser(this.value); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
							</div>
						</form>
					</div>

					<button class="btn btn-md btn-info btn-block mb-2" data-toggle="collapse" data-target="#audatebran">Date and Branch</button>
					<div id="audatebran" class="collapse mt-2">
						<form>
							<div class="input-group date mb-3" id="datetimepicker1">
								<div class="input-group-prepend">
									<span class="input-group-text">Date</span>
								</div>
								<input type="date" class="form-control" />
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Branch</span>
								</div>
								<input id="branch_desc" type="text" class="form-control" placeholder="Branch" name="branch_desc" list="branch_cmpnyList" value="ML " data-initial="ML ">
								<a href="#" class="btn btn-secondary">
									<i class="fas fa-search"></i>
								</a>
								<datalist id="branch_cmpnyList">
								<?php
									$stmtaudit_branch = $dbcon->prepare("SELECT * FROM tbl_branch_auditcheck GROUP BY branch_desc ORDER BY branch_desc ASC");
									$stmtaudit_branch->execute();
									$resultaudit_branch = $stmtaudit_branch->setFetchMode(PDO::FETCH_ASSOC);
									foreach ($stmtaudit_branch as $rowaudit_branch) {
										echo "<option value='".$rowaudit_branch['branch_desc']."'>";
									}
								?>
								</datalist>
							</div>

							<?php
								try {
									if (isset($_POST["btnSave"])) {
										if (empty($_POST["branch_desc"]) || empty($_POST["audit_date"])) {
											$error_message = '<label>Please enter date and branch</label>';
										} else {
											$query = "SELECT * FROM tbl_branch_auditcheck WHERE branch_desc=:branch_desc AND audit_date=:audit_date";
											$statement = $dbcon->prepare($query);
											$statement->execute(array(
												'audit_date'		=>	$_POST["audit_date"], 
												'branch_desc'		=>	$_POST["branch_desc"]
												)
											);

											$row = $statement->fetch(PDO::FETCH_ASSOC);
											$count = $statement->rowCount();
											if ($count > 0) {
												$branch_audit_id = $row['branch_audit_id'];
												$audit_date = $row['audit_date'];
												$branch_desc = $row['branch_desc'];
												$error_message = '<a href="addpcomp.php?id='.$row['branch_audit_id'].'">Click here</a> to review on Branch '.$row["branch_desc"];
											} else {
											}
										}
									}
								} catch (PDOException $error) {
									$error_message = $error->getMessage();
								}
							?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-7">
		<div class="card mt-2">
			<div class="card-header">
				<label>Audited Branch</label>
			</div>
			<div id="txtHint" class="card-body">
				
				<table id="listBranchAudit" class="table table-hover">
					<thead>
						<tr>
							<th class="align-middle d-none d-lg-inline">#</th>
							<th class="align-middle">Date</th>
							<th class="align-middle">Branch</th>
							<th class="align-middle">#PC</th>
							<th class="d-none d-lg-inline align-middle">Region</th>
							<th class="d-none d-lg-inline align-middle">Area</th>
							<th class="d-none d-lg-inline align-middle">Zone</th>
							<th class="align-middle text-right">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query ="SELECT `tbl_branch_auditcheck`.`branch_audit_id` AS `branch_audit_id`,`tbl_branch_auditcheck`.`audit_date` AS `audit_date`,`tbl_branch_auditcheck`.`usercode` AS `usercode`,sum(`tbl_auditpc`.`nopcsum`) AS `totalpcom`,`tbl_branch_auditcheck`.`branch_desc` AS `branch_desc`,`tbl_branch_auditcheck`.`cmpny_zone_no` AS `cmpny_zone_no`,`tbl_branch_auditcheck`.`region_desc` AS `region_desc`,`tbl_branch_auditcheck`.`branch_area` AS `branch_area` FROM (`tbl_branch_auditcheck` JOIN `tbl_auditpc` ON(`tbl_branch_auditcheck`.`branch_audit_id` = `tbl_auditpc`.`branch_audit_id`)) WHERE `tbl_branch_auditcheck`.`usercode` = ".$usercodenow." GROUP BY `tbl_branch_auditcheck`.`cmpny_zone_no`,`tbl_branch_auditcheck`.`region_desc`,`tbl_branch_auditcheck`.`branch_area`,`tbl_branch_auditcheck`.`branch_desc` ORDER BY `tbl_branch_auditcheck`.`branch_audit_id` DESC";
							$stmt = $dbcon->prepare($query);
							$stmt->execute();
							foreach ($stmt as $row) {
								echo '<tr>';
									echo "<td class='d-none d-lg-inline'>".$row['branch_audit_id']."</td>";
									echo "<td>".$row['audit_date']."</td>";
									echo "<td>".$row['branch_desc']."</td>";
									echo "<td>".$row['totalpcom']."</td>";
									echo "<td class='d-none d-lg-inline'>".$row['region_desc']."</td>";
									echo "<td class='d-none d-lg-inline'>".$row['branch_area']."</td>";
									echo "<td class='d-none d-lg-inline'>".$row['cmpny_zone_no']."</td>";
									echo "<td class='text-right'>";
										echo "<a class='btn btn-sm m-1 btn-success btn-inline' href='addpcomp.php?id=".$row['branch_audit_id']."'>Open</a>";
									echo '</td>';
								echo '</tr>';
							}
						?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
</div>

<script src="assets/js/datenow.js"></script>