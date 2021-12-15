<?php
	$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
	$qry = "SELECT * FROM tblitem WHERE deletedx=0 ORDER BY item_id DESC";
	$stmt = $cnn->prepare($qry);
	$stmt->execute();
	$num = $stmt->rowCount();
	$xno = 0;
?>
<script>
	function getIdOnClick(id) {
		var img = document.getElementById(id).getAttribute('data-value');
		document.getElementById("itmvwimgfl3").src = img;
	}
</script>
<div id="productitemz" class="container">
	<div class="pt-5 pb-5">
		<h2>Products</h2>

		<div class="card-deck align-items-center slick-products">

		<?php
			if ($num>0) {
				foreach ($stmt as $row) {
					$xno++;
					extract($row);
					$id4img = 'xditem'.$item_id;
		?>

			<div class="card border-0">
				<div class="card-header">
					<img id="<?php echo $id4img; ?>" class="card-img-top img-front-product" style="background-image: url('<?php echo $domainhome; ?>storage/img/items/ITEM<?php echo $item_id.'.'.$extnem; ?>');" data-toggle="modal" data-target="#ymModalItemPreviewFront" onclick="getIdOnClick(this.id);" data-value="<?php echo $domainhome; ?>storage/img/items/ITEM<?php echo $item_id.'.'.$extnem; ?>">
				</div>
				<div class="card-body text-right">
					<h5 class="card-title"><?php echo $name; ?></h5>
					<p class="card-text"><?php echo $dcurrencyx.' '.$sell_price; ?></p>
					<div class="text-center"><a href="#" class="btn btn-link">See details</a></div>		
				</div>
				<div class="card-footer">
					<a href="#" class="btn btn-danger w-100">Add to Cart</a>
				</div>
			</div>

		<?php
				}
			} else {
		?>

			<div class="card border-0">
				<div class="card-header">
					<img class="card-img-top img-front-product" style="background-image: url('<?php echo $domainhome; ?>storage/img/no-image.jpg');" alt="No Item" data-toggle="modal" data-target="#ymModalItemPreviewFront">
				</div>
				<div class="card-body text-right">
					<h4 class="card-title">No Item</h4>
				</div>
			</div>

		<?php
			}
		?>

		</div>
	</div>
</div>

<div class="modal" id="ymModalItemPreviewFront">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close text-right mr-1" data-dismiss="modal">&times;</button>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-8">
						<img id="itmvwimgfl3" src="<?php echo $domainhome; ?>storage/img/no-image.jpg">
					</div>
					<div class="col-md-4">
						<p>Sample</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>