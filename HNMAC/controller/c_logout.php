<?php 
	unset($_SESSION['ss_admin_nhanvien']);
	unset($_SESSION['fullname']);
	$_SESSION['chucvu'] ='';
	header('location: '.$_SESSION['rdrurl']);
?>