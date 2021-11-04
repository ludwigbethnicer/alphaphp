

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
	<a class="navbar-brand" href="<?php echo $domainhome; ?>">
		<img id="mlogo" src="<?php echo $domainhome ?>storage/img/logo.png">
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
				<a class="nav-link" href="<?php echo $domainhome; ?>routes/testimonials">Testimonial</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $domainhome; ?>routes/contactus">Contact Us</a>
			</li>
		</ul>
		<ul class="navbar-nav my-2 my-lg-0">
			<?php
				if(empty($_SESSION["usercode"])) {
					echo '<li class="nav-item">
						<a class="nav-link" href="'.$domainhome.'routes/login">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.$domainhome.'routes/signup">Register</a>
					</li>';
				} else {
					echo '<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Menu</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="'.$domainhome.'routes/dashboard">Dashboard</a>
							<a class="dropdown-item border-top" href="'.$domainhome.'routes/chngepss">Change Password</a>
							<a class="dropdown-item" href="'.$domainhome.'inc/logout">Logout</a>
						</div>
					</li>';
				}
			?>
		</ul>
	</div>
</nav>