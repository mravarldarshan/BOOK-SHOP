@extends('tamplate')
@section('content')
@section('title','product details')
<h2>{{$product['name']}}</h2>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img"src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
           <a href="/">go bake</a><br><br>
           <h2>{{$product['name']}}</h2>
           <h3>price:-{{$product['price']}}</h3>
           <h4>Details:-{{$product['description']}}</h4> 
           <h4>category:-{{$product['category']}}</h4> 
           <br><br>
           <form action="/add_to_cart" method="post">
                @csrf
               <input type="hidden" name="product_id" value={{$product['id']}}>
           <button class="btn btn-primary">add to cart</button>
           </form>
           <br><br>
           <button class="btn btn-primary">bay now</button>
        </div>
        
    </div>
</div>
@endsection