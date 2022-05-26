@extends('master')
@section('content')

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				
				<div class="row" style="margin-bottom: 30px;">
					<!-- Product main img -->
					<div class="col-md-6">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="../img/{{$detailProduct->Image}}" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product details -->
					<div class="col-md-6">
						<div class="product-details">
							<h1 class="product-name">Name: {{$detailProduct->Product_Name}}</h1>
							<div>
								<h3 class="product-price">Price: {{ number_format($detailProduct->Price,0)}} VND</h3>
							</div>
							<p><h4>Description: </h4>{{$detailProduct->Description}}</p>
							<p>Quantity: {{$detailProduct->Quantity_Stock}}</p>
							<div class="add-to-cart">
											<a href="{{ route('cart.add',['id' => $detailProduct->id]) }}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
											</div>
						</div>
					</div>
				</div>
			<!-- /row -->
					<!-- /Product details -->
				<div class="row">

						<div class="section-title">
							<h1 class="title" style="color: #D10024;">Related Product</h1>
						</div>
							<div>
								@foreach($relatedProducts as $row)
								<!-- product widget -->
								<div class="col-md-4"style="margin-top: 25px;" >
								<div class="product-widget">
									<div class="product-img">
										<img src="../img/{{$row->Image}}" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-name"><a href="{{ route('detail',$row->id)}}">{{$row->Product_Name}}</a></h3>
										<h4 class="product-price">{{ number_format($row->Price,0)}} VND</h4>
									</div>
								</div>
								</div>
								
								<!-- /product widget -->		
								@endforeach
							</div>
					</div>
				</div>
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		@endsection