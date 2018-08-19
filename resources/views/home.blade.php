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
		margin-top: 25px;
		margin-bottom: 55px;
	}
	.product-img {
      -webkit-mask-image:-webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)));
      mask-image: linear-gradient(to bottom, rgba(0,0,0,1), rgba(0,0,0,0));
      margin-bottom: 15px;
	  position: relative;
	  width: 100%;
	  overflow: hidden;
    }

    .one{
		  background-color: #000;
		  background-image: -webkit-linear-gradient(72.5deg, #fff 68%, #000 32%);
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
		<div class="row">
			<h1 class="main-title" style="padding-top: 200px;pa">Title test</h1>
			<h2 class="title" style="width: 35%;margin:0;">ipsum dolor sit amet, consectetur adipisicing elit.</h2>
		</div>
	</div>
</section>




<section align="center" class="one">
	<div class="container">
		<h1 class="main-title">FEATURED</h1>
		<h2 class="title">FOR MAN</h2>
		<div class="row">
			<div id="Carousel" class="carousel slide">
				<ol class="carousel-indicators">
					@foreach ($products as $product)
						@if($x % 3 == 0)
							 <li data-target="#Carousel" data-slide-to="2" class="{{$x==0 ? 'active' : ''}}"></li>
						@endif
						<?php
						   $x++;
						?>
					@endforeach
				</ol>
				
				<?php
				   $x=0;
				?>

				<div class="carousel-inner">
					@foreach ($products as $product)
						@if($x % 3 == 0 && $x > 0)
								</div>
	                		</div>         		
						@endif
						@if($x % 3 == 0)
							<div class="item {{$x==0 ? 'active' : ''}}">
	                			<div class="row">
						@endif
									<a href="products/preview/{{$product['id']}}" class="col-md-4" align="center">
										<img class="product-img img-responsive" src="{{ URL::asset('img/'.($product['image'] ? $product['id'].'/'.$product['image'] : 'img.png'))}}">
										<div class="row">
											<div class="col-md-6">
												<h3>{{$product['name']}}</h3>
											</div>

											<div class="col-md-6">
												<h3><b>${{$product['price']}}</b></h3>
											</div>
										</div>
										<button class="cart-button">ADD TO CART</button>
									</a>
						
						<?php
						   $x++;
						?>
					@endforeach
							</div>
	                	</div>   
				</div><!--.carousel-inner-->
                 <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                 <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
            </div><!--.Carousel-->
		</div>
	</div>
</section>

<section align="center" class="one">
	<div class="container">
		<h1 class="main-title">FEATURED</h1>
		<h2 class="title">FOR WOMAN</h2>
		<div class="row">
			<div id="Carousel2" class="carousel slide">
				<ol class="carousel-indicators">
					@foreach ($products as $product)
						@if($x % 3 == 0)
							 <li data-target="#Carousel2" data-slide-to="2" class="{{$x==0 ? 'active' : ''}}"></li>
						@endif
						<?php
						   $x++;
						?>
					@endforeach
				</ol>
				
				<?php
				   $x=0;
				?>

				<div class="carousel-inner">
					@foreach ($products as $product)
						@if($x % 3 == 0 && $x > 0)
								</div>
	                		</div>         		
						@endif
						@if($x % 3 == 0)
							<div class="item {{$x==0 ? 'active' : ''}}">
	                			<div class="row">
						@endif
									<a href="products/preview/{{$product['id']}}" class="col-md-4" align="center">
										<img class="product-img img-responsive" src="{{ URL::asset('img/'.($product['image'] ? $product['id'].'/'.$product['image'] : 'img.png'))}}">
										<div class="row">
											<div class="col-md-6">
												<h3>{{$product['name']}}</h3>
											</div>

											<div class="col-md-6">
												<h3><b>${{$product['price']}}</b></h3>
											</div>
										</div>
										<button class="cart-button">ADD TO CART</button>
									</a>
						
						<?php
						   $x++;
						?>
					@endforeach
							</div>
	                	</div>   
				</div><!--.carousel-inner-->
                 <a data-slide="prev" href="#Carousel2" class="left carousel-control">‹</a>
                 <a data-slide="next" href="#Carousel2" class="right carousel-control">›</a>
            </div><!--.Carousel-->
		</div>
	</div>
</section>

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