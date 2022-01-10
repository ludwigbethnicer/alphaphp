<?php
	include_once "../../content/theme/".$themename."/frontend-navbar.php";
	include_once "../../content/theme/".$themename."/carousel-header.php";

	$cnn_order = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
	$qry_order = "SELECT * FROM tbl_order_customer WHERE customer_id=:customeer_id AND remarks=:processed ORDER BY order_id DESC LIMIT 1";
	$stmt_order = $cnn_order->prepare($qry_order);
	$customeer_id = $_SESSION["usercode"];
	$processed = 'Process';
	$stmt_order->bindParam(':customeer_id', $customeer_id);
	$stmt_order->bindParam(':processed', $processed);
	$stmt_order->execute();
	$numorder = $stmt_order->rowCount();

	if ($numorder>0) {
		foreach ($stmt_order as $roworder) {
			$curr_ordr_id = $roworder['order_id'];
		}
	} else {
		echo "<script>window.location = '../../';</script>";
	}
?>

<link rel="stylesheet" href="../../assets/datatables/1.11.3/css/jquery.dataTables.min.css">
<script src="../../assets/datatables/1.11.3/js/jquery.dataTables.min.js"></script>

<div class="pt-5 pb-5">
	<div class="container">
		<div class="card">
			<div class="card-header">
				<label>Cart [Order#: <?php echo $curr_ordr_id; ?>]</label>
				<div class="float-right">
					<a href="">Refresh</a>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="listRecView9" class="table table-striped table-hover">
						<thead>
							<tr>
								<th>No.</th>
								<th class="d-none">Item ID</th>
								<th class="d-none">Barcode</th>
								<th colspan="2">Item</th>
								<th>Qty</th>
								<th>Unit</th>
								<th>Price</th>
								<th>Total</th>
								<th class="d-none">Modified</th>
								<th class="d-none">Created</th>
								<th class="d-none">Ctrl#</th>
								<th class="text-right">Action</th>
							</tr>
						</thead>

						<tbody>
							<?php
								$tblname = "tbl_order_item";
								$prim_id = "item_order_id";
								$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
								$qry = "SELECT * FROM {$tblname} WHERE order_id=:order_id ORDER BY {$prim_id} DESC";
								$stmt = $cnn->prepare($qry);
								$order_id = $curr_ordr_id;
								$stmt->bindParam(':order_id', $order_id);
								$stmt->execute();
								$cntme = $stmt->rowCount();
								$xno = 0;

								if ($cntme > 0) {

								} else {
									echo '<script>window.location=("../../");</script>';
								}

								for($i=0; $row = $stmt->fetch(); $i++) {
									$xno++;
									$item_id=$row['item_id'];
									$barcode=$row['barcode'];
									$extnem=$row['extnem'];
									$img_item='../../storage/img/items/ITEM'.$item_id.'.'.$extnem;
									$item_name=$row['item_name'];

									$qty=$row['qty'];
									$unit=$row['unit'];
									$price=$row['price'];
									$total_amt=$row['total_amt'];

									$modified2=$row['modified'];
									$modified=date_format(new DateTime($modified2),'Y/m/d');
									$created2=$row['created'];
									$created=date_format(new DateTime($created2),'Y/m/d');
									$id2=$row['item_order_id'];
							?>

									<tr>
										<td><?php echo $xno; ?></td>
										<td class="d-none" data-filter="<?php echo $item_id; ?>"><?php echo $item_id; ?></td>
										<td class="d-none" data-filter="<?php echo $barcode; ?>"><?php echo $barcode; ?></td>
										<td data-filter="<?php echo $img_item; ?>"><img class="w-30px" src="<?php echo $img_item; ?>"></td>
										<td data-filter="<?php echo $item_name; ?>"><?php echo $item_name; ?></td>
										<td data-filter="<?php echo $qty; ?>"><?php echo $qty; ?></td>
										<td data-filter="<?php echo $unit; ?>"><?php echo $unit; ?></td>
										<td data-filter="<?php echo $price; ?>"><?php echo $dcurrencyx.$price; ?></td>
										<td data-filter="<?php echo $total_amt; ?>"><?php echo $dcurrencyx.$total_amt; ?></td>
										<td class="d-none" data-filter="<?php echo $modified; ?>"><?php echo $modified; ?></td>
										<td class="d-none" data-filter="<?php echo $created; ?>"><?php echo $created; ?></td>
										<td class="d-none"><?php echo $id2; ?></td>
										<td class="text-right tbl-action">
											<a href="../../routes/mcart/editupdate?id=<?php echo $id2; ?>" class="btn-sm btn-success btn-inline" title="Edit">
												<span class="far fa-edit"></span>
											</a>
											<a class="btn-sm btn-dark btn-inline ml-1" href="#" onclick="trash(<?php echo $id2; ?>)" title="Delete">
												<span class="fas fa-trash-alt"></span>
											</a>
										</td>
									</tr>
							<?php
								}
							?>
						</tbody>
						<tfoot>
						<?php
							$cnn_sbtotal = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
							$qry_sbtotal = "SELECT SUM(total_amt) AS subtotal, COUNT(*) AS total_rows, SUM(qty) AS total_qty FROM tbl_order_item WHERE order_id=:order_id2";
							$stmt_sbtotal = $cnn_sbtotal->prepare($qry_sbtotal);
							$order_id2 = $curr_ordr_id;
							$stmt_sbtotal->bindParam(':order_id2', $order_id2);
							$stmt_sbtotal->execute();
							$row_sbtotal = $stmt_sbtotal->fetch(PDO::FETCH_ASSOC);
							$sbtotztal = number_format($row_sbtotal['subtotal'],2);
							$sbtotalrows = $row_sbtotal['total_rows'];
							$sbtotalqty = $row_sbtotal['total_qty'];
						?>
							<tr>
								<td><?php echo $sbtotalrows; ?></td>
								<td class="d-none"></td>
								<td class="d-none"></td>
								<td colspan="2"></td>
								<td><?php echo $sbtotalqty; ?></td>
								<td></td>
								<td>Sub-Total:</td>
								<td><?php echo $dcurrencyx.$sbtotztal; ?></td>
								<td></td>
							</tr>
						<?php
							
							$ordr_crid = $order_id2;
							$order_subttl = $sbtotztal;
							$order_totalrows = $sbtotalrows;
							$order_totalqty = $sbtotalqty;
							$cnn_ins_sum = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
							$qry_ins_sum = "UPDATE tbl_order_customer SET 
								sub_total			= '$order_subttl', 
								sub_total_qty		= '$order_totalqty', 
								sub_total_item		= '$order_totalrows'
								WHERE order_id		= '$ordr_crid' ";
							$cnn_ins_sum->exec($qry_ins_sum);
						?>
						</tfoot>
					</table>
				</div>
			</div>
			<div class="card-footer">
				<div class="row">
					<div class="col-sm-6 mb-2"></div>
					<div class="col-sm-6 mb-2 text-right">
						<a href="../../" class="text-dark text-decoration-none">
							<i>&#8592;</i> Back to Homepage
						</a>
						<?php
							if (empty($curr_ordr_id)) {
						
							} else {
						?>
							<a href="#" class="btn btn-danger" onclick="fnCheckOut(<?php echo $curr_ordr_id; ?>);return false;">
								<i class='fas fa-cart-plus'></i> Checkout
							</a>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	if ( empty($geomap) ) {
		echo "<p align='center'>Can't Load Map.</p>";
	} else {
		echo '<iframe class="responsive-iframe" src="https://maps.google.com/maps?q='.$geomap.'&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
	}
?>

<script type="text/javascript">
	$(document).ready( function () {
		$('#listRecView9').DataTable( {
			initComplete: function () {
				this.api().columns().every( function () {

					/** Filter Group for each column Start **/
					var column = this;
					var select = $('<select><option value=""></option></select>')
					.appendTo( $(column.footer()).empty() )
					.on( 'change', function () {
						var val = $.fn.dataTable.util.escapeRegex(
						$(this).val()
					);

					column
						.search( val ? '^'+val+'$' : '', true, false )
						.draw();
					});

					column.data().unique().sort().each( function ( d, j ) {
						select.append( '<option value="'+d+'">'+d+'</option>' )
					});
				});
			}
		} );
	});	

	function trash(id) {
		var answer = confirm('Delete record Ctrl#'+id+' ?');
		if (answer) {
			window.location = '../../content/view/mcart/deteled.php?upidid=' + id;
		} 
	}

	function fnCheckOut(chid) {
		var xconfrm;
		if (confirm("Proceed to checkout?")) {
			xconfrm = "Successfully checkout.";
			window.location = '../../content/view/mcart/checkout.php?chid=' + chid;
		} else {
			xconfrm = "Cancel checkout.";
			alert(xconfrm+' OrderID:['+chid+']');
		}
	}
</script>