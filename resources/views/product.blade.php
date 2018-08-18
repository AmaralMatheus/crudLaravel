@extends('layouts.home-master')

@section('content')
<style type="text/css">
	.icon{
		background-color: #ccc;
		padding-left: 7.5px;	
		padding-top: 3.5px;
		padding-bottom: 3.5px;
		padding-right: 7.5px;	
		border-radius:50%;
	}

	.cart-button{
		background-color: #000;
		color: #fff;
		padding: 10px;
		margin-bottom: 25px;
	}
	h2{
		font-weight: 400;
	}
	h1{
		font-weight: 200;
	}
</style>

<div class="row" style="padding: 20px;">
	<div class="col-md-6">
		<img class="img-responsive" src="{{ URL::asset('img/'.($product['image'] ? $product['id'].'/'.$product['image'] : 'img.png')) }}">
	</div>
	<div class="col-md-6">
		<h2>{{$product['name']}}</h2>
		<h1><b>${{$product['price']}}</b></h1>
		<br>
		<p>QUANTITY</p>
		<p><b class="icon">-</b> 01 <b class="icon">+</b></p>
		<br>
		<p>{{$product['description']}}</p>
		<button class="cart-button">ADD TO CART</button>
	</div>
</div>

<section style="background-color: #fbfbfb; padding: 30px;">
	<div align="center">
		<h1 style="font-size: 50px;">WANT 80% OFF?</h1>

		<p><h3>SUBSCRIBE BELOW TO GET</h3></p>	
		<br>
		<p><input type="text" name="" class="form-control" placeholder="Email" style="padding:0; background-color:#fbfbfb;width:25%;margin-top: 7.5px;border-radius:0;border:none;border-bottom: solid #000 1px; box-shadow: none; box-decoration-break: none"></p>
		<br>
		<button class="cart-button">SUBSCRIBE</button>
	</div>
</section>
@endsection