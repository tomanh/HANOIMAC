<?php

$nhanvien = $db->get('admin_nhanvien',array('chucvu'=>'Nhân viên'));

if (isset($_GET['method'])) {
	$method = $_GET['method'];

switch ($method) {
	case 'add':
		$fullname=$_POST['fullname'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$data = $db->get('admin_nhanvien',array());
		$id = $data[count($data)-1]['id']+1;

		$error= array();
		if ($fullname=='') {
			$error['fullname']="Tên đầy đủ không được để trống";}
		if ($username=='') {
			$error['username']="Tài khoản không được để trống";
		}
		if ($password=='') {
			$error['password']="Mật khẩu không được để trống";}
		
		if (!$error) {
			$user = $db->get('admin_nhanvien',array('username'=>$username));
			if (!empty($user)) {
				$error['username']="Tên tài khoản đã tồn tại";}
			}

		if (!$error) {
		$db->insert('admin_nhanvien',array(
			'id'=>$id,
			'username'=>$username,
			'password'=>$password,
			'fullname'=>$fullname,
			'chucvu'=>'Nhân viên'
		));
	}
		else{
			require_once('./view/v_quanlynhanvien.php');
		}
		break;
	case 'edit':
		$id = $_GET['id'];
		$fullname=$_POST['fullname'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$db->update('admin_nhanvien',array(
			'username'=>$username,
			'password'=>$password,
			'fullname'=>$fullname
		),array(
			'id'=>$id
		));
		break;
	case 'delete':
		$id = $_GET['id'];
		$db->delete('admin_nhanvien', array('id'=>$id));
		break;

	default:
		# code...
		break;
}
header('location: ?controller=quanlynhanvien');
}

require_once('./view/v_quanlynhanvien.php');
 ?>