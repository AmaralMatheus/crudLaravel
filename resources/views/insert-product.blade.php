@extends('layouts.master')

@section('content')
<form method="POST" action="store" enctype="multipart/form-data">
	{!! csrf_field() !!}
	<p>
		<input type="submit" class="btn btn-primary" role="button" placeholder="Save Product">
		<a class="btn btn-danger" href="/crudLaravel/public/products" role="button">Cancel</a>
		<a class="btn btn-primary" href="/crudLaravel/public/products/preview/" role="button">Preview</a>
	</p>
	<div class="row">
		<div class="col-md-6">
			<p><input type="text" class="form-control" name="name" placeholder="Product Name" aria-describedby="sizing-addon1" required></p>

			<p><textarea class="form-control" name="description"  rows="9" placeholder="Description" required>Description
			</textarea></p>

			<p><input type="text" class="form-control" name="price" id="price" placeholder="Price" aria-describedby="sizing-addon1" required></p>
		</div>
		<div class="col-md-6" align="center">
			<div class="form-group" id="imagePreview">
				<img id="output" class="img-responsive" src="{{ URL::asset('img/img.png') }}" />
	        </div>
			<p><input type="file" class="form-control"  name="image" placeholder="Product Name" accept="image/*" onchange="loadFile(event)" required></p>

			<p>
				<select type="text" class="form-control" name="category" aria-describedby="sizing-addon1" required>
					<option value="">Category</option>
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