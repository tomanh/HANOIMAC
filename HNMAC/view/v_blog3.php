<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name = "viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../img/favicon.ico" />
	<title>Hướng dẫn cài đặt lại Macbook M1 bằng USB, Ổ cứng di động...</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/blog.css">
</head>
<body>
	<?php $_SESSION['rdrurl'] = $_SERVER['REQUEST_URI'];?>
<div style="width: 100%; height: 45px; background: #0c1a1e;">
<div class ="container">
	<!--PHẦN 1-->
	<div class="row" id="header">		
			<div class="col-md-5">
				<p class="text-left" style="margin-top: 5px;">CÔNG NGHỆ PHỤC VỤ CUỘC SỐNG</p>
				<p class="text-left" style="margin-top: -5px;"><span class="glyphicon glyphicon-home"></span> 146 Trần Phú - P.Mộ Lao - Hà Đông - Hà Nội | <span class="glyphicon glyphicon-time"></span> 8h00 - 22h00</p>
			</div>
			<div id="login">
				<?php if(isset($_SESSION['ss_admin_nhanvien'])){
							if ($_SESSION['chucvu']=='Quản lý') {?>
							 	<div class="dropdown">
								Xin chào! <b style="color: red"><?php echo $_SESSION['chucvu'] ?></b> <a style="width: 185px; color: white; background: #272F31; font-size: 16px;" href="" class="dropdown-toggle btn" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['fullname'] ?> <span class="glyphicon glyphicon-menu-down"></span></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href=""><span class="glyphicon glyphicon-info-sign"></span> Thông tin cá nhân</a></li>
									<li><a href="?controller=quanlynhanvien"><span class="glyphicon glyphicon-heart"></span> Quản lý nhân viên</a></li>
									<li><a href="?controller=quanlydonhang"><span class="glyphicon glyphicon-shopping-cart"></span> Quản lý đơn hàng</a></li>
									<li class="divider"></li>
									<li><a href="?controller=logout"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a></li>
								</ul>
								</div>
						<?php } if ($_SESSION['chucvu']=='Nhân viên') {?>
							 	<div class="dropdown">
								Xin chào! <b style="color: red"><?php echo $_SESSION['chucvu'] ?></b> <a style="width: 185px; color: white; background: #272F31; font-size: 16px;" href="#" class="dropdown-toggle btn" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['fullname'] ?> <span class="glyphicon glyphicon-menu-down"></span></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href=""><span class="glyphicon glyphicon-info-sign"></span> Thông tin cá nhân</a></li>
									<li><a href="?controller=quanlydonhang"><span class="glyphicon glyphicon-heart"></span> Quản lý đơn hàng</a></li>
									<li class="divider"></li>
									<li><a href="?controller=logout"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a>				</li>
								</ul>
								</div>
						
						<?php } if ($_SESSION['chucvu']=='Khách') {?>
							 	<div class="dropdown">
								Xin chào! <a style="width: 185px; color: white; background: #272F31; font-size: 16px;" href="#" class="dropdown-toggle btn" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['fullname'] ?> <span class="glyphicon glyphicon-menu-down"></span></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href=""><span class="glyphicon glyphicon-info-sign"></span> Thông tin cá nhân</a></li>
									<li><a href=""><span class="glyphicon glyphicon-heart"></span> Sản phẩm yêu thích</a></li>
									<li><a href="?controller=giohang"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</a></li>
									<li class="divider"></li>
									<li><a href="?controller=logout"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a>				</li>
								</ul>
								</div>
							  
				
				<?php }} else{ ?>
				<form action="?controller=trangchu" method="post" class="form-inline">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</div>
							<input style="width: 160px;" type="text" name="username" class="form-control" placeholder="Tên tài khoản" value="<?php echo (isset($username))?$username:'' ?>">				
						</div>
														
					</div>

					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
							</div>
							<input style="width: 160px;" type="password" name="password" class="form-control" placeholder="Mật khẩu" value="<?php echo (isset($password))?$password:'' ?>">					
						</div>
											
					</div>

					<div class="form-group">
						<input style="background: #0c1a1e; color: white; font-size: 11px; border: 1px solid white; width: 80px;" type="submit" name="btn-login" value="Đăng nhập" class="btn">
					</div>
					<div class="form-group">
						<a href="?controller=dangky" style="background: #0c1a1e; color: white; font-size: 11px; border: 1px solid white; width: 80px;" class="btn">Đăng ký</a>
					</div>							
				</form>
				<div id="error" style="background: white; margin-bottom: -50px; line-height: 30px; color: red; font-size: 13px;">
							<?php if (isset($error['username'])) {?>
								<span><?php echo $error['username'] ?></span>			
							<?php } ?>

							<?php if (isset($error['password'])) {?>
								<span style="margin-left: 20px;"><?php echo $error['password'] ?></span>			
							<?php } ?>
				</div>	
				<?php } ?>
			</div>		
	</div>		

	<!--PHẦN 2-->
	<div class="row"  style="height: 80px;">
		<nav class="col-sm-12">
		<!--PHẦN 2.1 Logo-->
		<div class=" col-sm-2">
			<a href="?controller=trangchu"><img width="250px" src="../img/machn.png"></a>
		</div>
		<!--PHẦN 2.2 Search-->
		<div class="col-sm-4 col-sm-offset-1" style="line-height: 70px;">
			<form name="search" action="index.php" method="get" class="navbar-form navbar-left">
				<div class="form-group">
					<input type="hidden" name="controller" value="timkiem">
					<input style="border: 1px solid #0c1a1e;" type="search" name="keyword" class="form-control input-md" placeholder="Nhập từ khoá..." value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword']:'' ?>">
					<button type="submit" class="btn btn-md" id="search"><span class="glyphicon glyphicon-search"></span></button>
				</div>				
			</form>
		</div>
		<!--PHẦN 2.3 LINK ICON-->	
		<div id="glyphicon1" class="col-sm-5 navbar-collase">
			<ul  class="nav navbar-nav" style="margin-top: 10px;">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fas fa-map-marker-alt" ></span> Địa điểm</a>
					<ul class="dropdown-menu dropdown-menu-left" style="width: 400px; height: 200px;">
						<li style="margin: -10px;"><a style="font-size: 12px;" href="">CN1: 146 Trần Phú - P.Mộ Lao - Hà Đông - Hà Nội | SĐT: 0974573983</a></li>
						<li style="margin: -10px;"><a style="font-size: 12px;" href="">CN1: 146 Trần Phú - P.Mộ Lao - Hà Đông - Hà Nội | SĐT: 0974573983</a></li>
						<li style="margin: -10px;"><a style="font-size: 12px;" href="">CN1: 146 Trần Phú - P.Mộ Lao - Hà Đông - Hà Nội | SĐT: 0974573983</a></li>
						<li style="margin: -10px;"><a style="font-size: 12px;" href="">CN1: 146 Trần Phú - P.Mộ Lao - Hà Đông - Hà Nội | SĐT: 0974573983</a></li>
					</ul>
				</li>
				<li><a href="?controller=giohang"><span style="font-size: 12px;background: red;" class="badge"><?php if (!empty($_SESSION['cart'])) {echo count($_SESSION['cart']);} ?></span><span class="fas fa-cart-plus"></span> Giỏ hàng</a></li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-phone-alt"></span> Hotline</a>
					<ul class="dropdown-menu dropdown-menu-right">
						<li style="margin: -10px;"><a style="font-size: 12px;" href="">Hotline bán hàng: 0977 728 880</a></li>
						<li style="margin: -10px;"><a style="font-size: 12px;" href="">Phản ảnh chất lượng dịch vụ: 097 640 0401</a></li>
						<li style="margin: -10px;"><a style="font-size: 12px;" href="">HNSERVICE (BẢO HÀNH – DỊCH VỤ): 0941 161 666</a></li>
					</ul>
				</li>
			</ul>
		</div>				
		</nav>
		
	</div>

	<!--PHẦN 3 -->
	<div class="row glyphicon2">
		<!--PHẦN 3.1 (THANH TRANG CHỦ) -->
		<div class="col-sm-12">
			<ul class="dropdown list-group col-sm-3" style="background: #0c1a1e; height: 45px;line-height: 45px;">
			
					<a class="col-sm-1" href="?controller=trangchu"><span style="color: white;" class="glyphicon glyphicon-home"></span></a>
					<a class="col-sm-10" href="" style="font-size: 16px; font-weight: normal; color: white; text-decoration: none">DANH MỤC SẢN PHẨM</a>
					<span style="color: white; margin-left: -20px;" class="glyphicon glyphicon-menu-down"></span>
					
			<div class="dropdown-menu dropdown-content" style="border: 0">
				<div class="dropdown dropdown2 dropright" style="width: 100%">
					<a href="?controller=sanpham&column=product_status&id=1" class="list-group-item"><span class="fab fa-apple" style="font-size: 25px;"></span> HÀNG MỚI<span" class="pull-right glyphicon glyphicon-menu-right"></span></a>
					<div class="dropdown-menu dropdown-content2" style="border: 0">
						<div class="dropdown3 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=1&catalog_id=1" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> MAC MINI-MAC PRO<span" class="pull-right glyphicon glyphicon-menu-right"></span></a>
      							<div class="dropdown-menu dropdown-content3" style="border: 0">
      								<a href="?controller=sanpham2&product_status=1&amount=20" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2020<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=19" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2019<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=18" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2018<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=17" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2017<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=16" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2016<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=15" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2015<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=120" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2020<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=119" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2019<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=118" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2018<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=117" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2017<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=116" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2016<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=115" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2015<span"></a>
      							</div>
      					</div>
      					<div class="dropdown3 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=1&catalog_id=2" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> APPLE IPAD<span class="pull-right glyphicon glyphicon-menu-right"></a>
      							<div class="dropdown-menu dropdown-content3" style="border: 0">
      								<a href="?controller=sanpham2&product_status=1&amount=24" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Air<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=23" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Mini<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=21" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=22" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro M1<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=25" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad 10.2 inch<span"></a>
      							</div>
      					</div>
						<a href="?controller=sanpham1&product_status=1&catalog_id=3" class="list-group-item"><span class="fas fa-mobile-alt" style="font-size: 18px;"></span> APPLE IPHONE</a>
						<div class="dropdown3 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=1&catalog_id=4" class="list-group-item"><span><img style="width: 15px;" src="../img/applewatch.png"></span> APPLE WATCH<span class="pull-right glyphicon glyphicon-menu-right"></a>
      							<div class="dropdown-menu dropdown-content3" style="border: 0">
      								<a href="?controller=sanpham2&product_status=1&amount=33" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S3<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=34" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S5<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=35" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S6<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=36" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch SE<span"></a>
      							</div>
      				</div>
						
						<a href="?controller=sanpham1&product_status=1&catalog_id=5" class="list-group-item"><span><img style="width: 22px;" src="../img/airpodpro.png"></span>TAI NGHE AIR POD</a>	
    				</div>
				</div>
				<div class="dropdown dropdown2 dropright" style="width: 100%">
					<a style="margin-right:;" href="?controller=sanpham&column=product_status&id=2" class="list-group-item"><span class="fas fa-ambulance" style="font-size: 18px;"></span> HÀNG CPO <span class="pull-right glyphicon glyphicon-menu-right"></span></a>
					<div class="dropdown-menu dropdown-content2" style="border: 0">
						<div class="dropdown3 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=2&catalog_id=1" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> MAC MINI-MAC PRO<span" class="pull-right glyphicon glyphicon-menu-right"></span></a>
      							<div class="dropdown-menu dropdown-content3" style="border: 0">
      								<a href="?controller=sanpham2&product_status=2&amount=20" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2020<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=19" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2019<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=18" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2018<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=17" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2017<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=16" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2016<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=15" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2015<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=120" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2020<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=119" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2019<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=118" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2018<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=117" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2017<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=116" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2016<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=115" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2015<span"></a>
      							</div>
      					</div>
      					<div class="dropdown3 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=2&catalog_id=2" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> APPLE IPAD<span class="pull-right glyphicon glyphicon-menu-right"></a>
      							<div class="dropdown-menu dropdown-content3" style="border: 0">
      								<a href="?controller=sanpham2&product_status=2&amount=24" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Air<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=23" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Mini<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=21" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=22" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro M1<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=25" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad 10.2 inch<span"></a>
      							</div>
      					</div>
						<a href="?controller=sanpham1&product_status=2&catalog_id=3" class="list-group-item"><span class="fas fa-mobile-alt" style="font-size: 18px;"></span> APPLE IPHONE</a>
						<div class="dropdown3 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=2&catalog_id=4" class="list-group-item"><span><img style="width: 15px;" src="../img/applewatch.png"></span> APPLE WATCH<span class="pull-right glyphicon glyphicon-menu-right"></a>
      							<div class="dropdown-menu dropdown-content3" style="border: 0">
      								<a href="?controller=sanpham2&product_status=2&amount=33" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S3<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=34" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S5<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=35" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S6<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=36" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch SE<span"></a>
      							</div>
      					</div>

						
						<a href="?controller=sanpham1&product_status=2&catalog_id=5" class="list-group-item"><span><img style="width: 22px;" src="../img/airpodpro.png"></span>TAI NGHE AIR POD</a>	
    				</div>
				</div>
				<div class="dropdown dropdown2 dropright" style="width: 100%">
					<a href="?controller=sanpham&column=product_status&id=3" class="list-group-item"><span class="fas fa-exchange-alt" style="font-size: 18px;"></span> HÀNG THANH LÝ<span class="pull-right glyphicon glyphicon-menu-right"></span></a>
					<div class="dropdown-menu dropdown-content2" style="border: 0">
						<div class="dropdown3 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=3&catalog_id=1" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> MAC MINI-MAC PRO<span" class="pull-right glyphicon glyphicon-menu-right"></span></a>
      							<div class="dropdown-menu dropdown-content3" style="border: 0">
      								<a href="?controller=sanpham2&product_status=3&amount=20" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2020<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=19" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2019<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=18" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2018<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=17" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2017<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=16" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2016<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=15" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2015<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=120" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2020<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=119" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2019<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=118" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2018<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=117" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2017<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=116" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2016<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=115" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2015<span"></a>
      							</div>
      					</div>
      					<div class="dropdown3 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=3&catalog_id=2" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> APPLE IPAD<span class="pull-right glyphicon glyphicon-menu-right"></a>
      							<div class="dropdown-menu dropdown-content3" style="border: 0">
      								<a href="?controller=sanpham2&product_status=3&amount=24" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Air<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=23" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Mini<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=21" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=22" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro M1<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=25" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad 10.2 inch<span"></a>
      							</div>
      					</div>
						<a href="?controller=sanpham1&product_status=3&catalog_id=3" class="list-group-item"><span class="fas fa-mobile-alt" style="font-size: 18px;"></span> APPLE IPHONE</a>
						<div class="dropdown3 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=3&catalog_id=4" class="list-group-item"><span><img style="width: 15px;" src="../img/applewatch.png"></span> APPLE WATCH<span class="pull-right glyphicon glyphicon-menu-right"></a>
      							<div class="dropdown-menu dropdown-content3" style="border: 0">
      								<a href="?controller=sanpham2&product_status=3&amount=33" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S3<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=34" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S5<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=35" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S6<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=36" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch SE<span"></a>
      							</div>
      					</div>

						
						<a href="?controller=sanpham1&product_status=3&catalog_id=5" class="list-group-item"><span><img style="width: 22px;" src="../img/airpodpro.png"></span>TAI NGHE AIR POD</a>	
    				</div>
				</div>			
				<div class="dropdown dropdown2 dropright" style="width: 100%">
					<a href="?controller=sanpham&column=catalog_id&id=1" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> MAC MINI-MAC PRO<span class="pull-right glyphicon glyphicon-menu-right"></span></a>
      							<div class="dropdown-menu dropdown-content2" style="border: 0">
      								<a href="?controller=sanpham&column=amount&id=20" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2020<span"></a>
      								<a href="?controller=sanpham&column=amount&id=19" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2019<span"></a>
      								<a href="?controller=sanpham&column=amount&id=18" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2018<span"></a>
      								<a href="?controller=sanpham&column=amount&id=17" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2017<span"></a>
      								<a href="?controller=sanpham&column=amount&id=16" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2016<span"></a>
      								<a href="?controller=sanpham&column=amount&id=15" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Pro 2015<span"></a>
      								<a href="?controller=sanpham&column=amount&id=120" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2020<span"></a>
      								<a href="?controller=sanpham&column=amount&id=119" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2019<span"></a>
      								<a href="?controller=sanpham&column=amount&id=118" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2018<span"></a>
      								<a href="?controller=sanpham&column=amount&id=117" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2017<span"></a>
      								<a href="?controller=sanpham&column=amount&id=116" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2016<span"></a>
      								<a href="?controller=sanpham&column=amount&id=115" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> Macbook Air 2015<span"></a>
      							</div>
      			</div>
				<div class="dropdown dropdown2 dropright" style="width: 100%">
					<a href="?controller=sanpham&column=catalog_id&id=2" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> APPLE IPAD<span class="pull-right glyphicon glyphicon-menu-right"></span></a>
      							<div class="dropdown-menu dropdown-content2" style="border: 0">
      								<a href="?controller=sanpham&column=amount&id=24" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Air<span"></a>
      								<a href="?controller=sanpham&column=amount&id=23" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Mini<span"></a>
      								<a href="?controller=sanpham&column=amount&id=21" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro<span"></a>
      								<a href="?controller=sanpham&column=amount&id=22" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro M1<span"></a>
      								<a href="?controller=sanpham&column=amount&id=25" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad 10.2 inch<span"></a>
      							</div>
      			</div>
				<div class="dropdown dropdown2 dropright" style="width: 100%">
					<a href="?controller=sanpham&column=catalog_id&id=3" class="list-group-item"><span class="fas fa-mobile-alt" style="font-size: 18px;"></span> APPLE IPHONE<span class="pull-right glyphicon glyphicon-menu-right"></span></a>
					<div class="dropdown-menu dropdown-content2" style="border: 0">
      					<a href="?controller=sanpham1&product_status=1&catalog_id=3" class="list-group-item"><span class="fab fa-apple" style="font-size: 25px;"></span> HÀNG MỚI</a>
      					<a style="margin-right:;" href="?controller=sanpham1&product_status=2&catalog_id=3" class="list-group-item"><span class="fas fa-ambulance" style="font-size: 18px;"></span> HÀNG CPO </a>
      					<a href="?controller=sanpham1&product_status=3&catalog_id=3" class="list-group-item"><span class="fas fa-exchange-alt" style="font-size: 18px;"></span> HÀNG THANH LÝ</a>
    				</div>
				</div>
				<div class="dropdown dropdown2 dropright" style="width: 100%">
					<a href="?controller=sanpham&column=catalog_id&id=4" class="list-group-item"><span><img style="width: 15px;" src="../img/applewatch.png"></span> APPLE WATCH<span class="pull-right glyphicon glyphicon-menu-right"></span></a>
      							<div class="dropdown-menu dropdown-content2" style="border: 0">
      								<a href="?controller=sanpham&column=amount&id=33" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S3<span"></a>
      								<a href="?controller=sanpham&column=amount&id=34" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S5<span"></a>
      								<a href="?controller=sanpham&column=amount&id=35" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S6<span"></a>
      								<a href="?controller=sanpham&column=amount&id=36" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch SE<span"></a>
      							</div>
      			</div>
				<div class="dropdown dropdown2 dropright" style="width: 100%">
					<a href="?controller=sanpham&column=catalog_id&id=5" class="list-group-item"><span><img style="width: 22px;" src="../img/airpodpro.png"></span>TAI NGHE AIR POD<span class="pull-right glyphicon glyphicon-menu-right"></span></a>
					<div class="dropdown-menu dropdown-content2" style="border: 0">
      					<a href="?controller=sanpham1&product_status=1&catalog_id=5" class="list-group-item"><span class="fab fa-apple" style="font-size: 25px;"></span> HÀNG MỚI</a>
      					<a style="margin-right:;" href="?controller=sanpham1&product_status=2&catalog_id=5" class="list-group-item"><span class="fas fa-ambulance" style="font-size: 18px;"></span> HÀNG CPO </a>
      					<a href="?controller=sanpham1&product_status=3&catalog_id=5" class="list-group-item"><span class="fas fa-exchange-alt" style="font-size: 18px;"></span> HÀNG THANH LÝ</a>
    				</div>
				</div>
    		</div>
			
			</ul>

			<div class="col-sm-9" style=" margin-left: -15px; ">
			<ul style="height: 46px; line-height: 46px; background: #0c1a1e; margin-left: -23px;" id="menu" class="nav nav-tabs">
				<li><a href="?controller=trangchu">TRANG CHỦ</a></li>
				<li><a href="?controller=subindex&sub=khuyenmai">KHUYẾN MẠI</a></li>
				<li><a href="?controller=subindex&sub=baohanh">BẢO HÀNH</a></li>
				<li><a href="?controller=subindex&sub=tragop">TRẢ GÓP</a></li>
				<li><a href="?controller=subindex&sub=vechungtoi">VỀ CHÚNG TÔI</a></li>
				<li><a href="?controller=subindex&sub=lienhe">LIÊN HỆ</a></li>
			</ul>
			</div>
		</div>

	</div>
</div>
<div class="container post">
	<div class="row col-md-9 ">
		<h2>Hướng dẫn cài đặt lại Macbook M1 bằng USB, Ổ cứng di động...</h2>
		<p>Có rất nhiều cách cài lại Macbook M1, như cài bằng Recovery, bằng cách Restore lại từ file IPSW... Dưới đây Hnmac sẽ hướng dẫn các bạn cài bằng USB để tiết kiệm thời gian ><br><br>

Chuẩn bị
- Máy cần cài sạch lại (MacBook Air M1 - MacBook Pro M1 - Mac Mini M1), chuẩn bị sẵn sạc tránh rủi ro
- Hub, cổng chuyển đổi Type C có cổng USB A
- 1 Usb dung lượng 16GB trở lên, hoặc ổ cứng di động, đã tạo bộ cài Bigsur trở lên (Mac M1 không cài được Catalina, Mojave...)</p><br>
		<img class="img-rounded" width="100%" src="../img/imgblog/blog3.1.jpg"><br><br>
		<p>Cắm Hub - Usb vào máy</p>
		<img class="img-rounded" width="100%" src="../img/imgblog/blog3.2.jpg"><br><br>
		<p>Tiếp theo chúng ta tắt máy, đợi 1 lúc cho máy tắt hẳn, nhấn giữ nút nguồn cho tới màn hình "Loading startup options..." thì nhả tay ra. Sau đó màn hình hiển thị 3 tuỳ chọn, nhấn vào "install MacOS BigSur" - Continue (Đây là USB - Ổ cứng đã tạo bộ cài)</p>
		<img class="img-rounded" width="100%" src="../img/imgblog/blog3.3.jpg"><br><br>
		<p>Nhìn lên góc trái trên, bấm "install MacOS BigSur" - Chọn Quit install MacOS</p>
		<img class="img-rounded" width="100%" src="../img/imgblog/blog3.4.jpg"><br><br>
		<p>Tại màn hình, chọn Disk Utility - Continue</p>
		<img class="img-rounded" width="100%" src="../img/imgblog/blog3.5.jpg"><br><br>
		<p>Tại màn hình Disk Utility, nhấn vào biểu tượng cửa sổ nhỏ, chọn "Show All Devices" - Sau đó Click vào ổ đĩa Apple SSD.. - Nhấn Erase</p>
		<img class="img-rounded" width="100%" src="../img/imgblog/blog3.6.jpg"><br>
		<img class="img-rounded" width="100%" src="../img/imgblog/blog3.7.jpg"><br><br>
		<p>Phần Name - đặt tên tuỳ ý, mặc định là Untitled, mình thường để Macintosh HD, 2 tuỳ chọn còn lại để mặc định như hình, sau đó nhấn Erase để xoá ổ cứng, Popup hiện ra chọn Erase Mac... - Popup tiếp chọn Erase Mac and Restart, đợi quá trình xoá hoàn tất</p>
		<img class="img-rounded" width="100%" src="../img/imgblog/blog3.8.jpg"><br>
		<img class="img-rounded" width="100%" src="../img/imgblog/blog3.9.jpg"><br><br>
		<p>Sau khi xoá xong máy sẽ khởi động lại vào màn hình Active - Kết nối Wifi để hoàn tất quá trình Active (Nếu trước khi xoá máy vẫn chưa thoát iCloud thì sẽ phải đăng nhập) - Máy active xong chọn Exit để quay trở lại Recovery.</p>
		<img class="img-rounded" width="100%" src="../img/imgblog/blog3.10.jpg"><br><br>
		<p>Ở màn hình Recovery - Shutdown máy</p>
		<img class="img-rounded" width="100%" src="../img/imgblog/blog3.11.jpg"><br><br>
		<p>Nhấn giữ nút nguồn, tiếp tục truy cập vào USB bộ cài (Phải chọn Usb chứa bộ cài - Nếu truy cập vào Option thì sẽ phải tốn thêm thời gian download OS) - Chọn ngôn ngữ máy. Tiếp theo chọn Continue</p>
		<img class="img-rounded" width="100%" src="../img/imgblog/blog3.12.jpg"><br><br>
		<p>Chọn ổ Untitled, nhấn Continue để bắt đầu, quá trình cài đặt mất khoảng 15 phút, nhanh hơn rất nhiều so với cài bằng Recovery vì bỏ qua giai đoạn Download</p>
		<img class="img-rounded" width="100%" src="../img/imgblog/blog3.13.jpg"><br>
		<img class="img-rounded" width="100%" src="../img/imgblog/blog3.14.jpg"><br><br>
		<p>Chờ hoàn tất, máy sẽ tự khởi động lại và vào màn hình thiết lập máy là xong.</p>
	</div>		
</div>
<!--PHẦN 5 (Địa chỉ sdt)-->
<div>
	<div class="col-sm-12 phan5" style="">
			<div class="col-sm-3 col-sm-offset-2">
				<h4>HNMAC - CHUYÊN MACBOOK CŨ MỚI</h4>
				<p>Chi nhánh Hà Nội: Số 4 Ngõ 9 Huỳnh Thúc Kháng,<br> P. Láng Hạ, Q. Đống Đa</p>
				<p>Chi nhánh Sài Gòn: 157 Lê Thị Riêng, Quận 1</p>
				<p>Giờ làm việc : 9h - 21h ( kể cả T7 CN )</p>
				<p>Hotline bán hàng: 0977 728 880</p>
				<p>Phản ảnh chất lượng dịch vụ: 097 640 0401</p>
				<a href="http://online.gov.vn/Home/WebDetails/49126"><img style="width: 150px; margin-bottom: 30px" src="../img/thongbao.png"></a>
			</div>

			<div class="col-sm-3">
				<h4>HNSERVICE - DỊCH VỤ SỬA CHỮA MACBOOK</h4>
				<p>HNSERVICE (BẢO HÀNH – DỊCH VỤ)</p>
				<p>Địa chỉ: Tầng 3, Số 4 Ngõ 9 Huỳnh Thúc Kháng, Đống Đa, Hà Nội</p>
				<p>Giờ làm việc: 08.30 – 17.30 ( Nghỉ Chủ nhật và ngày lễ )</p>
				<p>Giờ làm việc : 9h - 21h ( kể cả T7 CN )</p>
				<p>Hotline: 0941 161 666</p>
				<img src="../img/atm.png">				
			</div>

			<div class="col-sm-2"  style="margin-left: 60px;">
				<h4>CHĂM SÓC KHÁCH HÀNG</h4>
				<ul>
					<li><a href="">Quy định chung</a></li>
					<li><a href="">Chính sách bảo mật thông tin</a></li>
					<li><a href="">Chính sách bảo hành</a></li>
					<li><a href="">Chính sách vận chuyển</a></li>
					<li><a href="">Chính sách đổi trả hàng</a></li>
					<li><a href="">Điều khoản thanh toán</a></li>
					<li><a href="">FAQs</a></li>
				</ul>
				
			</div>
			
	</div>
</div>
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>