@extends('master')
@section('content')

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				@foreach($detailProduct as $row)
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-6">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="../img/{{$row->Image}}" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product details -->
					<div class="col-md-6">
						<div class="product-details">
							<h1 class="product-name">Name: {{$row->Product_Name}}</h1>
							<div>
								<h3 class="product-price">Price: {{ number_format($row->Price,0)}} VND</h3>
							</div>
							<p><h4>Description: </h4>{{$row->Description}}</p>
							<p>Quantity: {{$row->Quantity_Stock}}</p>
							<div class="add-to-cart">
											<a href="{{ route('cart.add',['id' => $row->id]) }}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
											</div>
						</div>
					</div>
					<!-- /Product details -->

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Tivi</h4>
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
										<h3 class="product-name"><a href="{{ route('detail',$row->id)}}">{{$row->Product_Name}}</a></h3>
										<h4 class="product-price">{{ number_format($row->Price,0)}} VND</h4>
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
										<h3 class="product-name"><a href="{{ route('detail',$row->id)}}">{{$row->Product_Name}}</a></h3>
										<h4 class="product-price">{{ number_format($row->Price,0)}} VND</h4>
									</div>
								</div>
								<!-- /product widget -->		
								@endforeach
							</div>
						</div>
					</div>

				</div>
				@endforeach
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		@endsection