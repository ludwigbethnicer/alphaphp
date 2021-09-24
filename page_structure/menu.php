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

<div class="text-left">
	<a class="btn btn-sm btn-inline btn-danger" href="config/logout.php">Logout</a>
	<?php
		if ($_SESSION["ulevpos"] == "Head") {
			echo "<a class='btn btn-sm btn-inline btn-link' href='dashadmin.php'>Dashboard</a>";
		}
	?>
	<h6 class="d-inline"><?php echo $_SESSION["fullname"]; ?></h6>
</div>