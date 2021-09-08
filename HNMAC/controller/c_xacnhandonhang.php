<?php 

$id = $_GET['id'];

$method = $_GET['method'];

switch ($method) {
	case 'xacnhan':
		$db->update('oder',array(
		'status'=>'Đã xác nhận'
		),array(
		'id'=>$id
		));
		break;
	case 'huybo':	
		$db->update('oder',array(
		'status'=>'Chưa xác nhận'
		),array(
		'id'=>$id
		));
		break;
	case 'xoa':	
		$db->delete('oder',array(
		'id'=>$id
		));
		$db->delete('oder_detail2',array(
		'oder_id'=>$id
		));
		break;
	
	default:
		# code...
		break;
}

header('location:?controller=quanlydonhang');


 ?>