<nav id="navbar" class="navbar navbar-expand-sm bg-danger navbar-danger sticky-top">
	<a class="navbar-brand" href="<?php echo $domainhome; ?>">
		<img id="mlogo" src="<?php echo $domainhome ?>storage/img/logo-white.png">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $domainhome; ?>routes/aboutus">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $domainhome; ?>routes/productsitems">Products</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $domainhome; ?>routes/testimonials">Testimonial</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $domainhome; ?>routes/contactus">Contact Us</a>
			</li>
		</ul>
		<ul class="navbar-nav my-2 my-lg-0">
			<?php
				if (empty($_SESSION["usercode"])) {
					echo '<li class="nav-item">
						<a class="nav-link" href="'.$domainhome.'routes/login">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.$domainhome.'routes/signup">Register</a>
					</li>';
				} else {
					if ($_SESSION["ulevpos"]==1) {
						echo '<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Menu</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="'.$domainhome.'routes/dashboard">Dashboard</a>
								<a class="dropdown-item border-top" href="'.$domainhome.'routes/chngepss">Change Password</a>
								<a class="dropdown-item" href="'.$domainhome.'inc/logout">Logout</a>
							</div>
						</li>';
					} elseif($_SESSION["ulevpos"]==6) {
						$cnn_getorid = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
						$qry_getorid = "SELECT * FROM tbl_order_customer WHERE customer_id=:customeer_id2 AND remarks=:processed2 ORDER BY order_id DESC LIMIT 1";
						$stmt_getorid = $cnn_getorid->prepare($qry_getorid);
						$customeer_id2 = $_SESSION["usercode"];
						$processed2 = 'Process';
						$stmt_getorid->bindParam(':customeer_id2', $customeer_id2);
						$stmt_getorid->bindParam(':processed2', $processed2);
						$stmt_getorid->execute();
						$row_order2 = $stmt_getorid->fetch(PDO::FETCH_ASSOC);
						$curr_ordr_id2 = $row_order2['order_id'];

						$cnn_getqty = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
						$qry_getqty = "SELECT SUM(qty) AS total_qty FROM tbl_order_item WHERE order_id=:order_id2";
						$stmt_getqty = $cnn_getqty->prepare($qry_getqty);
						$order_id2 = $curr_ordr_id2;
						$stmt_getqty->bindParam(':order_id2', $order_id2);
						$stmt_getqty->execute();
						$row_getqty = $stmt_getqty->fetch(PDO::FETCH_ASSOC);
						$sbtotalqty2 = $row_getqty['total_qty'];

						echo '<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Account</a>
							<div class="dropdown-menu dropdown-menu-right">
								<label class="dropdown-item"><img class="acct-img" src="'.$_SESSION["imglnkurl"].'"><span class="indiunem">'.$_SESSION["username"].'<span></label>
								<a class="dropdown-item border-top" href="'.$domainhome.'routes/mprofile">Profile</a>
								<a class="dropdown-item" href="'.$domainhome.'routes/mcart">';

								if (empty($sbtotalqty2)) {
									
								} else {
									echo '<span id="nmbtemi">';
									echo $sbtotalqty2;
									echo '</span> ';
								}

								echo 'Cart</a>
								<a class="dropdown-item" href="'.$domainhome.'routes/mpurchase">Purchase</a>
								<a class="dropdown-item border-top" href="'.$domainhome.'routes/chngepss">Change Password</a>
								<a id="#signout" class="dropdown-item" href="'.$domainhome.'inc/logout">Logout</a>
							</div>
						</li>';
					}
					
				}
			?>
		</ul>
	</div>
</nav>