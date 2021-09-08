<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name = "viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../img/favicon.ico" />
	<title>HNMAC</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/timkiem1.css">
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
		<!--PHẦN Logo-->
		<div class=" col-sm-2">
			<a href="?controller=trangchu" class=""><img width="250px" src="../img/machn.png"></a>
		</div>
		<!--PHẦN Search-->
		<div class="col-sm-4 col-sm-offset-1" style="line-height: 70px;">
			<form name="search" action="index.php" method="get" class="navbar-form navbar-left">
				<div class="form-group">
					<input type="hidden" name="controller" value="timkiem">
					<input style="border: 1px solid #0c1a1e;" type="search" name="keyword" class="form-control input-md" placeholder="Nhập từ khoá..." value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword']:'' ?>">
					<button type="submit" class="btn btn-md" id="search"><span class="glyphicon glyphicon-search"></span></button>
				</div>				
			</form>
		</div>
		<!--PHẦN LINK ICON-->	
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
	<!--PHẦN 3-->
	<div class="row">
		<div class="col-sm-3" >
			<div class="glyphicon2">
			<p style="background: #0c1a1e; height: 45px;line-height: 45px; margin-bottom: 0px;"><a class="col-sm-1" href="?controller=trangchu"><span style="color: white;" class="glyphicon glyphicon-home"></span></a><span class="col-sm-10" style="font-size: 16px; color: white;">DANH MỤC SẢN PHẨM</span><span style="color: white; margin-left: -16px;" class="glyphicon glyphicon-menu-down"></span></p>
			<ul class="list-group">	
				<div class="dropdown dropright" style="width: 100%">
					<a href="?controller=sanpham&column=product_status&id=1" class="list-group-item"><span class="fab fa-apple" style="font-size: 25px;"></span> HÀNG MỚI<span" class="pull-right glyphicon glyphicon-menu-right"></span></a>
					<div class="dropdown-menu dropdown-content" style="border: 0">
						<div class="dropdown2 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=1&catalog_id=1" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> MAC MINI-MAC PRO<span" class="pull-right glyphicon glyphicon-menu-right"></span></a>
      							<div class="dropdown-menu dropdown-content2" style="border: 0">
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
      					<div class="dropdown2 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=1&catalog_id=2" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> APPLE IPAD<span class="pull-right glyphicon glyphicon-menu-right"></a>
      							<div class="dropdown-menu dropdown-content2" style="border: 0">
      								<a href="?controller=sanpham2&product_status=1&amount=24" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Air<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=23" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Mini<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=21" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=22" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro M1<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=25" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad 10.2 inch<span"></a>
      							</div>
      					</div>
						<a href="?controller=sanpham1&product_status=1&catalog_id=3" class="list-group-item"><span class="fas fa-mobile-alt" style="font-size: 18px;"></span> APPLE IPHONE</a>
						<div class="dropdown2 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=1&catalog_id=4" class="list-group-item"><span><img style="width: 15px;" src="../img/applewatch.png"></span> APPLE WATCH<span class="pull-right glyphicon glyphicon-menu-right"></a>
      							<div class="dropdown-menu dropdown-content2" style="border: 0">
      								<a href="?controller=sanpham2&product_status=1&amount=33" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S3<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=34" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S5<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=35" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S6<span"></a>
      								<a href="?controller=sanpham2&product_status=1&amount=36" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch SE<span"></a>
      							</div>
      					</div>

						
						<a href="?controller=sanpham1&product_status=1&catalog_id=5" class="list-group-item"><span><img style="width: 22px;" src="../img/airpodpro.png"></span>TAI NGHE AIR POD</a>	
    				</div>
				</div>

				<div class="dropdown dropright" style="width: 100%">
					<a style="margin-right:;" href="?controller=sanpham&column=product_status&id=2" class="list-group-item"><span class="fas fa-ambulance" style="font-size: 18px;"></span> HÀNG CPO <span class="pull-right glyphicon glyphicon-menu-right"></span></a>
					<div class="dropdown-menu dropdown-content" style="border: 0">
						<div class="dropdown2 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=2&catalog_id=1" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> MAC MINI-MAC PRO<span" class="pull-right glyphicon glyphicon-menu-right"></span></a>
      							<div class="dropdown-menu dropdown-content2" style="border: 0">
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
      					<div class="dropdown2 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=2&catalog_id=2" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> APPLE IPAD<span class="pull-right glyphicon glyphicon-menu-right"></a>
      							<div class="dropdown-menu dropdown-content2" style="border: 0">
      								<a href="?controller=sanpham2&product_status=2&amount=24" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Air<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=23" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Mini<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=21" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=22" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro M1<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=25" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad 10.2 inch<span"></a>
      							</div>
      					</div>
						<a href="?controller=sanpham1&product_status=2&catalog_id=3" class="list-group-item"><span class="fas fa-mobile-alt" style="font-size: 18px;"></span> APPLE IPHONE</a>
						<div class="dropdown2 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=2&catalog_id=4" class="list-group-item"><span><img style="width: 15px;" src="../img/applewatch.png"></span> APPLE WATCH<span class="pull-right glyphicon glyphicon-menu-right"></a>
      							<div class="dropdown-menu dropdown-content2" style="border: 0">
      								<a href="?controller=sanpham2&product_status=2&amount=33" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S3<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=34" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S5<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=35" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S6<span"></a>
      								<a href="?controller=sanpham2&product_status=2&amount=36" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch SE<span"></a>
      							</div>
      					</div>

						
						<a href="?controller=sanpham1&product_status=2&catalog_id=5" class="list-group-item"><span><img style="width: 22px;" src="../img/airpodpro.png"></span>TAI NGHE AIR POD</a>	
    				</div>
				</div>
				<div class="dropdown dropright" style="width: 100%">
					<a href="?controller=sanpham&column=product_status&id=3" class="list-group-item"><span class="fas fa-exchange-alt" style="font-size: 18px;"></span> HÀNG THANH LÝ<span class="pull-right glyphicon glyphicon-menu-right"></span></a>
					<div class="dropdown-menu dropdown-content" style="border: 0">
						<div class="dropdown2 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=3&catalog_id=1" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> MAC MINI-MAC PRO<span" class="pull-right glyphicon glyphicon-menu-right"></span></a>
      							<div class="dropdown-menu dropdown-content2" style="border: 0">
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
      					<div class="dropdown2 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=3&catalog_id=2" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> APPLE IPAD<span class="pull-right glyphicon glyphicon-menu-right"></a>
      							<div class="dropdown-menu dropdown-content2" style="border: 0">
      								<a href="?controller=sanpham2&product_status=3&amount=24" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Air<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=23" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Mini<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=21" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=22" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro M1<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=25" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad 10.2 inch<span"></a>
      							</div>
      					</div>
						<a href="?controller=sanpham1&product_status=3&catalog_id=3" class="list-group-item"><span class="fas fa-mobile-alt" style="font-size: 18px;"></span> APPLE IPHONE</a>
						<div class="dropdown2 dropdown dropright" style="width: 100%">
      						<a href="?controller=sanpham1&product_status=3&catalog_id=4" class="list-group-item"><span><img style="width: 15px;" src="../img/applewatch.png"></span> APPLE WATCH<span class="pull-right glyphicon glyphicon-menu-right"></a>
      							<div class="dropdown-menu dropdown-content2" style="border: 0">
      								<a href="?controller=sanpham2&product_status=3&amount=33" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S3<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=34" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S5<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=35" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S6<span"></a>
      								<a href="?controller=sanpham2&product_status=3&amount=36" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch SE<span"></a>
      							</div>
      					</div>

						
						<a href="?controller=sanpham1&product_status=3&catalog_id=5" class="list-group-item"><span><img style="width: 22px;" src="../img/airpodpro.png"></span>TAI NGHE AIR POD</a>	
    				</div>
				</div>
			
				<div class="dropdown dropright" style="width: 100%">
					<a href="?controller=sanpham&column=catalog_id&id=1" class="list-group-item"><span class="fas fa-laptop" style="font-size: 18px;"></span> MAC MINI-MAC PRO<span class="pull-right glyphicon glyphicon-menu-right"></span></a>
      							<div class="dropdown-menu dropdown-content" style="border: 0">
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


				<div class="dropdown dropright" style="width: 100%">
					<a href="?controller=sanpham&column=catalog_id&id=2" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> APPLE IPAD<span class="pull-right glyphicon glyphicon-menu-right"></span></a>
      							<div class="dropdown-menu dropdown-content" style="border: 0">
      								<a href="?controller=sanpham&column=amount&id=24" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Air<span"></a>
      								<a href="?controller=sanpham&column=amount&id=23" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Mini<span"></a>
      								<a href="?controller=sanpham&column=amount&id=21" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro<span"></a>
      								<a href="?controller=sanpham&column=amount&id=22" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad Pro M1<span"></a>
      								<a href="?controller=sanpham&column=amount&id=25" class="list-group-item"><span class="fas fa-tablet-alt" style="font-size: 18px;"></span> iPad 10.2 inch<span"></a>
      							</div>
      					</div>
				<div class="dropdown dropright" style="width: 100%">
					<a href="?controller=sanpham&column=catalog_id&id=3" class="list-group-item"><span class="fas fa-mobile-alt" style="font-size: 18px;"></span> APPLE IPHONE<span class="pull-right glyphicon glyphicon-menu-right"></span></a>
					<div class="dropdown-menu dropdown-content" style="border: 0">
      					<a href="?controller=sanpham1&product_status=1&catalog_id=3" class="list-group-item"><span class="fab fa-apple" style="font-size: 25px;"></span> HÀNG MỚI</a>
      					<a style="margin-right:;" href="?controller=sanpham1&product_status=2&catalog_id=3" class="list-group-item"><span class="fas fa-ambulance" style="font-size: 18px;"></span> HÀNG CPO </a>
      					<a href="?controller=sanpham1&product_status=3&catalog_id=3" class="list-group-item"><span class="fas fa-exchange-alt" style="font-size: 18px;"></span> HÀNG THANH LÝ</a>
    				</div>
				</div>
				<div class="dropdown dropright" style="width: 100%">
					<a href="?controller=sanpham&column=catalog_id&id=4" class="list-group-item"><span><img style="width: 15px;" src="../img/applewatch.png"></span> APPLE WATCH<span class="pull-right glyphicon glyphicon-menu-right"></span></a>
      							<div class="dropdown-menu dropdown-content" style="border: 0">
      								<a href="?controller=sanpham&column=amount&id=33" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S3<span"></a>
      								<a href="?controller=sanpham&column=amount&id=34" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S5<span"></a>
      								<a href="?controller=sanpham&column=amount&id=35" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch S6<span"></a>
      								<a href="?controller=sanpham&column=amount&id=36" class="list-group-item"><img style="width: 15px;" src="../img/applewatch.png"></span> Apple Watch SE<span"></a>
      							</div>
      					</div>

				<div class="dropdown dropright" style="width: 100%">
					<a href="?controller=sanpham&column=catalog_id&id=5" class="list-group-item"><span><img style="width: 22px;" src="../img/airpodpro.png"></span>TAI NGHE AIR POD<span class="pull-right glyphicon glyphicon-menu-right"></span></a>
					<div class="dropdown-menu dropdown-content" style="border: 0">
      					<a href="?controller=sanpham1&product_status=1&catalog_id=5" class="list-group-item"><span class="fab fa-apple" style="font-size: 25px;"></span> HÀNG MỚI</a>
      					<a style="margin-right:;" href="?controller=sanpham1&product_status=2&catalog_id=5" class="list-group-item"><span class="fas fa-ambulance" style="font-size: 18px;"></span> HÀNG CPO </a>
      					<a href="?controller=sanpham1&product_status=3&catalog_id=5" class="list-group-item"><span class="fas fa-exchange-alt" style="font-size: 18px;"></span> HÀNG THANH LÝ</a>
    				</div>
				</div>
			</ul>
			</div>
			<p style="background: #E6E6E6; height: 42px; line-height: 42px; color: black;font-weight: bold; font-size: 18px; text-align: left; margin-bottom: 0; "><span style="margin-left: 15px;">TIN MỚI</span> <span class="glyphicon glyphicon-info-sign"></span></p>
			<div id="tintuc" style="border-top: 1px solid #bbb; border-left: 1px solid #bbb; border-right: 1px solid #bbb;">
			<ul class="media-list">
				<li class="midea">
					<div class="media-left">
						<a href="?controller=blog&id=1"><img src="../img/imgblog/1.jpg" class="media-object" width="90" height="70"></a>
					</div>
					<div class="media-body">
						<a href="?controller=blog&id=1"><i><b>Apple đã khắc phục lỗi hao mòn SSD trên Macbook M1</b><i></a>
					</div>
					<div class="media-bottom">
						<p>&nbsp;&nbsp;<i class="far fa-clock"></i>06.08.2021 &nbsp;&nbsp; <i class="fas fa-eye"></i>238</p>
					</div>
				</li>

				<li class="midea">
					<div class="media-left">
						<a href="?controller=blog&id=2"><img src="../img/imgblog/2.jpg" class="media-object" width="90" height="70"></a>
					</div>
					<div class="media-body">
						<a href="?controller=blog&id=2"><i><b>Reeder – Phần mềm đọc tin tức từ RSS</b><i></a>
					</div>
					<div class="media-bottom">
						<p>&nbsp;&nbsp;<i class="far fa-clock"></i>02.08.2021 &nbsp;&nbsp; <i class="fas fa-eye"></i>336</p>
					</div>
				</li>

				<li class="midea">
					<div class="media-left">
						<a href="?controller=blog&id=3"><img src="../img/imgblog/3.jpg" class="media-object" width="90" height="70"></a>
					</div>
					<div class="media-body">
						<a href="?controller=blog&id=3"><i><b>Hướng dẫn cài đặt lại Macbook M1 bằng USB, Ổ cứng di động...</b><i></a>
					</div>
					<div class="media-bottom">
						<p>&nbsp;&nbsp;<i class="far fa-clock"></i>21.07.2021 &nbsp;&nbsp; <i class="fas fa-eye"></i>218</p>
					</div>
				</li>

				<li class="midea">
					<div class="media-left">
						<a href="?controller=blog&id=4"><img src="../img/imgblog/4.jpg" class="media-object" width="90" height="70"></a>
					</div>
					<div class="media-body">
						<a href="?controller=blog&id=4"><i><b>Apple chính thức mở bán riêng Macgic Keyboard Touch ID</b><i></a>
					</div>
					<div class="media-bottom">
						<p>&nbsp;&nbsp;<i class="far fa-clock"></i>15.07.2021 &nbsp;&nbsp; <i class="fas fa-eye"></i>458</p>
					</div>
				</li>

				<li class="midea">
					<div class="media-left">
						<a href="?controller=blog&id=5"><img src="../img/imgblog/5.jpg" class="media-object" width="90" height="70"></a>
					</div>
					<div class="media-body">
						<a href="?controller=blog&id=5"><i><b>Adobe phát hành bản hỗ trợ Apple M1 cho Premiere Pro</b><i></a>
					</div>
					<div class="media-bottom">
						<p>&nbsp;&nbsp;<i class="far fa-clock"></i>06.07.2021 &nbsp;&nbsp; <i class="fas fa-eye"></i>752</p>
					</div>
				</li>
			</ul>
			</div>
			<div id="banner">
			<a href="?controller=subindex&sub=banner"><img style="width: 100%" src="../img/imgbanner/8.png"></a>
			<a href="?controller=subindex&sub=banner"><img style="width: 100%" src="../img/imgbanner/10.png"></a>
			<a href="?controller=subindex&sub=banner"><img style="width: 100%" src="../img/imgbanner/3.png"></a>
			<a href="?controller=subindex&sub=banner"><img style="width: 100%" src="../img/imgbanner/2.png"></a>
			<a href="?controller=subindex&sub=banner"><img style="width: 100%" src="../img/imgbanner/7.png"></a>
			<a href="?controller=subindex&sub=banner"><img style="width: 100%" src="../img/imgbanner/4.png"></a>
			<a href="?controller=subindex&sub=banner"><img style="width: 100%" src="../img/imgbanner/11.png"></a>
			<a href="?controller=subindex&sub=banner"><img style="width: 100%" src="../img/imgbanner/5.png"></a>
			<a href="?controller=subindex&sub=banner"><img style="width: 100%" src="../img/imgbanner/6.png"></a>
			<a href="?controller=subindex&sub=banner"><img style="width: 100%" src="../img/imgbanner/8.png"></a>
			<a href="?controller=subindex&sub=banner"><img style="width: 100%" src="../img/imgbanner/10.png"></a>	
			</div>
		</div>

		<div class="col-sm-9" style="margin-left: -30px; font-style: normal;">
			<ul style="height: 46px; line-height: 46px; background: #0c1a1e;" id="menu" class="nav nav-tabs">
				<li><a href="?controller=trangchu">TRANG CHỦ</a></li>
				<li><a href="?controller=subindex&sub=khuyenmai">KHUYẾN MẠI</a></li>
				<li><a href="?controller=subindex&sub=baohanh">BẢO HÀNH</a></li>
				<li><a href="?controller=subindex&sub=tragop">TRẢ GÓP</a></li>
				<li><a href="?controller=subindex&sub=vechungtoi">VỀ CHÚNG TÔI</a></li>
				<li><a href="?controller=subindex&sub=lienhe">LIÊN HỆ</a></li>
			</ul>
			<ul id="menu2" class="nav nav-tabs">
				<li><a href="?controller=tatcasanpham">TẤT CẢ SẢN PHẨM</a></li>
				<li><a href="?controller=sanpham&column=product_model&id=1">SẢN PHẨM BÁN CHẠY</a></li>
				<li><a href="?controller=sanpham&column=product_model&id=2">SẢN PHẨM KHUYẾN MẠI</a></li>
				<li><a href="?controller=sanpham&column=product_model&id=3">SẢN PHẨM MỚI</a></li>
			</ul>
<!--SẢN PHẨM-->
			<?php if (!empty($product)) {
			foreach ($product as $key => $value) {?>
			<div class="col-xs-6 col-sm-6 col-md-4" id="sanpham">
				<div class="thumbnail">
					<a href="?controller=chitiet&id=<?php echo $value['id'] ?>"><img style="margin-bottom: -10px;" src="<?php echo $value['img_link'] ?>"></a>
					<div class="caption">
						<p id="price"><?php echo $db->currency_format($value['price']);?> VNĐ</p>
						<p id="old_price">Giá gốc: <?php echo $db->currency_format($value['old_price'])?> VND</p>
						<p id="name"><?php echo $value['name'] ?><p>
						<p id="content"><?php echo $value['content'] ?></p>
						<p>
							<a href="?controller=chitiet&id=<?php echo $value['id'] ?>" class="btn btn-primary">Chi tiết</a>
							<a href="?controller=add_giohang&id=<?php echo $value['id'] ?>" class="btn btn-danger">Thêm vào giỏ hàng</a>
						</p>						
					</div>
				</div>				
			</div>
			<?php } } else{?>
				<div class="col-sm-12" style="text-align:  center; margin-top: 20px;">
					<h2>Không ổn rồi Đại Vương ơiiiiiiiiiiiiii >"<</h2>
					<h2>Không có sản phẩm nào ở đây hết cả!!! =((</h2>
				</div>
			<?php } ?>
		</div>


	</div>

</div>
</div>

<!--PHẦN 5 (Địa chỉ sdt)-->
<div>
	<div class="col-sm-12 phan5" style="margin-top: 0">
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