<?php
session_start();
require_once ('./model/m_database.php');
$db = new database();

if (isset($_GET['controller'])){
	$controller = $_GET['controller'];
}
else{
	$controller = 'trangchu';
}

switch ($controller) {
	case 'trangchu':
		require_once('./controller/c_trangchu.php');
		break;
	case 'logout':
		require_once('./controller/c_logout.php');
		break;
	case 'dangky':
		require_once('./controller/c_dangky.php');
		break;
	case 'quanlydonhang':
		require_once('./controller/c_quanlydonhang.php');
		break;
	case 'xacnhandonhang':
		require_once('./controller/c_xacnhandonhang.php');
		break;
	case 'quanlynhanvien':
		require_once('./controller/c_xulynhanvien.php');
		break;
	case 'xulynhanvien':
		require_once('./controller/c_xulynhanvien.php');
		break;
	case 'editnhanvien':
		require_once('./view/v_editnhanvien.php');
		break;
	case 'chitiet':
		require_once('./controller/c_chitiet.php');
		break;	
	case 'timkiem':
		if (!($_GET["keyword"])) {
			require_once('./controller/c_trangchu.php');
		}
		else{
			require_once('./controller/c_timkiem.php');
		}
		break;
	
	case 'sanpham':
		require_once('./controller/c_sanpham.php');
		break;
	case 'sanpham1':
		require_once('./controller/c_sanpham1.php');
		break;
	case 'sanpham2':
		require_once('./controller/c_sanpham2.php');
		break;
	case 'tatcasanpham':
		require_once('./controller/c_tatcasanpham.php');
		break;
	case 'giohang':
			require_once('./view/v_giohang.php');
			break;

	case 'add_giohang':
			require_once('./controller/c_addgiohang.php');
			break;
	case 'xuli_cart':
			require_once('./controller/c_xulygiohang.php');
			break;
	case 'thanhtoangiohang':
			require_once('./view/v_thanhtoan.php');
			break;
	case 'thanhtoanthanhcong':
			require_once('./view/v_thanhtoan.php');
			break;
	case 'thanhtoan':
			require_once('./controller/c_thanhtoan.php');
			break;
	case 'blog':
			require_once('./controller/c_blog.php');
			break;
	case 'subindex':
			require_once('./controller/c_subindex.php');
			break;
	case 'test':
			require_once('./controller/c_test.php');
			break;	
	default:
		echo "Lỗi từ index.php rồi đại vương ơi!";
		break;
}

 ?>