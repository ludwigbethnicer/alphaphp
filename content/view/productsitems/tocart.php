<?php

	$temidid = $_GET['itemid'];
	$nowuid = $_GET['uid'];
	$nqty = $_GET['gqty'];
	include_once "../../../inc/srvr.php";

	$cnn2 = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
	$qry2 = "SELECT * FROM tbl_order_customer WHERE customer_id=:idcustomer AND remarks=:remarkx ORDER BY order_id DESC LIMIT 1";
	$stmt2 = $cnn2->prepare($qry2);
	$idcustomer = $nowuid;
	$remarkx = 'Process';
	$stmt2->bindParam(':idcustomer', $idcustomer);
	$stmt2->bindParam(':remarkx', $remarkx);
	$stmt2->execute();
	$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
	$cnt2 = $stmt2->rowCount();

	if ($cnt2 > 0) {
		$cnn8 = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
		$qry8 = "SELECT * FROM tblitem WHERE item_id=:itemid8 AND deletedx=0 LIMIT 1";
		$stmt8 = $cnn8->prepare($qry8);
		$itemid8 = $temidid;
		$stmt8->bindParam(':itemid8', $itemid8);
		$stmt8->execute();
		$row8 = $stmt8->fetch(PDO::FETCH_ASSOC);		
		$barcode8 = $row8['barcode'];
		$name8 = $row8['name'];
		$unit8 = $row8['unit'];
		$sellprice8 = $row8['sell_price'];
		$extnem8 = $row8['extnem'];
		$totalamt8 = $nqty*$sellprice8;

		$cnn9 = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
		$qry9 = "SELECT * FROM tbl_order_item WHERE order_id=:orderid9 AND item_id=:itemid9 AND deleted=0 LIMIT 1";
		$stmt9 = $cnn9->prepare($qry9);
		$orderid9 = $row2['order_id'];
		$itemid9 = $temidid;
		$stmt9->bindParam(':orderid9', $orderid9);
		$stmt9->bindParam(':itemid9', $itemid9);
		$stmt9->execute();
		$row9 = $stmt9->fetch(PDO::FETCH_ASSOC);
		$cnt9 = $stmt9->rowCount();
		$itemorderid9 = $row9['item_order_id'];
		$fqty8 = $nqty;
		$fqty9 = $row9['qty'];		
		$fqty9plus = $fqty8+$fqty9;
		$totalamt9 = $fqty9plus*$sellprice8;

		if($cnt9 > 0) {
			$cnn10 = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
			$qry10 = "UPDATE tbl_order_item SET 
				qty			= '$fqty9plus', 
				total_amt	= '$totalamt9'
				WHERE 
				item_order_id	= '$itemorderid9'
				";
			$cnn10->exec($qry10);
			echo '<script>window.open("../../../routes/productsitems/","_self");</script>';
		} else {
			$cnn11 = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
			$qry11 = "INSERT INTO tbl_order_item SET 
				order_id	= '$orderid9', 
				item_id		= '$itemid9', 
				barcode		= '$barcode8', 
				item_name	= '$name8', 
				qty			= '$fqty8', 
				unit		= '$unit8', 
				price		= '$sellprice8', 
				total_amt	= '$totalamt8', 
				extnem		= '$extnem8'
				";
			$cnn11->exec($qry11);

			echo '<script>window.open("../../../routes/productsitems/","_self");</script>';
		}
	} else {
		$cnn3 = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
		$qry3 = "INSERT INTO tbl_order_customer SET customer_id=:idcustomer3, remarks=:remarkx3, status=:statuz3, deleted=0";
		$stmt3 = $cnn3->prepare($qry3);
		$idcustomer3 = $nowuid;
		$remarkx3 = 'Process';
		$statuz3 = 'Unpaid';
		$stmt3->bindParam(':idcustomer3', $idcustomer3);
		$stmt3->bindParam(':remarkx3', $remarkx3);
		$stmt3->bindParam(':statuz3', $statuz3);
		$stmt3->execute();

		$cnn7 = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
		$qry7 = "SELECT * FROM tbl_order_customer WHERE customer_id=:idcustomer7 AND remarks=:remarkx7 AND status=:statuz7 AND deleted=0 ORDER BY order_id DESC LIMIT 1";
		$stmt7 = $cnn7->prepare($qry7);
		$idcustomer7 = $nowuid;
		$remarkx7 = 'Process';
		$statuz7 = 'Unpaid';
		$stmt7->bindParam(':idcustomer7', $idcustomer7);
		$stmt7->bindParam(':remarkx7', $remarkx7);
		$stmt7->bindParam(':statuz7', $statuz7);
		$stmt7->execute();
		$row7 = $stmt7->fetch(PDO::FETCH_ASSOC);
		$orderid7 = $row7['order_id'];

		$cnn6 = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
		$qry6 = "SELECT * FROM tblitem WHERE item_id=:itemid6 AND deletedx=0 LIMIT 1";
		$stmt6 = $cnn6->prepare($qry6);
		$itemid6 = $temidid;
		$stmt6->bindParam(':itemid6', $itemid6);
		$stmt6->execute();
		$row6 = $stmt6->fetch(PDO::FETCH_ASSOC);
		$orderid6 = $orderid7;
		$barcode6 = $row6['barcode'];
		$name6 = $row6['name'];
		$unit6 = $row6['unit'];
		$fqty6 = $nqty;
		$sellprice6 = $row6['sell_price'];
		$extnem6 = $row6['extnem'];
		$totalamt6 = $sellprice6*$fqty6;

		$cnn5 = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
		$qry5 = "INSERT INTO tbl_order_item SET 
			order_id	= '$orderid6', 
			item_id		= '$itemid6', 
			barcode		= '$barcode6', 
			item_name	= '$name6', 
			qty			= '$fqty6', 
			unit		= '$unit6', 
			price		= '$sellprice6', 
			total_amt	= '$totalamt6', 
			extnem		= '$extnem6'
			";
		$cnn5->exec($qry5);

		echo '<script>window.open("../../../routes/productsitems/","_self");</script>';
	}