<?php 
$id = $_GET['id'];

$product = $db->get('product',array('id'=>$id));

foreach ($product as $key => $value) {
$page_title = $value['name'];}

require_once('./view/v_chitiet.php');

 ?>