<?php

	if ($_SESSION["ulevpos"] == "Head") {
		
	} else {
		session_start();
		session_destroy();
		header("location:login.php");
	}
	
	include_once "dash-navibar.php";
	
?>

<div class="panel panel-default">
	<div class="panel-heading">Users</div>
	<div class="panel-body">
		<table>
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
		</table>
	</div>
	<div class="panel-footer">List of Users.</div>
</div>