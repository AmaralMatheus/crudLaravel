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
			<p><input type="text" class="form-control" name="name" value="{{$product['name']}}" placeholder="Product Name" aria-describedby="sizing-addon1" required></p>

			<p><input type="text" class="form-control" name="description" value="{{$product['description']}}" placeholder="Description" aria-describedby="sizing-addon1" required></p>

			<p><input type="text" class="form-control" name="price" value="{{$product['price']}}" id="price" placeholder="Price" aria-describedby="sizing-addon1" required></p>
		</div>
		<div class="col-md-6">
			<div class="form-group" id="imagePreview">
				<img id="output" class="img-responsive" src="{{ URL::asset('img/'.($product['image'] ? $product['id'].'/'.$product['image'] : 'img.png')) }}" />
	        </div>
			<p><input type="file" class="form-control"  name="image" placeholder="Product Name" accept="image/*" onchange="loadFile(event)" required></p>

			<p>
				<select type="text" class="form-control" name="category" aria-describedby="sizing-addon1" required>
					<option>Category</option>
					<option value="1">Teste</option>
				</select>
			</p>
		</div>
	</div>
</form>

<script type="text/javascript">
	var loadFile = function(event) {
	    var reader = new FileReader();
	    reader.onload = function(){
	      var output = document.getElementById('output');
	      output.src = reader.result;
	    };
	    reader.readAsDataURL(event.target.files[0]);
	};
</script>
@endsection