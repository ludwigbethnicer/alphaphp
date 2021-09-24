	</div>
	<footer class="container-fluid text-center footer p-0">
		<a href="#myPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up">Up</span>
		</a>
		<div class="row pb-1 pt-2">
			<div class="col-sm-6"></div>
			<div class="col-sm-6">
				<?php
					if(empty($_SESSION["usercode"])) {
						echo '<a class="float-right btn btn-sm btn-inline btn-success mr-2" href="login.php">Login</a>';
					}else{
						echo '<a class="float-right btn btn-sm btn-inline btn-danger mr-2" href="menu.php">Menu</a>';
						echo '<a class="float-right btn btn-sm btn-inline btn-danger mr-2" href="config/logout.php">Logout</a>';
					}
				?>
				<a class="float-right btn btn-sm btn-light mr-2" href="">Refresh</a>
			</div>
		</div>
		<div class="bg-footer-color pb-1 pt-2">
			<p>© <?php echo date("Y");?> <a href="https://www.<?php echo $main_title; ?>.com" target="_blank" title="Visit <?php echo $main_title; ?>, Inc. Philippines"><?php echo $main_title; ?></a>, Inc. Philippines. All Rights Reserved.</p>
		</div>
	</footer>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/form_validation_needs.js"></script>
	<script src="assets/js/search_auditbranch.js"></script>
	<script src="assets/js/notremove3char.js"></script>
</body>
</html>