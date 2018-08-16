@extends('layouts.master')

@section('content')
<form method="POST" action="/crudLaravel/public/products/update/{{$product['id']}}">
	{!! csrf_field() !!}
	<p>
		<input type="submit" class="btn btn-primary" role="button" placeholder="Save Product">
		<a class="btn btn-danger" href="/crudLaravel/public/products" role="button">Cancel</a>
		<a class="btn btn-danger" href="/crudLaravel/public/products" role="button">Preview</a>
	</p>
	<div class="row">
		<div class="col-md-6">
			<p><input type="text" class="form-control" name="name" value="{{$product['name']}}" placeholder="Product Name" aria-describedby="sizing-addon1"></p>

			<p><input type="text" class="form-control" name="description" value="{{$product['description']}}" placeholder="Description" aria-describedby="sizing-addon1"></p>

			<p><input type="text" class="form-control" name="price" value="{{$product['price']}}" id="price" placeholder="Price" aria-describedby="sizing-addon1"></p>
		</div>
		<div class="col-md-6">
			<p><input type="file" class="form-control" name="image" placeholder="Product Name" aria-describedby="sizing-addon1"></p>

			<p>
				<select type="text" class="form-control" name="category" aria-describedby="sizing-addon1">
					<option>Category</option>
					<option value="1">Teste</option>
				</select>
			</p>
		</div>
	</div>
</form>
@endsection