<?php 	//Kiểm tra người dùng có ấn nút xác nhận thanh toán không
	if (isset($_POST['btn-dangky'])) {
		//Lấy thông tin người dùng nhập ở form
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$fullname = $_POST['fullname'];

		//lấy id bảng admin_nhanvien
		$data = $db->get('admin_nhanvien',array());
		$id = $data[count($data)-1]['id']+1;

		$error= array();
		if ($username=='') {
			$error['username']="Tài khoản không được để trống";}
		if ($password=='') {
			$error['password']="Mật khẩu không được để trống";}
		if ($fullname=='') {
			$error['fullname']="Họ tên không được để trống";}
		if ($password!==$repassword) {
			$error['repassword']="Mật khẩu nhập lại không giống";}
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
			'chucvu'=>"Khách"
			));
		$dangky = $db->get('admin_nhanvien',array('username'=>$username, 'password'=>$password, 'fullname'=>$fullname,));
		}
		
	}

require_once('./view/v_dangky.php');
?>