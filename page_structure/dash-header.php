<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $main_title; ?> Dashboard</title>
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="Expires" CONTENT="-1">
	<link rel="stylesheet" href="assets/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/dashboard.css">
	<link rel="stylesheet" href="assets/css/dboard.css">
	<script src="assets/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="assets/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="assets/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src = "https://www.gstatic.com/charts/loader.js"></script>
	<script type = "text/javascript">
		google.charts.load('current', {packages: ['corechart','line']});
	</script>
</head>
<body id="myDashB" class="bg-light" data-spy="scroll" data-target=".navbar" data-offset="60" oncontextmenu="return false;">
	<!-- page-wrapper -->
	<div class="page-wrapper chiller-theme toggled">