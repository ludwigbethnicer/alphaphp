<div class="pt-5 pb-5">
	<div id="contact" class="container">
		<h2 class="text-center">Contact Us</h2>
		<br>
		<div class="row">
			<div class="col-sm-5">
				<p>Contact us and will be in touch to you as soon as we get online.</p>
				<p><a class="text-body" href="//google.com/maps/place/@<?php echo $geomap; ?>,17z" target="_blank"><span class="fas fa-map-marker-alt"></span> <?php echo $maddress ?></a></p>
				<p><a class="text-body" href="tel:<?php echo $mobileno ?>"><span class="fas fa-phone"></span> <?php echo $mobileno ?></a></p>
				<p><a class="text-body" href="mailto:<?php echo $memail ?>"><span class="fas fa-envelope-square"></span> <?php echo $memail ?></a></p>
				<p><a class="text-body" href="//facebook.com" target="_blank"><span class="fab fa-facebook-square"></span> facebookname | facebookid</a></p>
			</div>
			<div class="col-sm-7 slideanim">
				<div class="row">
					<div class="col-sm-6 form-group">
						<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
					</div>
					<div class="col-sm-6 form-group">
						<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
					</div>
				</div>
				<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
				<div class="row">
					<div class="col-sm-12 form-group">
						<button class="btn btn-secondary pull-right" type="submit">Send</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>