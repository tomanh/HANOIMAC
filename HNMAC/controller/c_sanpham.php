<?php 

	$column = $_GET['column'];

	$id = $_GET['id'];

	$product = $db->get2('product',$column,$id);


require_once('./view/v_timkiem.php');

 ?>