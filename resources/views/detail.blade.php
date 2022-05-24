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
				</div>
				@endforeach
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		@endsection