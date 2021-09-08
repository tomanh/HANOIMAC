<?php 

	$product_status = $_GET['product_status'];

	$amount = $_GET['amount'];

	$product = $db->get3('product',array("product_status=$product_status","amount=$amount"));




require_once('./view/v_timkiem.php');

 ?>