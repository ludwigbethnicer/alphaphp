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
	<div class="panel-heading">User Profile</div>
	<div class="panel-body">
		<p>Content</p>
	</div>
	<div class="panel-footer">footer.</div>
</div>