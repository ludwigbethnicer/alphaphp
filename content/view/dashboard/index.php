<?php
	// Top Container
	// Sidebar - Menu
	include_once "../../content/template-part/dashboard-navbar.php";
?>

<main class="page-content">
	<div class="container-fluid bg-light-opacity">
		<h4><?php echo $sysname; ?></h4>
		<p><?php echo $quotetitle ; ?></p>

		<div class="card-deck mb-3">
			<div class="card bg-default">
				<div class="card-body text-center">
					<div class="card-innerBody d-flex align-items-center">
						<div class="card-icon text-light"><i aria-hidden="true" class="fa fa-user"></i></div>
						<div class="ml-auto"><p class="card-label text-right text-muted">Users</p><h4  class="card-text text-right ">$ 199,099</h4></div>
					</div>
				</div>
				<div class="card-footer d-flex">
					<small class="text-muted">Since last month</small>
					<small class="text-success ml-auto">
						<i aria-hidden="true" class="fa fa-caret-up"></i> 5,35%
					</small>
				</div>
			</div>

			<div class="card bg-default">
				<div class="card-body text-center">
					<div class="card-innerBody d-flex align-items-center">
						<div class="card-icon text-light"><i aria-hidden="true" class="fa fa-shopping-cart"></i></div>
						<div class="ml-auto"><p class="card-label text-right text-muted">Orders</p><h4  class="card-text text-right ">$ 199,099</h4></div>
					</div>
				</div>
				<div class="card-footer d-flex">
					<small class="text-muted">Since last month</small>
					<small class="text-danger ml-auto">
						<i aria-hidden="true" class="fa fa-caret-down"></i> 2,81%
					</small>
				</div>
			</div>

			<div class="card bg-default">
				<div class="card-body text-center">
					<div class="card-innerBody d-flex align-items-center">
						<div class="card-icon text-light"><i aria-hidden="true" class="fas fa-dollar-sign"></i></div>
						<div class="ml-auto"><p class="card-label text-right text-muted">Sales</p><h4  class="card-text text-right ">$ 199,099</h4></div>
					</div>
				</div>
				<div class="card-footer d-flex">
					<small class="text-muted">Since last month</small>
					<small class="text-success ml-auto">
						<i aria-hidden="true" class="fa fa-caret-up"></i> 5,35%
					</small>
				</div>
			</div>

			<div class="card bg-default">
				<div class="card-body text-center">
					<div class="card-innerBody d-flex align-items-center">
						<div class="card-icon text-light"><i aria-hidden="true" class="fa fa-users"></i></div>
						<div class="ml-auto"><p class="card-label text-right text-muted">Visitors</p><h4  class="card-text text-right ">$ 199,099</h4></div>
					</div>
				</div>
				<div class="card-footer d-flex">
					<small class="text-muted">Since last month</small>
					<small class="text-success ml-auto">
						<i aria-hidden="true" class="fa fa-caret-up"></i> 5,35%
					</small>
				</div>
			</div>
		</div>

		<div class="card-deck mb-3">
			<div class="card bg-default">
				<div class="card-body text-center">
					<p class="card-text">Some text inside the first card</p>
				</div>
			</div>
			<div class="card bg-default">
				<div class="card-body text-center">
					<p class="card-text">Some text inside the second card</p>
				</div>
			</div>
			<div class="card bg-default">
				<div class="card-body text-center">
					<p class="card-text">Some text inside the third card</p>
				</div>
			</div>
		</div>

		<div class="card-deck mb-3">
			<div class="card bg-default">
				<div class="card-body text-center">
					<p class="card-text">Some text inside the first card</p>
				</div>
			</div>
			<div class="card bg-default">
				<div class="card-body text-center">
					<p class="card-text">Some text inside the second card</p>
				</div>
			</div>
		</div>

		<div class="row card-deck mb-3">
			<div class="col-sm-8 card bg-default">
				<div class="card-body text-center">
					<p class="card-text">Some text inside the second card</p>
				</div>
			</div>
			<div class="col-sm-4 card bg-default">
				<div class="card-body text-center">
					<p class="card-text">Some text inside the second card</p>
				</div>
			</div>
		</div>
	</div>
</main>