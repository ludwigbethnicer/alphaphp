<?php
	include_once "../../content/theme/".$themename."/auth-navbar.php";
?>

<div class="container">
	<div class="w360center">
		<div class="card mt-4">
			<div class="card-header text-center">
				<label id="loggdas">Login</label>
				<a id="therefresh" href="" class="position-absolute mr-3" style="right: 0;">Refresh</a>
			</div>
			<!-- //console.cloud.google.com/projectselector2/apis/dashboard -->
			<div class="g-signin2 position-absolute" data-onsuccess="onSignIn" data-theme="dark"></div>
			<div class="card-body">
				<form id="loginpost" method="post" class="needs-validation" novalidate>
					<div class="form-group">
						<label for="username">Username | e-mail | Mobile:</label>
						<div class="input-group mb-3">
							<input type="text" class="form-control" id="username" placeholder="Username | e-mail | +639154826025" name="username" autofocus required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>
					</div>

					<div class="form-group">
						<label for="passcode">Password:</label>
						<div class="input-group mb-3" id="show_hide_password">
							<input type="password" class="form-control password" id="passcode" placeholder="Password" name="passcode"  required>
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-eye-slash" aria-hidden="true" onclick="PwHideShow()"></i>
								</span>
							</div>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>
					</div>

					<?php
						include_once "../../inc/login/index.php";
					?>
					
					<div class="row">
						<div class="col-sm-6 mb-2">
							<a href="../signup" class="btn btn-block btn-primary">
								Register<i class='fas fa-user-plus'></i>
							</a>
						</div>
						<div class="col-sm-6 mb-2">
							<button type="submit" class="btn btn-block btn-secondary" name="btnLogin">Login <i class='fas fa-key'></i></button>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6 mb-2">
							<a href="#" onclick="fnforgotpw()">Forgot password?</a>
						</div>
						<div class="col-sm-6 mb-2"></div>
					</div>
				</form>

				<form id="signincurr" method="post" style="display: none;">
					<div class="form-group">
						<div class="input-group mb-3">
							<img id="imgogsrc2" class="img-thumbnail">
						</div>
					</div>
					<div class="form-group text-center">
						<label id="gmailz" for="gmailz"></label>
						<p id="yrfullnem" for="yrfullnem"></p>
					</div>
					<div class="form-group d-none">
						<div class="input-group mb-3">
							<input type="text" class="form-control" id="imgurl2" name="imgurl2" readonly required>
						</div>
					</div>
					<div class="form-group d-none">
						<div class="input-group mb-3">
							<input type="text" class="form-control" id="gogid" name="gogid" readonly required>
						</div>
					</div>
					<div class="form-group d-none">
						<div class="input-group mb-3">
							<input type="text" class="form-control" id="username2" name="username2" readonly required>
						</div>
					</div>
					<div class="form-group d-none">
						<div class="input-group mb-3">
							<input type="text" class="form-control" id="email2" name="email2" readonly required>
						</div>
					</div>
					<div class="form-group d-none">
						<div class="input-group mb-3">
							<input type="text" class="form-control" id="fullname2" name="fullname2" readonly required>
						</div>
					</div>
					<div class="form-group d-none">
						<div class="input-group mb-3">
							<input type="text" class="form-control" id="lastname2" name="lastname2" readonly required>
						</div>
					</div>
					<div class="form-group d-none">
						<div class="input-group mb-3">
							<input type="text" class="form-control" id="firstname2" name="firstname2" readonly required>
						</div>
					</div>
					<div class="form-group d-none">
						<div class="input-group mb-3">
							<textarea class="form-control" id="tokenidz2" name="tokenidz2" readonly required></textarea>
						</div>
					</div>
					<?php
						include_once "../../inc/logingoogle/index.php";
					?>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-block btn-primary" name="btnGContin">Continue <i class='fab fa-google'></i></button>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="row">
					<div class="col-sm-6 mb-2"></div>
					<div class="col-sm-6 mb-2 text-right">
						<a id="loginbkhome" href="../../" class="text-dark text-decoration-none">
							<i>&#8592;</i> Back to Homepage
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>