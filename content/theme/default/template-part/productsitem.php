<?php
	$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
	$qry = "SELECT * FROM tblitem WHERE deletedx=0 ORDER BY item_id DESC";
	$stmt = $cnn->prepare($qry);
	$stmt->execute();
	$num = $stmt->rowCount();
	$xno = 0;
?>
<div id="productitemz" class="container">
	<div class="pt-5 pb-5">
		<h2>Products</h2>

		<div class="card-deck align-items-center slick-products">

		<?php
			if ($num>0) {
				foreach ($stmt as $row) {
					$xno++;
					extract($row);
		?>

			<div class="card border-0">
				<img class="card-img-top img-front-product" src="<?php echo $domainhome; ?>storage/img/items/ITEM<?php echo $item_id.'.'.$extnem; ?>" alt="Card image">
				<div class="card-body text-right">
					<h4 class="card-title"><?php echo $name; ?></h4>
					<p class="card-text"><?php echo $dcurrencyx.' '.$sell_price; ?></p>
					<a href="#" class="btn btn-danger">Add to Cart</a>
				</div>
			</div>

		<?php
				}
			} else {
		?>

			<div class="card border-0">
				<img class="card-img-top img-front-product" src="<?php echo $domainhome; ?>storage/img/no-image.jpg" alt="No Item">
				<div class="card-body text-right">
					<h4 class="card-title">No Item Available</h4>
				</div>
			</div>
			<div class="card border-0">
				<img class="card-img-top img-front-product" src="<?php echo $domainhome; ?>storage/img/no-image.jpg" alt="No Item">
				<div class="card-body text-right">
					<h4 class="card-title">No Item Available</h4>
				</div>
			</div>
			<div class="card border-0">
				<img class="card-img-top img-front-product" src="<?php echo $domainhome; ?>storage/img/no-image.jpg" alt="No Item">
				<div class="card-body text-right">
					<h4 class="card-title">No Item Available</h4>
				</div>
			</div>
			<div class="card border-0">
				<img class="card-img-top img-front-product" src="<?php echo $domainhome; ?>storage/img/no-image.jpg" alt="No Item">
				<div class="card-body text-right">
					<h4 class="card-title">No Item Available</h4>
				</div>
			</div>
			<div class="card border-0">
				<img class="card-img-top img-front-product" src="<?php echo $domainhome; ?>storage/img/no-image.jpg" alt="No Item">
				<div class="card-body text-right">
					<h4 class="card-title">No Item Available</h4>
				</div>
			</div>
			<div class="card border-0">
				<img class="card-img-top img-front-product" src="<?php echo $domainhome; ?>storage/img/no-image.jpg" alt="No Item">
				<div class="card-body text-right">
					<h4 class="card-title">No Item Available</h4>
				</div>
			</div>

		<?php
			}
		?>

		</div>
	</div>
</div>