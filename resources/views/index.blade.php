@extends('master')
@section('content')
<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/iphone13promax.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Phone<br>Collection</h3>
								<a href="{{ route('product',1)}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/asusd415da.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>LapTop<br>Collection</h3>
								<a href="{{ route('product',2)}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/LG Z1 88inch 8K Smart OLED TV.jpg" width = "200px" alt="">
							</div>
							<div class="shop-body">
								<h3>Tivi<br>Collection</h3>
								<a href="{{ route('product',3)}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">All Products</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										@foreach($product as $row)
										<div class="product">
											<div class="product-img">
												<img src="./img/{{$row->Image}}" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#">{{$row->Product_Name}}</a></h3>
												<h4 class="product-price">{{$row->Price}} VND </h4>
												<div class="product-btns">
													<button class="quick-view"><a href="{{ route('detail')}}"><i class="fa fa-eye"></i></a><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										@endforeach
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
									@foreach($feature as $row)
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/{{$row->Image}}" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#">{{$row->Product_Name}}</a></h3>
												<h4 class="product-price">{{$row->Price}} VND</h4>
												<div class="product-btns">
													<button class="quick-view"><a href="{{ route('detail')}}"><i class="fa fa-eye"></i></a><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										@endforeach
										<!-- /product -->


									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Phone</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav">
								</div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								@foreach($featurePhone as $row)
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/{{$row->Image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">{{$row->Product_Name}}</a></h3>
										<h4 class="product-price">{{$row->Price}}</h4>
									</div>
								</div>
								<!-- /product widget -->		
								@endforeach
							</div>

							<div>
								@foreach($featurePhone as $row)
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/{{$row->Image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">{{$row->Product_Name}}</a></h3>
										<h4 class="product-price">{{$row->Price}}</h4>
									</div>
								</div>
								<!-- /product widget -->		
								@endforeach
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">LapTop</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								@foreach($featureLaptop as $row)
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/{{$row->Image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">{{$row->Product_Name}}</a></h3>
										<h4 class="product-price">{{$row->Price}}</h4>
									</div>
								</div>
								<!-- /product widget -->		
								@endforeach
							</div>

							<div>
								@foreach($featureLaptop as $row)
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/{{$row->Image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">{{$row->Product_Name}}</a></h3>
										<h4 class="product-price">{{$row->Price}}</h4>
									</div>
								</div>
								<!-- /product widget -->		
								@endforeach
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								@foreach($featureTivi as $row)
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/{{$row->Image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">{{$row->Product_Name}}</a></h3>
										<h4 class="product-price">{{$row->Price}}</h4>
									</div>
								</div>
								<!-- /product widget -->		
								@endforeach
							</div>

							<div>
								@foreach($featureTivi as $row)
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/{{$row->Image}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">{{$row->Product_Name}}</a></h3>
										<h4 class="product-price">{{$row->Price}}</h4>
									</div>
								</div>
								<!-- /product widget -->		
								@endforeach
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection