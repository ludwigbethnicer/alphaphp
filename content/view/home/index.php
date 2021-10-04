<?php
	include_once "../../content/theme/".$themename."/frontend-navbar.php";
	include_once "../../content/theme/".$themename."/carousel-header.php";
?>

<main class="page-content">
	<div class="container">
		<h1>Home</h1>
	</div>
</main>

<?php
	// Section: About
	// Section: Services (Offer)
	// Section: Portfolio / Completed Projects
	// Section: Testimonial
	include_once "../../content/theme/".$themename."/template-part/carousel-testimonial.php";
	// Section: Contact Us
	include_once "../../content/theme/".$themename."/template-part/contactus.php";
	if ( empty($geomap) ) {
		echo "<p align='center'>Can't Load Map.</p>";
	} else {
		echo '<iframe src="https://maps.google.com/maps?q='.$geomap.'&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
	}
?>