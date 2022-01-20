<?php
	include_once "../../content/template-part/dashboard-navbar.php";
?>

<link rel="stylesheet" href="<?php echo $dirbak; ?>assets/datatables/1.11.3/css/jquery.dataTables.min.css">
<script src="<?php echo $dirbak; ?>assets/datatables/1.11.3/js/jquery.dataTables.min.js"></script>

<style type="text/css">
	.table-responsive select {
		min-width: 80px;
	}

	.table-responsive .table thead th {
		vertical-align: unset;
	}
</style>

<main class="page-content">
	<div class="container-fluid bg-light-opacity">
		<div class="d-flex">
			<h4 class="mr-2 mb-2">Order(s)</h4>
		</div>

		<div class="table-responsive">
			<table id="listRecView" class="table table-striped table-hover">
				<thead id="remSortH">
					<tr>
						<th class="remove-dropdown"></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th class="remove-dropdown"></th>
						<th></th>
						<th class="remove-dropdown"></th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</thead>

				<thead id="theadtitle">
					<tr>
						<th class="text-left">Action</th>
						<th>Date</th>
						<th>Remarks</th>
						<th>Status</th>
						<th>Order#</th>
						<th>Receipt</th>
						<th>Total</th>
						<th>Ship Fee</th>
						<th>Sub-Total</th>
						<th>Qty</th>
						<th>Item(s)</th>
						<th>Client</th>
						<th>Client Phone</th>
						<th>ClientID</th>
						<th>Client Email</th>
						<th>Address</th>
						<th>Receiver</th>
						<th>RPhone</th>
						<th>Receiver Email</th>
						<th>DLocation</th>
						<th>Map</th>
						<th>Courier</th>
						<th>Other Info.</th>
						<th>Reviewed</th>
						<th>Approved</th>
						<th>Modified</th>
					</tr>
				</thead>

				<tbody>
					<?php
						$tblname = "tbl_order_customer";
						$prim_id = "order_id";
						$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
						$qry = "SELECT * FROM {$tblname} WHERE deleted=0 AND remarks<>:rmrkz ORDER BY {$prim_id} DESC";
						$stmt = $cnn->prepare($qry);
						$rmrkz = 'Process';
						$stmt->bindParam(':rmrkz', $rmrkz);
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
							$customerid=$row['customer_id'];
							$address=$row['address'];
							$receiver=$row['receiver'];
							$receiverphone=$row['receiver_phone'];
							$dlocation=$row['d_location'];
							$longlat=$row['long_lat'];
							$courier=$row['courier'];
							$otherinfo=$row['otherinfo'];
							$reviewby=$row['review_by'];
							$approvedby=$row['approved_by'];
							$modified2=$row['modified'];
							$modified=date_format(new DateTime($modified2),'Y/m/d');
							$cemail=$row['cemail'];
							$remail=$row['remail'];
					?>

							<tr>
								<td class="text-center tbl-action">
									<a href="#" class="btn-sm btn-success btn-inline" title="Edit">
										<span class="far fa-edit"></span>
									</a>
									<a class="btn-sm btn-dark btn-inline ml-1" href="#" title="Delete">
										<span class="fas fa-trash-alt"></span>
									</a>
								</td>
								<td data-filter="<?php echo $created; ?>"><?php echo $created; ?></td>
								<td data-filter="<?php echo $remarks; ?>"><?php echo $remarks; ?></td>
								<td data-filter="<?php echo $status; ?>"><?php echo $status; ?></td>
								<td data-filter="<?php echo $orderid; ?>"><?php echo $orderid; ?></td>
								<td data-filter="<?php echo $receiptno; ?>"><?php echo $receiptno; ?></td>
								<td data-filter="<?php echo $totalall; ?>"><?php echo $totalall; ?></td>
								<td data-filter="<?php echo $shippingfee; ?>"><?php echo $shippingfee; ?></td>
								<td data-filter="<?php echo $subtotal; ?>"><?php echo $subtotal; ?></td>
								<td data-filter="<?php echo $subtotalqty; ?>"><?php echo $subtotalqty; ?></td>
								<td data-filter="<?php echo $subtotalitem; ?>"><?php echo $subtotalitem; ?></td>
								<td data-filter="<?php echo $customername; ?>"><?php echo $customername; ?></td>
								<td data-filter="<?php echo $phone; ?>"><?php echo $phone; ?></td>
								<td data-filter="<?php echo $customerid; ?>"><?php echo $customerid; ?></td>
								<td data-filter="<?php echo $cemail; ?>"><?php echo $cemail; ?></td>
								<td data-filter="<?php echo $address; ?>"><?php echo $address; ?></td>
								<td data-filter="<?php echo $receiver; ?>"><?php echo $receiver; ?></td>
								<td data-filter="<?php echo $receiverphone; ?>"><?php echo $receiverphone; ?></td>
								<td data-filter="<?php echo $remail; ?>"><?php echo $remail; ?></td>
								<td data-filter="<?php echo $dlocation; ?>"><?php echo $dlocation; ?></td>
								<td><?php echo $longlat; ?></td>
								<td data-filter="<?php echo $courier; ?>"><?php echo $courier; ?></td>
								<td><?php echo $otherinfo; ?></td>
								<td data-filter="<?php echo $reviewby; ?>"><?php echo $reviewby; ?></td>
								<td data-filter="<?php echo $approvedby; ?>"><?php echo $approvedby; ?></td>
								<td data-filter="<?php echo $modified; ?>"><?php echo $modified; ?></td>
							</tr>
					<?php
						}
					?>
				</tbody>
				<tfoot>
					<tr>
						<td class="remove-dropdown"></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="remove-dropdown"></td>
						<td></td>
						<td class="remove-dropdown"></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tfoot>
			</table>
		</div>

		<div id="trnsfrPaginate" class="dataTables_wrapper"></div>
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
					.appendTo( $(column.header()).empty() )
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
				});
			}
		});

		$("#listRecView_info, #listRecView_paginate").detach().appendTo('#trnsfrPaginate');

		$(".remove-dropdown select").remove();
		$(".remove-dropdown").removeClass('sorting');
		$(".remove-dropdown").removeClass('sorting_asc');
		$(".remove-dropdown").removeClass('sorting_desc');

		$('.table-responsive table.dataTable thead .sorting').on('click', function(event) {
			$(".remove-dropdown select").remove();
			$(".remove-dropdown").removeClass('sorting');
			$(".remove-dropdown").removeClass('sorting_asc');
			$(".remove-dropdown").removeClass('sorting_desc');
		});
	});

	function trash(id) {
		var answer = confirm('Delete record Ctrl#'+id+' ?');
		if (answer) {
			window.location = '../../content/view/item-order/deteled.php?upidid=' + id;
		} 
	}
</script>

<?php
	// https://datatables.net/examples/api/show_hide.html
?>