<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,500,700')}}" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li style="color: white"><i class="fa fa-phone"></i> 0838 970 023</li>
						<li style="color: white"><i class="fa fa-envelope-o"></i> tdc@edu.vn</li>
						<li><a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+Cao+%C4%90%E1%BA%B3ng+C%C3%B4ng+ngh%E1%BB%87+Th%E1%BB%A7+%C4%90%E1%BB%A9c/@10.8514325,106.7580641,15z/data=!4m5!3m4!1s0x0:0xb3ff69197b10ec4f!8m2!3d10.8514325!4d106.7580641">
						<i class="fa fa-map-marker"></i> 53 Võ Văn Ngân, P.Linh Chiểu, TP.THủ Đức, TP.Hồ Chí Minh</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="/" class="logo">
									<img src="../img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form class="search-key">
									<input class="input" placeholder="Search here" oninput="searchProduct(this.value)" name="key">
									<div id="search-result" class="result-search"></div>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">{{$cart ->total_quantity}}</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
										@foreach($cart->items as  $item)
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/{{ $item['Image'] }}" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">{{ $item['Product_Name'] }}</a></h3>
													<h4 class="product-price"><span class="qty">{{ $item['quantity'] }}x </span>{{ number_format($item['Price'],0,',','.') }} VND</h4>
												</div>
												<a href="{{route('cart.remove',['id' => $item['id']])}}"><button class="delete"><i class="fa fa-close"></i></button></a>
											</div>
										@endforeach
										</div>
										<div class="cart-summary">
											<small>{{$cart ->total_quantity}} Item(s) selected</small>
											<h5>SUBTOTAL: {{number_format($cart ->total_price,0,',','.')}}VND</h5>
										</div>
										<div class="cart-btns">
											<a href="{{route('checkout')}}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li ><a href="/"style="color: red;">Home</a></li>
						<li><a href="{{ route('product',3)}}">Television</a></li>
						<li><a href="{{ route('product',2)}}">Laptops</a></li>
    					<li><a href="{{ route('product',1)}}">Smartphones</a></li>
  						<li><a href="{{ route('product',5)}}">Speaker</a></li>
    					<li><a href="{{ route('product',4)}}">HeadPhone</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

			@yield('content')


		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row" style="text-align:center">
						<div class="col-md-6 col-xs-12">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<ul class="footer-links">
									<li style="color: white"><i class="fa fa-phone"></i> 0838 970 023</li>
									<li style="color: white"><i class="fa fa-envelope-o"></i> tdc@edu.vn</li>
									<li><a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+Cao+%C4%90%E1%BA%B3ng+C%C3%B4ng+ngh%E1%BB%87+Th%E1%BB%A7+%C4%90%E1%BB%A9c/@10.8514325,106.7580641,15z/data=!4m5!3m4!1s0x0:0xb3ff69197b10ec4f!8m2!3d10.8514325!4d106.7580641">
									<i class="fa fa-map-marker"></i> 53 Võ Văn Ngân, P.Linh Chiểu, TP.THủ Đức, TP.Hồ Chí Minh</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix visible-xs"></div>
						<div class="col-md-6 col-xs-12">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li>Group 5</li>
									<li>Lưu Đức Huy</li>
									<li>Nguyễn Nhật Trường</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">							
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Project Nhóm 5
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>