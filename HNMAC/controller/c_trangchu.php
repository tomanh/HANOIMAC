<?php 
$product = $db->get('product',array());

	if (isset($_POST['btn-login'])) {
		$username= $_POST['username'];
		$password= $_POST['password'];
		$error= array();

		if ($username=='') {
			$error['username']="Tài khoản không được để trống";
		}

		if ($password=='') {
			$error['password']="Mật khẩu không được để trống";
		}

		if (!$error) {
			$user = $db->get('admin_nhanvien',array('username'=>$username));
			if (empty($user)) {
				$error['username']="Tài khoản này không tồn tại";
			}else{

				if ($password!=$user[0]['password']) {
					$error['password']="Mật khẩu bạn nhập sai";
				}
			}
		}

		if (!$error) {

			$_SESSION['ss_admin_nhanvien']=$user[0]['id'];
			$_SESSION['fullname']=$user[0]['fullname'];
			$_SESSION['chucvu']=$user[0]['chucvu'];
			
			header('location: '.$_SESSION['rdrurl']);
		}


	}

	require_once('./view/v_trangchu.php');
?>