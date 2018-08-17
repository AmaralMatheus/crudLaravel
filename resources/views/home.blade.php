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
		margin-bottom: 25px;
	}
	.product-img {
      -webkit-mask-image:-webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)));
      mask-image: linear-gradient(to bottom, rgba(0,0,0,1), rgba(0,0,0,0));
      margin-bottom: 15px;
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
</style>

<section class="home">
	<div class="container">
		<h1 class="main-title" style="line-height: 6">Title test</h1>
		<h2 class="title">teste dos brother</h2>
	</div>
</section>

<section align="center" class="one">
	<div class="container">
		<h1 class="main-title">FEATURED</h1>
		<h2 class="title">FOR MAN</h2>
		<div class="row">
			<div class="col-md-4" align="center">
				<img class="product-img" src="{{ URL::asset('img/img.png')}}">
				<div class="row">
					<div class="col-md-6">
						<h2>nome</h2>
					</div>

					<div class="col-md-6">
						<h1><b>$0,0</b></h1>
					</div>
				</div>
				<button class="cart-button">ADD TO CART</button>
			</div>
			<div class="col-md-4" align="center">
				<img class="product-img" src="{{ URL::asset('img/img.png')}}">
				<div class="row">
					<div class="col-md-6">
						<h2>nome</h2>
					</div>

					<div class="col-md-6">
						<h1><b>$0,0</b></h1>
					</div>
				</div>
				<button class="cart-button">ADD TO CART</button>
			</div>
			<div class="col-md-4" align="center">
				<img class="product-img" src="{{ URL::asset('img/img.png')}}">
				<div class="row">
					<div class="col-md-6">
						<h2>nome</h2>
					</div>

					<div class="col-md-6">
						<h1><b>$0,0</b></h1>
					</div>
				</div>
				<button class="cart-button">ADD TO CART</button>
			</div>
		</div>
	</div>
</section>

<section align="center" class="one">
	<div class="container">
		<h1 class="main-title">FEATURED</h1>
		<h2 class="title">FOR WOMAN</h2>
		<div class="row">
			<div class="col-md-4" align="center">
				<img class="product-img" src="{{ URL::asset('img/img.png')}}">
				<div class="row">
					<div class="col-md-6">
						<h2>nome</h2>
					</div>

					<div class="col-md-6">
						<h1><b>$0,0</b></h1>
					</div>
				</div>
				<button class="cart-button">ADD TO CART</button>
			</div>
			<div class="col-md-4" align="center">
				<img class="product-img" src="{{ URL::asset('img/img.png')}}">
				<div class="row">
					<div class="col-md-6">
						<h2>nome</h2>
					</div>

					<div class="col-md-6">
						<h1><b>$0,0</b></h1>
					</div>
				</div>
				<button class="cart-button">ADD TO CART</button>
			</div>
			<div class="col-md-4" align="center">
				<img class="product-img" src="{{ URL::asset('img/img.png')}}">
				<div class="row">
					<div class="col-md-6">
						<h2>nome</h2>
					</div>

					<div class="col-md-6">
						<h1><b>$0,0</b></h1>
					</div>
				</div>
				<button class="cart-button">ADD TO CART</button>
			</div>
		</div>
	</div>
</section>

<section>
	<div align="center">
		<h1><b>WANT 80% OFF?</b></h1>

		<p><h3>SUBSCRIBE BELOW TO GET</h3></p>	
		<br>
		<p><input type="text" name="" placeholder="Email" style="margin-top: 7.5px;border-radius:0;border:none;border-bottom: solid #000 1px;"></p>
		<br>
		<button class="cart-button">SUBSCRIBE</button>
	</div>
</section>
@endsection