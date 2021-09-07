<?php 	//Kiểm tra người dùng có ấn nút xác nhận thanh toán không
	if (isset($_POST['btn_xacnhan'])) {
		
		$full_name = $_POST['full_name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];

		$data_oder = $db->get('oder',array());
		foreach ($data_oder as $key => $value) {
			$oder_id = $data_oder[count($data_oder)-1]['id'];
		}
		$oder_id+=1;

		$amount = 0;
		foreach ($_SESSION['cart'] as $key => $value) {
			$amount += $value['sl']*$value['price'];
		}
		
		$db->insert('oder',array(
			'id'=>$oder_id,
			'fullname'=>$full_name,
			'address'=>$address,
			'phone'=>$phone,
			'email'=>$email,
			'amount'=>$amount,
			'status'=>'Chưa xác nhận'
		));


		
		$data_oder_detail = $db->get('oder_detail2',array());
		foreach ($data_oder_detail as $key => $value) {
			$oder_detail_id = $data_oder_detail[count($data_oder_detail)-1]['id'];
		}

		
		foreach ($_SESSION['cart'] as $key => $value) {
			$db->insert('oder_detail2',array(
				'id'=>$oder_detail_id+=1,
				'oder_id'=>$oder_id,
				'product_id'=>$value['id'],
				'qty'=>$value['sl'],
				'price'=>$value['price'],
				'amount'=>$value['sl']*$value['price']
			));
		}
		
	}
unset($_SESSION['cart']);
header('location: ?controller=thanhtoanthanhcong');
?>