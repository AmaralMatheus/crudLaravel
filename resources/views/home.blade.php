@extends('layouts.home-master')
@section('content')
<style type="text/css">
	.home{
		background-image: url('{{ URL::asset('img/wallpaper.png')}}');
		background-repeat: no-repeat;
		height: 650px;
		background-size: 100%;
	}

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
		margin-bottom: 55px;
	}
	.product-img {
      -webkit-mask-image:-webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)));
      mask-image: linear-gradient(to bottom, rgba(0,0,0,1), rgba(0,0,0,0));
      margin-bottom: 15px;
	  position: relative;
	  width: 100%;
	  height: 200px;
	  overflow: hidden;
    }

    .one{
		  background-color: #000;
		  background-image: -webkit-linear-gradient(75deg, #fff 68%, #000 32%);
	}
	.title{
		margin-bottom: 350px;
		color:#fff;
	}
	.main-title{
		margin:inherit;
		font-size: 54px;
		color: #fff;
		line-height: 2;
	}
	a{
		color: black;
	}
	a:hover{
		color: black;
	}
</style>

<section class="home">
	<div class="container">
		<h1 class="main-title" style="line-height: 6">Title test</h1>
		<h2 class="title">ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
	</div>
</section>

<section align="center" class="one">
	<div class="container">
		<h1 class="main-title">FEATURED</h1>
		<h2 class="title">FOR MAN</h2>
		<div class="row">
			@foreach ($products as $product)
				<a href="products/preview/{{$product['id']}}" class="col-md-4" align="center">
					<img class="product-img" src="{{ URL::asset('img/'.$product['id'].'/'.$product['image'])}}">
					<div class="row">
						<div class="col-md-6">
							<h2>{{$product['name']}}</h2>
						</div>

						<div class="col-md-6">
							<h1><b>${{$product['price']}}</b></h1>
						</div>
					</div>
					<button class="cart-button">ADD TO CART</button>
				</a>
			@endforeach
		</div>
	</div>
</section>

<section align="center" class="one">
	<div class="container">
		<h1 class="main-title">FEATURED</h1>
		<h2 class="title">FOR WOMAN</h2>
		<div class="row">
			@foreach ($products as $product)
				<a href="products/preview/{{$product['id']}}" class="col-md-4" align="center">
					<img class="product-img img-responsive" src="{{ URL::asset('img/'.$product['id'].'/'.$product['image'])}}">
					<div class="row">
						<div class="col-md-6">
							<h2>{{$product['name']}}</h2>
						</div>

						<div class="col-md-6">
							<h1><b>${{$product['price']}}</b></h1>
						</div>
					</div>
					<button class="cart-button">ADD TO CART</button>
				</a>
			@endforeach
		</div>
	</div>
</section>

<section style="background-color: #fbfbfb; padding: 30px;">
	<div align="center">
		<h1><b>WANT 80% OFF?</b></h1>

		<p><h3>SUBSCRIBE BELOW TO GET</h3></p>	
		<br>
		<p><input type="text" name="" class="form-control" placeholder="Email" style="width:25%;margin-top: 7.5px;border-radius:0;border:none;border-bottom: solid #000 1px; box-shadow: none; box-decoration-break: none"></p>
		<br>
		<button class="cart-button">SUBSCRIBE</button>
	</div>
</section>
@endsection