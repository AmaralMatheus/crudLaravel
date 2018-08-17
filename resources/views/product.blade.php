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
</style>

<div class="row" style="padding: 20px;">
	<div class="col-md-6">
		<img class="img-responsive" src="{{ URL::asset('img/'.($product['image'] ? $product['id'].'/'.$product['image'] : 'img.png')) }}">
	</div>
	<div class="col-md-6">
		<h2><b>{{$product['name']}}</b></h2>
		<h1><b>${{$product['price']}}</b></h1>
		<br>
		<p>QUANTITY</p>
		<p><b class="icon">-</b> 01 <b class="icon">+</b></p>
		<br>
		<p>{{$product['description']}}</p>
		<button class="cart-button">ADD TO CART</button>
	</div>
</div>

<div align="center">
	<h1><b>WANT 80% OFF?</b></h1>

	<p><h3>SUBSCRIBE BELOW TO GET</h3></p>	
	<br>
	<p><input type="text" name="" placeholder="Email" style="margin-top: 7.5px;border-radius:0;border:none;border-bottom: solid #000 1px;"></p>
	<br>
	<button class="cart-button">SUBSCRIBE</button>
</div>
@endsection