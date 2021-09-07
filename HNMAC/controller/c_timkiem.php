<?php 

if(isset($_GET["keyword"])) {
	$keyword = $_GET["keyword"];

	$product = $db->search("product","name",$keyword);	
}
else{
	$product = $db->get('product',array());
}

require_once('./view/v_timkiem.php');


 ?>