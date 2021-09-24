<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AlphaPHP Dashboard</title>
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="Expires" CONTENT="-1">
	<link rel="stylesheet" href="assets/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/dboard.css">
	<script src="assets/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="assets/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="assets/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src = "https://www.gstatic.com/charts/loader.js"></script>
	<script type = "text/javascript">
		google.charts.load('current', {packages: ['corechart','line']});
	</script>
</head>
<body>
	<div class="dboardmain container-fluid">
		<div class="row content">
			<div class="col-sm-2 sidenav hidden-xs">
				<h2>AlphaPHP</h2>
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="dashadmin.php">Main</a></li>
					<li><a href="./">Visit Site</a></li>
					<li><a href="duserprof.php">Users</a></li></li>
					<li><a href="">Refresh</a></li>
					<li><a href="javascript:history.back();">Back</a></li>				
					<li><a href="config/logout.php">Logout</a></li>				
				</ul><br>
			</div>
			<br>

			<div class="col-sm-10">
				<div class="well">
					<p class="float-right">as of <?php echo date("Y");?></p>
					<h4>Statistics</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>