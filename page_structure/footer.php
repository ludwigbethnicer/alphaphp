	</div>
	<div class="container-fluid footer-menu">
		<div class="row">
			<div class="col-sm-6"></div>
			<div class="col-sm-6"></div>
		</div>
	</div>
	<footer class="container-fluid text-center footer pt-2">
		<a href="#myPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<?php
			if(empty($_SESSION["usercode"])) {
				echo '<a class="float-right btn btn-sm btn-inline btn-success mr-2" href="login.php">Login</a>';
			}else{
				echo '<a class="float-right btn btn-sm btn-inline btn-danger mr-2" href="menu.php">Menu</a>';
				echo '<a class="float-right btn btn-sm btn-inline btn-danger mr-2" href="config/logout.php">Logout</a>';
			}
		?>
		<a class="float-right btn btn-sm btn-light mr-2" href="">Refresh</a>
		<p>© <?php echo date("Y");?> <a href="https://www.alphaphp.com" target="_blank" title="Visit AlphaPHP, Inc. Philippines">AlphaPHP</a>, Inc. Philippines. All Rights Reserved.</p>
	</footer>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/form_validation_needs.js"></script>
	<script src="assets/js/search_auditbranch.js"></script>
	<script src="assets/js/notremove3char.js"></script>
</body>
</html>