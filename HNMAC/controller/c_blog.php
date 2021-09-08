<?php 
 $id = $_GET['id'];
 switch ($id) {
 	case '1':
 		require_once('./view/v_blog1.php');
 		break;
 	case '2':
 		require_once('./view/v_blog2.php');
 		break;
 	case '3':
 		require_once('./view/v_blog3.php');
 		break;
 	case '4':
 		require_once('./view/v_blog4.php');
 		break;
 	case '5':
 		require_once('./view/v_blog5.php');
 		break;
 	
 	default:
 		echo "Lỗi";
 		break;
 }
	
?>