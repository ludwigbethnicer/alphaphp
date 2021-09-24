<?php

	include_once "config/core.php";
	include_once "config/database.php";

	if(!isset($_SESSION['username'])){
		header('location:login.php');
	}

	include_once "view/header.php";
	include_once "view/menu.php";
	include_once "view/footer.php";