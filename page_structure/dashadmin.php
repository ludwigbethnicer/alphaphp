<?php

	if ($_SESSION["ulevpos"] == "Head") {
		
	} else {
		session_start();
		session_destroy();
		header("location:login.php");
	}
	
	include_once "dash-navibar.php";
	
?>

	<div id="container" style="height: 100%;">
</div>