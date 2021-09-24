<?php 

	include_once "config/core.php";
	include_once "config/database.php";

	if(!isset($_SESSION['username'])){
		header('location:login.php');
	}
	
	include_once "page_structure/dash-header.php";
	include_once "page_structure/dash-userlist.php";
	include_once "page_structure/dash-footer.php";