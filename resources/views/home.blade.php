@extends('tamplate')
@section('content')
@section('title','agos book store')
	<!-- SLIDER -->
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner container ">
		@foreach($products as $item)
		<div class="carousel-item  {{$loop->first?'active':''}}">
		<a href="details/{{$item['id']}}">
		<div class="carousel-caption d-none d-md-block">
			</div>
		<img class="tales " src="{{$item['gallery']}}" alt="First slide">
			</div>
		</a>
			@endforeach
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
<hr>
<!-- products -->
<div class="product-section mt-150 mb-150">
		<div class="container">
			<!-- for catagery -->
			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".strawberry">Strawberry</li>
                            <li data-filter=".berry">Berry</li>
                            <li data-filter=".lemon">Lemon</li>
                        </ul>
                    </div>
                </div>
            </div>
			
			<div class="row product-lists">
				@foreach ($products as $item)
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="details/{{$item['id']}}"><img src="{{$item['gallery']}}" alt=""></a>
						</div>
						<h3>{{$item['name']}}</h3>
						<p class="product-price">₹{{$item['price']}} </p>
						<a href="" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
</div>
	<!-- end products -->
    @endsection