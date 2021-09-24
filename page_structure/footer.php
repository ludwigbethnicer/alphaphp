	</div>
	<footer class="container-fluid text-center footer pt-2">
		<a href="#myPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p>© <?php echo date("Y");?> <a href="https://www.alphaphp.com" target="_blank" title="Visit AlphaPHP, Inc. Philippines">AlphaPHP</a>, Inc. Philippines. All Rights Reserved.</p>
		<a class="float-right btn btn-sm btn-light mb-2" href="">Refresh</a>
		<?php
			if(empty($_SESSION["usercode"])) {
				echo '<a class="float-right btn btn-sm btn-success mb-2" href="login.php">Login</a>';
			}else{
				echo '<a class="float-right btn btn-sm btn-inline btn-danger" href="config/logout.php">Logout</a>';
			}
		?>
	</footer>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/form_validation_needs.js"></script>
	<script src="assets/js/search_auditbranch.js"></script>
	<script src="assets/js/notremove3char.js"></script>
</body>
</html>