<?php

	if ($_SESSION["ulevpos"] == "Head") {
		
	} else {
		session_start();
		session_destroy();
		header("location:login.php");
	}

	if(empty($_SESSION["usercode"])) {
		$usercodenow = null;
	} else {
		$usercodenow = $_SESSION['usercode'];
	}
	
	include_once "dash-navibar.php";
	
?>

<div class="panel panel-default">
	<div class="panel-heading">Users</div>
	<div id="responseBody" class="panel-body table-responsive">
		<table id="listUsers" class="table table-hover">
			<thead>
				<tr>
					<th class="align-middle d-none d-lg-inline">ID</th>
					<th class="align-middle">Username</th>
					<th class="align-middle d-none d-lg-inline">Fullname</th>
					<th class="align-middle d-none d-lg-inline">e-mail</th>
					<th class="align-middle">Mobile No.</th>
					<th class="align-middle d-none d-lg-inline">User Level</th>
					<th class="align-middle d-none d-lg-inline">Created by</th>
					<th class="align-middle">Online</th>
					<th class="align-middle">Status</th>
					<th class="align-middle d-none d-lg-inline">Date Created</th>
					<th class="align-middle d-none d-lg-inline">Date Modified</th>
					<th class="align-middle text-right">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$query = "SELECT * FROM tbl_user";
				$stmt = $dbcon->prepare($query);
				$stmt->execute();
				foreach ($stmt as $row) {
					echo '<tr>';
						echo '<td class="align-middle d-none d-lg-inline">'.$row['usercode'].'</td>';
						echo '<td class="align-middle">'.$row['username'].'</td>';
						echo '<td class="align-middle d-none d-lg-inline">'.$row['fullname'].'</td>';
						echo '<td class="align-middle d-none d-lg-inline">'.$row['uemail'].'</td>';
						echo '<td class="">'.$row['umobileno'].'</td>';
						echo '<td class="align-middle d-none d-lg-inline">'.$row['ulevpos'].'</td>';
						echo '<td class="align-middle d-none d-lg-inline">'.$row['createdby'].'</td>';
						echo '<td class="">'.$row['uonline'].'</td>';
						echo '<td class="">'.$row['ustatz'].'</td>';
						echo '<td class="align-middle d-none d-lg-inline">'.$row['created'].'</td>';
						echo '<td class="align-middle d-none d-lg-inline">'.$row['modified'].'</td>';
						echo '<td class="text-right">';
							echo "<a class='btn btn-sm m-1 btn-success btn-inline' href='adduser.php?id=".$row['usercode']."'>View</a>";
						echo '</td>';
					echo '</tr>';
				}
			?>
			</tbody>
		</table>
	</div>
	<div class="panel-footer">List of Users.</div>
</div>