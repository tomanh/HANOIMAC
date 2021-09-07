<?php 

	$product_status = $_GET['product_status'];

	$catalog_id = $_GET['catalog_id'];

	$product = $db->get3('product',array("product_status=$product_status","catalog_id=$catalog_id"));




require_once('./view/v_timkiem.php');

 ?>