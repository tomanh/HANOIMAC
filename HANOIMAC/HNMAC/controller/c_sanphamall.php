<?php 

if (isset($_GET['product_status'])&&isset($_GET['catalog_id'])){
	$product_status = $_GET['product_status'];
	$catalog_id = $_GET['catalog_id'];
	$db->get('product','product_status'=>$product_status,'catalog_id'=>$catalog_id);
}
else if (isset($_GET['product_status'])&&isset($_GET['amount'])){
	$product_status = $_GET['product_status'];
	$amount = $_GET['amount'];
	$db->get('product','product_status'=>$product_status,'amount'=>$amount);
}
else if (isset($_GET['product_status'])&&isset($_GET['amount'])){
	$product_status = $_GET['product_status'];
	$amount = $_GET['amount'];
	$db->get('product','product_status'=>$product_status,'amount'=>$amount);
}
else if (isset($_GET['product_status'])){
	$product_status = $_GET['product_status'];
	$db->get('product','product_status'=>$product_status);
}
else if (isset($_GET['catalog_id'])){
	$catalog_id = $_GET['catalog_id'];
	$db->get('product','catalog_id'=>$catalog_id);
}
else if (isset($_GET['product_model'])){
	$product_model = $_GET['product_model'];
	$db->get('product','product_model'=>$product_model);
}
else if (isset($_GET['amount'])){
	$amount = $_GET['amount'];
	$db->get('product','amount'=>$amount);
}
else{
	echo "Lỗi";
}




require_once('./view/v_timkiem.php');

 ?>