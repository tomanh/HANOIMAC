<?php 
 $sub = $_GET['sub'];
 switch ($sub) {
 	case 'khuyenmai':
 		require_once('./view/v_khuyenmai.php');
 		break;
 	case 'baohanh':
 		require_once('./view/v_baohanh.php');
 		break;
 	case 'tragop':
 		require_once('./view/v_tragop.php');
 		break;
 	case 'vechungtoi':
 		require_once('./view/v_vechungtoi.php');
 		break;
 	case 'lienhe':
 		require_once('./view/v_lienhe.php');
 		break;
 	case 'banner':
 		require_once('./view/v_banner.php');
 		break;
 			
 	default:
 		echo "Lỗi";
 		break;
 }
	
?>