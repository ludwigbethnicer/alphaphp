<?php
	include_once "../../content/template-part/dashboard-navbar.php";
?>

<link rel="stylesheet" href="<?php echo $dirbak; ?>assets/datatables/1.11.3/css/jquery.dataTables.min.css">
<script src="<?php echo $dirbak; ?>assets/datatables/1.11.3/js/jquery.dataTables.min.js"></script>

<main class="page-content">
	<div class="container-fluid bg-light-opacity">
		<div class="d-flex">
			<h4 class="mr-2 mb-2">Order(s)</h4>
		</div>

		<div id="" class="table-responsive-sm">
			<table id="listRecView" class="table table-striped table-hover table-sm">
				<thead>
					<tr>
						<th class="text-left">Action</th>
						<th>Order#</th>
						<th>Receipt</th>
						<th>Total</th>
						<th>Ship Fee</th>
						<th>Sub-Total</th>
						<th>Qty</th>
						<th>Item(s)</th>
						<th>Date</th>
						<th>Remarks</th>
						<th>Status</th>
						<th>Reviewed</th>
						<th>Client</th>
						<th>Client Phone</th>
						<th>ClientID</th>
						<th>Address</th>
						<th>Receiver</th>
						<th>RPhone</th>
						<th>DLocation</th>
						<th>Map</th>
						<th>Courier</th>
						<th>Other Info.</th>
						<th>Modified</th>
					</tr>
				</thead>

				<tbody>
					<?php
						$tblname = "tbl_order_customer";
						$prim_id = "order_id";
						$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
						$qry = "SELECT * FROM {$tblname} WHERE deleted=0 ORDER BY {$prim_id} DESC";
						$stmt = $cnn->prepare($qry);
						$stmt->execute();

						for($i=0; $row = $stmt->fetch(); $i++) {
							$orderid=$row['order_id'];
							$receiptno=$row['receipt_no'];
							$totalall=$row['total_all'];
							$shippingfee=$row['shipping_fee'];
							$subtotal=$row['sub_total'];
							$subtotalqty=$row['sub_total_qty'];
							$subtotalitem=$row['sub_total_item'];
							$created2=$row['created'];
							$created=date_format(new DateTime($created2),'Y/m/d');
							$remarks=$row['remarks'];
							$status=$row['status'];
							$customername=$row['customer_name'];
							$phone=$row['phone'];
							$address=$row['address'];
							$receiver=$row['receiver'];
							$receiverphone=$row['receiver_phone'];
							$dlocation=$row['d_location'];
							$longlat=$row['long_lat'];
							$courier=$row['courier'];
							$otherinfo=$row['otherinfo'];
							$modified2=$row['modified'];
							$modified=date_format(new DateTime($modified2),'Y/m/d');
					?>

							<tr>
								<td class="text-left tbl-action">
									<a href="../../routes/item-order/editupdate?id=<?php echo $id; ?>" class="btn-sm btn-success btn-inline" title="Edit">
										<span class="far fa-edit"></span>
									</a>
									<a class="btn-sm btn-dark btn-inline ml-1" href="#" onclick="trash(<?php echo $id2; ?>)" title="Delete">
										<span class="fas fa-trash-alt"></span>
									</a>
								</td>
								<td data-filter="<?php echo $orderid; ?>"><?php echo $orderid; ?></td>
								<td data-filter="<?php echo $; ?>"><?php echo $; ?></td>














								<td data-filter="<?php echo $itemname; ?>"><?php echo $itemname; ?></td>
								<td data-filter="<?php echo $category; ?>"><?php echo $category; ?></td>
								<td data-filter="<?php echo $unit; ?>"><?php echo $unit; ?></td>
								<td data-filter="<?php echo $sell_price; ?>"><?php echo $sell_price; ?></td>
								<td class="d-none"><?php echo $sale_price; ?></td>
								<td class="d-none"><?php echo $supplier_price; ?></td>
								<td data-filter="<?php echo $stock_available; ?>"><?php echo $stock_available; ?></td>
								<td><?php echo $modified; ?></td>
								<td class="d-none"><?php echo $created; ?></td>
								<td class="d-none"><?php echo $barcode; ?></td>
								<td class="d-none"><?php echo $id; ?></td>
							</tr>
					<?php
						}
					?>
				</tbody>
				<tfoot>
					<tr>
						<td class="remove-dropdown"></td>
						<td class="remove-dropdown"></td>
						<td>Category</td>
						<td>Unit</td>
						<td class="remove-dropdown"></td>
						<td class="remove-dropdown d-none"></td>
						<td class="remove-dropdown d-none"></td>
						<td>Stock</td>
						<td class="remove-dropdown"></td>
						<td class="remove-dropdown d-none"></td>
						<td class="remove-dropdown d-none"></td>
						<td class="remove-dropdown d-none"></td>
						<td class="remove-dropdown"></td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</main>

<script type="text/javascript">
	$(document).ready( function () {
		$('#listRecView').DataTable( {
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
					/** Filter Group for each column End **/

					/** Search for each column Start **/
					// var that = this;
					// var input = $('<input type="text" placeholder="Search" />')
					// .appendTo($(this.footer()).empty())

					// .on('keyup change', function() {
					// 	if (that.search() !== this.value) {
					// 		that
					// 		.search(this.value)
					// 		.draw();
					// 	}
					// });
					/** Search for each column End **/

				});
			}
		} );
	});	

	function trash(id) {
		var answer = confirm('Delete record Ctrl#'+id+' ?');
		if (answer) {
			window.location = '../../content/view/item-order/deteled.php?upidid=' + id;
		} 
	}
</script>